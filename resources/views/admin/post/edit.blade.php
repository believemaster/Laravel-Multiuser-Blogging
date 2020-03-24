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

                            <form method="post" action="{{ route('post-update', $post) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="control-label mb-1">Title</label>
                                    <input id="title" name="title" type="text" class="form-control" value="{{ $post->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="category" name="category" class="control-label mb-1">Category</label>
                                    <select id="category" name="category_id" selected="{{ $post->category_id }}" class="form-control myselect" data-placeholder="Select Cateogry" multiple="multiple">
                                        @foreach($categories as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="short_description" name="short_description" class="control-label mb-1">Short Description</label>
                                    <textarea id="short_description" name="short_description" class="form-control">{{ $post->short_description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description" name="description" class="control-label mb-1">Description</label>
                                    <textarea id="description" name="description" class="form-control my-editor" rows="8" cols="12">"{{ $post->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image" name="image" class="control-label mb-1">Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
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
