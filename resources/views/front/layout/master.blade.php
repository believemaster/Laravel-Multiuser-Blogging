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
            id="uc-mobile-menu-close-btn">&times;
    </button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="{{ url('/') }}">Home</a></li><br>
                <li style="color: white;" class="text-center"><b>Categories</b></li>
                @foreach($shareData['categories']->take(5) as $category)
                <li><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
                <li><a href="{{ url('/all-categories') }}">More <i class="fa fa-angle-right"></i></a></li><br>
                <li style="color: white;" class="text-center"><b>Authors</b></li>
                @foreach($shareData['authors']->take(5) as $author)
                <li><a href="{{ url('/author') }}/{{ $author->id }}">{{ $author->name }}</a></li>
                @endforeach
                <li><a href="{{ url('/all-authors') }}">More <i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <div class="text-center">&copy; Believe Master {{ date('Y') }} <b>V1.2</b></div>
    </div>
</div>
<!-- .uc-mobile-menu -->

</div>
<!-- #main-wrapper -->

@include('front.layout.bottom')
</body>
</html>
