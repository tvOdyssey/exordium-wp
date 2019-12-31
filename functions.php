<?php

/**
 * Exordium Wordpress Functions Page
 * Tie wordpress to this theme
 */

# Add customized supports for the exordium theme
if ( !function_exists( 'exordium_setup' ) ) {
    function exordium_setup() {

      # <title> support
      add_theme_support( 'title-tag' );

      # post and page features thumbnails
      add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
      add_image_size( 'fullwidth', 1920, 1080 );

    }

    add_action( 'after_setup_theme', 'exordium_setup' );
}

# Add support for the 3 main menus.
function exordium_new_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu', 'exordium' ),
      'hamburger-menu' => __( 'Hamburger Menu', 'exordium' ),
      'footer-menu' => __( 'Footer Menu', 'exordium' )
    )
  );
}
add_action( 'init', 'exordium_new_menus' );

# Include Javascript Files
function exordium_register_js() {

}
add_action( 'init', 'exordium_register_js' );

# Include CSS Files
function exordium_register_css() {

}
add_action( 'init', 'exordium_register_css' );

# Subtitle Support
function my_wp_subtitle_page_part_support() {
	add_post_type_support( 'my_post_type', 'wps_subtitle' );
}
add_action( 'init', 'my_wp_subtitle_page_part_support' );

?>
