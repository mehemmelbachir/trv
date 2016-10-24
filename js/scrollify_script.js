(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		 $(window).scroll(function(){
                if( $(window).scrollTop() > 0 ) {
                        $('#main-logo').css({top: '0px', transform : 'translateX(-50%) translateY(-10%) scale(0.5)'});  
                        $('.topbar').removeClass('hidden');
                     	
                } else {
                        $('#main-logo').css({top: '50%', transform : 'translateX(-50%) translateY(-50%) scale(1)'});  
                        $('.topbar').addClass('hidden');
                }
        });


		$.scrollify({
			section : ".index-section",
			interstitialSection : ".footer",
			scrollbars:false,
		    before:function(i,panels) {
		        var ref = panels[i].attr("data-section-name");
		    	$(".pagination .active").removeClass("active");
      			$(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
			/* 	$(".pagination").addClass("wow");  */
				var degree = (i) * 90;
				$('.pagination').css({ WebkitTransform: 'rotateX(' + degree + 'deg)'});
           		$('.pagination').css({ '-moz-transform': 'rotateX(' + degree + 'deg)'});
				},
		    after:function(i,panels){

		    },
		    
		});



		$(".pagination>li>a").click(function(e){
			e.preventDefault();
			var url=$(this).attr("href");
			console.log(url);
			$.scrollify.move(url);	
		})

		$("#next-section-btn").on("click", $.scrollify.next);
		$("#prev-section-btn").on("click", $.scrollify.previous);

		/*
		$(".pagination a").on("click",$.scrollify.move);
*/
	});
	
})(jQuery, this);







