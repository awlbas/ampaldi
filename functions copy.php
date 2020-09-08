<?php

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

// Disable dns-prefetch
remove_action( 'wp_head', 'wp_resource_hints', 2 );
// Disable emoji script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// Disable emoji style
remove_action( 'wp_print_styles', 'print_emoji_styles' );
// Disable the WP shortlink
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
// Disable the WordPress version i.e. -
remove_action( 'wp_head', 'wp_generator' );
// Disable the RSD link (EditURI)
remove_action( 'wp_head', 'rsd_link' );
// Disable the wlwmanifest link
remove_action( 'wp_head', 'wlwmanifest_link' );
// Disable wp-block-library-css | ada cara alternative
// remove_action( 'wp_head', 'wp_print_styles', 8 );
// Disable REST API link tag
remove_action('wp_head', 'rest_output_link_wp_head', 10);
// Disable oEmbed Discovery Links
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
// Disable REST API link in HTTP headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);