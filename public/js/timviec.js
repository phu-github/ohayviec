$(function () {


//1. XXXXXXXXXXXXXXX CSRF XXXXXXXXXXXXXXXXXXXXXXXXX 
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
//
//
// 2. XXXXXXXXXXXXXXX Account XXXXXXXXXXXXXXXXXXXXXXXXX 
$('.nav-item-avatar').click(function(event) {
	$('.account-box-content').slideToggle();
	
});
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 

// 3. XXXXXXXXXXXXXXX fancybox XXXXXXXXXXXXXXXXXXXXXXXXX 
	$('[data-fancybox="gallery"]').fancybox({
	thumbs : {
	autoStart : true
	},
	loop: true,
	toolbar  : true,
	smallBtn : true,
	});
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
//
//  
// 4. XXXXXXXXXXXX datetimepicker XXXXXXXXXXXXXXXXXXXXXX 
	    $('#datetimepicker1').datetimepicker({ 
	    });
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
//
//
// 5. XXXXXXXXXXXXXXX flatpickr XXXXXXXXXXXXXXXXXXXXXXXXX 
  	$("#mutiselectdate_job").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
    });

	$("#mutiselectdate_candidate").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
    });
    $("#mutiselectdate_post_job").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
    });
    $("#mutiselectdate_post_proflie").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
    });
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx 
//
//
// 6. XXXXXXXXXXXXXXX btn_search_form_job and btn_search_form_candidateXXXXXXXXXXXXXXXXX
var countPageJob= 0;
var countPageCan= 0;
$('#btn_search_job_form').click(function(event){  
	event.preventDefault();
	countPageJob= 0;
	$("#customer_info").empty();
	$.post("home/search-job",$( "#search_job_form" ).serialize(),function(data){
			var tr="";
			$.each(data, function(i, value){
				tr += "<tr data-fancybox="+ "gallery" + " data-src=#modal"+ value.id +"><td>" + 
				value.name_job  + "</td><td>" + 
				value.name_area + "</td><td class="+ "customer_info_salary"+">" + 
				value.salary +"</td><td>" + 
				value.working_date +"</td><td>" + 
				value.number_of_candidate +"</td><td>" + 
				value.id +"</td></tr>";
			});
			$("#customer_info").append(tr);		
	});
	$.ajax({    // Đếm số lượng Job 
	      	url: 'home/amount-job',
	      	type: "get",
	      	data: {
	      		viewMoreJob:countPageJob, 
	      		_token : $("input[name='_token']").val(),
	      		keyword : $("input[name='keyword']").val(),
	      		city : $("select[name='city']").val(),
	      		salary : $("input[name='salary']").val(),
	      		working_date : $("input[name='working_date']").val(),
	      	},
	       	success: function(data){ // What to do if we succeed
				$("#amount-job").html(data);
			}
	});	

});

$('#btn_search_candidate_form').click(function(event){  // nút search candidate
	event.preventDefault();	
	countPageCan= 0;
	$("#candidate_info").empty();
	$.post("home/search-candidate",$( "#search_candidate_form" ).serialize(),function(data){
		var tr="";
		$.each(data, function(i, value){
			tr += "<tr><td>" + 
			value.name  + "</td><td>" + 
			value.free_time + "</td><td>" + 
			value.address +"</td><td>" + 
			value.old +"</td><td>" + 
			value.gender +"</td><td>" + 
			value.id +"</td></tr>";
		});
		$("#candidate_info").append(tr);
	});	
	$.ajax({ // Đếm số lượng Candidate
	      	url: 'home/amount-candidate',
	      	type: "get",
	      	data: {
      		_token : $("input[name='_token']").val(),
      		addressCan : $("select[name='addressCan']").val(),
      		dateCan : $("input[name='dateCan']").val(),
      		oldCan : $("input[name='oldCan']").val(),
      		genderCan : $("input[name='genderCan']").val(),
      		},
	       	success: function(data){ // What to do if we succeed
				$("#amount-candidate").html(data);
			}
	});	
});		
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
 
