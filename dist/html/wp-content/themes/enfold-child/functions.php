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

			/* Default
			--------------------------------------*/

			'style'									=> 'color: #ffffff; background-color: #2e9941;',
			'default_font'							=> 'Open Sans:400,600',
			'google_webfont'						=> 'Playfair Display:400,700',
			'color_scheme'							=> 'WormGUIDES',

			/* Header
			--------------------------------------*/

			'colorset-header_color-bg'              => '#ffffff',
			'colorset-header_color-bg2'             => '#f8f8f8',
			'colorset-header_color-primary'         => '#9cc2df',
			'colorset-header_color-secondary'       => '#9cc3df',
			'colorset-header_color-color'           => '#000000',
			'colorset-header_color-border'          => '#ebebeb',
			'colorset-header_color-img'             => '',
			'colorset-header_color-customimage'     => '',
			'colorset-header_color-pos'             => 'center center',
			'colorset-header_color-repeat'          => 'repeat',
			'colorset-header_color-attach'          => 'scroll',
			'colorset-header_color-heading'         => '#000000',
			'colorset-header_color-meta'            => '#969696',

			/* Main
			--------------------------------------*/

			'colorset-main_color-bg'                => '#ffffff',
			'colorset-main_color-bg2'               => '#f8f8f8',
			'colorset-main_color-primary'           => '#000000',
			'colorset-main_color-secondary'         => '#9cc3df',
			'colorset-main_color-color'             => '#b0b0b0',
			'colorset-main_color-border'            => '#ebebeb',
			'colorset-main_color-img'               => '',
			'colorset-main_color-customimage'       => '',
			'colorset-main_color-pos'               => 'center center',
			'colorset-main_color-repeat'            => 'repeat',
			'colorset-main_color-attach'            => 'scroll',
			'colorset-main_color-heading'           => '#222222',
			'colorset-main_color-meta'              => '#919191',

			/* Alternate
			--------------------------------------*/

			'colorset-alternate_color-bg'           => '#f8f8f8',
			'colorset-alternate_color-bg2'          => '#ffffff',
			'colorset-alternate_color-primary'      => '#000000',
			'colorset-alternate_color-secondary'    => '#9cc3df',
			'colorset-alternate_color-color'        => '#999999',
			'colorset-alternate_color-border'       => '#ebebeb',
			'colorset-alternate_color-img'          => '',
			'colorset-alternate_color-customimage'  => '',
			'colorset-alternate_color-pos'          => 'center center',
			'colorset-alternate_color-repeat'       => 'repeat',
			'colorset-alternate_color-attach'       => 'scroll',
			'colorset-alternate_color-heading'      => '#222222',
			'colorset-alternate_color-meta'         => '#919191',

			/* Footer
			--------------------------------------*/

			'colorset-footer_color-bg'              => '#35383c',
			'colorset-footer_color-bg2'             => '#52565c',
			'colorset-footer_color-primary'         => '#ffffff',
			'colorset-footer_color-secondary'       => '#ebebeb',
			'colorset-footer_color-color'           => '#e8e8e8',
			'colorset-footer_color-border'          => '#35383c',
			'colorset-footer_color-img'             => '',
			'colorset-footer_color-customimage'     => '',
			'colorset-footer_color-pos'             => 'center center',
			'colorset-footer_color-repeat'          => 'repeat',
			'colorset-footer_color-attach'          => 'scroll',
			'colorset-footer_color-heading'         => '#ffffff',
			'colorset-footer_color-meta'            => '#777777',

			/* Socket
			--------------------------------------*/

			'colorset-socket_color-bg'              => '#282b2e',
			'colorset-socket_color-bg2'             => '#52565c',
			'colorset-socket_color-primary'         => '#ffffff',
			'colorset-socket_color-secondary'       => '#ebebeb',
			'colorset-socket_color-color'           => '#e8e8e8',
			'colorset-socket_color-border'          => '#282b2e',
			'colorset-socket_color-img'             => '',
			'colorset-socket_color-customimage'     => '',
			'colorset-socket_color-pos'             => 'center center',
			'colorset-socket_color-repeat'          => 'repeat',
			'colorset-socket_color-attach'          => 'scroll',
			'colorset-socket_color-heading'         => '#ffffff',
			'colorset-socket_color-meta'            => '#777777',

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
