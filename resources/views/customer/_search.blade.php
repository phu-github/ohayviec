<div class="card-customer card-warning">
<!--   <div class="card-header">
    <h3 class="card-title">Tiêu chí tìm kiếm</h3>
  </div> -->
  <!-- /.card-header -->
  <div class="card-body">
    <form method="post" id="search_job_form"> 
      @csrf
      <div class="row">
        <div class="col-sm-6">
          <!-- text input -->
          <div class="form-group">
            <label><i class="far fa-bell"></i>Nhập công việc</label>
            <input type="text" class="form-control" placeholder="Enter ..." name='keyword' value="{{$inputs['keyword']}}">
          </div>
        </div>

        <div class="col-sm-6">
        	<div class="form-group">
				    <label><i class="far fa-bell"></i>Chọn quận/huyện</label>
				    <select class="form-control" name="city">
    					<option value="">Tất cả</option> 
    					@foreach ($cities as $cities)
    						<option value="{{$cities->id}}" @if($inputs['city'] == $cities->id){{"selected"}}@endif > {{$cities->name}}</option>  
    					@endforeach 
            </select>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
    				<label class="col-form-label" ><i class="fab fa-airbnb"></i>Nhập lương</label>
    				<input type="text" class="form-control " name="salary" value="{{$inputs['salary']}}" placeholder="250k...">
    			</div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
  					<label class="col-form-label"><i class="far fa-bell"></i>Ngày làm</label>
            <input id="mutiselectdate_job" class="flatpickr flatpickr-input form-control active" type="text" placeholder="Chọn lịch.."  name="working_date" value="{{$inputs['date']}}">
  				</div>
        </div>

      </div>
      
      <div class=" form-group f1-buttons">
          <input type="submit" class="btn btn-custom" id="btn_search_job_form"  value="Tìm kiếm">
      </div>
     
    </form>
  </div>
  <!-- /.card-body -->
</div>
