/*
 * Super Foodie Ltf
 * Script created by Dat Vu
 */

 $(window).load(function() {
 	/* Make the page gradually appear */
 	$("#loader").fadeOut(2000);
 });

 $(document).ready(function() {
 	/* Move menu bar from middle to top */
 	$("nav").animate({top: 0}, 1500, function() {
 		/* Expand the content panel */
 		$(".top-panel").animate({height: 1000}, 1500, function() {
 			/* Slowly display panel content */
 			$(".top-panel p").fadeIn(2000);
 		});
 	});

 	
 });