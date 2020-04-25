@extends('admin.layout.master')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
        @if($message = Session::get('success'))
          <div class="alert alert-success">
              {{ $message }}
          </div>
        @endif
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $page_name }}</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <thead>
                  <td>S.No.</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Complaint</td>
                  <td>Time</td>
                  </thead>
                  @foreach($data as $i=>$item)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td class="mailbox-name"><a href="{{ url('/admin/complaints/details') }}/{{ $item->id }}">{{ $item->name }}</a></td>
                    <td class="mailbox-name">{{ $item->email }}</td>
                    <td class="mailbox-subject"><b>{{ str_limit($item->articleTitle, 100, '...') }}</b>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{ $item->created_at->format('d/m/Y, H:i') }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        </section>
    </div>

@endsection