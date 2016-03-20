$(document).foundation();
$(document).ready(function() {
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
});
$.stellar({
	horizontalScrolling: false,
	hideDistantElements: false,
	
});