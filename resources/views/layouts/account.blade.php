<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ohayviec</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/style.css')}}"  type="text/css" /> <!--css-->
	@yield('css')
</head>
<body>
	<!-- header -->
	@include('layouts._header')
<!-- end header -->
	@yield('content')

</body>
	<script src="{{asset('js/main.js')}}"></script>
	@stack('scripts')
</html>


