@extends('admin.layout.master')
    @section('content')

    <link rel="stylesheet" href="{{ asset('/admin/assets/scss/style.css') }}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Permission Create Page</strong>
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

                            <form method="post" action="{{ url('/admin/author/store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Name</label>
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label for="email" name="email" class="control-label mb-1">Email</label>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <label for="password" name="password" class="control-label mb-1">Password</label>
                                    <input id="password" type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="roles" name="roles[]" class="control-label mb-1">Roles</label>
                                    <select id="roles" name="roles[]" class="form-control myselect" data-placeholder="Select Role" multiple="multiple">
                                        @foreach($roles as $roles)
                                            <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-save fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Save</span>
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
