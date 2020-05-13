<div class="modal-content" style="display: none;" id="modalcan{{$item->id}}">
	<div class="row justify-content-sm-center justify-content-md-center"> <h3>THÔNG TIN CHI TIẾT</h3></div>
	<div class="row">
	    <div class="col-12 col-md-3 edit-modal">
		  	<h4>TÊN</h4> 
		  	<span>{{$item->name}}</span>
		  	<h4>TUỔI</h4>
		  	<span>{{$item->old}}</span>
		  	<h4>GIỚI TÍNH</h4>
		  	<span>{{$item->gender}}</span>
		  	<h4>NƠI Ở</h4>
		  	<span>{{$item->address}}</span>
  	    </div>


		<div class="col-12 col-md-4 edit-modal">
		  	<div class="col-6 col-md-12">
		  		<h4>NGÀY RÃNH</h4>
				<span>{{$item->free_time}}</span>
	  		</div>
		  	<div class="col-6 col-md-12">
				<h4>KINH NGHIỆM</h4>
				<span>{{$item->experiences}}</span>
		  	</div>
  	    </div>	

	  	<div class="col-12 col-md-5 edit-modal">
	  	<h4> LIÊN HỆ</h4>
	  	<p>-{{$item->contact}}</p>
		</div>
	</div>
</div>