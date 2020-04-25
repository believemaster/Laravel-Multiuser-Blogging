@extends('front.layout.master')

@section('content')

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">

            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive top_static_article_img" src="{{ asset('/storage/post') }}/{{ $hot_news->main_image }}"
                             alt="{{ $hot_news->title }}">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">Hot News</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{{ url('/details') }}/{{ $hot_news->slug }}" target="_self">{{ $hot_news->title }}</a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date">
                        <a href="{{ url('/author') }}/{{ $hot_news->creator->id }}">{{ $hot_news->creator->name }}</a>,
                        <a href="#" target="_self">{{ date('F j,Y', strtotime($hot_news->created_at)) }}</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                        {{ $hot_news->short_description }}
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <!-- <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span> -->
                            <span><i class="fa fa-comments-o"></i><a href="{{ url('/details') }}/{{ $hot_news->slug }}">{{ $hot_news->comments_count }} Comments</a></span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_article_wrapper -->

            </div>
            <!-- col-md-7 -->

            @foreach($top_viewed as $item)
            <div class="col-md-5" style="margin-bottom: 3%">
                
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive" width="450" style="height: 270px;" src="{{ asset('/storage/post') }}/{{ $item->main_image }}" alt="{{ $item->title }}">
                    </div>
                    <!-- feature_article_img -->

                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="category.html">Top Viewed</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{{ url('/details') }}/{{ $item->slug }}" target="_self">{{ str_limit($item->title, 30, '..') }}</a></h1>
                        </div>
                        <!-- feature_article_title -->

                        <div class="feature_article_date"><a href="{{ url('/author') }}/{{ $item->creator->id }}" target="_self">{{ $item->creator->name }}</a>,
                        <a href="#" target="_self">{{ date('F j,Y', strtotime($hot_news->created_at)) }}</a></div>
                        <!-- feature_article_date -->

                        <div class="feature_article_content">
                        {{ str_limit($item->short_description, 50, '...') }}
                        </div>
                        <!-- feature_article_content -->

                        <div class="article_social">
                            <!-- <span><i class="fa fa-share-alt"></i><a href="#">424</a>Shares</span> -->
                            <span><i class="fa fa-comments-o"></i><a href="{{ url('/details') }}/{{ $hot_news->slug }}">{{ $hot_news->comments_count }} Comments</a></span>
                        </div>
                        <!-- article_social -->

                    </div>
                    <!-- feature_article_inner -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            @endforeach

        </div>
        <!-- Row -->

    </div>
    <!-- container -->

</section>
<!-- Feature News Section -->

<section id="category_section" class="category_section">
<div class="container">
<div class="row">
    <div class="col-md-8">
        <div class="category_section mobile">
            @foreach($category_posts as $category)
                <!-- article_title -->
            
                <div class="article_title header_black">
                    <h2><a href="{{ url('/category') }}/{{ $category->id }}" target="_self">{{ $category->name }}</a></h2>
                </div>
                @foreach($category->posts->where('status', 1)->reverse()->take(5) as $key=>$item)
                @if($loop->first)
                <div class="category_article_wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_article_img">
                                <a href="{{ url('/details') }}/{{ $item->slug }}">
                                <img class="img-responsive" src="{{ asset('/storage/post') }}/{{ $item->list_image }}" alt="{{ $item->title }}">
                                </a>
                            </div>
                            <!-- top_article_img -->
                        </div>
                        <div class="col-md-6">
                            <span class="tag purple">{{ $category->name }}</span>

                            <div class="category_article_title">
                                <h2><a href="{{ url('/details') }}/{{ $item->slug }}">{{ $item->title }}</a></h2>
                            </div>
                            <!-- category_article_title --->
                            <div class="category_article_date"><a href="#">{{ date('F j,Y', strtotime($item->created_at)) }}</a>, by: <a href="{{ url('/author') }}/{{ $item->creator->id }}">{{ $item->creator->name }}</a></div>
                            <!-- category_article_date -->
                            <div class="category_article_content">
                                {{ str_limit($item->short_description, 100, '...') }}
                            </div>
                            <!-- category_article_content -->
                            <div class="media_social">
                                <!-- <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span> -->
                                <span><i class="fa fa-comments-o"></i>{{ count($item->comments) }} Comments</span>
                            </div>
                            <!-- media_social -->
                        </div>
                    </div>
                </div>
                @else
                    @if($key === 1)
                <div class="category_article_wrapper">
                    <div class="row">
                    @endif
                        <div class="col-md-6" style="margin-bottom: 2%">
                            <div class="media">
                                <div class="media-left">
                                    <a href="{{ url('/details') }}/{{ $item->slug }}"><img class="media-object" src="{{ asset('/storage/post') }}/{{ $item->thumb_image }}"
                                                    alt="{{ $item->title }}"></a>
                                </div>
                                <div class="media-body">
                                    <span class="tag purple">{{ $category->name }}</span>

                                    <h3 class="media-heading"><a href="{{ url('/details') }}/{{ $item->slug }}">{{ str_limit($item->title, 50, '...') }}</a></h3>
                                    <span class="media-date"><a href="#">{{ date('F j,Y', strtotime($item->created_at)) }}</a>, by: <a href="{{ url('/author') }}/{{ $item->creator->id }}">{{ $item->creator->name }}</a></span>

                                    <div class="media_social">
                                        <!-- <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span> -->
                                        <span><i class="fa fa-comments-o"></i>{{ count($item->comments) }} Comments</span>
                            </div>
                                </div>
                            </div>
                        </div>
                        @if($key === 0)
                    </div>
                </div>
                @endif
                @endif
                @endforeach
                <p class="divider"><a href="{{ url('/category') }}/{{ $category->id }}">More News&nbsp;&raquo;</a></p>
            @endforeach
        </div>
        <!-- Category News Section -->
        <nav aria-label="Page navigation" class="pagination_section">
            <div class="pagination">
            {{ $category_posts->links() }}
            </div>
        </nav>
        <!-- navigation -->
    </div>
<!-- Left Section -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
