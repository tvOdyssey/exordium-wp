<?php

# Exordium Wordpress Theme Functions
if ( !function_exists( 'exordium_setup' ) ) {
    function exordium_setup() {
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'exordium_setup' );
}

?>
