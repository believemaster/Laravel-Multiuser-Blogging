@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Newsletter</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form method="post" action="{{ url('/subscribe') }}" class="form-horizontal">
        @csrf
                <label class="col-sm-6 control-label" for="email">
                    <h1><span class="red-color">Sign up</span> for the latest news</h1>
                </label>
                
                <div class="col-sm-8">
                    <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Enter Your Email"> 
                </div>
                <div class="col-sm-1">
                    <input type="submit" value="Sign Up" class="btn btn-large pink">
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
