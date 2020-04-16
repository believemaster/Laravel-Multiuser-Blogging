<!-- <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{ asset('storage/others') }}/{{ $shareData['admin_logo'] }}" alt=""></a> 
                <a class="navbar-brand hidden" href="{{ url('/admin') }}"><img src="{{ asset('storage/others') }}/{{ $shareData['admin_logo'] }}" alt=""></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <a href="{{ url('/') }}">
                <h3 class="menu-title text-white"><i class="fa fa-globe fa-2x"></i> &nbsp;&nbsp; Back To Website</h3>
                </a>
                    <li>
                        <a href="{{ url('/admin/dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    @permission(['Permission Update', 'All', 'Permission'])
                    <li>
                        <a href="{{ url('/admin/permission') }}"> <i class="menu-icon fa fa-lock"></i>Permissions </a>
                    </li>
                    @endpermission
                    @permission(['Permission Update', 'All'])
                    <li>
                        <a href="{{ url('/admin/roles') }}"> <i class="menu-icon fa fa-user"></i>Roles </a>
                    </li>
                    @endpermission
                    @permission(['Permission Update', 'All'])
                    <li>
                        <a href="{{ url('/admin/author') }}"> <i class="menu-icon fa fa-users"></i>Authors </a>
                    </li>
                    @endpermission
                    @permission(['Category List', 'All'])
                    <li>
                        <a href="{{ url('/admin/category') }}"> <i class="menu-icon fa fa-list"></i>Categories </a>
                    </li>
                    @endpermission
                    @permission(['Post List', 'All'])
                    <li>
                        <a href="{{ url('/admin/post') }}"> <i class="menu-icon fa fa-book"></i>Posts </a>
                    </li>
                    @endpermission
                    @permission(['Post List', 'All'])
                    <li>
                        <a href="{{ url('/admin/comments') }}"> <i class="menu-icon fa fa-comments"></i>Comments </a>
                    </li>
                    @endpermission
                    @permission(['System Settings', 'All'])
                    <li>
                        <a href="{{ url('/admin/settings') }}"> <i class="menu-icon fa fa-cog"></i>Settings </a>
                    </li>
                    @endpermission

                </ul>
            </div>
    </aside>


<aside class="main-sidebar"> -->


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel">
    <a class="navbar-brand pull-left" href="{{ url('/admin') }}">
      <i class="fa fa-globe fa-2x"></i> Back To Website
    </a>
    </div> -->

    <!-- search form (Optional) -->
    <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
            </span>
        </div>
    </form> -->
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <!-- 
        @permission(['Post List', 'All'])
        <li>
            <a href="{{ url('/admin/comments') }}"> <i class="menu-icon fa fa-comments"></i><span> Comments</span> </a>
        </li>
        @endpermission
        @permission(['System Settings', 'All'])
        <li>
            <a href="{{ url('/admin/settings') }}"> <i class="menu-icon fa fa-cog"></i><span> Settings</span> </a>
        </li>
        @endpermission
    </ul> -->
    <!-- /.sidebar-menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HOWDY! {{ Auth::user()->name }}</li>
        <li>
          <a href="{{ url('/') }}">
            <i class="fa fa-globe"></i>
            <span>Back To Website</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        @permission(['Permission Update', 'All'])
        <li>
          <a href="{{ url('/admin/permission') }}">
            <i class="fa fa-lock"></i>
            <span>Permissions</span>
          </a>
        </li>
        @endpermission
        @permission(['Permission Update', 'All'])
        <li>
          <a href="{{ url('/admin/roles') }}">
            <i class="fa fa-user"></i>
            <span>Roles</span>
          </a>
        </li>
        @endpermission
        @permission(['Permission Update', 'All'])
        <li>
          <a href="{{ url('/admin/author') }}">
            <i class="fa fa-users"></i>
            <span>Authors</span>
          </a>
        </li>
        @endpermission
        @permission(['Category List', 'All'])
        <li>
          <a href="{{ url('/admin/category') }}">
            <i class="fa fa-list"></i>
            <span>Categories</span>
          </a>
        </li>
        @endpermission
        @permission(['Post List', 'All'])
        <li>
          <a href="{{ url('/admin/post') }}">
            <i class="fa fa-book"></i>
            <span>Posts</span>
          </a>
        </li>
        @endpermission
        @permission(['Comment Approve', 'All'])
        <li>
          <a href="{{ url('/admin/comments') }}">
            <i class="fa fa-comments"></i>
            <span>Comments</span>
          </a>
        </li>
        @endpermission

        @permission(['Mail Box', 'All'])
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mail Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{ url('/admin/newsletters/list') }}">
                <i class="fa fa-address-book"></i>
                <span>Subscribes</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/admin/contacts/list') }}">
                <i class="fa fa-phone"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/admin/issues/list') }}">
                <i class="fa fa-bug"></i>
                <span>Issues</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/admin/complaints/list') }}">
                <i class="fa fa-lightbulb-o"></i>
                <span>Complaints</span>
              </a>
            </li>
          </ul>
        </li>
        @endpermission

        @permission(['System Settings', 'All'])
        <li>
          <a href="{{ url('/admin/settings') }}">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
          </a>
        </li>
        @endpermission
        <li class="header">Videos</li>
        <li>
          <a href="#">
            <i class="fa fa-play"></i>
            <span>Feature Coming Soon</span>
          </a>
        </li>
        <li class="header">Podcast</li>
        <li>
          <a href="#">
            <i class="fa fa-microphone"></i>
            <span>Feature Coming Soon</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Theme Changer -->
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->