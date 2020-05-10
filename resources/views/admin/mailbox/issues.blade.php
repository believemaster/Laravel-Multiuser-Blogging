@extends('admin.layout.master')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
        <div class="container-fluid">
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        <div class="col-md-12">
          <div class="card card-info card-outline">
            <div class="card-header with-border">
              <h3 class="card-title">{{ $page_name }}</h3>

              <div class="card-tools float-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body no-padding">
              <div class="table-responsive mailcard-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <thead>
                  <td>S.No.</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Issue</td>
                  <td>Time</td>
                  </thead>
                  @foreach($data as $i=>$item)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td class="mailcard-name"><a href="{{ url('/admin/issues/details') }}/{{ $item->id }}">{{ $item->name }}</a></td>
                    <td class="mailcard-name">{{ $item->email }}</td>
                    <td class="mailcard-subject"><b>{{ str_limit($item->issue, 100, '...') }}</b>
                    </td>
                    <td class="mailcard-attachment"></td>
                    <td class="mailcard-date">{{ $item->created_at->format('d/m/Y, H:i') }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-card-messages -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /. card -->
        </div>
        <!-- /.col -->
        </div>
        </section>
    </div>

@endsection