@extends('admin.layout.master')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="col-md-12">
          <div class="card card-info card-ouline">
            <div class="card-header with-border">
              <h3 class="card-title">{{ $page_name }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body no-padding">
              <div class="mailcard-read-info">
                <h5>From: {{ $data->email }}
                  <span class="mailcard-read-time pull-right">{{ $data->created_at->format('d/m/Y, H:i') }}</span></h5>
              </div>
              <!-- /.mailcard-read-info -->
              <div class="mailcard-read-message">
                <h3>Articles Having Complaints:</h3> {{ $data->articleTitle }}
                <h3>Articles Category:</h3> {{ $data->articleCategory }}
                <h3>Complaint/Correction:</h3>
                <p>{{ $data->Complaint_Correction }}</p>
              </div>
              <!-- /.mailcard-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            <form method="post" action="{{ url('/admin/complaints/delete/'.$data->id) }}" style="display:inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
            </form>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /. card -->
        </div>
        <!-- /.col -->

    </section>
<div>

@endsection