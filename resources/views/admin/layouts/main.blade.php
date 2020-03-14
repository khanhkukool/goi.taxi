<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#FFE1C4">
    <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/_all-skins.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}"/>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon-96-96') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/admin') }}" class="logo">
            <span class="logo-lg"><b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top menu-user">
            <a class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-bars"></i>
            </a>
            <div class="navbar-custom-menu">
				<span class="hidden-xs">
					<a href="{{ url('/') }}" class="logo">
						<span>Trang chủ</span>
					</a>
					<a href="{{ url('logout') }}" class="logo">
						<span>Đăng xuất</span>
					</a>
				</span>
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-bars"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <a href="{{ url('/') }}" class="logo">
                                <span>Trang chủ</span>
                            </a>
                            <a href="{{ url('logout') }}" class="logo">
                                <span>Đăng xuất</span>
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">LAOYOUT ADMIN</li>

                <li>
                    <a href="{{ url('/admin') }}">
                        <span>Quản lý hotline</span>
                        <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/province') }}">
                        <span>Quản lý tỉnh thành</span>
                        <span class="pull-right-container">
                        <!--<small class="label pull-right bg-green">new</small>-->
                        </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        @yield('content')

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>AdminLTE</strong>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- /wrapper -->


<!-- jQuery 3 -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/js/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
{{--Manifest--}}
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
