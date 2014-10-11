<?php 

function adaptive_customize_register( $wp_customize ) {
	//Top Ad 
	$wp_customize->add_section('adaptive_ad', array(
		'title' => __('Top Ad', 'adaptive_framework'),
		'description' => __('Allows you to upload an ad banner to display on the top of the page', 'adaptive_framework'),
		'priority' => '36'
	));


	//Add setting for checkbox
	$wp_customize->add_setting('adaptive_custom_settings[display_top_ad]', array(
		'default' => 0,
		'type' => 'option',
		'sanitize_callback' => 'esc_url_raw'
	));

	//Add control for checkbox
	$wp_customize->add_control('adaptive_custom_settings[display_top_ad]', array(
		'label' => __('Display Top Ad?', 'adaptive_framework'),
		'section' => 'adaptive_ad',
		'settings' => 'adaptive_custom_settings[display_top_ad]',
		'type' => 'checkbox'
	));

	//Add setting for ad image
	$wp_customize->add_setting('adaptive_custom_settings[top_ad]', array(
		'default' => IMAGES . '/top-ad-block.jpg',
		'type' => 'option',
		'sanitize_callback' => 'esc_url_raw'

	));

	//Add control for ad image
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'top_ad', array(
		'label' => __('Upload the Top Banner Image', 'adaptive_framework'),
		'section' => 'adaptive_ad',
		'settings' => 'adaptive_custom_settings[top_ad]'
		)
	));

	//Add setting for ad link
	$wp_customize->add_setting('adaptive_custom_settings[top_ad_link]', array(
		'default' => 'http://htmlfive.info',
		'type' => 'option',
		'sanitize_callback' => 'esc_url_raw'

	));

	//Add control for ad link
	$wp_customize->add_control('adaptive_custom_settings[top_ad_link]', array(
		'label' => __('Link to target website', 'adaptive_framework'),
		'section' => 'adaptive_ad',
		'settings' => 'adaptive_custom_settings[top_ad_link]',
		'type' => 'text'
	));
}

add_action( 'customize_register', 'adaptive_customize_register' );





























