var main_slider = new MasterSlider();
   
    main_slider.control('arrows');
    main_slider.control('timebar' , {insertTo:'#main_slider'});
    main_slider.control('bullets');
 
	main_slider.setup('main_slider' , {
		width:1400,
        height:665,
		speed:70,
        space:1,
        layout:'fullwidth',
        loop:true,
        preload:0,
        autoplay:true,
		layersMode:'center',
		view:'parallaxMask'
    });
	
	var reto_slider = new MasterSlider();

	reto_slider.control('arrows');	

	reto_slider.setup('reto_slider',{
		width:460,
		height:270,
		space:0,
		loop:true,
		view:'wave',
		layout:'partialview'
	});
 	
	$(window).stellar({
		horizontalScrolling: false,
		responsive: true,
	});
		
	$('a.lightbox').prettyPhoto({social_tools:false});