(function($) { 
	$('#the-slider').bjqs({
		height : 800,
		width : 920,
		responsive : true,

		animtype : 'fade',
		animduration : 0, // how fast the animation are
		animspeed : 7000, // the delay between each slide
		automatic : true, // automatic

		// control and marker configuration
		showcontrols : true, // show next and prev controls
		centercontrols : true, // center controls verically
		nexttext : '<i class="fa fa-chevron-circle-right fa-2x"></i>', // Text for 'next' button (can use HTML)
		prevtext : '<i class="fa fa-chevron-circle-left fa-2x"></i>', // Text for 'previous' button (can use HTML)
		showmarkers : false, // Show individual slide markers
		centermarkers : false, // Center markers horizontally

		// interaction values
		keyboardnav : true, // enable keyboard navigation
		hoverpause : true, // pause the slider on hover

		// presentational options
		usecaptions : true, // show captions for images using the image title tag
		randomstart : false, // start slider at random slide
		responsive : true // enable responsive capabilities (beta)
	});
})(jQuery);



(function($) { 
    $('.dropdown-toggle').dropdown();

    $('.dropdown').hover(function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideDown(100);
	}, function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp(100)
	});
})(jQuery);