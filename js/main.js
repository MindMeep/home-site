$(function() {
	$('.ajax-popup-link').magnificPopup({
		type: 'ajax',
		gallery:{
    		enabled:true
  		}
	});
	/*$('.work').waypoint(function(direction) {
		if(direction == 'up')
			$('header').fadeOut();
		else
			$('header').fadeIn();
	}, { offset: 70 });*/
});