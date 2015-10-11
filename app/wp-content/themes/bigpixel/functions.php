<?php
/**
 * Enqueue scripts and styles
 */
function bigpixel_scripts() {
	wp_enqueue_style( 'bigpixel-style', get_template_directory_uri() . '/css/application.css' );
	wp_enqueue_script( 'bigpixel-script', get_template_directory_uri() . '/js/script.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'bigpixel_scripts' );

add_filter('show_admin_bar', '__return_false');
