<?php get_header(); ?>

<!-- MAIN CONTENT -->
	<div class="container main-content">
	
		<div class="row">
	
			<div class="col-md-9 article-container-fix">

				<div class="articles">

					<?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>

						<article class="clearfix">
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

							<?php if ( has_post_thumbnail()) : ?>

								<figure class="article-preview-image">
									<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
								</figure>

							<?php endif; ?>

							<?php the_content( __('Read More &raquo;'), 'adaptive-framework' ); ?>

						</article>

						<hr class="fancy-hr" />


					<?php endwhile; else : ?>
						
						<h1><?php _e('No posts were found!', 'adaptive-framework'); ?></h1>

					<?php endif; ?>
									

					<div class="articles-nav clearfix">
						
						<p class="articles-nav-prev"><a href="#">Older Posts</a></p>
						<p class="articles-nav-next"><a href="#">Newer Posts</a></p>

					</div>
					<!-- end articles nav -->

				</div>
				<!-- end articles class -->
				
			</div>
			<!-- end col-md-9 -->
	
			<aside class="col-md-3 main-sidebar">

				<?php get_sidebar(); ?>

			</aside>
	
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

<?php get_footer(); ?>