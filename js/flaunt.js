/*
	Flaunt.js v1.0.0
	by Todd Motto: http://www.toddmotto.com
	Latest version: https://github.com/toddmotto/flaunt-js
	
	Copyright 2013 Todd Motto
	Licensed under the MIT license
	http://www.opensource.org/licenses/mit-license.php

	Flaunt JS, stylish responsive navigations with nested click to reveal.
*/
;(function($) {

	// DOM ready
	$(function() {
		
		// Append the mobile icon nav
		$('.navbar').append($('<div class="nav-mobile"></div>'));
		// Append the mobile icon nav
		$('.navbar2').append($('<div class="nav-mobile">xx</div>'));
		
		// Add a <span> to every .nav-item that has a <ul> inside
		$('.menu-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
		
		// Click to reveal the nav
		$('.nav-mobile').click(function(){
			$('.navbar-nav').toggle();
		});
	
		// Dynamic binding to on 'click'
		$('.navbar-nav').on('click', '.nav-click', function(){
		
			// Toggle the nested nav
			$(this).siblings('.nav-submenu').toggle();
			
			// Toggle the arrow using CSS3 transforms
			$(this).children('.nav-arrow').toggleClass('nav-rotate');
			
		});
	    
	});
	
})(jQuery);