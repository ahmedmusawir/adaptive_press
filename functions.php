<?php 
/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 );


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

 /*===========================================================================
 =            Add Theme Support for Post Thumbnails, Post Formats            =
 ===========================================================================*/
 
 if ( function_exists('add_theme_support') ) {
 	
 	add_theme_support('post-formats', array('link', 'quote', 'gallery') );
 	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails', array('post') );
	set_post_thumbnail_size( 310, 310, true );
	add_image_size( 'custom-blog-image', 784, 350 );

 }
 
 /*-----  End of Add Theme Support for Post Thumbnails, Post Formats  ------*/

 /*====================================
 =            Localization            =
 ====================================*/
 
 function custom_theme_localization() {
 	$lang_dir = THEMEROOT . '/lang';

 	load_theme_textdomain( 'adaptive-framework', $lang_dir );
 }

 add_action( 'after_theme_setup', 'custom_theme_localization' );
 
 /*-----  End of Localization  ------*/
 
 
 
 

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

/*=====================================
=            Load JS Files            =
=====================================*/

    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function load_custom_scripts() {
		wp_enqueue_script( 'menu_script', THEMEROOT . '/js/script.js', array( 'jquery' ), false, true);
		wp_enqueue_script( 'my_video_script', THEMEROOT . '/js/myFitVid.js', array( 'jquery' ), false, true);

		if ( is_singular() ) wp_enqueue_script( "comment-reply" );
	}

	add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );


/*-----  End of Load JS Files  ------*/

/*===============================================================
=            Set the max width of the uploaded media            =
===============================================================*/

if ( !isset($content_width) ) $content_width = 784;

/*-----  End of Set the max width of the uploaded media  ------*/





/*=========================================
=            Register Sidebars            =
=========================================*/
function theme_sidebar_widgets_init() {

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

}

add_action( 'widgets_init', 'theme_sidebar_widgets_init' );

/*-----  End of Register Sidebars  ------*/

/*====================================================
=            Function to display comments            =
====================================================*/

function adaptive_comments( $comment, $args, $depth ) {
	$GLOBAL[ 'comment' ] = $comment;

	if ( get_comment_type() == 'pingback' || get_comment_type() == 'trackback' ) : ?>

		<li class="pingback" id="comment-<?php comment_ID();  ?>">
			<article <?php comment_class('clearfix'); ?>>
				<header>
					<h5><?php _e( 'Pingback:', 'adaptive-framework' ); ?></h5>
					<p><?php edit_comment_link(); ?></p>
				</header>

				<p><?php comment_author_link(); ?></p>
			</article>
		</li>

	<?php elseif ( get_comment_type() == 'comment' ) : ?>

		<li id="comment-<?php comment_ID(); ?>">
			<article <?php comment_class( 'clearfix' ); ?>>
				<header>
					<h5><?php comment_author_link(); ?></h5>
					<p><span>on <?php comment_date(); ?> <?php comment_time(); ?> - </span>
					<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])) ); ?>
					</p>
				</header>

				<figure class="comment-avatar">
					
					<?php 
						$avatar_size = 80;

						if ( $comment->comment_parent != 0 ) {
							$avatar_size = 64;
						}

						echo get_avatar( $comment, $avatar_size );

					?>

				</figure>

				<?php if ( $comment->comment_approved == '0') : ?>

				<p class="awaiting-moderation">Your comment is awaiting moderation</p>

				<?php endif; ?>

				<?php comment_text(); ?>

			</article>
		<!-- </li> WP Closes it by itself ... IMPORTANT!!-->

	<?php  endif;	
}

/*-----  End of Function to display comments  ------*/

/*============================================
=            Custom Comments Form            =
============================================*/

function adaptive_custom_comment_form( $defaults ) {

	$defaults[ 'comment_notes_before' ] = '';
	$defaults[ 'comment_notes_after' ] = '';
	$defaults[ 'id_form' ] = 'comment-form';
	$defaults[ 'comment_field' ] = '<p><textarea name="comment" id="comment" cols="30" rows="10"></textarea></p>';


	return $defaults;
}

add_filter( 'comment_form_defaults', 'adaptive_custom_comment_form' );

function adaptive_custom_comment_fields() {

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? "aria-required='true'" : ' ');

	$fields = array(

		'author' => '<p>' . '<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' />' .
					'<label for="author">' . __('Name', 'adaptive-framework') . ' ' . ($req ? '*' : '') . '</label>' . '</p>',

		'email' => '<p>' . '<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . ' />' .
					'<label for="email">' . __('Email', 'adaptive-framework') . ' ' . ($req ? '*' : '') . '</label>' . '</p>',

		'url' => '<p>' . '<input type="text" id="url" name="url" value="' . esc_attr($commenter['comment_author_url']) . '" ' . $aria_req . ' />' .
					'<label for="url">' . __('Website', 'adaptive-framework') . '</label>' . '</p>',


	);


	return $fields;
}

add_filter( 'comment_form_default_fields', 'adaptive_custom_comment_fields' );


/*-----  End of Custom Comments Form  ------*/

/*==========  Custom Widget  ==========*/
include_once ('functions/widget-ad-260.php');
//include_once ('functions/shortcodes.php'); [Insert this as plug-in]
include_once ('functions/adaptive-customizer.php');















































