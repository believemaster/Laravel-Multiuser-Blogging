@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Technical Issues</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

<section id="subscribe_section" class="subscribe_section">
    <div class="row">
        <form method="post" action="{{ url('/technical-issue/submit') }}" class="form-horizontal">
        @csrf
                <label class="col-sm-6 control-label">
                    <h1><span class="red-color">Report</span> Issues</h1>
                </label>
                
                <div class="col-sm-10">
                    <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Name"> 
                    
                    <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email"> 
                    
                    <textarea id="issue" name="issue" class="form-control input-lg" placeholder="Explan Issues You're Facing Briefly" rows="10"></textarea>
                
                    <input type="submit" value="Report Issue" class="btn btn-large pink">
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
