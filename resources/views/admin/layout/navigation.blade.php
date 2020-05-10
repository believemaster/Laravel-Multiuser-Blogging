<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('storage/others') }}/{{ $shareData['admin_logo'] }}" alt="BM News" class="elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><i class="fa fa-newspaper-o"></i></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(Auth::user()->img)
            <img src="{{ asset('/storage/others') }}/{{ Auth::user()->email }}/{{ Auth::user()->img }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
          @else
            <img src="{{ asset('/storage/others/user.png') }}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
          @endif
        </div>
        <div class="info">
          <a href="{{ url('/admin/dashboard') }}" class="d-block">HOWDY! {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @permission(['Permission Update', 'All'])
          <li class="nav-item">
            <a href="{{ url('/admin/permission') }}" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Permissions
              </p>
            </a>
          </li>
          @endpermission
          @permission(['Permission Update', 'All'])
          <li class="nav-item">
            <a href="{{ url('/admin/roles') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Roles
              </p>
            </a>
          </li>
          @endpermission
          @permission(['Permission Update', 'All'])
          <li class="nav-item">
            <a href="{{ url('/admin/author') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Authors
              </p>
            </a>
          </li>
          @endpermission
          @permission(['Category List', 'All'])
          <li class="nav-item">
            <a href="{{ url('/admin/category') }}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          @endpermission
          @permission(['Post List', 'All'])
          <li class="nav-item">
            <a href="{{ url('/admin/post') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Posts
              </p>
            </a>
          </li>
          @endpermission
          @permission(['Comment Approve', 'All'])
          <li class="nav-item">
            <a href="{{ url('/admin/comments') }}" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Comments
              </p>
            </a>
          </li>
          @endpermission
          @permission(['Mail Box', 'All'])
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mailbox
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/newsletters/list') }}" class="nav-link">
                  <i class="far fa-address-book nav-icon"></i>
                  <p>Subscribes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/contacts/list') }}" class="nav-link">
                  <i class="fa fa-phone nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/issues/list') }}" class="nav-link">
                  <i class="fa fa-bug nav-icon"></i>
                  <p>Issues</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/complaints/list') }}" class="nav-link">
                  <i class="far fa-lightbulb nav-icon"></i>
                  <p>Complaints</p>
                </a>
              </li>
            </ul>
          </li>
          @endpermission
          @permission(['System Settings', 'All'])
          <li class="nav-item">
            <a href="{{ url('/admin/settings') }}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          @endpermission
          <li class="nav-header">Videos</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-play nav-icon"></i>
              <p>Feature Coming Soon</p>
            </a>
          </li>
          <li class="nav-header">Podcast</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-microphone nav-icon"></i>
              <p>Feature Coming Soon</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

