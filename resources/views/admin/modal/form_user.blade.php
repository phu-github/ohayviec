<form  method="post" class="f1" id="form_user" enctype='multipart/form-data'>
  @csrf
  <div class="form-row">
    <div class="form-group col-sm-12 col-md-6 ">
        <label class="lable-post-user">Tên</label>
        <input type="text" class="form-control disableInput" placeholder="" name="name" value="{{$name}}">
    </div>
    <div class="form-group col-sm-12 col-md-6">
        <label class="lable-post-user">Địa chỉ</label>
        <input type="text" class="form-control disableInput" placeholder="" name="address" value="{{$address}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-sm-12 col-md-6">
         <label class="lable-post-user">Email</label>
        <input type="text" class="form-control disableInput" placeholder="" name="email" value="{{$email}}">
    </div>
    <div class="form-group col-sm-12 col-md-6">
         <label class="">Số điện thoại</label>
        <input type="text" class="form-control disableInput"  name="phone" value="{{$phone}}">
    </div>
    <div class="form-group col-sm-12 col-md-6">
         <label class="">Giới tính</label>
        <input type="text" class="form-control disableInput"  name="gender" value="{{$gender}}">
    </div>
    <div class="form-group col-sm-12 col-md-6">
        <label class="">Ngày tạo</label>
        <input type="text" class="form-control disableInput"  name="created_at" value="{{$created_at}}">
    </div>
    <div class="form-group col-sm-12 col-md-6">
        <label class="">Ngày cập nhật</label>
        <input type="text" class="form-control disableInput"  name="updated_at" value="{{$updated_at}}">
    </div>
    <div class="form-group col-sm-12 col-md-6">
        <label class="">Phân quyền</label>
        <input type="number" class="form-control disableInput"  name="priority" value="{{$priority}}">
    </div>
  </div>
  <div class="form-group d-flex flex-column">
    <label for="avatar">Hình đại điện</label>
    <input type="file" id="avatar" name="avatar" >
    {{-- <div>{{ $errors->first('email')}}</div> --}}
  </div>
</form>