
<?php 
/**
* Template Name: Contact Page
**/
?>
<?php 
/*====================================================
=            Contact form submit function            =
====================================================*/

// Function for email address validation
	function isEmail($verify_email) {
	
		return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$verify_email));
	
	}

	$error_name = false;
	$error_email = false;
	$error_message = false;

	if ( isset($_POST['contact-submit']) ) {
		// echo 'form submitted';
		// Initialize variables for the form fields 
		
		$name = '';
		$email = '';
		$website = '';
		$message = '';
		$receiver_email = '';

		// Get the name 
		if (trim($_POST['contact-author']) === '') {
			$error_name = true;
			// echo $error_name;
		} else {
			$name = trim($_POST['contact-author']);
			// echo $name;
		}

		// Get the email 
		// echo $_POST['contact-email'];
		// echo isEmail(trim($_POST['contact-email']));

		if (trim($_POST['contact-email']) === '' || !isEmail(trim($_POST['contact-email']))) {
			$error_email = true;
			// echo $error_email;
			// echo 'no email';
		} else {
			$email = trim($_POST['contact-email']);
			// echo $email;
		}

		// Get the name 
			$website = trim($_POST['contact-url']);
			// echo $website;

		// Get the message 
		if (trim($_POST['contact-message']) === '') {
			$error_message = true;
			// echo $error_message;
			// echo 'no message';
		} else {
			$message = stripslashes( trim($_POST['contact-message']) );
			// echo $message;
		}

		// Check if we have errors 
		if ( !$error_name && !$error_email && !$error_message ) {
			// Get the receive email
			$receiver_email = 'moosetheblogger@gmail.com';

			$subject = 'You have been contacted by ' . $name;

			$body = "You have been contacted by $name. Their message is: " . PHP_EOL . PHP_EOL;
			$body .= $message . PHP_EOL . PHP_EOL;
			$body .= "You can contact $name via email at $email";

			if ($website != '') {
				$body .= " and visit their website at $website";
			}
			$body .= PHP_EOL . PHP_EOL;

			// echo $body; 
			
			$header = "From $email" . PHP_EOL;
			$header .= "Reply-To: $email" . PHP_EOL;
			$header .= "MIME-Version: 1.0" . PHP_EOL;
			$header .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
			$header .= "Content-Transfer-Encoding: quoted_printable" . PHP_EOL;

			if ( mail( $receiver_email, $subject, $body, $headers )) {
				$email_sent = true;
			} else {
				$email_sent_error = true;
			}
		}

	}


/*-----  End of Contact form submit function  ------*/
?>

<?php get_header(); ?>

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

							<?php 

								if ( current_user_can('edit_post', $post->ID )) {
									edit_post_link( __('Edit This', 'adaptive-framework'), '<p class="article-meta-page">', '</p>' );

								} 
							?>

						</header>

							<?php if ( isset($email_sent) && $email_sent == true ) : ?>
								<h3><?php _e('Success!', 'adaptive-framework') ?></h3>
								<p><?php _e('You have successfully sent the message.', 'adaptive-framework'); ?></p>

							<?php elseif ( isset($email_sent_error) && $email_sent_error == true ) : ?>
							<!-- end of contact form elseif block -->
								<h3><?php _e('Error!', 'adaptive-framework'); ?></h3>
								<p><?php _e('We couldn\'t send the message at this time. Please try again later.', 'adaptive-framework'); ?></p>

							<?php else : ?>
							<!-- end of contact form else block -->


						<?php the_content(); ?>

						<hr />
						
						<form action="<?php the_permalink(); ?>" method="post" id="contact-form">
							<p  <?php if ($error_name) echo 'class="p-errors"'; ?>>
								<input type="text" name="contact-author" id="contact-author" value="<?php if (isset($_POST['contact-author'])) echo $_POST['contact-author']; ?>" />
								<label for="contact-author">Name (required)</label>
							</p>
							<p <?php if ($error_email) echo 'class="p-errors"'; ?>>
								<input type="text" name="contact-email" id="contact-email" value="<?php if (isset($_POST['contact-email'])) echo $_POST['contact-email']; ?>" />
								<label for="contact-email">Email (required)</label>
							</p>
							<p>
								<input type="text" name="contact-url" id="contact-url" value="<?php if (isset($_POST['contact-url'])) echo $_POST['contact-url']; ?>" />
								<label for="contact-url">Website</label>
							</p>

							<p <?php if ($error_message) echo 'class="p-errors"'; ?>>
								<textarea name="contact-message" id="contact-message" cols="50" rows="10">
									<?php if (isset($_POST['contact-message'])) echo stripslashes($_POST['contact-message']); ?>
								</textarea>
							</p>

							<input type="hidden" name="contact-submit" id="contact-submit" value="true">

							<p>
								<input type="submit" name="" value="Send Message">
							</p>
						</form>
						<!-- end contact form  -->

							<?php endif; ?>
							<!-- end of contact form if block -->

					</article>
					<!-- end article tag -->

				
				<?php endwhile; else : ?>
				<!-- end main loop else block -->

				<article>
					<h1><?php _e('No posts were found!', 'adaptive-framework'); ?></h1>
				</article>

				<?php endif; ?>
				<!-- end of main loop if block -->


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