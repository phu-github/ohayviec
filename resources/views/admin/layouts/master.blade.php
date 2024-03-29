<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin-Ohayviec</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE_302/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE_302/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE_302/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- JsRender -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <link href="https://www.jsviews.com/samples/samples.css" rel="stylesheet" /> --}}
    @yield('css')
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
    <!-- JSRender -->
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
    <script src="https://www.jsviews.com/download/jsrender.min.js"></script>
    @stack('scripts')
</html>
