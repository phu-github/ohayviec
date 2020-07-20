<script id="theTmplCan" type="text/x-jsrender">
<div class="modal-content" style="display: none;" id="modalCan@{{:id}}">
	<div class="row">
		<div class="col-sm-2 modal_can_avatar">
		  	<img src="@{{:picture}}">
		</div>
		<div class="col-sm-6 modal_can_info">
			<div class="row d-flex flex-column">
				<div id="modal_can_name" class="col">
					<div class="modal_profile-preword"><span>Hello</span></div>
					<h1 class="modal_profile_title"><span>I'm</span> <strong>@{{:name}}</strong></h1>
				</div>
				<div class="col">
					<ul class="profile_list">
                        <li class="profile_list_detail">
                            <strong class="profile_list_title">TUỔI</strong>
                            <span class="cont">@{{:old}}</span>
                        </li>
                        <li class="profile_list_detail">
                            <strong class="profile_list_title">GIỚI TÍNH</strong>
                            <span class="cont">@{{:gender}}</span>
                        </li>
                        <li class="profile_list_detail">
                            <strong class="profile_list_title"><span id="modal_free_time">Ngày rãnh</span></strong>
                            <span class="cont"><a href="mailto:robertsmith@company.com">@{{:free_time}}</a></span>
                        </li>
                        <li class="profile_list_detail">
                            <strong class="profile_list_title">Nơi ở</strong>
                            <span class="cont"><a href="tel:+12562548456">@{{:address}}</a></span>
                        </li>
                        <li class="profile_list_detail">
                            <strong class="profile_list_title">Kinh nghiệm</strong>
                            <span class="cont"><a href="tel:+12562548456">@{{:experiences}}</a></span>
                        </li>
                      
                    </ul>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-12 col-sm-4">
		<div class="row modal_list_content d-flex flex-column modal_block">
	    		<div class="col-md-12 modal_list_content"><h3>Liên hệ</h3></div>
	    		<div class="col">
	    			<p><i class="fa fa-phone modal_can_icon"></i>@{{:contact}}</p>
		    		<p><i class="fa fa-envelope-o modal_can_icon"></i>Không có</p>
		    		<p><i class="fa fa-facebook modal_can_icon"></i>Không có</p>
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
		</div>
	</div>
	
</div>									
</script> 

<script type="text/javascript">
	var countPageCan= 0;
	$(document).on('click','.ajax-tab',function(event){
		event.preventDefault();
		var dataAttr = $(this).attr('data');  // lây thuoc tinh của the a
		if(dataAttr==2){
				$.post("home/search-candidate",$( "#search_candidate_form" ).serialize(),function(data){
					console.log(data);
					var template = $.templates("#theTmplCan");
					var htmlOutput = template.render(data);
					$("#resultCan").html(htmlOutput);
				});	

				$(document).on('click','.btn_view_more_candidate',function(event){  // KHI CLICK VÀO NÚT XEM THÊM THÌ SẺ THÊM MODAL TƯƠNG ỨNG
				event.preventDefault();
				var limit = 10;
				var amountcandidate = $('#amount-candidate').text();
				countPageCan=countPageCan+1;
				$.ajax({
			      	url: 'home/search-candidate',
			      	type: "post",
			      	data: {
			      		viewMoreCandidate:countPageCan,
			      		_token : $("input[name='_token']").val(),
			      		addressCan : $("select[name='addressCan']").val(),
			      		dateCan : $("input[name='dateCan']").val(),
			      		oldCan : $("input[name='oldCan']").val(),
			      		genderCan : $("input[name='genderCan']").val(),
			      	},
			       	success: function(data){ 
			       		var template = $.templates("#theTmplCan");
						var htmlOutput = template.render(data);
						$("#resultCan").append(htmlOutput);
					}
				});
			});
		}
	});
</script>