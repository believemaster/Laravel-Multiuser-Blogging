@extends('admin.layout.master')

@section('content')


    <link rel="stylesheet" href="{{ asset('/admin/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{ $page_name }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Table</a></li>
                        <li class="active">Data table</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <div class="col-md-12">
                <div class="card">

                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                    <div class="card-header">
                        <strong class="card-title">{{ $page_name }}</strong>
                        @permission(['Post Add', 'All'])
                        <a href="{{ url('/admin/post/create') }}" class="btn btn-primary pull-right">Create</a>
                        @endpermission
                    </div>
                    <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Total Views</th>
                    <th>Status</th>
                    <th>Hot News</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $i=>$row)
                    <tr>
                    <td>{{ ++$i }}</td>
                    <td>
                        @if(file_exists(public_path('/storage/post/').$row->thumb_image))
                        <img src="{{ asset('/storage/post') }}/{{ $row->thumb_image }}" class="img img-responsive" />
                        @endif
                    </td>

                    <td>{{ $row->title }}</td>
                    <td>{{ $row->creator->name }}</td>
                    <td>{{ $row->view_count }}</td>

                    <td>
                        <form method="post" action="{{ url('/admin/post/status/'.$row->id) }}" style="display:inline">
                        @method('PUT')
                        @csrf
                        @if($row->status === 1)
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"></i> Unpublish</button>
                        @else
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Publish</button>
                        @endif
                        </form>
                    </td>

                    <td>
                        <form method="post" action="{{ url('/admin/post/hot/news/'.$row->id) }}" style="display:inline">
                        @method('PUT')
                        @csrf
                        @if($row->hot_news === 1)
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"></i> No</button>
                        @else
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Yes</button>
                        @endif
                        </form>
                    </td>

                    <td>
                        @permission(['Post Add', 'All'])
                        <a href="{{ url('/admin/comment/'.$row->id) }}" class="btn btn-info"><i class="fa fa-comments-o"></i></a>
                        @endpermission
                        @permission(['Post Add', 'All'])
                        <a href="{{ url('/admin/post/edit/'.$row->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        @endpermission
                        @permission(['Post Add', 'All'])
                        <form method="post" action="{{ url('/admin/post/delete/'.$row->id) }}" style="display:inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                        @endpermission
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                    </div>
                </div>
            </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    {{-- Data Table JS --}}

    <script src="{{ asset('/admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/datatables-init.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/datatables-init.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

    {{-- Data Table JS Ends --}}

@endsection
