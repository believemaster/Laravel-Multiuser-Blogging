@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Contact Us</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form method="post" action="{{ url('/contact-submit') }}" class="form-horizontal">
        @csrf
                <label class="col-sm-6 control-label">
                    <h1><span class="red-color">Contact</span> Us</h1>
                </label>
                
                <div class="col-sm-10">
                    <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Enter Your Name"> 
                    
                    <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Enter Your Email"> 
                    
                    <textarea id="message" name="message" class="form-control input-lg" placeholder="Enter Your Message" rows="8"></textarea>
                
                    <input type="submit" value="Send Message" class="btn btn-large pink">
                </div>
                
                <div class="col-sm-2"></div>
        </form>
    </div>
</section>
<!-- Subscriber Section -->

</div>
<!-- col-md-8 -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
