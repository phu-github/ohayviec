<!--Modal Thêm -->
  <div class="modal fade" id="modal_add_job" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thêm tin vào đây nhé!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route("addJob")}}" method="POST" class="f1" id="form_add_job" enctype='multipart/form-data'>
          @csrf
        <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-sm-12 col-md-6 ">
                    <label class="lable-post-job">Công việc</label>
                    <input type="text" class="form-control" placeholder="..." name="name" value="">
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <label class="lable-post-job">Địa chỉ làm việc</label>
                    <input type="text" class="form-control" placeholder="..." name="address" value="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                     <label class="lable-post-job">Mức lương</label>
                    <input type="text" class="form-control" placeholder="300k/h,..." name="salary" value="">
                </div>
                <div class="form-group col-sm-12 col-md-6">
                     <label class="">Số lượng</label>
                    <input type="text" class="form-control disableInput"  name="number_of_candidate" value="" >
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <label class="lable-post-job">Thời gian</label>
                    <input id="mutiselectdate_post_job" class="flatpickr flatpickr-input active form-control" type="text" placeholder="Chọn lịch.." data-id="enableFunction" readonly="readonly" name="working_date" value="">
                </div>
              </div>
              <div class="form-group">
                  <label class="lable-post-job">Mô tả công việc</label>
                  <textarea class="form-control" rows="3" placeholder="- Làm vệ sinh toàn bộ thang máy..." name="description" value=""></textarea>
              </div>
              <div class="form-group">
                  <label class="lable-post-job">Yêu cầu</label>
                  <textarea class="form-control" rows="3" placeholder="-Quần đùi, áo dài tay,..." name="note" value=""></textarea>
              </div>
              <div class="form-group">
                  <label class="lable-post-job">Liên hệ</label>
                  <textarea class="form-control" rows="3" placeholder="-sdt: 0366212191" name="contact" value="#"></textarea>
              </div>
              <div class="form-group d-flex flex-column">
                <label for="avatar">Hình đại điện</label>
                <input type="file" id="avatar" name="avatar" >
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-success" id="addJob" >Xác nhận</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><!-- end modal them -->
  <!-- Modal Sửa -->
  <div class="modal fade" id="modal_job" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="title_job">SỬA VIỆC LÀM</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body " id='htmlJob'>
      
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
          <button type="button" class="btn btn-success editJob">Xác nhận</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div> <!--End modal Sửa -->

  <!--Modal xóa -->
  <div class="modal fade" id="modal_delete_job">
    <div class="modal-dialog">
      <div class="modal-content bg-danger" style="width: 60%">
        <div class="modal-header">
          <h4 class="modal-title">XÓA JOBS</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Bạn chắc chắn ?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Hủy</button>
          <button id="delete_job" type="button" class="btn btn-outline-light">Xóa</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


