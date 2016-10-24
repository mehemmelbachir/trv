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
		
			

		new WOW().init();


	});
	
})(jQuery, this);






/* Open when someone clicks on the span element */
function openNav() {
/*    document.getElementById("myNav").style.width = "50%";*/
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


function more(){
/*	$(".pagination").css('transform':'rotateY(90deg)');*/
	var currentTransform = $('.pagination').css("transform : rotateY");
	console.log(currentTransform);
}

function less(){
	alert("less");
}