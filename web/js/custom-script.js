/*
 * Super Foodie Ltf
 * Script created by Dat Vu
 */

 $(window).load(function() {
 	if ( document.referrer == null || document.referrer.indexOf(window.location.hostname) < 0 ) {
 		$('body').addClass("first-time");
 	}

 	if ($('body').attr('id') == "home") {

 	}
 	else if ($('body').attr("id") == "why") { 		
		//$('.body-background').removeClass("body-landing").attr("id","body-why");					
	}
	else if ($('body').attr("id") == "where") {	
		//$('.body-background').removeClass("body-landing").attr("id","body-where");			
	}
	else if ($('body').attr("id") == "eat") { 			
		//$('.body-background').removeClass("body-landing").attr("id","body-eat");			
	}

 	/* Make the page gradually appear */
 	//$("#loader").fadeOut(2000);

 	
 });

var screenDistance = null;

 $(document).ready(function() {
 	changeSizePanel();

 	if ($('body').attr("id") == "home") {		
		/* Move menu bar from middle to top */ 	
	 	/* Change background if current page is homepage*/
	 	if (document.referrer == null || document.referrer.indexOf(window.location.hostname) < 0 ) { 	 			 			
			$('.body-background').animate({opacity:0},1000,function() {
				$(this).addClass("body-landing");
				$(this).animate({opacity:1}, 2500, function() {
					$(this).animate({opacity:0},1000, function() {
						$(this).removeClass("body-landing").addClass("body-landing-2");
						$(this).animate({opacity:1}, 2500, function() {
							$(this).animate({opacity:0},1000, function() {
								$(this).removeClass("body-landing-2").addClass("body-landing-3");
								$(this).animate({opacity:1},2500, function() {
									$(this).animate({opacity:0},1000,function() {
										$(this).removeClass("body-landing-3").attr("id","body-home");
										$(this).animate({opacity:1},1000);
										$("nav").animate({top: 0}, 1000, function() {
											$('body').removeClass('first-time');		
									 		/* Display footer */
									 		$(".footer").fadeIn(1000);

									 		/* Expand the content panel */
									 		$(".top-panel").show().animate({height: screenDistance}, 1500, function() {
									 			/* Slowly display panel content */
									 			$(".top-panel *").fadeIn(1000);						 			
									 		});
									 	});
									});						
								});
							});
						});
						
					}); 
				});
			});
						
		} else {			
			$('.body-background').attr("id","body-home");

			/* Expand the content panel */
	 		$(".top-panel").show().animate({height: screenDistance}, 1500, function() {
	 			/* Slowly display panel content */
	 			$(".top-panel *").fadeIn(1000);
	 		});
		}

	} else {		
 		/* Expand the content panel */
 		$(".top-panel").show().animate({height: screenDistance}, 1500, function() {
 			/* Slowly display panel content */
 			$(".top-panel *").fadeIn(1000);
 		});
	}

 	/* Initiate Product Carousel */
 	if ($(window).width() <= 480) {
 		var currentWidth = $(window).width(); 		
 		$('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.9, frontWidth: 70, frontHeight: 40 ,carouselWidth: (currentWidth - 50), carouselHeight: 60 , directionNav:true, slidesPerScroll:3}); 
 	}
 	else {
 		$('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.9, frontWidth: 90, frontHeight: 60 ,carouselWidth: 400, carouselHeight: 60 , directionNav:true, slidesPerScroll:5}); 
 	}
 	$('.carousel').fadeIn(1500);

 	/* Change height of top panel when screen size is changed */
 	$(window).resize(function() {
 		changeSizePanel();
 	});

 	/* Open menu in mobile display when burger button is clicked */
 	$('button.navbar-toggle').click(function() {
 		if ($('.collapse').is(':hidden')) {
 			$('.collapse').show('slow');
 		}
 		else {
 			$('.collapse').hide('slow');
 		}
 	});
 	

	/* Load the contact form when Contact button is clicked */
	$("#contact-button").click(function() {
		if ($("#contact-wrap").hasClass('contact-inactive')) {
			$(".top-panel p").fadeOut(1000, function() {
				$(".top-panel").attr("id","contact-panel");
				$("#contact-wrap").removeClass('contact-inactive').addClass('contact-active').detach().prependTo(".top-panel").fadeIn(1000);
			});		
		} else {
			$("#contact-wrap").fadeOut(1000, function() {
				$(".top-panel").removeAttr("id");
				$("#contact-wrap").removeClass('contact-active').addClass('contact-inactive').detach().appendTo('body > .wrap > .container');
				$(".top-panel > p").fadeIn(1000);
			});
		}
	});
		

 	/* Load the product info in footer when clicked */
 	$('.carousel .slideItem').click(function() {
 		var item = $(this).attr("id");

 		$('.product-info').fadeOut(1500);
 		$('#footer-panel').animate({height: 345}, 1500, function() {
 			$('#panel-close').fadeIn(1500);
 			$("#" + item + "-info").fadeIn(1500);
 		});
 	});

 	/* Close the product info */
 	$('#panel-close').click(function() { 		
 		$('#footer-panel').animate({height: 0}, 1500, function() {
 			$('#panel-close').fadeOut();
 			$('.product-info').fadeOut();
 		});
 	});
 });

function changeSizePanel() {
	if($(window).width() >= 1200) {
		screenDistance = $('body').height() - $('footer').outerHeight();
	}
	else if ($(window).width() <= 480) {
		screenDistance = '100%';
	}

 	$(".top-panel").show().animate({height: screenDistance}, 1000);
}