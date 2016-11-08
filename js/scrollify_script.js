(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		// Get jumberton height
		var jumberton_height = 0;
		if (document.getElementById('jumberton')){
			jumberton_height = document.getElementById('jumberton').clientHeight;	
		}		
		
		// jumberton_height - 50
		 $(window).scroll(function(){
                if( $(window).scrollTop() > 0 ) {
                        $('#main-logo').css({top: '0px', transform : 'translateX(-50%) translateY(-10%) scale(0.5)'});  
                        $('.topbar').removeClass('hidden');
                     	
                } else {                		
                        $('#main-logo').css({top: '35%', transform : 'translateX(-50%) translateY(-50%) scale(1)'});  
                        $('.topbar').addClass('hidden');
                }
        });


		// Creating countUp
		var options = {
		  useEasing : true, 
		  useGrouping : false, 
		  separator : ',', 
		  decimal : '', 
		  prefix : '', 
		  suffix : 'km²' 
		};
		var projectCounter = new CountUp("projectCounter", 600000, 650000, 0, 3, options);	
	
		



		$.scrollify({
			section : ".index-section",
			interstitialSection : ".footer",
			scrollbars:false,
		    before:function(i,panels) {
		        var ref = panels[i].attr("data-section-name");
		    	$(".pagination .active").removeClass("active");
      			$(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
			
				var degree = (i) * 90;
				$('.cube').css({ WebkitTransform: 'rotateX(' + degree + 'deg)'});
           		$('.cube').css({ '-moz-transform': 'rotateX(' + degree + 'deg)'});

           		projectCounter.reset();
				},

		    after:function(i,panels){		    	
           		projectCounter.start();
		    },
		    
		});



		$(".pagination>li>a").click(function(e){
			e.preventDefault();
			var url=$(this).attr("href");
			$.scrollify.move(url);	
		})

		$("#next-section-btn").on("click", $.scrollify.next);
		$("#prev-section-btn").on("click", $.scrollify.previous);

	});
	
})(jQuery, this);