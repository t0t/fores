// DOM Ready
jQuery(document).ready(function() {

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


if (Modernizr.canvas) {
//alert("Este navegador soporta HTML5 canvas!");
} else {
//alert("Este navegador no soporta HTML5 canvas");
}






	jQuery('.jcarousel').jcarousel();	
	
	/*
	Carousel initialization
	*/
	jQuery('.jcarousel').jcarouselAutoscroll();

	/*
	 Prev control initialization
	 */
	jQuery('.jcarousel-control-prev').on('jcarouselcontrol:active', onActive).on('jcarouselcontrol:inactive', onInactive).jcarouselControl({
		
		// Options go here
		target: '-=1'
		
	});

	/*
	 Next control initialization
	 */
	jQuery('.jcarousel-control-next').on('jcarouselcontrol:active', onActive).on('jcarouselcontrol:inactive', onInactive).jcarouselControl({
		
		// Options go here
		target: '+=1'
		
	});
	
	function onActive() {
		
		jQuery(this).removeClass('inactive');
		
	}
	
	function onInactive() {
	
		jQuery(this).addClass('inactive');
		
	}

});