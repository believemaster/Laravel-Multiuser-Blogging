@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Complaint & Correction</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form method="post" action="{{ url('/complaints/submit') }}" class="form-horizontal">
        @csrf
                <label class="col-sm-7 control-label">
                    <h1><span class="red-color">Correct</span> What's Wrong</h1>
                </label>
                
                <div class="col-sm-10">
                    <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Your Name"> 
                    
                    <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email"> 

                    <input type="text" id="title" name="title" class="form-control input-lg" placeholder="Article Title"> 

                    <input type="text" id="category" name="category" class="form-control input-lg" placeholder="Article Category"> 
                    
                    <textarea id="complaint" name="complaint" class="form-control input-lg" placeholder="Tell us something you felt wrong or want any corrections in any Article." rows="10"></textarea>
                
                    <input type="submit" value="Submit Correction/Complaint" class="btn btn-large pink">
                </div>
                
                <div class="col-sm-2"></div>
        </form>
    </div>
    <b>**Please Seperate Article Title and Category with comma( , ) if multiple articles.</b>
</section>
<!-- Subscriber Section -->

</div>
<!-- col-md-8 -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
