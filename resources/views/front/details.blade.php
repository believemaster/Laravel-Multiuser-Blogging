@extends('front.layout.master')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }} <small">And Will Be Published After Approval</small>
    </div>
@endif
<div class="entity_wrapper">
    <div class="entity_title">
        <h1><a href="{{ url('/details') }}/{{ $post->slug }}">{{ $post->title }}</a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_meta"><a href="#" target="_self">{{ date('j F -y', strtotime($post->created_at)) }}</a>, by: <a href="{{ url('/author') }}/{{ $post->creator->id }}">{{ $post->creator->name }}</a>
    </div>
    <!-- entity_meta -->

    <!-- <div class="entity_rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-full"></i>
    </div> -->
    <!-- entity_rating -->

    <div class="entity_social">
        <a href="#" class="icons-sm sh-ic">
            <i class="fa fa-share-alt"></i>
            <b>424</b> <span class="share_ic">Shares</span>
        </a>
        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
        <!--Twitter-->
        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
        <!--Google +-->
        <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
        <!--Linkedin-->
        <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
        <!--Pinterest-->
        <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
    </div>
    <!-- entity_social -->

    <div class="entity_thumb">
        <img class="img-responsive" src="{{ asset('/storage/post') }}/{{ $post->main_image }}" alt="{{ $post->title }}">
    </div>
    <!-- entity_thumb -->

    <div class="entity_content">
        <!-- <p>
        {{ $post->short_description }}
        </p> -->

        <blockquote class="pull-left">{{ $post->short_description }}</blockquote>

        <p>
            {!! $post->description !!}
        </p>

    </div>
    <!-- entity_content -->

    <div class="entity_footer">
        <div class="entity_tag">
        @foreach($related_news as $news)
            <span class="blank"><a href="{{ url('/category') }}/{{ $news->id }}">{{ $news->category['name'] }}</a></span>
        @endforeach
        </div>
        <!-- entity_tag -->

        <div class="entity_social">
            <!-- <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span> -->
            <span><i class="fa fa-comments-o"></i><a href="#">{{ count($post->comments) }} Comments</a></span>
        </div>
        <!-- entity_social -->

    </div>
    <!-- entity_footer -->

</div>
<!-- entity_wrapper -->

<div class="related_news">
    <div class="entity_inner__title header_purple">
        <h2><a href="#">Related News</a></h2>
    </div>
    <!-- entity_title -->

    <div class="row">
    @foreach($related_news as $news)
        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="{{ url('/details') }}/{{ $news->slug }}">
                    <img class="media-object" src="{{ asset('/storage/post') }}/{{ $news->thumb_image }}" alt="{{ $news->title }}"></a>
                </div>
                <div class="media-body">
                    <span class="tag purple"><a href="{{ url('/category') }}/{{ $news->id }}" target="_self">{{ $news->category['name'] }}</a></span>

                    <h3 class="media-heading"><a href="{{ url('/details') }}/{{ $news->slug }}" target="_self">{{ $news->title }}</a></h3>
                    <span class="media-date"><a href="#">{{ date('j F -y', strtotime($news->created_at)) }}</a>,  by: <a href="{{ url('/author') }}/{{ $news->creator->id }}">{{ $news->creator['name'] }}</a></span>

                    <div class="media_social">
                        <!-- <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span> -->
                        <span><a href="#"><i class="fa fa-comments-o"></i>{{ count($post->comments) }} Comments</a></span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<!-- Related news -->

<div class="widget_advertisement">
    <img class="img-responsive" src="{{ asset('/front/img/category_advertisement.jpg')}} " alt="feature-top">
</div>
<!--Advertisement-->

<div class="readers_comment">
    <div class="entity_inner__title header_purple">
        <h2>Readers Comment</h2>
    </div>
    <!-- entity_title -->
    @foreach($post->comments as $comment)
    @if($comment->status === 1)
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img width="64" height="64" class="media-object" data-src="{{ asset('/storage/others/user.png') }}"
                     src="{{ asset('/storage/others/user.png') }}" data-holder-rendered="true">
            </a>
        </div>
        <div class="media-body">
            <h2 class="media-heading"><a href="#">{{ $comment->name }}</a></h2>
            {{ $comment->comment }}
            <!-- <div class="entity_vote">
                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                <a href="#"><span class="reply_ic">Reply </span></a>
            </div> -->
        </div>

    </div>
    @endif
    @endforeach
    <!-- media end -->

</div>
<!--Readers Comment-->

<div class="widget_advertisement">
    <img class="img-responsive" src="{{ asset('/front/img/category_advertisement.jpg')}} " alt="feature-top">
</div>
<!--Advertisement-->

