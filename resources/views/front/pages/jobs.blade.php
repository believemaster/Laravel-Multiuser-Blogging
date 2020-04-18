@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Jobs</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

<h1 class="red-color">Jobs</h1>
<h6>Belive Master News is a new place for people to share Articles and News related to any field suits you.</h6>

<h5>We Are Currently Looking For:</h5>
<ol>
    <li>Contet Writers:</li>
        <b>Role:</b> To Write Content and article related to different categories available.
        <b>Location:</b> Work From Home
    <li>Editors</li>
        <b>Role:</b> To check mistakes and plagiarism in articles, reply & check through comments & take actions upon complaints.
        <b>Location:</b> Work From Home
</ol>


</div>
<!-- col-md-8 -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
