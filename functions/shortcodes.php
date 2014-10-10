<?php 
/*===================================
=            Short Codes            =
===================================*/


function button( $atts, $content = null ) {
	extract(shortcode_atts(
		array(
			'color' => 'blue',
			'to' => ''
		), $atts)
	);

	return '<a href="'. $to .'" class="button '. $color .'">'. $content .'</a>';
}

add_shortcode( 'button', 'button' );



function video_embed($atts) {
		extract( shortcode_atts( 
			array( 
				'src'=>'' 
			), $atts ) 
		);
	
		// do shortcode actions here
		return '<div class="embed-responsive embed-responsive-16by9">' .
				'<iframe class="embed-responsive-item" src="'. $src .'" allowfullscreen></iframe>' .
				'</div>';
				
}

add_shortcode( 'video_embed', 'video_embed' );

/*-----  End of Short Codes  ------*/



