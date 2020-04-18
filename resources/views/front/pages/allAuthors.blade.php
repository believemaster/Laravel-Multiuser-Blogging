@extends('front.layout.master')

@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active"><a href="#">{{ $page_name }}</a></li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
<div class="col-md-8"  style="color: black;">

<h1 class="red-color">{{ $page_name }}</h1>
<h6>List Of All Authors On BM News</h6>
<ul>
@foreach($shareData['authors'] as $author)
<li><a href="{{ url('/author') }}/{{ $author->id }}">{{ $author->name }}</a></li>
@endforeach
</ul>
<nav aria-label="Page navigation" class="pagination_section">
<div class="pagination">
    {{ $shareData['categories']->links() }}
</div>
</nav>

</div>
<!-- col-md-8 -->


<!-- Right Side + Videos -->
@include('front.layout.rightcontent')

@endsection
