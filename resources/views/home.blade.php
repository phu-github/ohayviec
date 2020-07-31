@extends('layouts.master')
@section('css')
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
	<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap4-datetimepicker/css/bootstrap-datetimepicker.min.css')}}"  type="text/css" />
	<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('plugins/fancybox-master/css/jquery.fancybox.min.css')}}"  type="text/css" /><!--fancybox-master-->

	<!--===============================================================================================-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/font-awesome/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/css/form-elements.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/css/style.css')}}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">
  	<!--===============================================================================================-->
  	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  	<!--===============================================================================================-->
  	
  	<link href="{{asset('plugins/jsrender/samples.css')}}"  rel="stylesheet" />
@endsection
@section('content')
<!-- big modal -->
	
<!--end big modal -->
	<!-- tabs -->
	<div class="content-main">
		<div class="container-custom"> {{-- container-custom --}}
	        <div class="row">
		        <div class="col-sm-12">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizard">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
								<div class="wizard-navigation">
									<ul>
			                            <li class="ajax-tab" data="1"><a href="#find-job" data-toggle="tab">Tìm việc</a></li>
			                            <li class="ajax-tab" data="2"><a href="#find-candidate" data-toggle="tab">Tìm ứng viên</a></li>
			                            <li class="ajax-tab" data="3"><a href="#post-job" data-toggle="tab">Đăng tin</a></li>
			                            <li class="ajax-tab" data="4"><a href="#post-profile" data-toggle="tab">Tạo hồ sơ</a></li>
			                        </ul>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="find-job">
										 @include("customer.merge")
										 <div id="result"></div>   <!--Modal của customer được tao bở Jsrender -->
												
		                            </div>
		                            <div class="tab-pane" id="find-candidate">
		                                 @include("candidate.merge")
		                                 <div id="resultCan"></div>   <!--Modal của candidate được tao bở Jsrender -->
		                            </div>
		                            <div class="tab-pane" id="post-job">
		                         		 @include("recruiter.post")
		                            </div>
		                            <div class="tab-pane" id="post-profile" >
		                         		@include("candidate.profile")
		                            </div>
		                        </div>
		                </div>
		            </div> <!-- wizard container -->
		        </div> 
	    	</div> <!-- row -->
		</div> <!--  big container -->
	</div>
	<!-- end tabs -->
@endsection
@push('scripts')
		<script src="{{asset('plugins/jsrender/jsrender.min.js')}}"></script>
		<!--===============================================================================================-->
		<script src="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/js/jquery.backstretch.min.js')}}"></script> 
		<script src="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/js/scripts.js')}}"></script>
		<!--===============================================================================================-->  		
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
  		<!--===============================================================================================-->
		<script src="{{asset('js/timviec.js')}}"></script>
		<!--===============================================================================================-->
		

@endpush


