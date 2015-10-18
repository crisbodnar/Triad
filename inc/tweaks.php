<?php
/**
 * Created by PhpStorm.
 * User: crisb
 * Date: 25-Aug-15
 * Time: 7:33 PM
 * @package triad
 * @since triad 1.0
 */

/**shows home link*/
function triad_page_menu_args($args){
	$args['show_time'] = true;
	return $args;
}
add_filter('wp_page_menu_args', 'triad_page_menu_args');

/**adds custom classes*/
function triad_body_classes($classes){
	if(is_multi_author()){
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter('body_class', 'triad_body_classes');

function triad_enhanced_image_navigation($url, $id){
	if(!is_attachment() && !wp_attachment_is_image($id))
		return $url;
	$image = get_post($id);
	if(!empty($image->post_parent) && $image->post_parent != $id)
		$url .= '#main';
	return $url;
}
add_filter('attachment_link', 'triad_enhanced_image_navigation', 10, 2);
