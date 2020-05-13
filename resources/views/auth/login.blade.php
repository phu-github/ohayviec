@extends('layouts.account')
@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- fontawesome  -->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap4-datetimepicker/css/bootstrap-datetimepicker.min.css')}}"  type="text/css" /><!--datime picker-->
	<link rel="stylesheet" href="{{asset('plugins/fancybox-master/css/jquery.fancybox.min.css')}}"  type="text/css" /><!--fancybox-master-->
@endsection
@section('content')
		<div class="container">
		<div class="row justify-content-md-center">
		    <div class="col col-md-5 bg-sucess"  >
		      	<h4>Đăng nhập </h4>
		      	<form method="POST" class = 'card p-3 bg-light' action="#">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập email" name="email" value="">
					    <small id="emailHelp" class="form-text text-muted">*Đừng chia sẻ email dưới bất kì tình huống nào.</small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Nhập mật khẩu"  name="pass" value="">
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button class="btn btn-primary" name="btn_submit" >Đăng Nhập</button>  
				</form>
		    </div>
  		</div>
	</div>
@endsection
@push('scripts')
	{{-- <script src="{{asset('js/timviec.js')}}"></script> --}}
@endpush


