<form  method="post" id="form_view_job">
    @csrf
    <div class="form-row">
      <div class="form-group col-sm-12 col-md-6 ">
          <label class="">Công việc</label>
          <input type="text" class="form-control" disabled="true" name="name" value="{{$name}}" >
      </div>
      <div class="form-group col-sm-12 col-md-6">
          <label class="">Địa chỉ làm việc</label>
          <input  type="text" class="form-control "  disabled="true" name="address" value="{{$address}}" >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-12 col-md-3">
           <label class="">Số lượng</label>
          <input type="text" class="form-control" disabled="true"  name="number_of_candidate" value="{{$number_of_candidate}}">
      </div>
      <div class="form-group col-sm-12 col-md-3">
          <label class="">Mức lương</label>
          <input type="text" class="form-control" disabled="true" name="salary" value="{{$salary}}" >
      </div>
      <div class="form-group col-sm-12 col-md-6">
          <label class="">Thời gian</label>
         <input type="text" class="form-control" disabled="true" name="working_date" value="{{$working_date}}" >
          
      </div>
    </div>
    <div class="form-group">
        <label class="">Mô tả công việc</label>
        <textarea class="form-control" rows="3" disabled="true" name="description" value="" >{{$description}}</textarea>
    </div>
    <div class="form-group">
        <label class="">Yêu cầu</label>
        <textarea class="form-control" rows="3" disabled="true" name="note" value="" >{{$note}}</textarea>
    </div>
    <div class="form-group">
        <label class="">Liên hệ</label>
        <textarea class="form-control" rows="3" disabled="true" name="contact" value="">{{$contact}}</textarea>
    </div>
    <div class="form-group d-flex flex-column">
      <label >Hình đại điện</label>
      <img src="/avatar/{{$image}}" alt="Hình" width="150" height="100">
  </div>
</form>