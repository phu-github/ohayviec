<!-- Modal thêm -->
<div class="modal fade" id="modal_add_can" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">THÊM HỒ SƠ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{route("addCan")}}" method="post" class="f1" id="form_view_can" enctype='multipart/form-data'>
          @csrf
      <div class="modal-body">
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-4 ">
                  <label class="lable-post-job">Tên</label>
                  <input type="text"  class="f1-name form-control" name="name" value="">
              </div>
              <div class="form-group col-sm-12 col-md-4">
                  <label class="lable-post-job">Nơi ở</label>
                  <input type="text"  class="f1-address form-control"  name="address" value="">
              </div>
              <div class="form-group col-sm-12 col-md-2">
                  <label class="lable-post-job">Tuổi</label>
                  <input type="text"  class="f1-address form-control" name="old" value="">
              </div>
              <div class="form-group col-sm-12 col-md-2">
                  <label class="lable-post-job">Giới tính</label>
                  <select class="f1-address form-control" name="gender" >
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-6">
                <div class="form-group col-sm-12 col-md-6">
                  <label class="lable-post-job">Lịch rãnh</label>
                  <input type="text"  class=" form-control" name="free_time" value="">
                </div>
              </div>
              <div class="form-group col-sm-12 col-md-6 d-flex flex-column">
                <label for="avatar">Hình đại điện</label>
                <input type="file" id="avatar" name="avatar" >
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-6">
                  <label class="lable-post-job">Kinh nghiệm</label>
                  <textarea class="form-control" rows="3" name="experiences" value=""></textarea>
              </div>
              <div class="form-group col-sm-12 col-md-6">
                  <label class="lable-post-job"> Thông tin liên hệ</label>
                  <textarea class="form-control" rows="3" name="contact" value=""></textarea>
              </div>
            </div> 
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
        <button type="submit" class="btn btn-success">Xác nhận</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- Modal Sửa -->
<div class="modal fade" id="modal_edit_can" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SỬA HỒ SƠ</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" class="f1" id="form_edit_profile">
          @csrf
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-4 ">
                  <label class="lable-post-job">Tên</label>
                  <input type="text" class="f1-name form-control" name="name" value="">
              </div>
              <div class="form-group col-sm-12 col-md-4">
                  <label class="lable-post-job">Nơi ở</label>
                  <input type="text"  class="f1-address form-control"  name="address" value="">
              </div>
              <div class="form-group col-sm-12 col-md-2">
                  <label class="lable-post-job">Tuổi</label>
                  <input type="text"  class="f1-address form-control" name="old" value="">
              </div>
              <div class="form-group col-sm-12 col-md-2">
                  <label class="lable-post-job">Giới tính</label>
                  <select class="f1-address form-control" name="gender" >
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-6">
                <div class="form-group col-sm-12 col-md-6">
                  <label class="lable-post-job">Lịch rãnh</label>
                  <input id="mutiselectdate_edit_proflie" class="flatpickr flatpickr-input active form-control" type="text"  data-id="enableFunction" readonly="readonly" name="free_time" value="">
                </div>
              </div>
              <div class="form-group col-sm-12 col-md-6">
              <label for="customFile" class="lable-post-job">Hình cá nhân </label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input form-control" id="customFile" name="picture" value="">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-6">
                  <label class="lable-post-job">Kinh nghiệm</label>
                  <textarea class="form-control" rows="3" name="experiences" value=""></textarea>
              </div>
              <div class="form-group col-sm-12 col-md-6">
                  <label class="lable-post-job"> Thông tin liên hệ</label>
                  <textarea class="form-control" rows="3" name="contact" value=""></textarea>
              </div>
            </div>
          </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
        <button type="button" class="btn btn-success">Xác nhận</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
