{{-- <form action="" method="">
	<div class="form-group">
		<div  class="panel panel-primary">
			<div class="panel-heading">Tiêu chí tìm kiếm</div>
			    <div class="panel-body">
			        <div class="row">
			            <div class="col-md-6">
			            	<div class="form-group label-floating">
								<label class="control-label">Nhập công việc</label>
								<input type="text" class="form-control" name='keyword' value="{{$inputs['keyword']}}">
							</div>
			        	</div>
				        <div class="col-md-6">
				            <div class="form-group">
								 <select class="form-control form-control-lg" id="exampleFormControlSelect1 " name="city"  >
			                          <option value="">Tất cả</option> 
			                           @foreach ($cities as $cities)
			                           <option value="{{$cities->id}}" @if($inputs['city'] == $cities->id){{"selected"}}@endif > {{$cities->name}}</option>  
			                           @endforeach 
			                    </select>
							</div>
				        </div>
			    	</div>
				    <div class="row">
				        <div class="col-md-6">
				           <div class="form-group label-floating"" >
				              <label class="control-label">Nhập lương</label>
				              <input type="text" class="form-control" name="salary" value="{{$inputs['salary']}}">
				           </div>
				        </div>
				        <div class='col-md-6'>
				           <div class="form-group label-floating">
				              <div class="row">
						        <div class='col-sm-12 col-md-12'>
						            <input type='text' class="form-control" id='datetimepicker1' value="{{$inputs['date']}}" />
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

<form action="" method="">
	<div class="form-group">
		<div  class="panel panel-primary">
			<div class="panel-heading">Tiêu chí tìm kiếm</div>
			    <div class="panel-body">
			        <div class="row">
			            <div class="col-md-6">
			            	<div class="form-group label-floating">
								<label class="control-label">Nhập công việc</label>
								<input type="text" class="form-control" name='keyword' value="">
							</div>
			        	</div>
				        <div class="col-md-6">
				            <div class="form-group">
								 <select class="form-control form-control-lg" id="exampleFormControlSelect1 " name="city"  >
			                          <option value="">Tất cả</option> 
			                          {{--  @foreach ($cities as $cities)
			                           <option value="{{$cities->id}}" @if($inputs['city'] == $cities->id){{"selected"}}@endif > {{$cities->name}}</option>  
			                           @endforeach  --}}
			                    </select>
							</div>
				        </div>
			    	</div>
				    <div class="row">
				        <div class="col-md-6">
				           <div class="form-group label-floating"" >
				              <label class="control-label">Nhập lương</label>
				              <input type="text" class="form-control" name="salary" value="">
				           </div>
				        </div>
				        <div class='col-md-6'>
				           <div class="form-group label-floating">
				              <div class="row">
						        <div class='col-sm-12 col-md-12'>
						            <input type='text' class="form-control" id='datetimepicker1' value="" />
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