<div class="card-customer card-warning">
  <!-- <div class="card-header">
    <h3 class="card-title">Tiêu chí tìm kiếm</h3>
  </div> -->
  <!-- /.card-header -->
  <div class="card-body">
    <form method="post" id="search_candidate_form">
      @csrf
      <div class="row">
        <div class="col-sm-6">
          <!-- text input -->
            <div class="form-group">
              <label><i class="far fa-bell"></i>Chọn quận/huyện</label>
              <select class="form-control" name="addressCan">
                <option value="">Tất cả</option> 
                  @foreach ($cities as $cities)
                    <option value="{{$cities->id}}" @if($inputs['city'] == $cities->id){{"selected"}}@endif > {{$cities->name}}</option>  
                 @endforeach 
              </select>
            </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>Ngày rãnh?</label>
            <input id="mutiselectdate_candidate" class="flatpickr flatpickr-input form-control active" type="text" placeholder="Chọn lịch.." data-id="enableFunction" readonly="readonly" name="dateCan" value="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label class="col-form-label" for="inputWarning"><i class="fab fa-airbnb"></i>Giới tính?</label>
            <input type="text" class="form-control is-warning" name='genderCan' value="" placeholder="nam...">
          </div>
        </div>
        <div class="col-sm-6">
                <div class="form-group">
          <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>Độ tuổi?</label>
          <input type="text" class="form-control is-warning" name="oldCan" value="" placeholder="23...">
        </div>
        </div>
      </div>
      <input type="submit" class="btn btn-custom" id="btn_search_candidate_form" value="Tìm kiếm">
    </form>
  </div>
  <!-- /.card-body -->
</div>
