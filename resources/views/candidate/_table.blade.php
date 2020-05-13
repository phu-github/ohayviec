{{-- <div id="table_data1">
	<div class="row justify-content-sm-center justify-content-md-center"> <div>{{$canditateSearch->links()}}</div> </div>	
	<table class="table table-hover">
		<thead class="thead-dark">
		    <tr>
		        <th class="col-xs-1">Người ứng tuyển</th>
		        <th class="col-xs-1">Ngày rãnh</th>
		        <th class="col-xs-1">Nơi ở 	</th>
		        <th class="col-xs-1">Tuổi</th>
		        <th class="col-xs-1">Giới tính</th>
		        <th class="col-xs-1">Chọn xem chi tiết</th>
		    </tr>
		</thead>
		<tbody>
				@foreach($canditateSearch as $key => $item)
				@include('candidate._modal')
				<tr class="rows jobItem" data-fancybox="gallery" data-src="#modalcan{{$item->id}}" href="javascript:;">
		            <td class="show-modal">{{$item->name}}</td>
		            <td class="show-modal">{{$item->free_time}}</td>
		            <td class="show-modal">{{$item->address}}</td>
		            <td class="show-modal" >{{$item->old}}</td>
		            <td class="show-modal">{{$item->gender}}</td>
		            <td >
		            	<div class="icheck-success">
						    <input type="checkbox" id="checkboxId{{$item->id}}" name="detailmode[]" value="{{$item->id}}"/>
						    <label for="checkboxId{{$item->id}}">{{$item->id}}</label>
						</div>
					</td>   
		        </tr> 
		    @endforeach        
		</tbody>
	</table>
</div> --}}


<div id="table_data1">
	<table class="table table-hover">
		<thead class="thead-dark">
		    <tr>
		        <th class="col-xs-1">Người ứng tuyển</th>
		        <th class="col-xs-1">Ngày rãnh</th>
		        <th class="col-xs-1">Nơi ở 	</th>
		        <th class="col-xs-1">Tuổi</th>
		        <th class="col-xs-1">Giới tính</th>
		        <th class="col-xs-1">Chọn xem chi tiết</th>
		    </tr>
		</thead>
		<tbody id="candidate-info">

		</tbody>
	</table>
	<div class="row justify-content-sm-center justify-content-md-center">
		<input class="btn btn-success btn-lg" type="submit" name="xemthem" value="XEM THÊM" id="load-candidate">
	</div>	
</div>