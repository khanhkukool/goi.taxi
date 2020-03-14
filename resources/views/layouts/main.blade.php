<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#FFE1C4">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/css/AdminLTE.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/css/all.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/assets/css/_all-skins.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}"/>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="manifest" href="{{ asset('/assets/js/manifest.json') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icon-96-96') }}">
    <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
    <script type="text/javascript" src="{{ asset('/assets/js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/script.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <span class="logo-lg"><b>Taxi</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top menu-user">
            <a class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <select class="province form-control" id="province-id">
                <option>...</option>
                <option value="locate" style="background: #eef5ec;">Taxi gần đây</option>
                @foreach($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->province }}</option>
                @endforeach
            </select>
            <script type="text/javascript">

                $(document).ready(function () {
                    $("#province-id").change(function (event) {
                        //sử dụng đối tượng this thay thế cho $('#province') để lấy được ra giá trị của option đang được chọn
                        var province_id = $(this).val();

                        $.ajax({
                            url: '{{ url('home/getProvince') }}',
                            method: 'GET',
                            data: {
                                province_id: province_id,
                            },
                            success: function (data) {
                                $('#hotline-province').html(data);
                            }
                        });
                    })
                });
            </script>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="hotline-province">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong></strong>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- /wrapper -->


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
