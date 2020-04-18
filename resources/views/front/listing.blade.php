@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">List</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

@foreach($posts as $key=>$post)
@if($key === 0)
<div class="entity_wrapper">
    <div class="entity_title header_purple">
        <h1><a href="{{ url('/category') }}/{{ $post->category_id }}">{{ $post->category->name }}</a></h1>
    </div>
    <!-- entity_title -->

    <div class="entity_thumb">
        <img class="img-responsive" src="{{ asset('/storage/post') }}/{{ $post->main_image }}" alt="{{ $post->title }}">
    </div>
    <!-- entity_thumb -->

    <div class="entity_title">
        <a href="{{ url('/details') }}/{{ $post->slug }}"><h3>{{ $post->title }}</h3></a>
    </div>
    <!-- entity_title -->

    <div class="entity_meta">
    <a href="#">{{ date('j F -y', strtotime($post->created_at)) }}</a>, by: <a href="{{ url('/author') }}/{{ $post->creator->id }}">{{ $post->creator->name }}</a>
    </div>
    <!-- entity_meta -->

    <div class="entity_content">
    {{ str_limit($post->short_description, 250, '...') }}
    </div>
    <!-- entity_content -->

    <div class="entity_social">
        <!-- <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span> -->
        <span><i class="fa fa-comments-o"></i>{{ count($post->comments) }} Comments </span>
    </div>
    <!-- entity_social -->

</div>

<!-- entity_wrapper -->
@else
    @if($key === 1)
<div class="row">
    @endif
    <div class="col-md-6">
        <div class="category_article_body">
            <div class="top_article_img">
                <img class="img-fluid" src="{{ asset('/storage/post') }}/{{ $post->list_image }}" alt="{{ $post->title }}">
            </div>
            <!-- top_article_img -->

            <div class="category_article_title">
                <h5><a href="{{ url('/details') }}/{{ $post->slug }}">{{ str_limit($post->title, 35, '...') }}</a></h5>
            </div>
            <!-- category_article_title -->

            <div class="article_date">
                <a href="#">{{ date('j F -y', strtotime($post->created_at)) }}</a>, by: <a href="{{ url('/author') }}/{{ $post->creator->id }}">{{ $post->creator->name }}</a>
            </div>
            <!-- article_date -->

            <div class="category_article_content">
            {{ str_limit($post->short_description, 150, '...') }}
            </div>
            <!-- category_article_content -->

            <div class="article_social">
                <!-- <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span> -->
                <span><i class="fa fa-comments-o"></i><a href="#">{{ count($post->comments) }}  Comments</a></span>
            </div>
            <!-- article_social -->

        </div>
        <!-- category_article_body -->

    </div>
    <!-- col-md-6 -->
    @if($loop->last)

</div>
@endif
@endif
@endforeach
<!-- row -->

<div class="widget_advertisement">
    <img class="img-responsive" src="{{ asset('/front/img/category_advertisement.jpg')}} " alt="feature-top">
</div>
<!-- widget_advertisement -->

<nav aria-label="Page navigation" class="pagination_section">
    <div class="pagination">
        {{ $posts->links() }}
    </div>
</nav>
<!-- navigation -->

</div>
<!-- col-md-8 -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
