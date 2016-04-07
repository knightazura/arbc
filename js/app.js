$(document).foundation();
$(document).ready(function() {
	var orbit = new Foundation.Orbit($('#top-landing'), {
		animation: 'fade',
	    timerDelay: 10000,
	    pauseOnHover: true,
	    navButtons: false,
	    bullets: false
	});

	/*
	$('#fullpage').fullpage({
			menu: '#take-down',
			anchors:['secondPage'],
			autoScrolling: false,
			scrollingSpeed: 1700,
			scrollBar: true,
			verticalCentered: false,
			recordHistory: true
	});
	
	var wh = $(window).height(),
		ww = $(window).width()
	console.log('Browser height viewport : ' + wh);
	*/
});

$.stellar({
	horizontalScrolling: false,
	hideDistantElements: false,
});