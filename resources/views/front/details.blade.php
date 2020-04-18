@extends('front.layout.master')

@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }} <small>And Will Be Published After Approval</small>
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

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
