<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  

  <script src="https://www.jsviews.com/download/jsrender.min.js"></script>
  <link href="https://www.jsviews.com/samples/samples.css" rel="stylesheet" />
</head>
<body>


	<div id="result2"></div>
	<script id="theTmplCan" type="text/x-jsrender">
			<div class="container-custom">
		<div class="row">
			<div class="col-sm-2 modal_can_avatar">
			  	<img src="https://i.pinimg.com/564x/56/18/dd/5618dd62cfa53ca62161216c8d9ae028.jpg">
			</div>
			<div class="col-sm-6 modal_can_info">
				<div class="row d-flex flex-column">
					<div id="modal_can_name" class="col">
						<div class="modal_profile-preword"><span>Hello</span></div>
						<h1 class="modal_profile_title"><span>I'm</span> @{{:name}}</h1>
					</div>
					<div class="col">
						<ul class="profile_list">
                            <li class="profile_list_detail">
                                <strong class="profile_list_title">TUỔI</strong>
                                <span class="cont">29</span>
                            </li>
                            <li class="profile_list_detail">
                                <strong class="profile_list_title">GIỚI TÍNH</strong>
                                <span class="cont">24058, Belgium, Brussels, Liutte 27, BE</span>
                            </li>
                            <li class="profile_list_detail">
                                <strong class="profile_list_title"><span id="modal_free_time">Ngày rãnh</span></strong>
                                <span class="cont"><a href="mailto:robertsmith@company.com">robertsmith@company.com</a></span>
                            </li>
                            <li class="profile_list_detail">
                                <strong class="profile_list_title">Trình độ</strong>
                                <span class="cont"><a href="tel:+12562548456">+1 256 254 84 56</a></span>
                            </li>
                            <li class="profile_list_detail">
                                <strong class="profile_list_title">Kinh nghiệm</strong>
                                <span class="cont"><a href="tel:+12562548456">+1 256 254 84 56</a></span>
                            </li>
                          
                        </ul>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-12">
			<div class="row modal_list_content d-flex flex-column modal_block">
		    		<div class="col-md-12 modal_list_content"><h3>Liên hệ</h3></div>
		    		<div class="col">
		    			<p><i class="fa fa-phone modal_can_icon"></i>AAAAAAAAAA</p>
			    		<p><i class="fa fa-envelope-o modal_can_icon"></i>AAAAAAAAAA</p>
			    		<p><i class="fa fa-facebook modal_can_icon"></i>AAAAAAAA</p>
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
		<div class="row">
			<div class="col">
				<h3>Column 1</h3>
			</div>
		</div>
	</div>
	</script>

<script>
	var dataCan = [
	  {
	    "name": "Robert",
	    "nickname": "Bob",
	    "showNickname": true
	  },
	  {
	    "name": "Susan",
	    "nickname": "Sue",
	    "showNickname": false
	  }
	];

	var templatCan = $.templates("#theTmplCan");

	var htmlOutputCan = templatCan.render(dataCan);

	$("#resultCan").html(htmlOutputCan);
	</script>

</body>
</html>
