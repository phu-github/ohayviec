$(function () {
	// account
	//$('.account-box-content').slideUp();

	$('.nav-item-avatar').click(function(event) {
		$('.account-box-content').slideToggle();
		
	});
	// END ACOUNT


	//fancybox
	$('[data-fancybox="gallery"]').fancybox({
	thumbs : {
	autoStart : true
	},
	loop: true,
	toolbar  : true,
	smallBtn : true,
	});
	// end fancybox
  
	// datetimepicker
	    $('#datetimepicker1').datetimepicker({ 
	    });
    // end datetimepicker

	// View more button
		var countPageJob= 0;
		var countPageCan= 0;
		var hideViewMoreJob = 0;
		var hideViewMoreCan = 0;
		$(document).on('click','#load-job',function(event){
					event.preventDefault();
					var limit = 2;
					var amountJob = $('#amount-job').text();
					countPageJob=countPageJob+1;
					$.ajax({
		              	url: 'home/find-job',
		              	type: "get",
		              	data: {viewMoreJob:countPageJob},
		               	success: function(data){ // What to do if we succeed
		             		console.log(data);
		             		var tr="";
							$.each(data, function(i, value){
							tr += "<tr class="+ "show-modal"+"><td>" + 
							value.name_job  + "</td><td>" + 
							value.name_area + "</td><td>" + 
							value.salary +"</td><td>" + 
							value.working_date +"</td><td>" + 
							value.number_of_candidate +"</td><td>" + 
							value.id +"</td></tr>";
							});
							$("#customer-info").append(tr);
		        		}
	            	});
					if(countPageJob==Math.ceil(amountJob/limit)-1) {
						$("#load-job").hide();
						countPageJob=0;
					}
		});
		$(document).on('click','#load-candidate',function(event){
					event.preventDefault();
					var limit = 10;
					var amountcandidate = $('#amount-candidate').text();
					countPageCan=countPageCan+1;
					$.ajax({
		              	url: 'home/find-candidate',
		              	type: "get",
		              	data: {viewMoreCandidate:countPageCan},
		               	success: function(data){ // What to do if we succeed
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
						$("#candidate-info").append(tr);
		        		}
	            	});
            		if(countPageCan==Math.ceil(amountcandidate/limit)-1) {
						$("#load-candidate").hide();
						countPageCan=0;
					}
					//console.log("hideViewMoreCan = "+ hideViewMoreCan);
					console.log(countPageCan);
		});
	// end view more button
	// ajax tab
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
		 	if(name=='find-job'){
	 			$.get("home/"+name,function(data){
					$("#customer-info").empty();
						var tr="";
						$.each(data, function(i, value){
							tr += "<tr><td>" + 
							value.name_job  + "</td><td>" + 
							value.name_area + "</td><td>" + 
							value.salary +"</td><td>" + 
							value.working_date +"</td><td>" + 
							value.number_of_candidate +"</td><td>" + 
							value.id +"</td></tr>";
						});
						$("#customer-info").append(tr);
				});		
			}else if(name=='find-candidate'){
			 	$.get("home/"+name,function(data){
					$("#candidate-info").empty();
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
						$("#candidate-info").append(tr);
					

				});	
				$.ajax({
		              	url: 'home/amount-candidate',
		              	type: "get",
		               	success: function(data){ // What to do if we succeed
							$("#amount-candidate").html(data);
		        		}
            	});		
			}else if(name=='post-job'){
				

			}else if(name='post-profile'){

			}

		}
	// end ajax tab

});