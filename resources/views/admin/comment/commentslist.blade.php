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
                    </div>
                    <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Comment</th>
                    <th>Post Id</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $i=>$row)
                    <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->comment }}</td>
                    <td>{{ $row->post_id }}</td>
                    <td>
                    
                    <form method="post" action="{{ url('/admin/comment/status/'.$row->id) }}" style="display:inline">
                        @method('PUT')
                        @csrf
                        @if($row->status === 1)
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"></i> Unpublish</button>
                        @else
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Publish</button>
                        @endif
                    </form>
                    
                    </td>
                    <td>{{ $row->email }}</td>
                    <td>
                        @permission(['Post Add', 'All'])
                        <a href="{{ url('/admin/comment/reply/'.$row->post_id) }}" class="btn btn-info"><i class="fa fa-reply"></i></a>
                        @endpermission
                        @permission(['Post Add', 'All'])
                        <form method="post" action="{{ url('/admin/comment/delete/'.$row->id) }}" style="display:inline">
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
