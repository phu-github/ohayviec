
<script id="theTmpl" type="text/x-jsrender">
	<div class="modal-content" style="display: none;" id="modal@{{:id}}">	
<!-- 		<div class="row justify-content-sm-center justify-content-md-center"> <h3>THÔNG TIN CHI TIẾT</h3></div> -->
		<div class="row d-flex justify-content-between">
		    <div class="col-md-7 col-lg-7">
		    	<div class="row modal_block">
		    		<div class="col-4 col-lg-2">
		    			<img src="http://ohayviec1.com/images/lazada.png" alt="Người đăng" width="auto" height="100">
		    		</div>
		    		<div class="col-8 col-lg-10 d-flex flex-column justify-content-around" style="height: 100px">
		    			<div class="row"><h3 id="modal_name_job">@{{:name_job}}</h3></div>
		    			<div class="row flex-column">
		    				<small>Bí danh(Người đăng tin)</small>
		    				<small>Mã việc : A@{{:id}}</small>
		    			</div>	
		    		</div>
		    	</div>
		    	<div class="row modal_block">
		    		<div class="col-md-12 modal_list_content"><h3>Chi tiết việc</h3></div>
		    		<!-- <div class="row"> -->
					    <div class="col-6  col-sm-6 col-md-4 d-flex flex-row" >
							<i class="fa fa-money modal_icon"></i>
				            <div class="d-flex flex-column">
				              <span class="modal_title_text">Lương</span>
				              <span class="modal_title_minitext"><small>@{{:salary}}</small></span>
				            </div>		
					    </div>
					    <div class="col-6  col-sm-6 col-md-4 d-flex flex-row" >
							<i class="fa fa-map-marker modal_icon"></i>
				            <div class="d-flex flex-column">
				              <span class="modal_title_text">Địa chỉ</span>
				              <span class="modal_title_minitext"><small>@{{:address}}</small></span>
				            </div>		
					    </div>
					    <div class="col-6 col-sm-6 col-md-4 d-flex flex-row" >
							<i class="fa fa-user modal_icon"></i>
				            <div class="d-flex flex-column">
				              <span class="modal_title_text">Số lượng</span>
				              <span class="modal_title_minitext"><small>@{{:number_of_candidate}}</small></span>
				            </div>		
					    </div>
					    <div class="col-6  col-sm-6 col-md-4 d-flex flex-row" >
							<i class="fa fa-clock-o modal_icon"></i>
				            <div class="d-flex flex-column">
				              <span class="modal_title_text">Ngày đi làm</span>
				              <span class="modal_title_minitext"><small>@{{:working_date}}</small></span>
				            </div>		
					    </div>
					    <div class="col-12 col-sm-8 col-md-4 d-flex flex-row" >
							<i class="fa fa-money modal_icon"></i>
				            <div class="d-flex flex-column">
				              <span class="modal_title_text">Việc làm khác</span>
				              <span class="modal_title_minitext"><small>75 việc làm khác của lazada.</small></span>
				            </div>		
					    </div>
		    	</div>

		    	<div class="row d-flex flex-column modal_block">
		    		<div class="col-md-12 modal_list_content"><h3>Mô tả việc làm</h3></div>
			    	<div class="col">
						 <p>@{{:description}}</p>
		    		</div>
		    	</div>
	    		<div class="row d-flex flex-column modal_block">
		    		<div class="col-md-12 modal_list_content"><h3>Yêu cầu</h3></div>
					<div class="col">
		    			<p>@{{:note}}</p>
		    		</div>
		    	</div>


		    </div>
		    <div class="col-md-4 col-lg-4 modal_right">
		    	<div class="row modal_list_content d-flex flex-column modal_block">
		    		<div class="col-md-12 modal_list_content"><h3>Nhà tuyển dụng</h3></div>
		    		<div class="col">
		    			<p><i class="fa fa-phone modal_right_icon_1"></i>@{{:contact_phone}}</p>
			    		<p><i class="fa fa-envelope-o modal_right_icon_2"></i>@{{:contact_email}}</p>
			    		<p><i class="fa fa-facebook modal_right_icon_3"></i>@{{:contact_fb}}</p>
		    		</div>
					<nav id="btn_show_contact" class="d-flex justify-content-center">
					  <ul>
					    <li>
					      xem đầy đủ
					      <span></span><span></span><span></span><span></span>
					    </li>
					  </ul>
					</nav>
		    	</div>
		    	<div class="row">
		    		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.286450112455!2d106.80088321474463!3d10.865803860508894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752745aaaaaaab%3A0x1445c7dda5808d58!2zS2h1IER1IGzhu4tjaCBWxINuIGjDs2EgU3Xhu5FpIFRpw6puIHF14bqtbiA5LCBUUC5IQ00!5e0!3m2!1svi!2s!4v1594714535997!5m2!1svi!2s" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		    	</div>
		    </div>
		</div>
	</div>										
</script> 
<script type="text/javascript">
var data ;
var countPageJob=0;
	$.post("home/search-job",$( "#search_job_form" ).serialize(),function(data){
		// console.log(data);
		var template = $.templates("#theTmpl");
		var htmlOutput = template.render(data);
		$("#result").html(htmlOutput);
	});

$(document).on('click','.btn_view_more_job',function(event){
	event.preventDefault();
	var limit = 5;
	countPageJob=countPageJob+1;
	$.ajax({
      	url: 'home/search-job',
      	type: "post",
      	data: {
      		viewMoreJob:countPageJob, 
      		_token : $("input[name='_token']").val(),
      		keyword : $("input[name='keyword']").val(),
      		city : $("select[name='city']").val(),
      		salary : $("input[name='salary']").val(),
      		working_date : $("input[name='working_date']").val(),
      	},
       	success: function(data){ // What to do if we succeed
       		// console.log(data);
       		var template = $.templates("#theTmpl");
			var htmlOutput = template.render(data);
			$("#result").append(htmlOutput);
		}
	});
});

</script>





