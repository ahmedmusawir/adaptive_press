<?php 
/**
*
* Widget that displays a single 260x120px ad block
*
**/

class Adaptive_Ad_260_Widget extends WP_Widget {

	// Widget init 
	public function __construct() {

		parent::__construct(
			'adaptive_ad_260_w',
			'Custom Widget: 260x120px Ad',
			array('discription' => __('Displays a single 260x120 ad block', 'adaptive-framework'))
		);
	}

	// Output the widget option in the back-end
	public function form($instance)
	{
		$defaults = array(
			'title' => __('Ad 260x120', 'adaptive-framework'),
			'ad_img' => IMAGES . '/bottom-ad-block.jpg',
			'ad_link' => 'http://htmlfive.info'
		);

		$instance = wp_parse_args((array) $instance, $defaults );

		?>
		
		<!-- The Title -->
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'adaptive-framework') ?></label>
			<input type="text" 
				name="<?php echo $this->get_field_name('title') ?>" 
					value="<?php echo esc_attr( $instance['title'] ); ?>" 
						id="<?php echo $this->get_field_id('title'); ?>" />
		</p>

		<!-- The Ad Image -->
		<p>
			<label for="<?php echo $this->get_field_id('ad_img') ?>"><?php _e('Ad Image', 'adaptive-framework') ?></label>
			<input type="text" 
				name="<?php echo $this->get_field_name('ad_img') ?>" 
					value="<?php echo esc_attr( $instance['ad_img'] ); ?>" 
						id="<?php echo $this->get_field_id('ad_img'); ?>" />
		</p>

		<!-- The Ad Link -->
		<p>
			<label for="<?php echo $this->get_field_id('ad_link') ?>"><?php _e('Ad Link', 'adaptive-framework') ?></label>
			<input type="text" 
				name="<?php echo $this->get_field_name('ad_link') ?>" 
					value="<?php echo esc_attr( $instance['ad_link'] ); ?>" 
						id="<?php echo $this->get_field_id('ad_link'); ?>" />
		</p>

		<?php
	}

	//Process widget options for saving 
	public function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		//Title 
		$instance['title'] = strip_tags($new_instance['title']);

		//The Ad 
		$instance['ad_img'] = $new_instance['ad_img'];
		$instance['ad_link'] = $new_instance['ad_link'];

		return $instance;	
	}

	// Displays the widget on the page 
	public function widget($args, $instance)
	{
		extract($args);

		$title = apply_filters( 'widget_title', $instance['title'] );

		$ad_img = $instance['ad_img'];
		$ad_link = $instance['ad_link'];

		echo $before_widget;

		if ($title) {
			echo $before_title . $title . $after_title;
		}

		echo '<ul class="ad-260">';

		if ($ad_img) : ?>

		<li>
			<figure class="ad-block">
				<a href="<?php echo $ad_link ?>" ><img class="img-responsive" src="<?php echo $ad_img; ?>" alt="Ad 260" /></a>
			</figure>
		</li>

		<?php endif;

		echo '</ul>';

		echo $after_widget;
	}

}

register_widget('Adaptive_Ad_260_Widget');


































