<?php 
//Prevent the direct loading of this file 
if ( !empty( $_SERVER[ 'SCRIPT-FILENAME']) && basename( $_SERVER['SCRIPT_FILENAME']) == 'comments.php') {
	die(__('You cannot access this file dirctory.', 'adaptive-framework'));
}

//Check if post is pwd protected 
if ( post_password_required()) : ?>

<p>
	<?php _e('This post is password protected. Enter the password to view the comments.', 'adaptive-framework'); ?>
	<?php return; ?>
</p>

<?php endif;

if ( !comments_open() && !is_page() && post_type_supports( get_post_type(), 'comments' )) :  ?>

	<p><?php _e('Comments are closed.', 'adaptive-framework'); ?></p>

<?php elseif ( have_comments() ) : ?>

	<a href="#respond" class="article-add-comments">+</a>
	<h3>
		<?php comments_number( __('No Comments', 'adaptive-framework'), __('One Comment', 'adaptive-framework'), __('% Comments', 'adaptive-framework') ); ?>
	</h3>

	<ol class="commentslist">
		<?php //wp_list_comments( 'callback=adaptive_comments' ); ?>
		<?php wp_list_comments(); ?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<div class="comments-nav-section clearfix">

			<p class="pull-left"><?php previous_comments_link( __('&larr; Older Comments', 'adaptive-framework') ); ?></p>
			<p class="pull-right"><?php next_comments_link( __('Newer Comments &rarr;', 'adaptive-framework' ) ); ?></p>
			
		</div>
		<!-- end comments-nav-section -->
	<?php endif; ?>

<?php endif;

// Display comment form 
comment_form();

?>
