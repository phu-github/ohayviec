{{-- 
<h2>Có {{$amountJobs}} việc làm part-time</h2>
<p >Những công việc có <i class="fab fa-fedora" style="font-size:24px"></i> là những công việc có phần thưởng khi tuyển dụng</p>
<div id="content-tab"></div>
<div class="row">
    <div class="col-12 col-md-4">
		@include('customer._search')
    </div>			
    <div class="col-12 col-md-8"> 
		@include("customer._table")

    </div> 
</div>   --}}              

<h2>Có XXX việc làm part-time</h2>
<p >Những công việc có <i class="fab fa-fedora" style="font-size:24px"></i> là những công việc có phần thưởng khi tuyển dụng</p>
<div id="content-tab"></div>
<div class="row">
    <div class="col-12 col-md-4"> {{-- form search --}}
		@include('customer._search')
    </div>		{{-- end form search --}}				
    <div class="col-12 col-md-8"> {{-- table --}}
		@include("customer._table")

    </div> {{-- end table --}}
</div>                


