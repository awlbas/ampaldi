<?php

// Disable emoji script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// Disable emoji style
remove_action( 'wp_print_styles', 'print_emoji_styles' );
add_action( 'wp_footer', 'my_deregister_scripts' );
// Disable wp-block-library-css
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
// Disable wp-embed-js
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}

// register menu 
function aldi_menus(){
  $locations = array(
    'primary' => "Desktop Primary Left Sidebar",
    'footer' => "Footer Menu Items"
  );
  register_nav_menus($locations);
}
add_action( 'init', 'aldi_menus' );

// tag dynamic
function aldi_theme_support(){
  add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'aldi_theme_support' );