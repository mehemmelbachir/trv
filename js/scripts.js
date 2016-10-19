(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		var jumboHeight = $('.jumbotron').outerHeight();
		function parallax(){
		    var scrolled = $(window).scrollTop();
		    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
		}

		$(window).scroll(function(e){
		    parallax();
		});
		
		
		$.scrollify({
			section : ".index-section",
			interstitialSection : ".footer",
		});

		$.scrollify.next();

		new WOW().init();

		function goto_section(id){
			var target = "#section-"+id;
			console.log(target);
		/*	$.scrollify.move("#2");  */
			$.scrollify.next();
		}

	});
	
})(jQuery, this);






/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}


