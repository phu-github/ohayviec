@extends('layouts.master')
@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- fontawesome  -->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap4-datetimepicker/css/bootstrap-datetimepicker.min.css')}}"  type="text/css" /><!--datime picker-->
	<link rel="stylesheet" href="{{asset('plugins/fancybox-master/css/jquery.fancybox.min.css')}}"  type="text/css" /><!--fancybox-master-->

{{-- 	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> <!--nextstep bootstrap-wizard-template-->
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/css/form-elements.css')}}"  type="text/css" /><!--nextstep bootstrap-wizard-template-->
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/css/style.css')}}"  type="text/css" /><!--nextstep bootstrap-wizard-template-->
 --}}
@endsection
@section('content')
<!-- big modal -->
	
	<!--end big modal -->
	<!-- tabs -->
	<div class="container-custom"> {{-- container-custom --}}
        <div class="row">
	        <div class="col-sm-12">
	            <!--      Wizard container        -->
	            <div class="wizard-container">
	                <div class="card wizard-card" data-color="green" id="wizard">
	                    {{-- <form action="" method=""> --}}
	                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
							<div class="wizard-navigation">
								<ul>
		                            <li class="ajax-tab"><a href="#find-job" data-toggle="tab">Tìm việc</a></li>
		                            <li class="ajax-tab"><a href="#find-candidate" data-toggle="tab">Tìm ứng viên</a></li>
		                            <li class="ajax-tab"><a href="#post-job" data-toggle="tab">Đăng tin</a></li>
		                            <li class="ajax-tab"><a href="#post-profile" data-toggle="tab">Tạo hồ sơ</a></li>
		                        </ul>
							</div>

	                        <div class="tab-content">
								
	                            	
	                        </div>
	                    {{-- </form> --}}
	                </div>
	            </div> <!-- wizard container -->
	        </div> 
    	</div> <!-- row -->
	</div> <!--  big container -->
	<!-- end tabs -->
@endsection
@push('scripts')
	<script src="{{asset('js/timviec.js')}}"></script>
@endpush


