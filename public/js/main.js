$(function () {
	// on scroll header jquery
	$(window).scroll(function(){
		if($(window).scrollTop()>0){
			$(".navbar").addClass("sticky");
		}else{
			$(".navbar").removeClass("sticky");
		}
	});
	//console.log('mâmm');
	// end on scroll header jquery
});