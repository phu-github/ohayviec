$(function () {
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

    // ajax pagination
		// $(document).on('click','.pagination a',function(event){
		// 	event.preventDefault();
		// 	var page = $(this).attr('href').split("page=")[1];  // lay ve so trang
		// 	//console.log(page);
		// 	fetch_data(page);
		// 	fetch_data1(page);
		// });

		// function fetch_data(page){
			
		// 	$.ajax({
		// 		url: "/home/fetch_data/?page="+page,
		// 		async:false,
	 //            success:function(jobSearch)
	 //            {
	 //                $('#table_data').html(jobSearch);
	 //            }

	 //        });
		// } 

		// function fetch_data1(page){
			
		// 	$.ajax({
		// 		url: "/pagination1/fetch_data/?page="+page,
		// 		async:false,
	 //            success:function(candidateSearch)
	 //            {
	 //                $('#table_data1').html(candidateSearch);
	 //            }

	 //        });
		// } 
		
	// end ajax pagination
	// View more button
		var countPageJob=0;
		var countPageCan=0;
		$(document).on('click','#load-job',function(event){
					event.preventDefault();
					if(countPageJob<10) {
						countPageJob=countPageJob+1;
					}else{
						countPageJob=1;
						 $("#load-job").hide();
					}
					console.log(countPageJob);
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


		});
		$(document).on('click','#load-candidate',function(event){
					event.preventDefault();
					if(countPageCan<40) {
						countPageCan=countPageCan+1;
					}else countPageCan=1;
					console.log(countPageCan);
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
		});
	// end view more button
	// ajax tab
		// $(document).on('click','.ajax-tab a',function(event){
		// 	event.preventDefault();
		// 	var name = $(this).attr('href').split("#")[1];  // lây thuoc tinh của the a
		// 	console.log(name);
		// 	fetch_tab(name);
		// });
		
		fetch_tab("find-job");
		$(document).on('click','.ajax-tab',function(event){
			event.preventDefault();
			var dataAttr = $(this).attr('data');  // lây thuoc tinh của the a
			if(dataAttr==1){
				fetch_tab("find-job", dataAttr);
			}else if(dataAttr==2){
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
			}else if(name=='post-job'){

			}else if(name='post-profile'){

			}

		}
	// end ajax tab

});