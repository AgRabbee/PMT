
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset('adminLTE/dist/img/AdminLTELogo.png')}}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Project Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Dashboard</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/developers')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Developers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/servers')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Servers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/projects')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{url('/projects_info')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Projects Server Info</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
