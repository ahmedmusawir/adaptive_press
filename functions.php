<?php 

/*========================================
=            Define Constants            =
========================================*/

define('THEMEROOT', get_stylesheet_directory_uri());
// echo THEMEROOT;
define('IMAGES', THEMEROOT . '/images');
// echo IMAGES;

/*-----  End of Define Constants  ------*/


/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);

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

/*=========================================
=            Register Sidebars            =
=========================================*/

if ( function_exists( 'register_sidebar')) {

	register_sidebar (
		array(
			'name' => __( 'Main Sidebar', 'adaptive-framework'),
			'id' => 'main-sidebar',
			'description' => __( 'The main sidebar area', 'adaptive-framework'),
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget' => '</div> <!-- end sidebar-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)

	);

	register_sidebar (
		array(
			'name' => __( 'Left Footer', 'adaptive-framework'),
			'id' => 'left-footer',
			'description' => __( 'The left footer area', 'adaptive-framework'),
			'before_widget' => '<div class="footer-sidebar-widget col-md-3 col-sm-6 col-xs-12">',
			'after_widget' => '</div> <!-- end footer-sidebar-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)

	);

	register_sidebar (
		array(
			'name' => __( 'Right Footer', 'adaptive-framework'),
			'id' => 'right-footer',
			'description' => __( 'The right footer area', 'adaptive-framework'),
			'before_widget' => '<div class="footer-sidebar-widget col-md-3 col-sm-6 col-xs-12">',
			'after_widget' => '</div> <!-- end footer-sidebar-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)

	);
}

/*-----  End of Register Sidebars  ------*/











































