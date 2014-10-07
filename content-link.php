<?php 
/*==========  Template for link post  ==========*/
?>

<article <?php post_class( 'clearfix' ); ?> id="post-<?php the_id(); ?>">
	<header>

		<span class="post-format-quote"></span>
		<p class="article-meta-categories"><?php echo the_category( '&nbsp;&nbsp;/&nbsp;&nbsp;' ); ?></p>
			<h1>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
		<p class="article-meta-extra"><?php the_time( get_option( 'date_format' ) ); ?>, by <?php the_author_posts_link(); ?></p>

	</header>

	<div class="url-container">
		
		<p><?php the_title(); ?></p>
		<?php the_content(); ?>

	</div>
	<!-- end quote-container -->

</article>

<hr class="fancy-hr" />