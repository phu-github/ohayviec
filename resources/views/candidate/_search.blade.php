{{-- <form action="" method="get">
	<div class="form-group">
		<div  class="panel panel-primary">
			<div class="panel-heading">Tiêu chí tìm kiếm</div>
			    <div class="panel-body">
			        <div class="row">
				        <div class="col-md-6">
				            <div class="form-group">
								 <select class="form-control form-control-lg" id="exampleFormControlSelect1 " name="addressCan"  >
			                          <option value="">Tất cả</option> 
			                           @foreach ($cities as $cities)
			                           <option value="{{$cities->id}}" @if($inputs['addressCan'] == $cities->id){{"selected"}}@endif > {{$cities->name}}</option>  
			                           @endforeach 
			                    </select>
							</div>
				        </div>
				        <div class="col-md-6">
			            	<div class="form-group label-floating">
								<label class="control-label">Giới tính gì?</label>
								<input type="text" class="form-control" name='keywordCan' value="{{$inputs['keywordCan']}}">
							</div>
			        	</div>
			    	</div>
				    <div class="row">
				        <div class="col-md-6">
				           <div class="form-group label-floating"" >
				              <label class="control-label">Nhập độ tuổi</label>
				              <input type="text" class="form-control" name="oldCan" value="{{$inputs['oldCan']}}">
				           </div>
				        </div>
				        <div class='col-md-6'>
				           <div class="form-group label-floating">
				              <div class="row">
						        <div class='col-sm-12 col-md-12'>
						            <input type='text' class="form-control" id='datetimepicker1' placeholder="Nhập ngày rãnh" value="{{$inputs['dateCan']}}" />
						        </div>
						      </div>
				           </div>
				        </div>
				    </div>
			    <input type="submit" class="btn btn-custom" value="Tìm kiếm">
			 </div>
		</div>
	</div>
</form> --}}


<form action="" method="post">
	<div class="form-group">
		<div  class="panel panel-primary">
			<div class="panel-heading">Tiêu chí tìm kiếm</div>
			    <div class="panel-body">
			        <div class="row">
				        <div class="col-md-6">
				            <div class="form-group">
								 <select class="form-control form-control-lg" id="exampleFormControlSelect1 " name="addressCan"  >
			                          <option value="">Tất cả</option> 
			                    </select>
							</div>
				        </div>
				        <div class="col-md-6">
			            	<div class="form-group label-floating">
								<label class="control-label">Giới tính gì?</label>
								<input type="text" class="form-control" name='keywordCan' value="">
							</div>
			        	</div>
			    	</div>
				    <div class="row">
				        <div class="col-md-6">
				           <div class="form-group label-floating"" >
				              <label class="control-label">Nhập độ tuổi</label>
				              <input type="text" class="form-control" name="oldCan" value="">
				           </div>
				        </div>
				        <div class='col-md-6'>
				           <div class="form-group label-floating">
				              <div class="row">
						        <div class='col-sm-12 col-md-12'>
						            <input type='text' class="form-control" id='datetimepicker1' placeholder="Nhập ngày rãnh" value="" />
						        </div>
						      </div>
				           </div>
				        </div>
				    </div>
			    <input type="submit" class="btn btn-custom" value="Tìm kiếm">
			 </div>
		</div>
	</div>
</form>