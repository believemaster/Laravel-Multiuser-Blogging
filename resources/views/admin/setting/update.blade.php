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
