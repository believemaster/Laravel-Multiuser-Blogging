<!DOCTYPE html>
<html>
<head>
    @include('front.layout.top')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">

@include('front.layout.header')

    @yield('content')

@include('front.layout.footer')

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                @foreach($shareData['categories']->take(5) as $category)
                <li><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
                <li class="dropdown m-menu-fw">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">More
                    <span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="m-menu-content">
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Categories</li>
                                    @foreach($shareData['categories']->slice(5, 20) as $category)
                                    <li><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown m-menu-fw">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Authors
                    <span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="m-menu-content">
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Authors</li>
                                    @foreach($shareData['authors'] as $author)
                                    <li><a href="{{ url('/author') }}/{{ $author->id }}">{{ $author->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->

@include('front.layout.bottom')
</body>
</html>
