// DOM Ready
$(function() {



	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		for (var i = 0; i < imgs.length; i++) {
			if (/.*\.svg$/.test(imgs[i].src)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
			}
		}
	}
	
	function supportsSVG() {
    return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;  
	}
	if (supportsSVG()) {
	    document.documentElement.className += ' svg';
	} else {
	    document.documentElement.className += ' no-svg';
	    var imgs = document.getElementsByTagName('img');
	    var dotSVG = /.*\.svg$/;
	    for (var i = 0; i != imgs.length; ++i) {
	        if(imgs[i].src.match(dotSVG)) {
	            imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
	        }
	    }
	}
	
	



/* jcarousel */
/* https://github.com/jsor/jcarousel */

    $('.jcarousel').jcarousel();	

(function($) {
    $(function() {
        /*
        Carousel initialization
        */
        $('.jcarousel').jcarouselAutoscroll();

        /*
         Prev control initialization
         */
        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                // Options go here
                target: '-=1'
            });

        /*
         Next control initialization
         */
        $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                // Options go here
                target: '+=1'
            });

        
            
    });
})(jQuery);






});