<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{ asset('storage/others') }}/{{ $shareData['admin_logo'] }}" alt=""></a> <!-- Replace Logo with own -->
                <a class="navbar-brand hidden" href="{{ url('/admin') }}"><img src="{{ asset('storage/others') }}/{{ $shareData['admin_logo'] }}" alt=""></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <h3 class="menu-title">BM Blogs Control Pannel</h3>
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
                    @permission(['System Settings', 'All'])
                    <li>
                        <a href="{{ url('/admin/settings') }}"> <i class="menu-icon fa fa-cog"></i>Settings </a>
                    </li>
                    @endpermission

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
