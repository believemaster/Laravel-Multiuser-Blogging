@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Advertisement Policy</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8"  style="color: black;">

<h1 class="red-color">Advertisement Policy</h1>
<h6>Belive Master News Advertisement Policy regarding whole website are listed below.</h6>

<h6><b>Last Updated April 6,2020</b></h6>

The privacy of our visitors to <a href="https://news.believemaster.com" class="red-color">BM News</a> is important to us.

At <a href="https://news.believemaster.com" class="red-color">BM News</a>, we recognize that privacy of your personal information is important. Here is information on what types of personal information we receive and collect when you use and visit <a href="https://news.believemaster.com" class="red-color">BM News</a>, and how we safeguard your information. We never sell your personal information to third parties.

Log Files As with most other websites, we collect and use the data contained in log files. The information in the log files include your IP (internet protocol) address, your ISP (internet service provider, such as AOL or Shaw Cable), the browser you used to visit our site (such as Internet Explorer or Firefox), the time you visited our site and which pages you visited throughout our site.

Cookies and Web Beacons We do use cookies to store information, such as your personal preferences when you visit our site. This could include only showing you a popup once in your visit, or the ability to login to some of our features, such as forums.
<br><br>
We also use third party advertisements on <a href="https://news.believemaster.com" class="red-color">BM News</a> to support our site. Some of these advertisers may use technology such as cookies and web beacons when they advertise on our site, which will also send these advertisers (such as Google through the Google AdSense program) information including your IP address, your ISP , 

the browser you used to visit our site, and in some cases, whether you have Flash installed. This is generally used for geotargeting purposes (showing New York real estate ads to someone in New York, for example) or showing certain ads based on specific sites visited (such as showing cooking ads to someone who frequents cooking sites).

DoubleClick DART cookies We also may use DART cookies for ad serving through Google’s DoubleClick, which places a cookie on your computer when you are browsing the web and visit a site using DoubleClick advertising (including some Google AdSense advertisements). This cookie is used to serve ads specific to you and your interests (“interest based targeting”). The ads served will be targeted based on your previous 

browsing history (For example, if you have been viewing sites about visiting Las Vegas, you may see Las Vegas hotel advertisements when viewing a non-related site, such as on a site about hockey). DART uses “non personally identifiable information”. It does NOT track personal information about you, such as your name, email address, physical address, telephone number, social security numbers, 

bank account numbers or credit card numbers. You can opt-out of this ad serving on all sites using this advertising by visiting <a href="https://marketingplatform.google.com/about/enterprise/" class="red-color">Google Marketing Platform</a>

You can choose to disable or selectively turn off our cookies or third-party cookies in your browser settings, or by managing preferences in programs such as Norton Internet Security. However, this can affect how you are able to interact with our site as well as other websites. This could include the inability to login to services or programs, such as logging into forums or accounts.

Deleting cookies does not mean you are permanently opted out of any advertising program. Unless you have settings that disallow cookies, the next time you visit a site running the advertisements, a new cookie will be added.
<br><br>
<h6>Advertisers Are Adviced To Contact For Publishing Personal Advertisements On BM News. </h6>
</div>
<!-- col-md-8 -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
