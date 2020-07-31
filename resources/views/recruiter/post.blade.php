<div id="post_job_content" style="text-align: center;">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        	<form  method="post" class="f1" id="form_post_job">
                @csrf
        		<h3>Bắt đầu đăng tin</h3>
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
        				<p>Điền thông tin công việc</p>
        			</div>
        		    <div class="f1-step">
        				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
        				<p>Hoàn tất</p>
        			</div>
        		</div>

        		<fieldset>
    		        <h4>Bạn chưa đăng nhập</h4>
                    <a href="http://ohayviec.com/account/login">Click để tạo đăng nhập</a>
                    <div class="f1-buttons">
                        <button type="button" class="btn btn-next-step">Kế tiếp</button>
                    </div>
                </fieldset>

                <fieldset>
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
                            <label class="lable-post-job">Thời gian</label>
                            <input id="mutiselectdate_post_proflie" class="flatpickr flatpickr-input active form-control" type="text" placeholder="Chọn lịch.." data-id="enableFunction" readonly="readonly" name="working_date" value="">
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
                    <div class="f1-buttons">
                        <button type="button" class="btn btn-previous-step">Lùi lại</button>
                        <button type="button" class="btn btn-next-step">Kế tiếp</button>
                    </div>
                </fieldset>

                <fieldset>
                    <h3 id="fisnish_title">Xác nhận đăng tin</h3>
                    <a href="http://ohayviec.com/home/register">Vui lòng vào tài khoản của bạn để chỉnh sửa tin</a>
                    <div class=" form-group f1-buttons">
                        <button type="button" class="btn btn-previous-step">Lùi lại</button>
                        <button type="button" id="btn_post_job" class="btn btn-success" >Xác nhận</button>
                    </div>
                </fieldset>
        	
        	</form>
        </div>
    </div>
</div>	

{{-- <form action="" method="get">
    <input type="text" name="name">
    <button type="submit" id="btn-postjob">Nhấn vô đây</button>
</form> --}}


