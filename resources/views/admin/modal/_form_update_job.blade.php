<form  method="post" id="form_update_job" enctype='multipart/form-data'>
    @csrf
    <div class="form-row">
      <div class="form-group col-sm-12 col-md-6 ">
          <label class="">Công việc</label>
          <input type="text" class="form-control" name="name" value="{{$name}}" >
      </div>
      <div class="form-group col-sm-12 col-md-6">
          <label class="">Địa chỉ làm việc</label>
          <input  type="text" class="form-control"  name="address" value="{{$address}}" >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-12 col-md-3">
           <label class="">Số lượng</label>
          <input type="text" class="form-control "  name="number_of_candidate" value="{{$number_of_candidate}}">
      </div>
      <div class="form-group col-sm-12 col-md-3">
          <label class="">Mức lương</label>
          <input type="text" class="form-control "  name="salary" value="{{$salary}}" >
      </div>
      <div class="form-group col-sm-12 col-md-6">
          <label class="">Thời gian</label>
         <input type="text" class="form-control "  name="working_date" value="{{$working_date}}">   
      </div>
    </div>
    <div class="form-group">
        <label class="">Mô tả công việc</label>
        <textarea class="form-control " rows="3"  name="description" value="" >{{$description}}</textarea>
    </div>
    <div class="form-group">
        <label class="">Yêu cầu</label>
        <textarea class="form-control " rows="3"  name="note" value="" >{{$note}}</textarea>
    </div>
    <div class="form-group">
        <label class="">Liên hệ</label>
        <textarea class="form-control " rows="3"  name="contact" value="">{{$contact}}</textarea>
    </div>
    <div class="form-group d-flex flex-column">
      <label for="avatar">Hình đại điện</label>
      <input type="file" id="avatar" name="avatar">
    </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
    <button type="button" class="btn btn-success updateJob">Xác nhận</button>
  </div>
</form>