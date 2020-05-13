@extends('layouts.account')
@section('content')
	<div class="container">
		<div class="row justify-content-md-center">
		    <div class="col col-md-5 bg-sucess"  >
		    	<h2>Đăng kí tài khoản</h2>
		      		<form  method="post" class = 'card p-3 bg-light' action="#">
		      			<div class="form-row">
						    <div class="form-group col-md-6">
						      <input type="search" id="gsearch" class="form-control" placeholder="Họ" name="ho" value="">
						    </div>
						    <div class="form-group col-md-6">
						      <input type="search" id="gsearch" class="form-control" placeholder="Tên" name="ten" value="">
						    </div>
					  	</div>
						<div class="form-row">
						    <div class="form-group col-md-12">
						      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập email" name="email" value="">
						    </div>
						    <div class="form-group col-md-12">
						      <input type="password" class="form-control" id="inputPassword4" placeholder="Nhập mật khẩu" name="pass" minlength="3" value="">
						    </div>
						    <div class="form-group col-md-12">
						      <input type="password" class="form-control" id="inputPassword4" placeholder="Nhập lại mật khẩu"  name="re_pass" value="">
						    </div>
					    </div>
					    <div class="form-row">
							<div class="form-group col-md-6">
						    	<select class="form-control form-control-lg" id="exampleFormControlSelect1 " name="location"  >
					      		  <option value="">Tất cả</option>
					      		   
				    			</select>
					    	</div>
						    <div class="form-group col-md-6">
						    	<input type="search" id="gsearch"  class="form-control"  placeholder="Số điện thoại di động" minlength="8" name="phone" value="">
					    	</div>
					    </div>
					    
						<div class="form-row">
							<div class="custom-control custom-radio custom-control-inline">
								  <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="nam" checked="checked">
								  <label class="custom-control-label" for="customRadioInline1">Nam</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline">
								  <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="nu">
								  <label class="custom-control-label" for="customRadioInline2">Nữ</label>
								</div>
					    </div>
					
						  <button type="submit" class="btn btn-primary" name="btn_register">Đăng kí</button> 

						</form>
		    </div>
  		</div>
	 
	</div>
@endsection
@push('scripts')
	{{-- <script src="{{asset('js/timviec.js')}}"></script> --}}
@endpush


