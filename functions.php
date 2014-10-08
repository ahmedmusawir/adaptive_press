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

 /*===========================================================================
 =            Add Theme Support for Post Thumbnails, Post Formats            =
 ===========================================================================*/
 
 if ( function_exists('add_theme_support') ) {
 	
 	add_theme_support('post-formats', array('link', 'quote', 'gallery') );

	add_theme_support( 'post-thumbnails', array('post') );
 }
 
 /*-----  End of Add Theme Support for Post Thumbnails, Post Formats  ------*/
 
 

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













































