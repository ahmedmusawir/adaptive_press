<?php 
/*==========  Template for standard post  ==========*/
?>

<article <?php post_class( 'clearfix' ); ?> id="post-<?php the_id(); ?>">
	<header>

	<?php 
		// Display the comments link if comments are  allowed and the post isn't pwd protected 
		if ( comments_open() && !post_password_required() ) {
			comments_popup_link( '0', '1', '%', 'article-meta-comments' );
		}

	?>
		<p class="article-meta-categories"><?php echo the_category( '&nbsp;&nbsp;/&nbsp;&nbsp;' ); ?></p>
			<h1>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
		<p class="article-meta-extra"><?php the_time( get_option( 'date_format' ) ); ?>, by <?php the_author_posts_link(); ?></p>
	</header>

	<?php 

		$gallery_args = array(
			'post_parent' => $post->ID,
			'post_mime_type' => 'image'

		);

		$gallery_images = get_children( $gallery_args );

		if ( !empty( $gallery_images )) {

			$gallery_count = count( $gallery_images );
			$first_image = array_shift( $gallery_images );
			$dis_first_image = wp_get_attachment_image( $first_image->ID );

			// echo $gallery_count;
			// print_r($first_image);
			// echo $dis_first_image;
			// the_content();
	?>

		<figure class="article-preview-image ">
			<a href="<?php the_permalink(); ?>"><?php echo $dis_first_image; ?></a>
		</figure>

		<p><strong><?php printf( _n( 'This gallery %s photo.', 'This gallery contains %s photos.', $gallery_count, 'adaptive-framework'), $gallery_count); ?></strong></p>

	<?php 

		} 
		// end if block

	?>

</article>

<hr class="fancy-hr" />