//[Master Javascript]

//Project:	Pregnancy Care - Onepage Html Responsive Template
//Version:	1.1
//Last change:	22/06/2017
//Primary use:	Pregnancy Care - Onepage Html Responsive Template 



jQuery(function ($) {
    "use strict";
 	$(window).load(function () {
        // Animate loader off screen
        $(".loader").fadeOut("slow");
    });
	
	
// Masterslider 
	var slider = new MasterSlider();
	 
		slider.control('arrows' ,{insertTo:'#masterslider'});  
		slider.control('bullets'); 
	 
		slider.setup('masterslider' , {
			width:1024,
			height:767,
			space:5,
			view:'fade',
			layout:'fullscreen',
			speed:20,
			autoplay:true
		});	

// team slider
	
	$('.owl-carousel').owlCarousel({
			loop:true,
			margin:15,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:false,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:false
				},
				600:{
					items:3,
					nav:false
				},
				1000:{
					items:4,
					nav:true,
					dots:false
				}
			}
			
		});
	
//tab
	

	[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
		new CBPFWTabs( el );
	});
	
// Datepicker

	$(".date").datepicker();	



});