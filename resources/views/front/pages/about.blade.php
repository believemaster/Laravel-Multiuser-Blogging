@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">About</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

<h1 class="red-color">About Us</h1>
<p>
Welcome to Believe Master News is a child company of <a href="www.believemaster.com" class="red-color">Believe Master.</a><br>
It is a new platform for finding News and articles releated to different categories and fields.
Goal of this website is to provide best content online with latest and correct news currenty trending with no attempt to provide false content. <br>
We here at Believe Master thoroughly look for content and find the best news and articles for you so that every content is easily understandable
for our viewers and easy to read. We have different bloggers and editors around the globe who help BM News providing contents and taking care of 
the content. Each and every content here is thoroughly checked before it is approved, once it is approved by the editors of BM News it is then 
published publically on the website so that whole world can have the correct information. <br>
</p>
<ul>
    <h4>How we work?</h4>
    <li>BM news is simple, clear and clean.</li>
    <li>We are completly online and serves you directly on web.</li>
    <li>We find & provide contents which is hard for people to find on web.</li>
    <li>We give users opportunity to publish their contents on our web and get rewards.</li>
    <li>Unlike other platforms for news and articles we do not flush users with different options and things.</li>
</ul>
<ul>
    <h4>How you can be our partner?</h4>
    <p>You can work with us in just 3 simple steps:</p>
    <ol>
    <li>Just Sign-up into our website.</li>
    <li>Sent us a request mail or get in <a href="{{ url('/contact') }}" class="red-color">Contact</a> with us to be partner.</li>
    <li>Hold back and wait for the response from our side.</li> <br>
    </ol>
    <li>After getting reply you will get access to write contents on our website.</li>
    <p>You will rewarded and offered for writing contents on the Terms of Company.</p>
</ul>

<h4>Future of BM News</h4>
<p>Curretly we are in a working stage and adding on with more and more features onto our website. We will try to push our efforts
and try to make BM News one of the top places for articles, news, blogs and valuable contents.
We will be implementing more technologies for our viewers to find easiness. There is lot more to find just Stay Connected.
</p>
<u><h4 class="red-color text-center">Meet The Team</h4></u>

<div class="row">
<div class="container">
  <div class="row">
    <div class="col-sm-2">
        <div class="card">
        <img class="img-responsive" src="{{ asset('/front/img/editor.jpg') }}" alt="Yanik Kumar" >
        <div class="container-card">
            <h4 class="text-center"><b>Yanik Kumar</b></h4>
            <p class="text-center text-info">Founder <br> Believe Master</p>
        </div>
        </div>
    </div>

    <div class="col-sm-2">
        <div class="card">
        <img class="img-responsive" src="{{ asset('/front/img/editor.jpg') }}" alt="Yanik Kumar" >
        <div class="container-card">
            <h4 class="text-center"><b>Kamlesh Kumar</b></h4>
            <p class="text-center text-info">CEO</p>
        </div>
        </div>
    </div>

    <div class="col-sm-2">
        <div class="card">
        <img class="img-responsive" src="{{ asset('/front/img/editor.jpg') }}" alt="Yanik Kumar" >
        <div class="container-card">
            <h4 class="text-center"><b>This Can Be You</b></h4>
            <p class="text-center text-info">Other Position</p>
        </div>
        </div>
    </div>
  </div>
</div>




</div>



</div>
<!-- col-md-8 -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
