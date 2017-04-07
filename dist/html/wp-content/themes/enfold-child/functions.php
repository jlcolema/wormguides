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
