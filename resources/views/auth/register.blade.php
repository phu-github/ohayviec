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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" />
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('css/account.css')}}" />

@endsection
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					<span class="login100-form-title p-b-43">
						Đăng kí Ohayviec
					</span>	
					<div class="who">
						<div class="radio icheck-success">
		                    <input type="radio" id="success1" name="priority" value="2" />
		                    <label for="success1">Nhà tuyển dụng</label>
		                </div>
		                <div class="radio icheck-success">
		                    <input type="radio" checked id="success2" name="priority" value="3"/>
		                    <label for="success2">Người tìm việc</label>
		                </div>
					</div>
					<div class="wrap-input100 validate-input" >
						<input id="name100" class="input100" type="text" name="name" value="{{$inputs['name']}}">
						<span class="focus-input100"></span>
						<span class="label-input100">Nhập tên</span>
					</div>
					
					<div class="wrap-input100 validate-input" >
						<input id="email100" class="input100" type="email" name="email" value='{{$inputs['email']}}'>
						<span class="focus-input100"></span>
						<span class="label-input100">email</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input id="pass100" class="input100" type="password" name="pass" value="{{$inputs['pass']}}">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật khẩu</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input id="pass_cf100" class="input100" type="password" name="pass_confirmation" value="{{$inputs['pass_confirmation']}}">
						<span class="focus-input100"></span>
						<span class="label-input100">Nhập lại mật khẩu</span>
					</div>
					<div class="container-login100-form-btn">

					@if (!empty($msgErrors))
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($msgErrors as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif


						<button class="login100-form-btn">
							Đăng kí
						</button>
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
	<script src="{{asset('js/main.js')}}"></script>

@endpush


