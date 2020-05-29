<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin-Ohayviec</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE_302/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE_302/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE_302/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



</head>
<body >
    
<!-- header -->
    @include('admin.layouts._header')
<!-- end header -->

<!-- header -->
    @include('admin.layouts._main_sidebar')
<!-- end header -->

<!-- contents -->
    @yield('content')
<!-- end contnents -->

</body>


    <script src="{{asset('plugins/AdminLTE_302/')}}"></script> 

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('plugins/AdminLTE_302/plugins/jquery/jquery.min.js')}}"></script> 
    <!-- Bootstrap -->
    <script src="{{asset('plugins/AdminLTE_302/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/AdminLTE_302/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script> 
    <!-- AdminLTE App -->
    <script src="{{asset('plugins/AdminLTE_302/dist/js/adminlte.js')}}"></script> 
    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset('plugins/AdminLTE_302/dist/js/demo.js')}}"></script> 
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    
    
    <script src="{{asset('plugins/AdminLTE_302/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script> 
    <script src="{{asset('plugins/AdminLTE_302/plugins/raphael/raphael.min.js')}}"></script> 
    <script src="{{asset('plugins/AdminLTE_302/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script> 
    <script src="{{asset('plugins/AdminLTE_302/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script> 

    <!-- ChartJS -->
    <script src="{{asset('plugins/AdminLTE_302/plugins/chart.js/Chart.min.js')}}"></script> 

    <!-- PAGE SCRIPTS -->
    <script src="{{asset('plugins/AdminLTE_302/dist/js/pages/dashboard2.js')}}"></script> 

</html>