<div class="entity_comments">
    <div class="entity_inner__title header_black">
        <h2>Add a Comment</h2>
    </div>
    <!--Entity Title -->

    <div class="entity_comment_from">

        <form method="post" action="{{ url('/comments') }}">
            @csrf
            <div class="form-group">
                <label for="name" class="control-label mb-1">Name</label>
                <input id="name" name="name" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email" class="control-label mb-1">Email</label>
                <input id="email" type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group comment">
                <label for="comment" class="control-label mb-1">Add Comment</label>
                <textarea id="comment" name="comment" class="form-control" id="inputComment" placeholder="Comment" required></textarea>
            </div>
            <input type="hidden" name="slug" value="{{ $post->slug }}">
            <input type="hidden" name="post_id" value="{{ $post->id }}">

            <button type="submit" class="btn btn-submit red">Post Comment &nbsp;<i class="fa fa-reply fa-lg"></i></button>
        </form>
        <!-- Comment Success Message is Above Title -->
    </div>
    <!--Entity Comments From -->

</div>
<!--Entity Comments -->

</div>
<!--Left Section-->

<div class="col-md-4">
<div class="widget">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Viewed</a></h2>
    </div>

    @foreach($shareData['most_viewed'] as $item)
    <div class="media">
        <div class="media-left">
            <a href="{{ url('/details') }}/{{ $item->slug }}">
            <img class="media-object" src="{{ asset('/storage/post') }}/{{ $item->thumb_image }}" alt="{{ $item->title }}"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{ url('/details') }}/{{ $item->slug }}" target="_self">{{ $item->title }}</a>
            </h3> <span class="media-date"><a href="#">{{ date('j F -y', strtotime($item->created_at)) }}</a>,  by: <a href="{{ url('/author') }}/{{ $item->creator->id }}">{{ $item->creator['name'] }}</a></span>

            <div class="widget_article_social">
                <!-- <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> -->
                <span>
                    <a href="single.html" target="_self"><i class="fa fa-comments-o"></i>{{ count($item->comments) }}</a> Comments
                </span>
            </div>
        </div>
    </div>
    @endforeach
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
</div>
<!-- Popular News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="{{ asset('/front/img/right_add1.jpg') }}" alt="add_one">
    <img class="img-responsive adv_img" src="{{ asset('/front/img/right_add2.jpg') }}" alt="add_one">
    <img class="img-responsive adv_img" src="{{ asset('/front/img/right_add3.jpg') }}" alt="add_one">
    <img class="img-responsive adv_img" src="{{ asset('/front/img/right_add4.jpg') }}" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="{{ asset('/front/img/right_add5.jpg') }}" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget reviews m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Reviews</a></h2>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="{{ asset('/front/img/pop_right1.jpg') }}" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">DSLR is the most old camera at this time readmore about new
                    products</a>
            </h3>
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span>
        </div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="{{ asset('/front/img/pop_right2.jpg') }}" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body"><h3 class="media-heading"><a href="single.html" target="_self">Samsung is the best
            mobile in the android market.</a></h3> <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="{{ asset('/front/img/pop_right3.jpg') }}" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Apple launches photo-centric wrist watch for Android</a>
            </h3>
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <div class="media">
        <div class="media-left">
            <a href="#"><img class="media-object" src="{{ asset('/front/img/pop_right4.jpg') }}" alt="Generic placeholder image"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="single.html" target="_self">Yasaki camera launches new generic hi-speed shutter camera.</a>
            </h3>
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
</div>
<!-- Reviews News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="{{ asset('/front/img/right_add6.jpg') }}" alt="add_one">
</div>
<!-- Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Most Commented</a></h2>
    </div>
    @foreach($shareData['most_commented'] as $item)
    <div class="media">
        <div class="media-left">
            <a href="{{ url('/details') }}/{{ $item->slug }}">
            <img class="media-object" src="{{ asset('/storage/post') }}/{{ $item->thumb_image }}" alt="{{ $item->title }}"></a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">
                <a href="{{ url('/details') }}/{{ $item->slug }}">{{ $item->title }}</a>
            </h3>

            <div class="media_social">
                <span><i class="fa fa-comments-o"></i><a href="#">{{ $item->comments_count }}</a> Comments</span>
            </div>
        </div>
    </div>
    @endforeach
    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
</div>
<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Editor Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="{{ asset('/front/img/editor.jpg') }}"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!-- Editor News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="{{ asset('/front/img/right_add7.jpg') }}" alt="add_one">
    <img class="img-responsive add_img" src="{{ asset('/front/img/right_add7.jpg') }}" alt="add_one">
    <img class="img-responsive add_img" src="{{ asset('/front/img/right_add7.jpg') }}" alt="add_one">
    <img class="img-responsive add_img" src="{{ asset('/front/img/right_add7.jpg') }}" alt="add_one">
</div>
<!--Advertisement -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">Readers Corner</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="{{ asset('/front/img/reader.jpg') }}"
                                  alt="Generic placeholder image">

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without</p>

        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C
            users after installed base benefits. Dramatically visualize customer directed convergence without
            revolutionary ROI.</p>
        <button class="btn pink">Read more</button>
    </div>
</div>
<!--  Readers Corner News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="{{ asset('/front/img/podcast.jpg') }}" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!--Right Section-->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
<!-- Entity Section Wrapper -->

@endsection
