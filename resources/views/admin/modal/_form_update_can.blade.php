<form method="post" class="f1" id="form_update_can">
@csrf
  <div class="form-row">
    <div class="form-group col-sm-12 col-md-4 ">
        <label class="lable-post-job">Tên</label>
        <input type="text" class="f1-name form-control" name="name" value="{{$name}}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label class="lable-post-job">Nơi ở</label>
        <input type="text"  class="f1-address form-control"  name="address" value="{{$address}}">
    </div>
    <div class="form-group col-sm-12 col-md-2">
        <label class="lable-post-job">Tuổi</label>
        <input type="text"  class="f1-address form-control" name="old" value="{{$old}}">
    </div>
    <div class="form-group col-sm-12 col-md-2">
        <label class="lable-post-job">Giới tính</label>
        <input class="f1-address form-control" name="gender" value="{{$gender}}">

    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-sm-12 col-md-6">
      <div class="form-group col-sm-12 col-md-6">
        <label class="lable-post-job">Lịch rãnh</label>
        <input id="mutiselectdate_edit_proflie" class="flatpickr flatpickr-input active form-control" type="text"  data-id="enableFunction" readonly="readonly" name="free_time" value="{{$free_time}}">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-sm-12 col-md-6">
        <label class="lable-post-job">Kinh nghiệm</label>
        <textarea class="form-control" rows="3" name="experiences" value="">{{$experiences}}</textarea>
    </div>
    <div class="form-group col-sm-12 col-md-6">
        <label class="lable-post-job"> Thông tin liên hệ</label>
        <textarea class="form-control" rows="3" name="contact" value="">{{$contact}}</textarea>
    </div>
  </div>
  <div class="form-group col-sm-12 col-md-6">
    <img src="{{$picture}}" width="150" width="150">
    <div class="custom-file">
      <label for="avatar">Hình đại điện</label>
      <input type="file" id="avatar" name="avatar">
    </div>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
    <button type="button" class="btn btn-success updateCan">Xác nhận</button>
  </div>
</form>