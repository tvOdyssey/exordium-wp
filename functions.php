<?php

/**
 * Exordium Wordpress Functions Page
 * Tie wordpress to this theme
 */

# Add support for the wordpress html <title> tag.
if ( !function_exists( 'exordium_setup' ) ) {
    function exordium_setup() {
        add_theme_support( 'title-tag' );
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

?>
