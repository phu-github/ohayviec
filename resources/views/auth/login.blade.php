@extends('layouts.account')
@section('css')
<!--===============================================================================================-->	
<link rel="stylesheet" href="{{asset('plugins/Login_v18/images/icons/favicon.ico')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/vendor/bootstrap/css/bootstrap.min.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/vendor/animate/animate.css')}}" />

<!--===============================================================================================-->	
<link rel="stylesheet" href="{{asset('plugins/Login_v18/vendor/css-hamburgers/hamburgers.min.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/vendor/animsition/css/animsition.min.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/vendor/select2/select2.min.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/vendor/daterangepicker/daterangepicker.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('plugins/Login_v18/css/util.css')}}" />
<link rel="stylesheet" href="{{asset('plugins/Login_v18/css/main.css')}}" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('css/account.css')}}" />

@endsection
@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form">
					 {{ csrf_field() }}
					<span class="login100-form-title p-b-43">
						Đăng nhập Ohayviec
					</span>
					@isset ($error)
					   <span style="color:red;"> {{$error}} </span>
					@endisset
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email100" class="input100 has-val" type="email" name="email" value='{{$email}}'>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="pass100" class="input100 has-val" type="password" name="password" value='{{$pass}}'>
						<span class="focus-input100"></span>
						<span class="label-input100">Mật khẩu</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Nhớ mật khẩu
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Quên mật khẩu?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							hoặc đăng nhập bằng
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('https://kenh14cdn.com/thumb_w/640/2018/10/25/photo1540463446052-15404634460521888042687.jpg');">

				</div>
			</div>
		</div>
	</div>
		
@endsection
@push('scripts')
	
	<!--===============================================================================================-->
	<script src="{{asset('plugins/Login_v18/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/Login_v18/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('plugins/Login_v18/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('plugins/Login_v18/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('plugins/Login_v18/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('plugins/Login_v18/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('plugins/Login_v18/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('plugins/Login_v18/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('plugins/Login_v18/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('plugins/Login_v18/js/main.js')}}"></script>
	<!--===============================================================================================-->
	{{-- <script src="{{asset('js/main.js')}}"></script> --}}
@endpush


