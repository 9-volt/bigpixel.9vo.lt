<?php
/**
 * Enqueue scripts and styles
 */
function bigpixel_scripts() {
	wp_enqueue_style( 'bigpixel-style', get_template_directory_uri() . '/css/application.css' );
	wp_enqueue_script( 'jquery-2', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), null, true);
	wp_enqueue_script( 'bigpixel-script', get_template_directory_uri() . '/js/script.js', array(), null, true );
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'bigpixel_scripts' );

add_filter('show_admin_bar', '__return_false');

add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 560 * 2, 260 * 2, true );

// Replace width and height with 560 and 260 respectively
function update_post_thumbnail_html($html, $post_id = 0, $post_thumbnail_id = 0 , $size = null, $attr = array()) {
  return preg_replace(
   array('/width="\d+"/i', '/height="\d+"/i'),
   array(sprintf('width="%d"', 560), sprintf('height="%d"', 260)),
   $html);
}
add_filter('post_thumbnail_html', 'update_post_thumbnail_html');

