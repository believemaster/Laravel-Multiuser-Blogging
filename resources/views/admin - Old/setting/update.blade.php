@extends('admin.layout.master')
    @section('content')

<div class="content-wrapper">
    <section class="content-header">
    <h1>
        {{ $page_name }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Settings</li>
    </ol>
    </section>
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <strong class="card-title">{{ $page_name }}</strong>
                </div>
                <div class="box-body">
                    <!-- Credit Card -->
                    <div id="">
                        <div class="box-body">
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

                            <form method="post" action="{{ url('/admin/settings/update') }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="system_name" class="control-label mb-1">System Name</label>
                                    <input id="system_name" name="system_name" value="{{ $system_name }}" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="favicon" name="favicon" class="control-label mb-1">Favicon</label>
                                    <input type="file" id="favicon" name="favicon" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="front_logo" name="front_logo" class="control-label mb-1">Front Logo</label>
                                    <input type="file" id="front_logo" name="front_logo" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="admin_logo" name="admin_logo" class="control-label mb-1">Admin Logo</label>
                                    <input type="file" id="admin_logo" name="admin_logo" class="form-control">
                                </div>

                                <h4>Meta Tags Update :</h4>

                                <div class="form-group">
                                    <label for="meta_title" class="control-label mb-1">Meta Title</label>
                                    <input id="meta_title" name="meta_title" value="{{ $meta_title }}" type="text" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="meta_keyword" class="control-label mb-1">Meta Keyword</label>
                                    <textarea id="meta_keyword" name="meta_keyword" type="text" class="form-control" rows="4">{{ $meta_keyword }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_description" class="control-label mb-1">Meta Description</label>
                                    <textarea id="meta_description" name="meta_description" type="text" class="form-control" rows='4'>{{ $meta_description }}</textarea>
                                </div>

                                <h4>Promotion Videos Update(Paste Only Embed Src Links Only) :</h4>
                                <div class="form-group">
                                    <label for="video1" class="control-label mb-1">Video Embed Link 1</label>
                                    <input id="video1" name="video1" type="text" class="form-control" rows='4' value="{{ $video1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="video2" class="control-label mb-1">Video Embed Link 2</label>
                                    <input id="video2" name="video2" type="text" class="form-control" rows='4' value="{{ $video2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="video3" class="control-label mb-1">Video Embed Link 3</label>
                                    <input id="video3" name="video2" type="text" class="form-control" rows='4' value="{{ $video3 }}">
                                </div>
                                <div class="form-group">
                                    <label for="video4" class="control-label mb-1">Video Embed Link 4</label>
                                    <input id="video4" name="video4" type="text" class="form-control" rows='4' value="{{ $video4 }}">
                                </div>
                                <div class="form-group">
                                    <label for="video5" class="control-label mb-1">Video Embed Link 5</label>
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

    @endsection
