<form action="{{route("addCan")}}" method="post" class="f1" id="form_view_can" enctype='multipart/form-data'>
  @csrf
  <div class="modal-body">
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-2 d-flex flex-column">
            <label for="avatar">Hình đại điện</label>
            <img src="{{$picture}}" width="100" height="100">
          </div>
          <div class="form-group col-sm-12 col-md-8 ">
              <label class="lable-post-job">Tên</label>
              <input type="text"  class="f1-name form-control" disabled="true" name="name" value="{{$name}}">
          </div>
          <div class="form-group col-sm-12 col-md-4">
              <label class="lable-post-job">Nơi ở</label>
              <input type="text"  class="f1-address form-control" disabled="true"  name="address" value="{{$address}}">
          </div>
          <div class="form-group col-sm-12 col-md-2">
              <label class="lable-post-job">Tuổi</label>
              <input type="text"  class="f1-address form-control" disabled="true" name="old" value="{{$old}}">
          </div>
          <div class="form-group col-sm-12 col-md-2">
              <label class="lable-post-job">Giới tính</label>
              <input class="f1-address form-control" name="gender" disabled="true" value="{{$gender}}">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-6">
            <div class="form-group col-sm-12 col-md-6">
              <label class="lable-post-job">Lịch rãnh</label>
              <input type="text"  class=" form-control" name="free_time" disabled="true" value="{{$free_time}}">
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-sm-12 col-md-6">
              <label class="lable-post-job">Kinh nghiệm</label>
              <textarea class="form-control" rows="3" name="experiences" disabled="true" value="">{{$experiences}}</textarea>
          </div>
          <div class="form-group col-sm-12 col-md-6">
              <label class="lable-post-job"> Thông tin liên hệ</label>
              <textarea class="form-control" rows="3" name="contact" disabled="true" value="">{{$contact}}</textarea>
          </div>
        </div> 
  </div>
</form>