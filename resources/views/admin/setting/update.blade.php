@extends('admin.layout.master')
    @section('content')

    <link rel="stylesheet" href="{{ asset('/admin/assets/scss/style.css') }}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">{{ $page_name }}</strong>
                </div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
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

                            <form method="post" action="{{ url('/admin/settings/update') }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="system_name" name="system_name" class="control-label mb-1">System Name</label>
                                    <input id="system_name" value="{{ $system_name }}" type="text" class="form-control">
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

                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
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
