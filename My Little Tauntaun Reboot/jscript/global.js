BLUE = '#172CAF';
GRAY = '#222';
SHADOW = '0px 0px 2px 0px ';

$(document).ready(function() {
	
	// menu mouseover effects
	$('.tmenu_inner').mouseenter(function() {
		$(this).animate({
				backgroundColor: BLUE
			}, 100, function() { $(this).css('box-shadow', SHADOW + BLUE) });
	});
	$('.tmenu_inner').mouseleave(function() {
		$(this).animate({
				backgroundColor: GRAY
			}, 100, function() { $(this).css('box-shadow', '') } );
	});
	
});

