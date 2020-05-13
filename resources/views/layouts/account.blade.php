<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ohayviec</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}"  type="text/css" /><!--bootstrap 4 -->
	<!--  material-bootstrap-wizard-master  Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	{{-- material-bootstrap-wizard-master --}}
	<link rel="stylesheet" href="{{asset('plugins/material-bootstrap-wizard-master/assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/material-bootstrap-wizard-master/assets/css/material-bootstrap-wizard.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.css')}}" /> {{-- icheck-bootstrap --}}
	@yield('css')
	<link rel="stylesheet" href="{{asset('css/style.css')}}"  type="text/css" /> <!--css-->
</head>
<body>
	

<!-- header -->
@include('layouts._header')
<!-- end header -->

<!-- tabs -->
@yield('content')
<!-- end tabs -->

{{-- footer --}}
@include('layouts._footer')
{{-- end Footer --}}

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- jQuery -->
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script> <!--bootstrap 4 -->
</html>


