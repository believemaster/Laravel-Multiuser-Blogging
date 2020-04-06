@extends('admin.layout.master')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
    <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $page_name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h5>From: {{ $data->email }}
                  <span class="mailbox-read-time pull-right">{{ $data->created_at->format('d/m/Y, H:i') }}</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-read-message">
                <p>{{ $data->message }}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            <form method="post" action="{{ url('/admin/contacts/delete/'.$data->id) }}" style="display:inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
            </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->

    </section>
<div>

@endsection