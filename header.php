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
	<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">
	<!-- <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png"> -->
	<!-- <link rel="apple-touch-icon" sizes="72/72" href="images/icons/apple-touch-icon-72x72.png"> -->
	<!-- <link rel="apple-touch-icon" type="114/114" href="images/icons/apple-touch-icon-114x114.png"> -->
</head>
<body>

	<header class="main-header" id="top">

		<div class="top-menu-container">

			<div class="container">

				<nav class="top-menu-navigation clearfix">
					<ul>
						<li><a href="">Top Link 1</a></li>
						<li>
							<a href="">Dropdown</a>
							<ul>
								<li><a href="">Level 2 item 1</a></li>
								<li>
									<a href="">Level 2 item 2</a>
									<ul>
										<li><a href="">Level 3 item 1</a></li>
										<li><a href="">Level 3 item 2</a></li>
									</ul>
								</li>
								<li><a href="">Level 2 item 3</a></li>
							</ul>
						</li>
						<li><a href="">Top link 3</a></li>
					</ul>

				</nav>
				<!-- end top-menu-navigation -->

			<a href="#" class="small-button blue" id="rwd-top-nav-btn">Select a page ...</a>
			<div class="rwd-top-nav">
			</div> <!-- end rwd-top-nav -->	

			</div>
			<!-- end container -->
			
		</div>
		<!-- end top-menu-container -->

		<div class="container">
			<div class="row">
				<div class="col-md-6 logo-container">
					<h1 class="logo">
						<a href="">
							<!-- <img src="http://lorempixel.com/300/100/abstract" alt="Ad"> -->
							<img src="images/logo.png" alt="Adaptive">
						</a>
					</h1>
				</div>
				<!-- end col-md-3 -->

				<div class="col-md-6 clearfix top-ad">
					
					<figure class="ad-block align-right">
						<a href="">
							<img src="images/top-ad-block.jpg" alt="Ad">
						</a>
						<!-- <a href=""><img src="images/demo/ad-468x60.gif" alt="Ad"></a> -->
					</figure>
				
				</div>
				<!-- end col-md-9 -->
			</div>
			<!-- end row -->

			<hr />

			<nav class="main-navigation clearfix">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li>
						<a href="">Dropdown</a>
						<ul>
							<li><a href="">Level 2 item 1</a></li>
							<li>
								<a href="">Level 2 item 2</a>
								<ul>
									<li><a href="">Level 3 item 1</a></li>
									<li><a href="">Level 3 item 2</a></li>
								</ul>
							</li>
							<li><a href="">Level 2 item 3</a></li>
						</ul>
					</li>
					<li><a href="">Main link 3</a></li>
				</ul>
			</nav>
			<!-- end main-navigation -->

			<a href="#" class="button blue" id="rwd-main-nav-btn">Select a page ...</a>
			<div class="rwd-main-nav">
			</div> <!-- end rwd-top-nav -->

		</div>
		<!-- end container -->

	</header>
	<!-- end main-header -->