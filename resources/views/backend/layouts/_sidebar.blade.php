<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
    </ul>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
{{--    <a href="index3.html" class="brand-link">--}}
{{--        <img src="../../backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--        <span class="brand-text font-weight-light">AdminLTE 3</span>--}}
{{--    </a>--}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
{{--            <div class="image">--}}
{{--                <img src="../backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
            <div class="info">
                <a href="#" class="d-block">Asadbek Samandarov</a>
            </div>
        </div>
{{--            <!-- SidebarSearch Form -->--}}
{{--            <div class="form-inline">--}}
{{--                <div class="input-group" data-widget="sidebar-search">--}}
{{--                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <button class="btn btn-sidebar">--}}
{{--                            <i class="fas fa-search fa-fw"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="../admin/dashboard" class='nav-link
                    @if(Request::segment(2) == 'dashboard')active @endif'>
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                <li class="nav-item">
                    <a href="../admin/home" class="nav-link
                     @if(Request::segment(2) == 'home')active @endif">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../admin/about" class="nav-link
                     @if(Request::segment(2) == 'about')active @endif">
                        <i class="nav-icon fa fa-info-circle"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../admin/resume" class="nav-link
                     @if(Request::segment(2) == 'resume')active @endif">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Resume
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../admin/portfolio" class="nav-link
                     @if(Request::segment(2) == 'portfolio')active @endif">
                        <i class="nav-icon fa fa-briefcase"></i>
                        <p>
                            Portfolio
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../admin/services" class="nav-link
                     @if(Request::segment(2) == 'services')active @endif">
                        <i class="nav-icon fa fa-wrench"></i>
                        <p>
                            Services
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../admin/contact" class="nav-link
                     @if(Request::segment(2) == 'contact')active @endif">
                        <i class="nav-icon fa fa-address-book"></i>
                        <p>
                            Contect
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('logout') }}" class="nav-link
                          @if(Request::segment(2) == 'logout')active @endif">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
