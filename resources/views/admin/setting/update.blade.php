@extends('admin.layout.master')
    @section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>{{ $page_name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-info">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-info card-outline">
                        <div class="card-header with-border">
                            <strong class="card-title">{{ $page_name }}</strong>
                        </div>
                        <div class="box-body">
                            <!-- Credit Card -->
                            <div id="">
                                <div class="card-body">
                                @if(count($errors) > 0)
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ $message }}
                                    </div>
                                @endif

                                    <form method="post" action="{{ url('/admin/settings/update') }}" enctype="multipart/form-data" role="form">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="system_name" class="col-form-label mb-1">System Name</label>
                                            <input id="system_name" name="system_name" value="{{ $system_name }}" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="favicon" name="favicon" class="col-form-label mb-1">Favicon</label>
                                            <input type="file" id="favicon" name="favicon" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="front_logo" name="front_logo" class="col-form-label mb-1">Front Logo</label>
                                            <input type="file" id="front_logo" name="front_logo" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="admin_logo" name="admin_logo" class="col-form-label mb-1">Admin Logo</label>
                                            <input type="file" id="admin_logo" name="admin_logo" class="form-control">
                                        </div>
                                        <hr>

                                        <h4>Meta Tags Update :</h4>

                                        <div class="form-group">
                                            <label for="meta_title" class="col-form-label mb-1">Meta Title</label>
                                            <input id="meta_title" name="meta_title" value="{{ $meta_title }}" type="text" class="form-control" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="meta_keyword" class="col-form-label mb-1">Meta Keyword</label>
                                            <textarea id="meta_keyword" name="meta_keyword" type="text" class="form-control" rows="4">{{ $meta_keyword }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="meta_description" class="col-form-label mb-1">Meta Description</label>
                                            <textarea id="meta_description" name="meta_description" type="text" class="form-control" rows='4'>{{ $meta_description }}</textarea>
                                        </div>
                                        <hr>

                                        <h4>Promotion Videos Update(Paste Only Embed Src Links Only) :</h4>

                                        <div class="form-group">
                                            <label for="video1" class="col-form-label mb-1">Video Embed Link 1</label>
                                            <input id="video1" name="video1" type="text" class="form-control" rows='4' value="{{ $video1 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="video2" class="col-form-label mb-1">Video Embed Link 2</label>
                                            <input id="video2" name="video2" type="text" class="form-control" rows='4' value="{{ $video2 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="video3" class="col-form-label mb-1">Video Embed Link 3</label>
                                            <input id="video3" name="video2" type="text" class="form-control" rows='4' value="{{ $video3 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="video4" class="col-form-label mb-1">Video Embed Link 4</label>
                                            <input id="video4" name="video4" type="text" class="form-control" rows='4' value="{{ $video4 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="video5" class="col-form-label mb-1">Video Embed Link 5</label>
                                            <input id="video5" name="video4" type="text" class="form-control" rows='4' value="{{ $video5 }}">
                                        </div>


                                        <button id="payment-button" type="submit" class="btn btn-md btn-info">
                                            <i class="fa fa-save fa-lg"></i>&nbsp;
                                            <span id="">Update</span>
                                        </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div> <!-- .card -->

                </div><!--/.col-->
            </div><!--/.row-->
        </div>

    @endsection
