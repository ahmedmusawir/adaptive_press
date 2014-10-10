<?php 
/*
	Plugin Name: Adaptive Shortcodes
	Plugin URI: www.htmlfive.info
	Description: This has short code for responsive video embed and button
	Version: 1.0
	Author: Da Moose 
	Author URI: http://www.htmlfive.info 
	License: GPL2

	Copyright 2012 Da Moose (email: ahmed.musawir@hotmail.com)

	This program is free software; you can redistribute it and/or modify 
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of 
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License 
	along with this program; if not, whire to the Free Software 
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
	
*/


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



