@extends('layouts.master')
@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  <!-- fontawesome  -->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap4-datetimepicker/css/bootstrap-datetimepicker.min.css')}}"  type="text/css" /><!--datime picker-->
	<link rel="stylesheet" href="{{asset('plugins/fancybox-master/css/jquery.fancybox.min.css')}}"  type="text/css" /><!--fancybox-master-->

	{{-- bootzra --}}
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/font-awesome/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/css/form-elements.css')}}" />
	<link rel="stylesheet" href="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/css/style.css')}}" />
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
		                    <form action="" method="">
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
		                            </div>
		                            <div class="tab-pane" id="find-candidate">
		                                 @include("candidate.merge")
		                            </div>
		                            <div class="tab-pane" id="post-job">
		                         		@include("recruiter.post")
		                            </div>
		                            <div class="tab-pane" id="post-profile">
		                         		@include("candidate.profile");
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div> 
	    	</div> <!-- row -->
		</div> <!--  big container -->
	</div>
	<!-- end tabs -->
@endsection
@push('scripts')
		<script src="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/js/jquery.backstretch.min.js')}}"></script> 
		<script src="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/js/retina-1.1.0.min.js')}}"></script>
		<script src="{{asset('plugins/bootzard-bootstrap-wizard-template/assets/js/scripts.js')}}"></script>
	<script src="{{asset('js/timviec.js')}}"></script>
@endpush


