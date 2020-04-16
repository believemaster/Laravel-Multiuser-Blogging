@extends('admin.layout.master')
    @section('content')

    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery(".myselect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops No Results Found!",
                width: "100%"
            });
            jQuery("textarea.ckeditor").ckeditor({
                filebrowserImageBrowseUrl: '{{ url("/public") }}/laravel-filemanager?type-Images',
                filebrowserImageBrowseUrl: '{{ url("/public") }}/laravel-filemanager/upload?type-Images&_token={{ csrf_token() }}',
                filebrowserBrowseUrl: '{{ url("/public") }}/laravel-filemanager?type-Files',
                filebrowserBrowseUrl: '{{ url("/public") }}/laravel-filemanager/upload?type-Files&_token={{ csrf_token() }}',
            });
        });
    </script>
    <div class="content-wrapper">
        <section class="content-header">
        <h1>
            {{ $page_name }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Posts</li>
            <li class="active">Create</li>
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

                            <form method="post" action="{{ url('/admin/post/store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="control-label mb-1">Title</label>
                                    <input id="title" name="title" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="category" name="category" class="control-label mb-1">Category</label>
                                    <select id="category" name="category_id" class="form-control select2" style="width: 100%;" data-placeholder="Select Cateogry" multiple="multiple">
                                        @foreach($categories as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="short_description" name="short_description" class="control-label mb-1">Short Description</label>
                                    <textarea id="short_description" name="short_description" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="description" name="description" class="control-label mb-1">Description</label>
                                    <textarea id="description" name="description" class="form-control ckeditor" rows="8" cols="12"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image" name="image" class="control-label mb-1">Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
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

    @endsection
