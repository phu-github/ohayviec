<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ohayviec</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}"  type="text/css" /><!--bootstrap 4 -->
	<!--  material-bootstrap-wizard-master  Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	{{-- material-bootstrap-wizard-master --}}
	<link rel="stylesheet" href="{{asset('plugins/material-bootstrap-wizard-master/assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/material-bootstrap-wizard-master/assets/css/material-bootstrap-wizard.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.css')}}" /> {{-- icheck-bootstrap --}}
	 <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/AdminLTE_302/plugins/fontawesome-free/css/all.min.css')}}">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	@yield('css')
	<link rel="stylesheet" href="{{asset('css/style.css')}}"  type="text/css" /> <!--css-->
</head>
<body>
	

<!-- header -->
@include('layouts._header')
<!-- end header -->
	
	
<!-- banner -->
@include('layouts._banner')
<!-- end banner -->

<!-- tabs -->
@yield('content')
<!-- end tabs -->

<!-- Thực đơn tiện ích -->
@include('layouts._utilities')
<!-- Thực đơn tiện ích -->

<!-- Đối tác -->
@include('layouts._partner')
<!-- Đối tác -->

{{-- footer --}}
@include('layouts._footer')
{{-- end Footer --}}

{{-- back to top --}}
@include('layouts._backtotop')
{{-- end Footer --}}
</body>
 
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script> <!--bootstrap 4 -->
	<script src="{{asset('plugins/material-bootstrap-wizard-master/assets/js/jquery-2.2.4.min.js')}}"></script> {{-- material-bootstrap-wizard-master js --}}
	<script src="{{asset('plugins/material-bootstrap-wizard-master/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('plugins/material-bootstrap-wizard-master/assets/js/jquery.bootstrap.js')}}"></script>
	<script src="{{asset('plugins/material-bootstrap-wizard-master/assets/js/material-bootstrap-wizard.js')}}"></script>
	<script src="{{asset('plugins/material-bootstrap-wizard-master/assets/js/jquery.validate.min.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>  <!-- popper  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>   <!-- Moment  -->
	<script src="{{asset('plugins/bootstrap4-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>  <!-- datetimepicker  -->
	<script src="{{asset('plugins/fancybox-master/js/jquery.fancybox.min.js')}}"></script> <!-- Fancybox-master  -->
	<script src="{{asset('js/main.js')}}"></script>
	@stack('scripts')
</html>


