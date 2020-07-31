<form  method="post" id="form_job">
    @csrf
    <div class="form-row">
      <div class="form-group col-sm-12 col-md-6 ">
          <label class="">Công việc</label>
          <input type="text" class="form-control disableInput" name="name" value="{{$name}}" >
      </div>
      <div class="form-group col-sm-12 col-md-6">
          <label class="">Địa chỉ làm việc</label>
          <input  type="text" class="form-control disableInput"  name="address" value="{{$address}}" >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-12 col-md-3">
           <label class="">Số lượng</label>
          <input type="text" class="form-control disableInput"  name="number_of_candidate" value="{{$number_of_candidate}}">
      </div>
      <div class="form-group col-sm-12 col-md-3">
          <label class="">Mức lương</label>
          <input type="text" class="form-control disableInput"  name="salary" value="{{$salary}}" >
      </div>
      <div class="form-group col-sm-12 col-md-6">
          <label class="">Thời gian</label>
         <input type="text" class="form-control disableInput"  name="working_date" value="{{$working_date}}" >
          
      </div>
    </div>
    <div class="form-group">
        <label class="">Mô tả công việc</label>
        <textarea class="form-control disableInput" rows="3"  name="description" value="" >{{$description}}</textarea>
    </div>
    <div class="form-group">
        <label class="">Yêu cầu</label>
        <textarea class="form-control disableInput" rows="3"  name="note" value="" >{{$note}}</textarea>
    </div>
    <div class="form-group">
        <label class="">Liên hệ</label>
        <textarea class="form-control disableInput" rows="3"  name="contact" value="">{{$contact}},{{$contact_phone}}, {{$contact_email}}, {{$contact_fb}}</textarea>
    </div>
    <div class="form-group d-flex flex-column">
      <label for="avatar">Hình đại điện</label>
      <input type="file" id="avatar" name="avatar">
    {{-- <div>{{ $errors->first('email')}}</div> --}}
  </div>
</form>