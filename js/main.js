$(function() {
	$('.ajax-popup-link').magnificPopup({
		type: 'ajax',
		gallery:{
    		enabled:true
  		}
	});
	$('header').waypoint(function(direction) {
		if(direction == 'up')
			$('header>div').css({"position":"absolute","opacity":1});
		else
			$('header>div').css({"position":"fixed","opacity":0.95});
	});
});