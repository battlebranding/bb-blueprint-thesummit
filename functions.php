<?php

/**
 * Load all of the styles
 *
 * @since 0.1.0
 */
function bb_the_summit_load_css() {
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Permanent+Marker|Sedgwick+Ave+Display', false, null, 'all' );
    wp_enqueue_style( 'bb-blueprint-the-summit', get_stylesheet_directory_uri() . '/assets/css/the-summit.css', false, null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'bb_the_summit_load_css', 20 );
