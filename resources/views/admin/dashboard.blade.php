@extends('admin.layout.master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ Auth::user()->name }} Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header text-white"
                  style="background: url('https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg') center center;">
              <h3 class="widget-user-username text-right">{{ Auth::user()->name }}</h3>
              @if(Auth::user()->type == 1)
              <h5 class="widget-user-desc text-right">Super Admin</h5>
              @elseif(Auth::user()->type == 2)
              <h5 class="widget-user-desc text-right">Author</h5>
              @elsef=if(Auth::user()->type == 3)
              <h5 class="widget-user-desc text-right">Editor</h5>
              @endif
            </div>
            <div class="widget-user-image">
            <img class="img-resonsive" src="{{ asset('/storage/others') }}/{{ Auth::user()->email }}/{{ Auth::user()->img }}" alt="User Avatar">
            </div>
            <div class="card-footer bg-gray">
            @php
            /*
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">POSTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">LIKES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">COMMENTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            */
            @endphp
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $bloggers_count }}<sup style="font-size: 20px">+</sup></h3>

              <p>Bloggers</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $editors_count }}<sup style="font-size: 20px">+</sup></h3>

              <p>Editors</p>
            </div>
            <div class="icon">
              <i class="ion ion-edit"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>{{ $authors_count }}</h3>

              <p>Authors</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        @permission(['Permission Update', 'All'])
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $views_count }}</h3>

              <p>Total Views</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-email-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Subscribers</span>
              <span class="info-box-number">{{ $subscribes_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fa fa-comments"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Comments</span>
              <span class="info-box-number">{{ $comments_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-book-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Posts</span>
              <span class="info-box-number">{{ $posts_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-secondary"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Users</span>
              <span class="info-box-number">{{ $users_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @endpermission

    @php 
    /*
    <!-- Analytics -->
        <table id="example1" class="table table-bordered table-striped dt-responsive" width="100%">
        <thead>
            <tr>
            <th>#</th>
            <th>Title</th>
            <th>Views</th>
            <th>Date</th>
            <th>Total Visitors</th>
            </tr>
        </thead>
        <tbody>
        @foreach($analyticsData as $i=>$data)
            <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data['pageTitle'] }}</td>
            <td>{{ $data['date'] }}</td>
            <td>{{ $data['pageViews'] }}</td>
            <td>{{ $data['visitors'] }}</td>
            </tr>
          @endforeach
        </tbody>
        </table>   
        <!-- analytics -->
        */
        @endphp

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2022 <a href="https://believemaster.com">Believe Master</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0
    </div>
  </footer>

@endsection
