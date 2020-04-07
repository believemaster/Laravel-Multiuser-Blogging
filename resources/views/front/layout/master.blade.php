<!DOCTYPE html>
<html>
<head>
    @include('front.layout.top')
    <meta property="og:url"           content="https://localhost:8000" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="" />
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
<!-- Sticky Sidebar -->
<ul id="social-sidebar">
  <li>
    <a href="https://www.twitter.com/believe_master" class="fa fa-twitter"><span>Twitter</span></a>
  </li>
  <li>
    <a href="https://www.facebook.com/believemaster" class="fa fa-facebook"><span>Facebook</span></a>
  </li>
  <li>
    <a href="https://www.instagram.com/believemaster" class="fa fa-instagram"><span>Instagram</span></a>
  </li>
  <li>
    <a href="https://www.facebook.com/yanikkumarBM/" class="fa fa-smile-o"><span>YKBM</span></a>
  </li>
  <li>
    <a href="https://www.dribbble.com/believemaster" class="fa fa-dribbble"><span>Dribbble</span></a>
  </li>
  <li>
    <a href="https://www.github.com/believemaster" class="fa fa-github"><span>Github</span></a>
  </li>
  <li>
    <a href="https://www.youtube.com/believemaster" class="fa fa-youtube-play"><span>Youtube</span></a>
  </li>
</ul>
<!-- Sidebar -->

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
