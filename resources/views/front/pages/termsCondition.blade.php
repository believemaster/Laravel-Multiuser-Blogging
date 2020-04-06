@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Terms And Condition</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8"  style="color: black;">

<h1 class="red-color">Terms And Condition</h1>
<h6>Belive Master News Terms and Condition regarding whole website are listed below.</h6>

<h6><b>Last Updated April 6,2020</b></h6>
<h5>Introduction:</h5>
<p>
These Website Terms And Conditions (these “Terms” or these “Website Terms And Conditions”) contained herein on this webpage, shall govern your 
use of this website, including all pages within this website (collectively referred to herein below as this <b>“news.believemaster.com”</b>). 
These Terms apply in full force and effect to your use of this Website and by using this Website, you expressly accept all terms and conditions 
contained herein in full. You must not use this Website, if you have any objection to any of these Website Terms And Conditions.
<br>

<h6>1. Intellectual Property Rights</h6>
Content which you may have opted to include on this Website, under these Terms, BM NEWS and/or its licensors own 
all rights to the intellectual property and material contained in this Website, and all such rights are reserved. You are granted a limited 
license only, subject to the restrictions provided in these Terms, for purposes of viewing the material contained on this Website.


<h6>2. Restrictions</h6>
You are expressly and emphatically restricted from all of the following:
<ol type="I">
<li>Publishing any Website material in any media.</li>
<li>Selling, sublicensing and/or otherwise commercializing any Website material.</li>
<li>Publicly performing and/or showing any Website material.</li>
<li>Using this Website in any way that is, or may be, damaging to this Website.</li>
<li>Using this Website in any way that impacts user access to this Website.</li>
<li>Using this Website contrary to applicable laws and regulations, or in a way that causes, or may cause, harm to the Website, or to any person or business entity.</li>
<li>Engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website, or while using this Website.</li>
<li>Using this Website to engage in any advertising or marketing.</li>
</ol>
Certain areas of this Website are restricted from access by you and BM News may further restrict access by you to any areas of this Website, 
at any time, in its sole and absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality of such information.

<h6>3. Your Content</h6>
In these Website Standard Terms And Conditions, “Your Content” shall mean any audio, video, text, images or other material you choose to display on this Website. 
With respect to Your Content, by displaying it, you grant BM News a non-exclusive, worldwide, irrevocable, royalty-free, sublicensable license to use, reproduce, 
adapt, publish, translate and distribute it in any and all media.
Your Content must be your own and must not be infringing on any third party’s rights. BM News reserves the right to remove any of Your Content from this 
Website at any time, and for any reason, without notice.

<h6>4. No warranties</h6>
This Website is provided “as is,” with all faults, and BM News makes no express or implied representations or warranties, of any kind related to this 
Website or the materials contained on this Website. Additionally, nothing contained on this Website shall be construed as providing consult or advice to you.

<h6>5. Limitation of liability</h6>
In no event shall BM News , nor any of its officers, directors and employees, be liable to you for anything arising out of or in any way connected 
with your use of this Website, whether such liability is under contract, tort or otherwise, and BM News , including its officers, directors and 
employees shall not be liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.

<h6>6. Indemnification</h6>
You hereby indemnify to the fullest extent BM News from and against any and all liabilities, costs, demands, causes of action, damages 
and expenses (including reasonable attorney’s fees) arising out of or in any way related to your breach of any of the provisions of these Terms.

<h6>7. Severability</h6>
If any provision of these Terms is found to be unenforceable or invalid under any applicable law, such unenforceability or invalidity shall not 
render these Terms unenforceable or invalid as a whole, and such provisions shall be deleted without affecting the remaining provisions herein.

<h6>8. Variation of Terms</h6>
BM News is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review such Terms 
on a regular basis to ensure you understand all terms and conditions governing use of this Website.

<h6>9. Assignment</h6>
BM News shall be permitted to assign, transfer, and subcontract its rights and/or obligations under these Terms without any 
notification or consent required. However, you shall not be permitted to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.

<h6>10. Entire Agreement</h6>
These Terms, including any legal notices and disclaimers contained on this Website, constitute the entire agreement between BM News
and you in relation to your use of this Website, and supersede all prior agreements and understandings with respect to the same.

<h6>11. Governing Law & Jurisdiction</h6>
These Terms will be governed by and construed in accordance with the laws of the State of Delhi, and you submit to the non-exclusive 
jurisdiction of the state and federal courts located in Delhi for the resolution of any disputes.

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
        <button class="btn pink">Read more</button>
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
        <button class="btn pink">Read more</button>
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
