
(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		var jumboHeight = $('.jumbotron').outerHeight();
		function parallax(){
		    var scrolled = $(window).scrollTop();
		    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
		}

		// Fixe internal menu whene scroll reach it.
		var internal_menu_y = 0
		if ($('#interne-menu').length > 0){
			internal_menu_y = $('#interne-menu').offset().top;
		}	
		

		$(window).scroll(function(e){
		    parallax();
	
		    // Fixing internal menu header
		    if($(window).scrollTop() >= internal_menu_y - 50){
		    	$("#interne-menu").addClass('fixed');
		    } else {
		    	$('#interne-menu').removeClass('fixed');
		    }
		});
		
			

		new WOW().init();


		// Removing link from current page item
		$('.current-menu-item a').removeAttr( 'href' );


		
		

	});
	
})(jQuery, this);






/* Open when someone clicks on the span element */
function openNav() {
	var overlay = document.getElementById("myNav");
	$(overlay).addClass("opened");
	$(overlay).attr("isopen",true);
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
	var overlay = document.getElementById("myNav");
	$(overlay).attr("isopen",false);
	$(overlay).removeClass("opened");
}


function toggleNav(){
	var isOpen = $("#myNav").attr("isopen");
	var menuBtn = document.getElementById("menu-btn");
	if(isOpen == "false"){
	 	openNav(); 
		$(menuBtn).addClass("close");
	}else{
	 	closeNav(); 
		$(menuBtn).removeClass("close");
	}
}


// Close the navigation whene clic outside




