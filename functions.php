<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//


add_image_size( 'recipe-thumb', 400, 400, true ); 

// Adds classes for custom post types to body_class() and post_class()
function fb_add_body_class( $class ) {
	$post_type = 'recipe'; // the Post Type

	if ( get_query_var('post_type') === $post_type ) { // only, if post type is active
		$class[] = $post_type;
		$class[] = 'type-' . $post_type;
	}

	return $class;
}
add_filter( 'body_class', 'fb_add_body_class' );