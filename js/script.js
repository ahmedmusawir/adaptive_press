jQuery(document).ready(function($) {

	// Cloning the top menu
	jQuery('.top-menu-navigation ul:first-child').clone().appendTo('.rwd-top-nav');

	// Toggling the top menu
	jQuery('#rwd-top-nav-btn').click(function(event){
		event.preventDefault();
		jQuery('.rwd-top-nav').slideToggle();
	});

	// Cloning the main menu
	jQuery('.main-navigation ul:first-child').clone().appendTo('.rwd-main-nav');

	// Toggling the main menu
	jQuery('#rwd-main-nav-btn').click(function(event){
		event.preventDefault();
		jQuery('.rwd-main-nav').slideToggle();
	});
});