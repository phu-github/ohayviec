$(function () {
	// fancybox
	
	// $('.test').on('click', function() {

	// 	var hasBeenClicked = false;
	// 	jQuery('#checkboxId').click(function () {
	// 	    hasBeenClicked = true;
	// 	    console.log('checkbox đã chọn là: ');
	// 	});

	// 	if (hasBeenClicked) {
		    
	// 	} else {
		    
	// 	}

	//   $.fancybox.open( $('.modal-content'), {
	//     touch: false,
	//     infobar: false
	//   });
	// });
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
	
	// ajax tab
		// $(document).on('click','.ajax-tab a',function(event){
		// 	event.preventDefault();
		// 	var name = $(this).attr('href').split("#")[1];  // lây thuoc tinh của the a
		// 	console.log(name);
		// 	fetch_tab(name);
		// });
		
		//fetch_tab("find-job");
		$(document).on('click','.ajax-tab',function(event){
			event.preventDefault();
			var dataAttr = $(this).attr('data');  // lây thuoc tinh của the a
			if(dataAttr==1){
				//load json to find-job tab
				//console.log("Đang ở tab 1");
				fetch_tab("find-job", dataAttr);
			}else if(dataAttr==2){
				//console.log("Đang ở tab 2");
				fetch_tab("find-candidate", dataAttr);
			}else if(dataAttr==3){
				//console.log("Đang ở tab 3");
				fetch_tab("post-job", dataAttr);
			}else{
				//console.log("Đang ở tab 4");
				fetch_tab("post-profile", dataAttr);
			}
		});

		
		function fetch_tab(name, dataAttr){
			console.log(name+" "+ dataAttr);
		 	if(name=='find-job'){
		 		var jj=5;
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
							"CAO" +"</td></tr>";
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
							value.name +"</td></tr>";
						});
						$("#candidate-info").append(tr);
					

				});		
			}else if(name=='post-job'){

			}else if(name='post-profile'){

			}

		}
	// end ajax tab
	// View more button
			var k=5;
			var jj=5;
			$(document).on('click','#load-job',function(event){
						event.preventDefault();
						if(k<40) {
							k=k+5;
						}else k=5;
						console.log("aaa"+k);
						$.ajax({
			              	url: 'home/find-job',
			              	type: "get",
			              	data: {viewMoreJob:k},
			               	success: function(response){ // What to do if we succeed
			             	
			        		}
		            	});
			});
			$(document).on('click','#load-candidate',function(event){
						event.preventDefault();
						if(jj<40) {
							jj=jj+5;
						}else jj=5;
						console.log("bbb"+jj);
						$.ajax({
			              	url: 'home/find-candidate',
			              	type: "get",
			              	data: {viewMoreCandidate:jj},
			               	success: function(response){ // What to do if we succeed
			             	
			        		}
		            	});

			});
	// end view more button
});