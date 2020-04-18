@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">Membership</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8">

<h1 class="red-color">Membership</h1>
<h6>Belive Master News will be coming up with membership plans for users</h6>

<h5>Comming Soon</h5>

</div>
<!-- col-md-8 -->

<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
