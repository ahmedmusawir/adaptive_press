<?php 
/**
*
* Template Name: Archives Page
*
**/

?>
<?php get_header(); ?>

	<!-- MAIN CONTENT -->
	<div class="container main-content">
	
		<div class="row">
	
			<div class="col-md-9 article-container-fix">

				<div class="articles">

					<article class="clearfix">
						<header>
							
							<h1 class="page-header">
								<?php the_title(); ?>
							</h1>

							<?php 

							if ( current_user_can('edit_post', $post->ID )) {
								edit_post_link( __('Edit This', 'adaptive-framework'), '<p class="article-meta-page">', '</p>' );

								} 
							?>

						</header>

						<hr />

						<section class="col-md-6 col-sm-6">
							<h4><?php _e( 'Archive by Month', 'adaptive-framework' ); ?></h4>
							<ul>
								<?php wp_get_archives( 'type=monthly' ); ?>
							</ul>
						</section>
						<section class="col-md-6 col-sm-6">
							<h4><?php _e( 'Archive by Subject', 'adaptive-framework' ); ?></h4>
							<ul>
								<?php wp_list_categories( 'title_li=' ); ?>
							</ul>
						</section>


					</article>
					<!-- end article tag -->
			
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