<!--Modal Thêm -->
  <div class="modal fade" id="modal_add_user" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Thêm Tài khoản</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{route("addUser")}}" method="POST" class="f1" id="form_add_user" enctype='multipart/form-data'>
          @csrf
        <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-sm-12 col-md-6 ">
                    <label class="lable-post-user">Tên</label>
                    <input type="text" class="form-control" placeholder="..." name="name" value="">
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <label class="lable-post-user">Địa chỉ</label>
                    <input type="text" class="form-control" placeholder="..." name="address" value="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12 col-md-6">
                     <label class="lable-post-user">Email</label>
                    <input type="text" class="form-control" placeholder="300k/h,..." name="email" value="">
                </div>
                <div class="form-group col-sm-12 col-md-6">
                     <label class="">Số điện thoại</label>
                    <input type="text" class="form-control"  name="phone" value="" >
                </div>
                <div class="form-group col-sm-12 col-md-6">
                     <label class="">Giới tính</label>
                    <input type="text" class="form-control"  name="gender" value="" >
                </div>

                <div class="form-group col-sm-12 col-md-6">
                  <label for="exampleFormControlSelect1">Phân quyền</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="priority" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
              </div>
              <div class="form-group d-flex flex-column">
                <label for="avatar">Hình đại điện</label>
                <input type="file" id="avatar" name="avatar" >
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            <button type="submit" class="btn btn-success" id="addUser" >Xác nhận</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><!-- end modal them -->
  <!-- Modal Sửa -->
  <div class="modal fade" id="modal_user" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="title_user">Sửa tài khoản</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body " id='htmlUser'>
      
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
          <button type="button" class="btn btn-success editUser">Xác nhận</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div> <!--End modal Sửa -->

  <!--Modal xóa -->
  <div class="modal fade" id="modal_delete_user">
    <div class="modal-dialog">
      <div class="modal-content bg-danger" style="width: 60%">
        <div class="modal-header">
          <h4 class="modal-title">XÓA TÀI KHOẢN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Bạn chắc chắn ?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Hủy</button>
          <button id="delete_user" type="button" class="btn btn-outline-light">Xóa</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
