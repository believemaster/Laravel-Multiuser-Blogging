@extends('admin.layout.master')
    @section('content')

    <script>
        jQuery(document).ready(function(){
            jQuery(".myselect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops No Results Found!",
                width: "100%"
            });
            jQuery("textarea.my-editor").ckeditor({
                filebrowserImageBrowseUrl: '{{ url("/public") }}/laravel-filemanager?type-Images',
                filebrowserImageBrowseUrl: '{{ url("/public") }}/laravel-filemanager/upload?type-Images&_token={{ csrf_token() }}',
                filebrowserBrowseUrl: '{{ url("/public") }}/laravel-filemanager?type-Files',
                filebrowserBrowseUrl: '{{ url("/public") }}/laravel-filemanager/upload?type-Files&_token={{ csrf_token() }}',
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

                            <form method="post" action="{{ url('/admin/comment/reply') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="comment" name="comment" class="control-label mb-1">Add Comment</label>
                                    <textarea id="comment" name="comment" class="form-control" rows="8" cols="12"></textarea>
                                    <input type="hidden" name="post_id" value="{{ $id }}"/>
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
