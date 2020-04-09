@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Privacy Policy</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8"  style="color: black;">

<h1 class="red-color">Privacy Policy</h1>
<h6>Belive Master News Terms Privacy Policy are listed below.</h6>

<h6><b>Last Updated April 6,2020</b></h6>
<h5>Introduction:</h5>
<p>Belive Master News is an online platform for sharing latest news, updates and articles online with the aim of providing better content to the user 
with no false contents. Content writers and editors across the globe can participate along accessing the website and can have privillages to write contents
on the BM News. Users visiting the websites can check and read the contents and news and can share them on their social network to provide correct information
to the world. Below mentioned are Privacy Policy of the website whenever you enter the website. Make sure to read them carefully and not to break them which may 
lead to penalty. <br>
Privacy Policy Describes: </p>
<ol>
<li>What information we collect, how we collect and why we collect?</li>
<li>How we use that information and to whome we share it?</li>
<li>How you can have access to information and update the information?</li>
<li>How you can make your choice to us for not sharing your information?</li>
<li>How we protect the information stored about you?</li>
</ol>

<b class="red-color">**Note:</b><br>
If you don't want <b>news.believemaster.com</b> to collect, store, use or share your information, you are adviced not to singup into the website.

<h6>1. INFORMATION WE COLLECT</h6>
We collect following type of information. <br>
<b>Information You Provide Directly:</b>
<ol type="I">
<li>Your name, username, email and password when you register for news.believemaster.com.</li>
<li>Your profile information that you provide like name, email, profile images (helpful for us to find duplicate members).</li>
<li>User content (eg. images, comments, article, news and other materials) that you post.</li>
<li>Commuication between you and bmnews. For Example: Sending subsciption mail to you. <br> (e.g.password updation mails, service changed/updated, technical service, warnings,
contact information, complaints and corrections, issues etc.)</li>
</ol>

<b>How Do We Collect:</b><br>
<ol>
We directly collect data from you as you sign-up our website for the first time. If you have access to post something on the website of post any content, your data will be
directly collectly on our data base to provide users useful information.
The concept of collecting information is simple and easy for bmnews. Either you provide information directly or collecting automatic information.
</ol>

<b>Why We Collect:</b><br>
<ol>
There is no other intention rather than providing information to coming visitors, providing them recent updates regarding different fields. We just share data with third party analytics
or advertisinf purposes. To improve content and to display ads and services.
</ol>

<h6>2. ACCESS OF INFORMATION</h6>
<ol type="I">
<li>To provide more service to you and new visitors on bmnews.</li>
<li>Respond to you comments, queries, issues and other concerns.</li>
<li>Notify you about latest updates, changes and features.</li>
<li>Provide technical support and service.</li>
We may also combine information we obtain from other sources or information that already exist in our records with your personal information for purposes described above.
</ol>

<h6>3. USE OF INFORMATION</h6>
<ol>
You can have access to your information you provide in your profile and can update your information you provide in your pannel if you are providedwith your pannel access.
</ol>

<h6>4. CHOICE FOR INFORMATION STORAGE</h6>
<ol>
You can decide not to share information to us by not signing-up in to the website, posting any comment or any information on the website. The only way for you not to share
your information with us is not providing any information on the website.
</ol>

<h6>4. PROTECTION OF INFORMATION</h6>
<ol>
Our website is running on the servers hosted with a full on security support. Also we keep regular check & backup of your information so that your information is never misplaced and
never get into wrong hands.
</ol>

<h5>Other Policies:</h5>
<b>Commuication:</b>
<ol>
Our <b>Mailing Policy</b> inlcudes collecting of your email whenever you send us an email regarding support, issues, subsciption or contacting us. We use your email to thank-you for
helping us and supporting us. We will store your communication and our reply for future correspondence.
</ol>
<br>

<b>Dispute Resolution:</b>
<ol>
If you have any complaint regarding our compliance with this privacy policy you should first <a href="{{ url('/contact') }}" class="red-color">Contact Us</a>. We will investigate and attempt to resolve
complaints and disputes regarding use and disclosure of personal information in accordance with this privacy policy.
</ol>

<h5>Future Changes To Privacy Policy:</h5>
<ol>
We may update Privacy Policy as necessry to reflect changes we make and to satisft legal requirements. We will post notice and inform you about the material changes on website. As new features 
are added to the website Privacy Policy might change accordingly.
</ol>

</div>
<!-- col-md-8 -->




<!-- Right News Section -->

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
