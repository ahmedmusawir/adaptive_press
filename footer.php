	<!-- FOOTER -->
	<footer>

		<div class="footer-widget-area">
	
			<div class="container">
	
				<div class="row">
	
					<div class="col-md-3 col-sm-6 col-xs-12">
						<?php echo "footer widget 1"; ?>
					</div>
					<!-- end footer col-md-3 -->
	
					<div class="col-md-3 col-sm-6 col-xs-12">
						<?php echo "footer widget 2"; ?>
						
					</div>
					<!-- end footer col-md-3 -->
					
					<div class="col-md-6 col-sm-12 col-xs-12">
						<?php echo "footer widget 3"; ?>
						
					</div>
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
