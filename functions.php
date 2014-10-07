<?php 

/*========================================
=            Define Constants            =
========================================*/

define('THEMEROOT', get_stylesheet_directory_uri());
// echo THEMEROOT;
define('IMAGES', THEMEROOT . '/images');
// echo IMAGES;

/*-----  End of Define Constants  ------*/

/*=============================
=            Menus            =
=============================*/

function register_my_menus()
{
	register_nav_menus(array(
		'top-menu' => __('Top Menu', 'adaptive-framework'),
		'main-menu' => __('Main Menu', 'adaptive-framework')

	));
}

add_action( 'init', 'register_my_menus' );

/*-----  End of Menus  ------*/



