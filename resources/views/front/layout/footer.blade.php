<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form method="post" action="{{ url('/subscribe') }}" class="form-horizontal">
        @csrf
            <div class="form-group form-group-lg">
                <label class="col-sm-6 control-label" for="email">
                    <h1><span class="red-color">Sign up</span> for the latest news</h1>
                </label>

                <div class="col-sm-3">
                    <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Enter Your Email">
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Sign Up" class="btn btn-large pink">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->

<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-3">
                <div class="footer_widget_title"><h3><a href="category.html" target="_self">About Tech</a></h3></div>
                <div class="logo footer-logo">
                    <a title="fontanero" href="index.html">
                        <img src="{{ asset('/front/img/tech_about.jpg') }}" alt="technews">
                    </a>

                    <p>BM News is collection of different category news website where you can read contents of all cateogories
                       It is a blog cum news website where contents are updated daily.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Discover</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <ul class="list-unstyled left">
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/membership') }}">Membership</a></li>
                            <!-- <li><a href="{{ url('/') }}">Blog</a></li> -->
                            <li><a href="{{ url('/jobs') }}">Job</a></li>
                            <li><a href="{{ url('/sitemap') }}">SiteMap</a></li>
                            @foreach($shareData['categories']->take(5) as $category)
                            <li><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            <li><a href="{{ url('/news-updates') }}">Newsletter Alerts</a></li>
                            <li><a href="{{ url('/podcast') }}">Podcast</a></li>
                            <!-- <li><a href="#">Sms Subscription</a></li> -->
                            <li><a href="{{ url('/advertisement-policy') }}">Advertisement Policy</a></li>
                            <li><a href="{{ url('/technical-issue') }}">Report Technical issue</a></li>
                            <li><a href="{{ url('/complaints') }}">Complaints and Corrections</a></li>
                            <li><a href="{{ url('/terms-condition') }}">Terms and Conditions</a></li>
                            <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('/cookie-policy') }}">Cookie Policy</a></li>
                            <!-- <li><a href="#">Securedrop</a></li> -->
                            <!-- <li><a href="#">Archives</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="#" target="_self">Editor Picks</a></h3>
                </div>
                @foreach($shareData['most_viewed']->random(3) as $item)
                <div class="media">
                    <div class="media-left">
                        <a href="{{ url('/details') }}/{{ $item->slug }}"><img class="media-object" src="{{ asset('/storage/post') }}/{{ $item->thumb_image }}"
                        height="65px" width="65px" alt="{{ $item->title }}"></a>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">
                            <a href="single.html">{{ str_limit($item->title, 50, '...') }}</a>
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
                 @endforeach
            </div>
            <div class="col-md-3">
                <div class="footer_widget_title">
                    <h3><a href="category.html" target="_self">Gallery</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo1.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo2.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo3.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo4.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo5.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo6.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo7.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo8.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo9.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo10.jpg') }}" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{ asset('/front/img/tech_photo11.jpg') }}" alt="Tech Photos">
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom_Section">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="col-sm-3">
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
                    </div>
                    <div class="col-sm-6">
                        <p>&copy; Copyright {{ date('Y') }}-Believe Master News . Developed by: <a href="https://believemaster.github.io" class="red-color">Believe Master</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <p>All In One News</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<!-- #content-wrapper -->
