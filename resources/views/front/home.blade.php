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

@foreach($shareData['categories'] as $category)
<div class="category_section mobile">
    <div class="article_title header_black">
        <h2><a href="{{ url('/category') }}/{{ $category->id }}" target="_self">{{ $category->name }}</a></h2>
    </div>
    <!-- article_title -->

    @foreach($category->posts->take(5) as $key=>$item)
    @if($key === 0)
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

                        <h3 class="media-heading"><a href="{{ url('/details') }}/{{ $item->slug }}">{{ $item->title }}</a></h3>
                        <span class="media-date"><a href="#">{{ date('F j,Y', strtotime($item->created_at)) }}</a>, by: <a href="{{ url('/author') }}/{{ $item->creator->id }}">{{ $item->creator->name }}</a></span>

                        <div class="media_social">
                            <!-- <span><a href="#"><i class="fa fa-share-alt"></i>424</a> Shares</span> -->
                            <span><i class="fa fa-comments-o"></i>{{ count($item->comments) }} Comments</span>
                </div>
                    </div>
                </div>
            </div>
            @if($loop->last)
        </div>
    </div>
    @endif
    @endif
    @endforeach
    <p class="divider"><a href="{{ url('/category') }}/{{ $category->id }}">More News&nbsp;&raquo;</a></p>
</div>
@endforeach
<!-- Category News Section -->
<nav aria-label="Page navigation" class="pagination_section">
    <div class="pagination">
        {{ $shareData['categories']->links() }}
    </div>
</nav>
<!-- navigation -->
</div>
<!-- Left Section -->

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
