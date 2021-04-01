<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{url('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('adminlte/dist/css/adminlte.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('adminlte/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
    <style>
    p {
        margin-top: -10px;
        margin-bottom: 5px;
        /* margin-right: 150px; */
        margin-left: 0px;
      }
    p {
        padding-top: 0px;
        /* padding-right: 30px; */
        /* padding-bottom: 50px; */
        /* padding-left: 80px; */
      }
      #p1 {
        padding-top: 23px;
        /* padding-right: 30px; */
        /* padding-bottom: 50px; */
        /* padding-left: 80px; */
      }
    </style>
</head>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="row col-12">
        <div class="col-6">
            <div class="row mb-0">
                {{-- <p class="mx-1 mb-0 p-0" style="color:#2E73B6;font-size:30px;">BIMBEL ZIGMA</p> --}}
                <h2 class="mb-0 pt-2" style="color:#2E73B6;">BIMBEL ZIGMA</h2>
                {{-- <p class="float-sm-left" style="font-size:14px;">Lembaga Tes Masuk Perguruan Tinggi</p> --}}
            </div>
            <div class="row mt-0">
                <p style="font-size:15px;">Tryout Masuk Perguruan Tinggi</p>
            </div>
        </div>
        <div class="col-6 mb-0">
            <div id="p1" class="float-sm-right" style="font-size:16px;">Versi 2.0.1</div>
        </div>
    </div>


    
    {{-- @include('layouts/main-header') --}}
</nav>
{{-- <body class="hold-transition sidebar-mini layout-fixed"> --}}
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        {{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            @include('layouts/main-header')
        </nav> --}}
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                @include('layouts/sidebar')
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield ('content')
        </div>
        <!-- /.content-wrapper -->
        {{-- <footer class="main-footer">
            @include('layouts/footer')
        </footer> --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{url('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{url('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{url('adminlte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{url('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{url('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{url('adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{url('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{url('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{url('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('adminlte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('adminlte/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('adminlte/dist/js/demo.js') }}"></script>
</body>

</html>