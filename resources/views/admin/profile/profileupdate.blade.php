@extends('admin.layout.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ Auth::user()->name }}
        <small>Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
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
                                    <input id="email" name="email" type="email" class="form-control" value="{{ $userData->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="type" class="control-label mb-1">Type</label>
                                    <input id="type" name="type" class="form-control" disabled type="text" value="{{ $userData->type }}">
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
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2020-2022 <a href="https://www.believemaster.github.io">Believe Master</a>.</strong> All rights
    reserved.
  </footer>

@endsection
