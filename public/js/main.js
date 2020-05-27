$(function () {
	// on scroll header jquery
	$(window).scroll(function(){
		if($(window).scrollTop()>300){
			$(".navbar").addClass("sticky");
			$(".navbar-dark .navbar-nav .nav-link").css("color", "black");
			$(".sticky #logo-ohay").css("color","black");
		}else{
			$(".navbar").removeClass("sticky");
			$("#logo-ohay").css("color","white");
			$(".navbar-dark .navbar-nav .nav-link").css("color", "white");
		}
	});
	


	//register form
    if($('#name100').val()){  // kiểm tra có gia trị trong ô input hay không .
        $('#name100').addClass('has-val');
    }else{
         $('#name100').removeClass('has-val');
    }

    if($('#email100').val()){
        $('#email100').addClass('has-val');
    }else{
        $('#email100').removeClass('has-val');
    }

    if($('#pass100').val()){
        $('#pass100').addClass('has-val');
    }else{
     	$('#pass100').removeClass('has-val');
    }
    if($('#pass_cf100').val()){
        $('#pass_cf100').addClass('has-val');
    }else{
        $('#pass_cf100').removeClass('has-val');
    }

});