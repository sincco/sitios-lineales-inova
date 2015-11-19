

jQuery(document).ready(function() {
		
	$('#main_slider').camera({pagination:false,height:'37,23%',playPause:false,time:8000,transPeriod:700,fx:'scrollHorz',loader:'none',minHeight:'200px'});
		
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
	});
	
});