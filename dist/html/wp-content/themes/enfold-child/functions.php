<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file.
* Wordpress will use those functions instead of the original functions then.
*/

/*Replaces "Blog - Latest News" with the post title :*/

add_filter('avf_title_args', 'fix_single_post_title', 10, 2);
function fix_single_post_title($args,$id)
{
	if ( $args['title'] == 'Blog - Latest News' )
	{
		$args['title'] = get_the_title($id);
		$args['link'] = get_permalink($id);
		$args['heading'] = 'h1';
	}

	return $args;
}

/* ADDS FULL WIDTH BANNER ATOP ALL PAGES - OR INTERIOR ONLY */
function after_head_image_func($content){
	if ( !is_home() && !is_front_page() ) {
		//echo "<div  align='center'><img class='avia_image' src='/wp-content/uploads/2015/12/maize-breeding-statistical-genetics-logo-1500-wide-cropped-centered-e5cc00.png' width='100%' /></div>";
	}
}
add_action('ava_after_main_container', 'after_head_image_func');

function my_myme_types($mime_types){
	$mime_types['ijm'] = 'image/ijm'; //Adding ijm extension
	return $mime_types;
}

add_filter('upload_mimes', 'my_myme_types', 1, 1);

	/*------------------------------------*\
	   Title
	\*------------------------------------*/

	// Notes...

	add_filter( 'avf_skin_options', 'wormguides_color_scheme' );

	function wormguides_color_scheme( $styles = "" ) {

		$styles["WormGUIDES"] = array(

			/* Color Scheme
			--------------------------------------*/

			// Name of scheme within list of choices

			'color_scheme'							=> 'WormGUIDES',

			/* Title
			--------------------------------------*/

			'style'									=> 'color: #ffffff; background-color: #2e9941;',

			/* Fonts
			--------------------------------------*/

			'default_font'							=> 'Open Sans:400,600',
			'google_webfont'						=> 'Playfair Display:400,700',

			/* Header (Logo Area)
			--------------------------------------*/

			// Background color
			'colorset-header_color-bg'              => '#ffffff',

			// Alternate background color
			'colorset-header_color-bg2'             => '#eeeeee',

			// Primary color
			'colorset-header_color-primary'         => '#2e9941',

			// Hightlight color
			'colorset-header_color-secondary'       => '#7bcd89',

			// Font color
			'colorset-header_color-color'           => '#333333',

			// Secondary font color
			'colorset-header_color-meta'            => '#cccccc',

			// Heading color
			'colorset-header_color-heading'         => '#333333',

			// Border color
			'colorset-header_color-border'          => '#cccccc',

			// Background image
			'colorset-header_color-img'             => '',

			// Custom background image
			'colorset-header_color-customimage'     => '',

			// Position of the image
			'colorset-header_color-pos'             => 'center center',

			// Repeat
			'colorset-header_color-repeat'          => 'repeat',

			// Attachment
			'colorset-header_color-attach'          => 'scroll',

			/* Main
			--------------------------------------*/

			// Background color
			'colorset-main_color-bg'                => '#ffffff',

			// Alternate background color
			'colorset-main_color-bg2'               => '#f8f8f8',

			// Primary color
			'colorset-main_color-primary'           => '#000000',

			// Highlight color
			'colorset-main_color-secondary'         => '#9cc3df',

			// Font color
			'colorset-main_color-color'             => '#b0b0b0',

			// Secondary font color
			'colorset-main_color-meta'              => '#919191',

			// Heading color
			'colorset-main_color-heading'           => '#222222',

			// Border color
			'colorset-main_color-border'            => '#ebebeb',

			// Background image
			'colorset-main_color-img'               => '',

			// Custom background image
			'colorset-main_color-customimage'       => '',

			// Position of the image
			'colorset-main_color-pos'               => 'center center',

			// Repeat
			'colorset-main_color-repeat'            => 'repeat',

			// Attachment
			'colorset-main_color-attach'            => 'scroll',


			/* Alternate
			--------------------------------------*/

			// Background color
			'colorset-alternate_color-bg'           => '#f8f8f8',

			// Alternate background color
			'colorset-alternate_color-bg2'          => '#ffffff',

			// Primary color
			'colorset-alternate_color-primary'      => '#000000',

			// Highlight color
			'colorset-alternate_color-secondary'    => '#9cc3df',

			// Font color
			'colorset-alternate_color-color'        => '#999999',

			// Secondary font color
			'colorset-alternate_color-meta'         => '#919191',

			// Heading color
			'colorset-alternate_color-heading'      => '#222222',

			// Border color
			'colorset-alternate_color-border'       => '#ebebeb',

			// Background image
			'colorset-alternate_color-img'          => '',

			// Custom background image
			'colorset-alternate_color-customimage'  => '',

			// Position of the image
			'colorset-alternate_color-pos'          => 'center center',

			// Repeat
			'colorset-alternate_color-repeat'       => 'repeat',

			// Attachment
			'colorset-alternate_color-attach'       => 'scroll',

			/* Footer
			--------------------------------------*/

			// Background color
			'colorset-footer_color-bg'              => '#2e9941', // $primary-color

			// Alternate background color
			'colorset-footer_color-bg2'             => '#52565c',

			// Primary color
			'colorset-footer_color-primary'         => '#ffffff',

			// Highlight color
			'colorset-footer_color-secondary'       => '#4cb15e',

			// Font color
			'colorset-footer_color-color'           => '#e8e8e8',

			// Secondary font color
			'colorset-footer_color-meta'            => '#ff0000',

			// Heading color
			'colorset-footer_color-heading'         => '#ffffff',

			// Border colors
			'colorset-footer_color-border'          => '#2e9941', // $primary-color

			// Background image
			'colorset-footer_color-img'             => '',

			// Custom background image
			'colorset-footer_color-customimage'     => '',

			// Position of the image
			'colorset-footer_color-pos'             => 'center center',

			// Repeat
			'colorset-footer_color-repeat'          => 'repeat',

			// Attachment
			'colorset-footer_color-attach'          => 'scroll',

			/* Socket
			--------------------------------------*/

			// Background color
			'colorset-socket_color-bg'              => '#18802a', // $primary-color-dark

			// Alternate background color
			'colorset-socket_color-bg2'             => '#52565c',

			// Primary color
			'colorset-socket_color-primary'         => '#ffffff',

			// Highlight color
			'colorset-socket_color-secondary'       => '#ebebeb',

			// Font color
			'colorset-socket_color-color'           => '#e8e8e8',

			// Secondary font color
			'colorset-socket_color-meta'            => '#777777',

			// Heading color
			'colorset-socket_color-heading'         => '#ffffff',

			// Border color
			'colorset-socket_color-border'          => '#18802a', // $primary-color-dark

			// Background image
			'colorset-socket_color-img'             => '',

			// Custom background image
			'colorset-socket_color-customimage'     => '',

			// Position of the image
			'colorset-socket_color-pos'             => 'center center',

			// Repeat
			'colorset-socket_color-repeat'          => 'repeat',

			// Attach
			'colorset-socket_color-attach'          => 'scroll',

			/* Body Background
			--------------------------------------*/

			'color-body_style'                      => 'stretched',
			'color-body_color'                      => '#ffffff',
			'color-body_attach'                     => 'scroll',
			'color-body_repeat'                     => 'repeat',
			'color-body_pos'                        => 'center center',
			'color-body_img'                        => '',
			'color-body_customimage'                => '',

		);

		return $styles;

	}
