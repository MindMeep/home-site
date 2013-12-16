$(function() {
	$('.ajax-popup-link').magnificPopup({
		type: 'ajax',
		gallery:{
    		enabled:true
  		}
	});
	$('header').waypoint(function(direction) {
		if(direction == 'up')
			$('header>div').css("position","absolute");
		else
			$('header>div').css("position","fixed");
	});
});