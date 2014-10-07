	<!-- FOOTER -->
	<footer>

		<div class="footer-widget-area">
	
			<div class="container">
	
				<div class="row">
	
					<?php get_sidebar( 'left-footer' ); ?>
					<!-- end footer col-md-3 -->
	
					
					<?php get_sidebar( 'right-footer' ); ?>
					<!-- end footer col-md-6 -->
					
				</div>
				<!-- end row -->
			</div>
			<!-- end footer container -->
		</div>
		<!-- end footer-widget-area -->

		<div class="container">
			<div class="copyright-container clearfix">
				<p class="top-link-footer"><a href="#top"><?php _e('Go to Top', 'adaptive-framework'); ?></a></p>
				<p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?>.</a></p>
			</div>
		</div> 
		<!-- end copyright-container's container -->
	
	</footer>
	
	<?php wp_footer(); ?>

<!-- JavaScript -->
<!-- <script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script> -->
<!-- <script src="js/script.js" type="text/javascript" charset="utf-8"></script> -->

</body>
</html>
