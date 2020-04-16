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
        <!--Facebook-->
        <!-- <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a> -->
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your share button code -->
        <div class="fb-share-button" 
            data-href="https://localhost:8000" 
            data-layout="button_count">
        </div>


        <!--Twitter-->
        <!-- <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a> -->
        <!--Google +-->
        <!-- <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a> -->
        <!--Linkedin-->
        <!-- <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a> -->
        <!--Pinterest-->
        <!-- <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a> -->
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

        <light class="pull-left">{{ $post->short_description }}</light>

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
            <span><i class="fa fa-comments-o"></i>{{ count($post->comments) }} Comments</span>
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
                        <span><i class="fa fa-comments-o"></i>{{ count($post->comments) }} Comments</span>
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
            </h3> <span class="media-date"><a href="#">{{ date('j F -y', strtotime($item->created_at)) }}</a>,  by: <a href="{{ url('/author') }}/{{ $item->creator->id }}">{{ $item->creator->name }}</a></span>

            <div class="widget_article_social">
                <!-- <span>
                    <a href="single.html" target="_self"> <i class="fa fa-share-alt"></i>424</a> Shares
                </span> -->
                <span>
                    <i class="fa fa-comments-o"></i>{{ count($item->comments) }} Comments
                </span>
            </div>
        </div>
    </div>
    @endforeach
    <p class="widget_divider"><a href="{{ url('/') }}" target="_self">More News&nbsp;&raquo;</a></p>
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
                <a href="#" target="_self">The Best Place to find contents of different categories.</a>
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
        <div class="media-body"><h3 class="media-heading"><a href="#" target="_self">Finding information in BM News is easy with updated content.</a></h3> <span class="rating">
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
                <a href="single.html" target="_self">Easy access with lots of content and categories.</a>
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
                <a href="single.html" target="_self">For Tech, for sports for everything, It's a perfect place to find content.</a>
            </h3>
            <span class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-full"></i>
            </span></div>
    </div>
    <p class="widget_divider"><a href="{{ url('/') }}" target="_self">More News&nbsp;&raquo;</a></p>
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
                <span><i class="fa fa-comments-o"></i>{{ $item->comments_count }} Comments</span>
            </div>
        </div>
    </div>
    @endforeach
    <p class="widget_divider"><a href="{{ url('/') }}" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
</div>
<!-- Most Commented News -->

<div class="widget m30">
    <div class="widget_title widget_black">
        <h2><a href="#">About Founder</a></h2>
    </div>
    <div class="widget_body"><img class="img-responsive left" src="{{ asset('/front/img/editor.jpg') }}"
                                  alt="Generic placeholder image">

        <p>Yanik Kumar a.k.a Believe Master is a Content Creator fond of learning about new things no matter which 
        field the it belongs. This blog is soberly created by him to provide best contents in different categories.</p>

        <p>If you are serious to know about Believe Master and want know more about the organition you can completely 
        find out on Believe Master Organisation. Moreover if your are a content creator just ping us a mail for joining
        BM News.</p>
        <button class="btn pink"><a  href="https://www.believemaster.com">Read more</a></button>
    </div>
</div>
<!-- Founder News -->

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

        <p>To all readers out there BM News welcomes you and hoping for you to find best content on our website flushed with knowledge
        in different categories. You are free to access the website and share the content.</p>

        <p>You can comments to the any post you like and you comments will be showacased once approved by the editors or by the admin.
        If you wish to provide content to our website you can contact us for a editors request. If you are a developer and opensourcely provide
        features to our website feel free to contact and joing the Development Team a.k.a BM Devs.</p>
        <button class="btn pink"><a href="{{ url('/about') }}">Read more</button>
    </div>
</div>
<!--  Readers Corner News -->

<div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="{{ asset('/front/img/podcast.jpg') }}" alt="add_one">
</div>
<!--Advertisement-->
</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>
<!-- Category News Section -->

<section id="video_section" class="video_section">
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RZA9hN2H2ik"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-6 -->

                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Zmt9vIFcadc"></iframe>
                    </div>
                    <!-- embed-responsive -->

                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Hw8Xhx6KZ8c"></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-3 -->

                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2xiCVNwhrDU"></iframe>
                    </div>
                    <!-- embed-responsive -->

                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tdk2-Ng8NfM"></iframe>
                    </div>
                    <!-- embed-responsive -->

                </div>
                <!-- col-md-3 -->

            </div>
            <!-- row -->

        </div>
        <!-- well -->

    </div>
    <!-- Container -->

</section>
<!-- Video News Section -->

@endsection
