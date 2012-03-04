$(document).ready(function() {
	
	// Menu mouseover effects
	$('#menu .entry').mouseenter(function() {
		$(this).animate({
				backgroundColor: '#172CAF'
			}, 100);
	});
	$('#menu .entry').mouseleave(function() {
		$(this).animate({
				backgroundColor: '#222'
			}, 100);
	});
	
});

