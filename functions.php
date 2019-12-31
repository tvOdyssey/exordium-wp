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

# Subtitle Support
function my_wp_subtitle_page_part_support() {
	add_post_type_support( 'my_post_type', 'wps_subtitle' );
}
add_action( 'init', 'my_wp_subtitle_page_part_support' );

# Include Javascript Files
function exordium_register_js() {
  wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/plugins/fontawesome/all.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'scrollMonitor', get_template_directory_uri() . '/assets/js/scrollMonitor.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'svg-injector', get_template_directory_uri() . '/assets/js/svg-injector.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'flatpicker', get_template_directory_uri() . '/assets/js/flatpicker.js', array ( 'jquery' ), 1.0,true);
  wp_enqueue_script( 'flickity', get_template_directory_uri() . '/assets/js/flickity.js', array ( 'jquery' ), 1.0,  true);
  wp_enqueue_script( 'rangeSlider', get_template_directory_uri() . '/assets/js/ion.rangeSlider.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'polyr', get_template_directory_uri() . '/assets/js/plyr.polyfilled.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'prism', get_template_directory_uri() . '/assets/js/prism.js', array ( 'jquery' ), 1.0,true);
  wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.pollyfilled.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'twitterFetcher', get_template_directory_uri() . '/assets/js/twitterFetcher.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'typed', get_template_directory_uri() . '/assets/js/typed.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_script( 'smartWizard', get_template_directory_uri() . '/assets/js/jquery.smartWizard.js', array ( 'jquery' ), 1.0, true);
}
add_action( 'init', 'exordium_register_js' );

# Include CSS Files
function exordium_register_css() {

}
add_action( 'init', 'exordium_register_css' );

?>
