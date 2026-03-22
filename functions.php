<?php

if (!is_admin()) {
    add_filter('show_admin_bar', '__return_false');
}

function shopco_theme_setup() {
    // Let WordPress manage the <title> tag
    add_theme_support( 'title-tag' );

    // Enable Featured Images
    add_theme_support( 'post-thumbnails' );

    // CRITICAL: Declare WooCommerce Support
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'shopco_theme_setup' );

?>