$(function () {

	$.ajaxSetup({
	headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});
	
	$("#mutiselectdate_post_job").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
	});
	$("#mutiselectdate_edit_job").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
	});

	$("#mutiselectdate_post_proflie").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
	});
	$("#mutiselectdate_edit_proflie").flatpickr({
	    mode: "multiple",
	    dateFormat: "d-m-Y"
	});

	$(".notifi").delay(2500);
  	$(".notifi").slideUp(500);


	// THÊM JOB VÀ CANDIDATE xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

	$('#btn_post_profile').click(function(event){  
		event.preventDefault();
		$.post("add-can",$("#form_post_profile").serialize(),function(data){
			$('#modal_add_can').modal('hide');
		});

	});	
	//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

	//xxxxxxxxxxxxxxxxxxxx SỬA-XEM-XÓA-THÊM JOBxxxxxxxxxxxxxxxxxxxxxxxx
	//xxxx xóa
	// var deleteId = 0;
	$(document).on('click','#delete_job',function(event){ 
    event.preventDefault();
    	var deleteId = $('.deleteJobBtn').attr('deleteId');
    	console.log("lllol");
    	console.log(deleteId);
    	$.ajax({ 
	      	url: 'delete-job',
	      	type: "get",
	      	data: { deleteId: deleteId },
	       	success: function(data){ // What to do if we succeed
				
			}
		});
		$('#modal_delete_job').modal('hide');	
    });
	//xxxx end xóa
	//xxxx sửa
	var attrEditId = 0;
	$(document).on('click','.editJobBtn',function(event){ 
    event.preventDefault();
    	$('.title_job').html("SỬA VIỆC LÀM");
    	attrEditId = $(this).attr('dataId');
    	// console.log( attrEditId);
    	$.ajax({ 
	      	url: 'edit-job',
	      	type: "get",
	      	data: { attrEditId: attrEditId },
	       	success: function(data){ // What to do if we succeed
				$('#htmlJob').html(data);
			}
		});	
    });
	$(document).on('click','.editJob',function(event){
    event.preventDefault();
    console.log("xác nhân");
    console.log(attrEditId);
    	$.ajax({ 
	      	url: 'update-job',
	      	type: "get",
	      	data: $( "#form_job").serialize()+ '&'+ "attrEditId="+attrEditId,
	       	success: function(data){ // What to do if we succeed
				$('#htmlJob').html(data);
			}
		});	
    	$('#modal_job').modal('hide');
    });
    //xxxx end sửa
    //xxxx xem
    $(document).on('click','.viewJobBtn',function(event){ 
    	$('.title_job').html("XEM VIỆC LÀM");
    	var attrEditId = $(this).attr('dataViewId');
    	console.log( attrEditId);
    	$.ajax({ 
	      	url: 'edit-job',
	      	type: "get",
	      	data: { attrEditId: attrEditId},
	       	success: function(data){ // What to do if we succeed
				$('#htmlJob').html(data);
				$(".disableInput").attr("disabled", true);
			}
		});	
    });
    //xxxx end xem
	//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx




	//xxxxxxxxxxxxxxxxxxxx SỬA-XEM-XÓA-THÊM USERxxxxxxxxxxxxxxxxxxxxxxxx
	//xxxx sửa
	var attrEditIdUser = 0;
	$(document).on('click','.editUserBtn',function(event){ 
    event.preventDefault();
    	$('#title_user').html("Sửa tài khoản");
    	attrEditIdUser = $(this).attr('attrEditIdUser');
    	// console.log(attrEditIdUser);
    	$.ajax({ 
	      	url: 'edit-user',
	      	type: "POST",
	      	data: { attrEditIdUser: attrEditIdUser},
	       	success: function(data){ // What to do if we succeed
				$('#htmlUser').html(data);
			}
		});	
    });
	$(document).on('click','.editUser',function(event){
    event.preventDefault();
    console.log("xác nhân");
    console.log(attrEditIdUser);
    	$.ajax({ 
	      	url: 'update-user',
	      	type: "POST",
	      	data: $("#form_user").serialize()+ '&'+ "attrEditIdUser="+attrEditIdUser,
	       	success: function(data){ // What to do if we succeed
				// $('#htmlUser').html(data);
				alert("CHỈNH SỬA THÀNH CÔNG");
			},
			error: function (err) {
                    alert("Error: quái gì vậy ta");
            }
		});	
    	$('#modal_user').modal('hide');
    });
    //xxxx end sửa
    //xxxx xem
    $(document).on('click','.viewUserBtn',function(event){ 
    	$('#title_user').html("Xem tài khoản");
    	var attrEditIdUser = $(this).attr('dataViewId');
    	console.log( attrEditIdUser);
    	$.ajax({ 
	      	url: 'edit-user',
	      	type: "post",
	      	data: { attrEditIdUser: attrEditIdUser},
	       	success: function(data){ // What to do if we succeed
				$('#htmlUser').html(data);
				$(".disableInput").attr("disabled", true);
			}
		});	
    });
    //xxxx end xem
	//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

});