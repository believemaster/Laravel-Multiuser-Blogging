@extends('admin.layout.master')
    @section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>
                        {{ $page_name }}
                    </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-info">Home</a></li>
                            <li class="breadcrumb-item active">Permissions Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-info card-outline">
                    <div class="card-header with-border">
                        <strong class="card-title">{{ $page_name }}</strong>
                    </div>
                    <div class="card-body">
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

                            <form method="post" action="{{ route('permission-update', $permission) }}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" value="{{ $permission->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="display_name" name="name" class="control-label mb-1">Display Name</label>
                                    <input id="display_name" name="display_name" type="text" class="form-control" value="{{ $permission->display_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="description" name="name" class="control-label mb-1">Description</label>
                                    <textarea id="description" name="description" class="form-control">{{ $permission->description }}</textarea>
                                </div>

                                <button id="" type="submit" class="btn btn-md btn-info">
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
