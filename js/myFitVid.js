(function ($) {
	// This is my fit video script
	// alert('I am myFitVid');
	// $('p').find('iframe').css('border', '1px solid red');

	var vidContainer = $('p').find('iframe');
	// console.log(vidContainer);

	if (vidContainer){
		$(vidContainer).removeAttr('height')
						.removeAttr('width')
						.removeAttr('frameborder')
						.addClass('embed-responsive-item');

		$(vidContainer).closest('p').addClass('embed-responsive embed-responsive-16by9');
	} 
	
})(jQuery);