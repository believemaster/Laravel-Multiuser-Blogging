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


<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
