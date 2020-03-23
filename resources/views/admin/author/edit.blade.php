@extends('admin.layout.master')
    @section('content')
    
    <script>
        jQuery(document).ready(function(){
            jQuery(".myselect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops No Results Found!",
                width: "100%"
            });
        });
    </script>

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
                                    <label for="roles" name="roles[]" class="control-label mb-1">Roles</label>
                                    <select id="roles" name="roles[]" class="form-control myselect" data-placeholder="Select Role" multiple="multiple">
                                        @foreach($roles as $roles)
                                            <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                                        @endforeach
                                    </select>
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
