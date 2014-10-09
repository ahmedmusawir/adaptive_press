<?php get_header(); ?>

<!-- MAIN CONTENT -->
	<div class="container main-content">
	
		<div class="row">
	
			<div class="col-md-9 article-container-fix">

				<div class="articles">
					<?php if ( have_posts() ) : ?>

						<div class="addtional-content">
							<h2>
								<?php _e('Search Results for: ', 'adaptive-framework'); ?><h3><?php echo get_search_query(); ?></h3>
							</h2>
						</div>
					<hr />

					<?php while ( have_posts()) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; else : ?>
						
						<div class="additional-content">
						
							<h2>
								<?php _e('No result was found for: ', 'adaptive-framework'); ?><h3><?php echo get_search_query(); ?></h3>
							</h2>
							
						</div>

					<?php endif; ?>
									

					<div class="articles-nav clearfix">
						
						<p class="articles-nav-prev"><?php next_posts_link( __('&larr; Older Posts', 'adaptive-framework' )); ?></p>
						<p class="articles-nav-next"><?php previous_posts_link( __('Newer Posts &rarr;', 'adaptive-framework' )); ?></p>

					</div>
					<!-- end articles nav -->

				</div>
				<!-- end articles class -->
				
			</div>
			<!-- end col-md-9 -->
	
			<aside class="col-md-3 main-sidebar">

				<?php get_sidebar('main-sidebar'); ?>

			</aside>
	
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

<?php get_footer(); ?>