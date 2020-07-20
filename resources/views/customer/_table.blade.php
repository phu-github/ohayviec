@include('customer._modal')
<div id="table_data">
	<table class="table table-hover">
		<thead>
		    <tr>
		        <th class="col-xs-1 table-primary">Tên công việc</th>
		        <th class="col-xs-1 table-secondary">Địa chỉ</th>
		        <th class="col-xs-1 table-success">Lương</th>
		        <th class="col-xs-1 table-danger">Ngày đi làm</th>
		        <th class="col-xs-1 table-warning">Số lượng</th>
		    </tr>
		</thead>
		<tbody id="customer_info">
			
		</tbody>
	</table>
	<div class="row justify-content-sm-center justify-content-md-center">
		<input class="btn btn-success btn-lg btn_view_more_job" type="submit" name="xemthem" value="XEM THÊM" >
	</div>	
</div>
