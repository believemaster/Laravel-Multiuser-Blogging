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
                            <li class="breadcrumb-item">Author</li>
                            <li class="breadcrumb-item active">Edit</li>
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

                            <form method="post" action="{{ route('author-update', $author) }}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" value="{{ $author->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email" name="email" class="control-label mb-1">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" value="{{ $author->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="password" name="password" class="control-label mb-1">Passoword</label>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Add New Password">
                                </div>

                                <div class="form-group">
                                    <label for="roles" name="roles[]" class="control-label mb-1">Roles <small>(Hold The Ctrl Button To Select Multiple)</small></label>
                                    <select id="roles" name="roles[]" class="form-control select2" style="width: 100%;" data-placeholder="Select Role" multiple="multiple">
                                        @foreach($roles as $roles)
                                            <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button id="payment-button" type="submit" class="btn btn-md btn-info">
                                    <i class="fa fa-save fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Update</span>
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
