<div id="post_profile_content" style="text-align: center;>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        	<form method="post" class="f1" id="form_post_profile">
                @csrf
        		<h3>Bắt đầu tạo hồ sơ</h3>
        		<div class="f1-steps">
        			<div class="f1-progress">
        			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
        			</div>
        			<div class="f1-step active">
        				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
        				<p>Tài khoản</p>
        			</div>
        			<div class="f1-step">
        				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
        				<p>Điền thông tin cá nhân</p>
        			</div>
        		    <div class="f1-step">
        				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
        				<p>Hoàn tất</p>
        			</div>
        		</div>

        		<fieldset style="display: block;">
    		        <h4>Vui lòng tạo tài khoản</h4>
                    <a href="#">Click để tạo tài khoản</a>
                    <div class="f1-buttons">
                        <button type="button" class="btn btn-next-step">Kế tiếp</button>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-md-4 ">
                            <label class="lable-post-job">Tên</label>
                            <input type="text" placeholder="Nhập tên đầy dủ..." class="f1-name form-control" name="name" value="">
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label class="lable-post-job">Nơi ở</label>
                            <input type="text" placeholder="Nhập quận/huyện..." class="f1-address form-control"  name="address" value="">
                        </div>
                        <div class="form-group col-sm-12 col-md-2">
                            <label class="lable-post-job">Tuổi</label>
                            <input type="text" placeholder="25 tuổi" class="f1-address form-control" name="old" value="">
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
                            <label class="lable-post-job">Lịch rãnh</label>
                            <input id="mutiselectdate_post_proflie" class="flatpickr flatpickr-input active" type="text" placeholder="Chọn lịch.." data-id="enableFunction" readonly="readonly" name="free_time" value="">
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
                            <textarea class="form-control" rows="3" placeholder="" name="experiences" value=""></textarea>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="lable-post-job"> Thông tin liên hệ</label>
                            <textarea class="form-control" rows="3" placeholder="" name="contact" value=""></textarea>
                        </div>
                    </div>

                    <div class="f1-buttons">
                        <button type="button" class="btn btn-previous-step">Lùi lại</button>
                        <button type="button" class="btn btn-next-step">Kế tiếp</button>
                    </div>
                </fieldset>

                <fieldset>
                    <h3 id="fisnish_title">Xác nhận hồ sơ</h3>
                    <a href="http://ohayviec.com/home/register">Vui lòng vào tài khoản của bạn để chỉnh sửa tin</a>
                    <div class="f1-buttons">
                        <button type="button" class="btn btn-previous-step">Lùi lại</button>
                        <button type="submit" id="btn_post_profile" class="btn btn-success xxxx">Xác nhận</button>
                    </div>
                </fieldset>
        	
        	</form>
        </div>
    </div>
</div>	