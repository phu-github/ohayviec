
{{-- <div class="modal-content" style="display: none;"> --}}

<div class="modal-content" style="display: none;" id="modal{{$item->id}}">
	<div class="row justify-content-sm-center justify-content-md-center"> <h3>THÔNG TIN CHI TIẾT</h3></div>
	<div class="row">
	    <div class="col-12 col-md-3 edit-modal">
		  	<h4>TÊN VIỆC LÀM</h4> 
		  	<span>{{$item->name_job}}</span>
		  	<h4>ĐỊA ĐIỂM</h4>
		  	<span>{{$item->name_area}}</span>
		  	<h4>SỐ LƯỢNG</h4>
		  	<span>{{$item->number_of_candidate}}</span>
		  	<h4>NGÀY ĐI LÀM</h4>
		  	<span>{{$item->working_date}}</span>
  	    </div>


		<div class="col-12 col-md-4 edit-modal">
		  	<div class="col-6 col-md-12">
		  		<h4>MÔ TẢ</h4>
				<span>{{$item->description}}</span>
	  		</div>
		  	<div class="col-6 col-md-12">
				<h4>YÊU CẦU</h4>
				<span>{{$item->note}}</span>
		  	</div>
  	    </div>	

	  	<div class="col-12 col-md-5 edit-modal">
	  	<h4> LIÊN HỆ</h4>
	  	<p>- Sđt: {{$item->contact_phone}}</p>
	  	<p>- Fb: <a style="color:#1EDB4C;" href="{{$item->contact_fb}}">{{$item->contact_fb}}</a></p>
	  	<p>- Email: {{$item->contact_email}}</p>
		</div>
	</div>
</div>