<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.dashboard.partial.head')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{asset('DashboardMC')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
            </div>
            
            <!-- Navbar -->
            @include('admin.dashboard.partial.navbar')
            <!-- /.navbar -->
            
            <!-- Main Sidebar Container -->
            @include('admin.dashboard.partial.sidebar')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">@yield('title')</h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                    </div><!-- /.container-fluid -->
                </div>
                @yield('content')
                <!-- /.content-header -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2021 <a href="{{asset('DashboardMC')}}">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.1.0
                </div>
            </footer>
            
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('admin.dashboard.partial.scripts')
    </body>
</html>

<div></div>