// 7. XXXXXXXXXXXXXXXX View more button XXXXXXXXXXXXXXXXX
$(document).on('click','#btn_view_more_job',function(event){
	event.preventDefault();

	console.log("thêm modal");
	var limit = 5;
	var amountJob = $('#amount-job').text();
	countPageJob=countPageJob+1;
	$.ajax({
      	url: 'home/search-job',
      	type: "post",
      	data: {
      		viewMoreJob:countPageJob, 
      		_token : $("input[name='_token']").val(),
      		keyword : $("input[name='keyword']").val(),
      		city : $("select[name='city']").val(),
      		salary : $("input[name='salary']").val(),
      		working_date : $("input[name='working_date']").val(),
      	},
       	success: function(data){ // What to do if we succeed
     		console.log(data);
     		var tr="";
			$.each(data, function(i, value){
				tr += "<tr data-fancybox="+ "gallery" + " data-src=#modal"+ value.id +"><td>" + 
				value.name_job  + "</td><td>" + 
				value.name_area + "</td><td class="+ "customer_info_salary"+">" + 
				value.salary +"</td><td>" + 
				value.working_date +"</td><td>" + 
				value.number_of_candidate +"</td><td>" + 
				value.id +"</td></tr>";
			});
			$("#customer_info").append(tr);
		}
	});
	// if(countPageJob==Math.ceil(amountJob/limit)-1) {
	// 	$("#btn_view_more_job").hide();
	// 	countPageJob=0;
	// }else{
	// 	$("#btn_view_more_job").show();
	// }
});
$(document).on('click','#btn_view_more_candidate',function(event){
	event.preventDefault();
	var limit = 10;
	var amountcandidate = $('#amount-candidate').text();
	countPageCan=countPageCan+1;
	$.ajax({
      	url: 'home/search-candidate',
      	type: "post",
      	data: {
      		viewMoreCandidate:countPageCan,
      		_token : $("input[name='_token']").val(),
      		addressCan : $("select[name='addressCan']").val(),
      		dateCan : $("input[name='dateCan']").val(),
      		oldCan : $("input[name='oldCan']").val(),
      		genderCan : $("input[name='genderCan']").val(),
      	},
       	success: function(data){ 
       		var tr="";
			$.each(data, function(i, value){
				tr += "<tr class="+ "show-modal"+"><td>" + 
				value.name  + "</td><td>" + 
				value.free_time + "</td><td>" + 
				value.address +"</td><td>" + 
				value.old +"</td><td>" + 
				value.gender +"</td><td>" + 
				value.id +"</td></tr>";
			});
		$("#candidate_info").append(tr);
		}
	});
	// if(countPageCan==Math.ceil(amountcandidate/limit)-1) {
	// 	$("#btn_view_more_candidate").hide();
	// 	countPageCan=0;
	// }
	// console.log(countPageCan);
});
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
//
//
// 8. XXXXXXXXXXXXXXXXXXX ajax tab XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
fetch_tab("find-job");
$(document).on('click','.ajax-tab',function(event){
	event.preventDefault();
	var dataAttr = $(this).attr('data');  // lây thuoc tinh của the a
	if(dataAttr==1){
		$("#load-job").show();
		fetch_tab("find-job", dataAttr);
	}else if(dataAttr==2){
		$("#load-candidate").show();
		fetch_tab("find-candidate", dataAttr);
	}else if(dataAttr==3){
		fetch_tab("post-job", dataAttr);
	}else{
		fetch_tab("post-profile", dataAttr);
	}
});


function fetch_tab(name, dataAttr){
	console.log(name);
 	if(name=='find-job'){ 			// Khi sang tab moi se tư dong load job vào table ở lần chạy đầu tiên
		countPageJob=0;
		$("#customer_info").empty();
		$.post("home/search-job",$( "#search_job_form" ).serialize(),function(data){
		var tr="";
		$.each(data, function(i, value){
			tr += "<tr data-fancybox="+ "gallery" + " data-src=#modal"+ value.id +"><td>" + 
			value.name_job  + "</td><td>" + 
			value.name_area + "</td><td class="+ "customer_info_salary"+">" + 
			value.salary +"</td><td>" + 
			value.working_date +"</td><td>" + 
			value.number_of_candidate +"</td><td>" + 
			value.id +"</td></tr>";
		});
		$("#customer_info").append(tr);
	});
	$.ajax({    // Đếm số lượng Job 
      	url: 'home/amount-job',
      	type: "get",
      	data: {
      		viewMoreJob:countPageJob, 
      		_token : $("input[name='_token']").val(),
      		keyword : $("input[name='keyword']").val(),
      		city : $("select[name='city']").val(),
      		salary : $("input[name='salary']").val(),
      		working_date : $("input[name='working_date']").val(),
      	},
       	success: function(data){ // What to do if we succeed
			$("#amount-job").html(data);
		}
	});	

	}else if(name=='find-candidate'){  // Khi sang tab moi se tư dong load candidate vào table ở lần chạy đầu tiên
		countPageCan=0;
		$("#candidate_info").empty();
		$.post("home/search-candidate",$( "#search_candidate_form" ).serialize(),function(data){
			var tr="";
			$.each(data, function(i, value){
				tr += "<tr><td>" + 
				value.name  + "</td><td>" + 
				value.free_time + "</td><td>" + 
				value.address +"</td><td>" + 
				value.old +"</td><td>" + 
				value.gender +"</td><td>" + 
				value.id +"</td></tr>";
			});
			$("#candidate_info").append(tr);
		});	


		$.ajax({ // Đếm số lượng Candidate
	      	url: 'home/amount-candidate',
	      	type: "get",
	      	data: {
      		_token : $("input[name='_token']").val(),
      		addressCan : $("select[name='addressCan']").val(),
      		dateCan : $("input[name='dateCan']").val(),
      		oldCan : $("input[name='oldCan']").val(),
      		genderCan : $("input[name='genderCan']").val(),
      		},
	       	success: function(data){ // What to do if we succeed
				$("#amount-candidate").html(data);
			}
		});	
	}else if(name=='post-job'){
		$('#btn_post_job').click(function(event){  // nut để xác nhận để đăng tin tuyển dụng
			event.preventDefault();
			$.post("home/post-job",$( "#form_post_job" ).serialize(),function(data){
				
			});

		});	
	}else if(name=='post-profile'){
		$('#btn_post_profile').click(function(event){  // nut để xác nhận để đăng tin tuyển dụng
			event.preventDefault();
			$.post("home/post-profile",$( "#form_post_profile" ).serialize(),function(data){
				
			});

		});	

	}

}
//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
//
// 9. XXXXXXXXXXXXXXXXXXX Back to top XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 

$(window).scroll(function(){
	    var scrollPos = $(document).scrollTop();
	    if(scrollPos > 600){
	    	$(".menu_right_content").hide(300);
	    	$("#back_to_top").show();
	    }else{
	    	$("#back_to_top").hide();
	    } 
	});
$("#back_to_top").click(function(){
		$("html, body").animate({ scrollTop: 0 }, "slow");
})

//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
});