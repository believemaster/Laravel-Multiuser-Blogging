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
                        <a href="{{ url('/admin/permission/create') }}" class="btn btn-primary pull-right">Create</a>
                        @endpermission
                    </div>
                    <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $i=>$row)
                    <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->display_name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>
                        @permission(['Post Add', 'All'])
                        <a href="{{ url('/admin/permission/edit/'.$row->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        @endpermission
                        @permission(['Post Add', 'All'])
                        <form method="post" action="{{ url('/admin/permission/delete/'.$row->id) }}" style="display:inline">
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
    <script src="{{ asset('/admin/assets/js/lib/data-table/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/lib/data-table/dataTables.bootstrap4.min.js') }}"></script>
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
