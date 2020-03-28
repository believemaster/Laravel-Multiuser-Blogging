@extends('admin.layout.master')

@section('content')


    <div class="content-wrapper">
        <section class="content-header">
        <h1>
            {{ $page_name }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Categories</li>
        </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                    @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <div class="box-header">
                        <h3 class="box-title">{{ $page_name }}</h3>
                        @permission(['Post Add', 'All'])
                        <a href="{{ url('/admin/category/create') }}" class="btn btn-primary pull-right">Create</a>
                        @endpermission
                    </div>
                    <div class="box-body">
                <table id="example1" class="table table-bordered table-striped dt-responsive">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $i=>$row)
                    <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $row->name }}</td>
                    <td>
                        <form method="post" action="{{ url('/admin/category/status/'.$row->id) }}" style="display:inline">
                        @method('PUT')
                        @csrf
                        @if($row->status === 1)
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Published</button>
                        @else
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"></i> Unpublished</button>
                        @endif
                        </form>
                    </td>
                    <td>
                        @permission(['Post Add', 'All'])
                        <a href="{{ url('/admin/category/edit/'.$row->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        @endpermission
                        @permission(['Post Add', 'All'])
                        <form method="post" action="{{ url('/admin/category/delete/'.$row->id) }}" style="display:inline">
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
    </section>
    </div>


    {{-- Data Table JS --}}

    <script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
    </script>

    {{-- Data Table JS Ends --}}

@endsection
