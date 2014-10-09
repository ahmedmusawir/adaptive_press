<?php 
/**
*
* Template Name: Full Width Page
*
**/

?>
<?php get_header(); ?>

	<!-- MAIN CONTENT -->
	<div class="container main-content">
	
		<div class="row">
	
			<div class="col-md-12">

				<div class="articles">

					<article class="clearfix">
						<header class="header-404">
							
							<h1><?php _e('Page not found!', 'adaptive-framework'); ?></h1>

						</header>

						<hr />
					    <h4><?php _e('Oops! it seems you are looking for something that does not exit!', 'adaptive-framework'); ?></h4>

					    <div>
					    	<?php get_search_form(); ?>
					    </div>

					    <hr class="fancy-hr" />

						
					</article>
					<!-- end article tag -->
				
				</div>
				<!-- end articles class -->

			</div>
			<!-- end col-md-12 -->
	
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

<?php get_footer(); ?>