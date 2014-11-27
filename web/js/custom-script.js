/*
 * Super Foodie Ltf
 * Script created by Dat Vu
 */

 $(window).load(function() {
 	if ($('body').attr("id") == "why") { 		
		$('.body-background').removeClass("body-landing").attr("id","body-why");					
	}
	else if ($('body').attr("id") == "where") {	
		$('.body-background').removeClass("body-landing").attr("id","body-where");			
	}
	else if ($('body').attr("id") == "eat") { 			
		$('.body-background').removeClass("body-landing").attr("id","body-eat");			
	}

 	/* Make the page gradually appear */
 	$("#loader").fadeOut(2000);
 });

 $(document).ready(function() {
 	/* Initiate Product Carousel */
 	if ($(window).width() <= 480) {
 		$('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.9, frontWidth: 70, frontHeight: 40 ,carouselWidth: 400, carouselHeight: 60 , directionNav:true, slidesPerScroll:3}); 
 	}
 	else {
 		$('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.9, frontWidth: 90, frontHeight: 60 ,carouselWidth: 400, carouselHeight: 60 , directionNav:true, slidesPerScroll:5}); 
 	}
 	

 	/* Move menu bar from middle to top */
 	$("nav").animate({top: 0}, 2000, function() {
 		/* Change background */
 		if ($('body').attr("id") == "home") { 			
 			$('.body-background').animate({opacity:0},1000, function() {
 				$(this).removeClass("body-landing").attr("id","body-home");
 				$(this).animate({opacity:1}, 1000);
 			}); 			
 		}		
		
 		/* Expand the content panel */
 		$(".top-panel").show().animate({height: 1000}, 1500, function() {
 			/* Slowly display panel content */
 			$(".top-panel *").fadeIn(1000);
 		});
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
 		$('#footer-panel').animate({height: 300}, 1500, function() {
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