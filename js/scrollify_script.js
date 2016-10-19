(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		 $(window).scroll(function(){
                if( $(window).scrollTop() > 0 ) {
                        $('#main-logo').css({top: '20px', transform : 'translateX(-50%) translateY(0%) scale(0.7)'});  
                     /*   $('#main-logo').addClass('to-top');  */
                } else {
                        $('#main-logo').css({top: '50%', transform : 'translateX(-50%) translateY(-50%) scale(1)'});  
                      /*  $('#main-logo').removeClass('to-top');  */
                }
        });


	});
	
})(jQuery, this);







