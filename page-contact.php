
<?php 
/**
*
* Template Name: Contact Page
*
**/

?><?php get_header(); ?>

	<!-- MAIN CONTENT -->
	<div class="container main-content">
	
		<div class="row">
	
			<div class="col-md-9 article-container-fix">

				<div class="articles">

				<?php if ( have_posts()) : while( have_posts()) : the_post(); ?>
					<article class="clearfix">
						<header>
							
							<h1 class="page-header">
								<?php the_title(); ?>
							</h1>

						</header>

						<?php 

						if ( current_user_can('edit_post', $post->ID )) {
							edit_post_link( __('Edit This', 'adaptive-framework'), '<p class="article-meta-page">', '</p>' );

							} 
						?>

						<?php if ( has_post_thumbnail() ) : ?>

							<figure class="article-full-image">
							<?php 
								$attr = array(
									'class' => 'img-responsive'
								); 
							?>
									<?php the_post_thumbnail( 'full', $attr ); ?>
							</figure>

						<?php else : ?>

						<hr />

						<?php endif; ?>

						<?php the_content(); ?>

						<hr />
						
						<form action="#" method="post" id="contact-form">
							<p>
								<input type="text" name="contact-author" id="contact-author" placeholder="" />
								<label for="contact-author">Name (required)</label>
							</p>
							<p>
								<input type="text" name="contact-email" id="contact-email" placeholder="" />
								<label for="contact-email">Email (required)</label>
							</p>
							<p>
								<input type="text" name="contact-url" id="contact-url" placeholder="" />
								<label for="contact-url">Website</label>
							</p>

							<p>
								<textarea name="contact-message" id="contact-message" cols="50" rows="10"></textarea>
							</p>

							<p>
								<input type="submit" name="" value="Send Message">
							</p>
						</form>
						<!-- end contact form  -->
				


					</article>
					<!-- end article tag -->

				
				<?php endwhile; else : ?>

				<article>
					<h1><?php _e('No posts were found!', 'adaptive-framework'); ?></h1>
				</article>

				<?php endif; ?>


				</div>
				<!-- end articles class -->

				<div class="comments-area" id="comments">
						
					<?php comments_template('', true); ?>

				</div>
				<!-- end comments-area -->
				
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