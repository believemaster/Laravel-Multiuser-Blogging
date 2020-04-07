<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                                            <span class="date">
                                                {{ date('l') }} 
                                            </span>
                        <!-- Date -->
                                            <span class="time">
                                                {{ date('j F, Y') }}
                                            </span>
                        <!-- Time -->
                        <div class="social">
                            <a class="icons-sm fb-ic" href="https://www.facebook.com/believemaster"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a class="icons-sm tw-ic" href="https://www.twitter.com/believe_master"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="icons-sm inst-ic" href="https://www.instagram.com/believemaster"><i class="fa fa-instagram"> </i></a>
                            <!--Linkedin-->
                            <a class="icons-sm tmb-ic" href="https://www.tumblr.com/blog/believemaster"><i class="fa fa-tumblr"> </i></a>
                            <!--Pinterest-->
                            <a class="icons-sm rss-ic" href="https://www.youtube.com/believemaster"><i class="fa fa-youtube-play"> </i></a>
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('storage/others') }}/{{ $shareData['front_logo'] }}" alt="Logo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                        @if (Route::has('login'))
                            @auth
                            <li><a href="{{ url('/admin/dashboard') }}">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            @endauth
                        @endif
                        </ul>
                        <!-- Language Section -->

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                    class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form" method="post" action="{{ url('/search') }}">
                                            @csrf
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search..."> 
                                                        <span class="input-group-btn">
                                                            <button type="submit" class="btn btn-primary">Search</button>
                                                        </span>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->

        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">BM News</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            @foreach($shareData['categories']->take(6) as $category)
                            <li><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach

                            <!-- More Categories -->
                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More
                                <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Authors</li>
                                                @foreach($shareData['authors']->slice(0, 5) as $author)
                                                <li><a href="{{ url('/author') }}/{{ $author->id }}">{{ $author->name }}</a></li>
                                                @endforeach
                                                <li><a href="{{ url('/all-authors') }}"><b>All Authors >></b></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Categories</li>
                                                @foreach($shareData['categories']->slice(0, 5) as $category)
                                                <li><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                                                @endforeach
                                                <li><a href="{{ url('/all-categories') }}"><b>All Categories >></b></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Videos</li>
                                                <li><a href="#">Coming Soon</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="m-menu-content">
                                            <ul class="col-sm-3">
                                                <li class="dropdown-header">Podcast</li>
                                                <li><a href="#">Coming Soon</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->
