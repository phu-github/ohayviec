<div id="content-post" style="text-align: center">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        	<form  method="get" class="f1">

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
    		        <h4>Vui lòng tạo tài khoản</h4>
                    <a href="#">Click để tạo tài khoản</a>
                    <div class="f1-buttons">
                        <button type="button" class="btn btn-next-step">Kế tiếp</button>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-md-6 ">
                            <input type="text" class="form-control" placeholder="Nhập công việc..." name="name" value="">
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <input type="text" class="form-control" placeholder="Nhập tỉnh/huyện" name="address" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-md-6">
                            <input type="text" class="form-control" placeholder="Nhập mức lương..." name="salary" value="">
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label class="sr-only" for="f1-working-date">Thời gian</label>
                            <input type="text" placeholder="Nhập ngày đi làm..." class="f1-working-date form-control" id="f1-salary" name="working_date" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="f1-description">Mô tả công việc</label>
                        <textarea class="form-control" rows="3" placeholder="- Làm vệ sinh toàn bộ thang máy..." name="description" value=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="f1-note">Yêu cầu</label>
                        <textarea class="form-control" rows="3" placeholder="-Quần đùi, áo dài tay,..." name="note" value="post.blade.php"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="f1-contact">Liên hệ</label>
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
                        <button type="submit" class="btn btn-submit-step">Xác nhận</button>
                    </div>
                </fieldset>
        	
        	</form>
        </div>
    </div>
</div>	