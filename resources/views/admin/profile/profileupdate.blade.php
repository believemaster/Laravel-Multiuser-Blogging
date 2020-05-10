@extends('admin.layout.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>
                    {{ Auth::user()->name }} Profile
                </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-info">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
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
                            @if($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endif

                            <form method="post" action="{{ url('/admin/profile/update') }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="id" class="control-label mb-1">Id</label>
                                    <input id="id" name="id" type="number" class="form-control" disabled value="{{ $userData->id }}">
                                </div>

                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" value="{{ $userData->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label mb-1">Email</label>
                                    <input id="email" name="email" disabled type="email" class="form-control" value="{{ $userData->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="type" class="control-label mb-1">Type</label>
                                    @if($userData->type == 1)
                                    <input id="type" name="type" class="form-control" disabled type="text" value="Super Admin">
                                    @elseif($userData->type == 2)
                                    <input id="type" name="type" class="form-control" disabled type="text" value="Author">
                                    @elsef=if($userData->type == 3)
                                    <input id="type" name="type" class="form-control" disabled type="text" value="Editor">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="image" class="control-label mb-1">Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    <small>**Please upload image in square resolution. (recommended: 90x90)</small>
                                </div>

                                <button id="" type="submit" class="btn btn-md btn-info">
                                    <i class="fa fa-save fa-lg"></i>&nbsp;
                                    <span id="">Save</span>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right hidden-xs">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2020-2022 <a href="https://www.believemaster.github.io" class="text-info">Believe Master</a>.</strong> All rights
    reserved.
  </footer>

@endsection
