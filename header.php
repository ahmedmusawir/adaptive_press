<!DOCTYPE html>
<!-- [if IE 8]> <html lang="en" class="ie8"> <![endif] -->
<!-- [if !IE]><! -->
<html <?php language_attributes(); ?>> 
<!-- <![endif] -->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="content">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title>Adaptive Blog</title>

	<!-- Bootstrap CSS -->
	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic' rel='stylesheet' type='text/css'> -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo IMAGES; ?>/icons/favicon.ico">
	<!-- <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png"> -->
	<!-- <link rel="apple-touch-icon" sizes="72/72" href="images/icons/apple-touch-icon-72x72.png"> -->
	<!-- <link rel="apple-touch-icon" type="114/114" href="images/icons/apple-touch-icon-114x114.png"> -->
</head>
<body>

	<header class="main-header" id="top">

		<div class="top-menu-container">

			<div class="container">

				<nav class="top-menu-navigation clearfix">
					
					<?php    /**
						* Displays a navigation menu
						* @param array $args Arguments
						*/
						$args = array(
							'theme_location' => 'top-menu',
							'menu' => '',
							'container' => 'ul',
							'container_class' => 'menu-{menu-slug}-container',
							'container_id' => '',
							'menu_class' => 'menu',
							'menu_id' => '',
							'echo' => true,
							'fallback_cb' => 'wp_page_menu',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth' => 0,
							'walker' => ''
						);
					
						wp_nav_menu( $args ); ?>

				</nav>
				<!-- end top-menu-navigation -->

			<a href="#" class="small-button blue" id="rwd-top-nav-btn"><?php _e('Select a page ...', 'adaptive-framework') ?></a>
			<div class="rwd-top-nav">
			</div> <!-- end rwd-top-nav -->	

			</div>
			<!-- end container -->
			
		</div>
		<!-- end top-menu-container -->

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 logo-container">
					<h1 class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- <img src="http://lorempixel.com/300/100/abstract" alt="Ad"> -->
							<img src="<?php echo IMAGES; ?>/logo.png" alt="<?php bloginfo('name' ); ?> | <?php bloginfo('description' ); ?>">
						</a>
					</h1>
				</div>
				<!-- end col-md-3 -->

				<div class="col-md-6 col-sm-6 clearfix top-ad">

				<?php 
						//Get options 
					$options = get_option( 'adaptive_custom_settings' );
				?>
					
				<?php if ( $options['display_top_ad'] && $options['top_ad'] != '') : ?>
					<figure class="ad-block align-right">
						<a href="<?php echo $options['top_ad_link']; ?>">
							<img src="<?php print $options['top_ad'] ?>" alt="Ad">
						</a>
					</figure>

				<?php endif; ?>
				
				</div>
				<!-- end col-md-9 -->
			</div>
			<!-- end row -->
			<hr />

			<nav class="main-navigation clearfix">
				<?php    /**
					* Displays a navigation menu
					* @param array $args Arguments
					*/
					$args = array(
						'theme_location' => 'main-menu',
						'menu' => '',
						'container' => 'ul',
						'container_class' => 'menu-{menu-slug}-container',
						'container_id' => '',
						'menu_class' => 'menu',
						'menu_id' => '',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth' => 0,
						'walker' => ''
					);
				
					wp_nav_menu( $args ); ?>
			</nav>
			<!-- end main-navigation -->

			<a href="#" class="button blue" id="rwd-main-nav-btn"><?php _e('Select a page ...', 'adaptive-framework') ?></a>
			<div class="rwd-main-nav">
			</div> <!-- end rwd-top-nav -->

		</div>
		<!-- end container -->
	<?php wp_head(); ?>
	</header>
	<!-- end main-header -->