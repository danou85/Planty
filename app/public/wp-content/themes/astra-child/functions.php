<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Enqueue les styles du thème parent et du thème enfant
function my_theme_enqueue_styles() {
    $parent_style = 'astra-style'; // Handle du thème parent

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Enregistrement des menus
function planty_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'text-domain' ),
        'footer'  => __( 'Menu Footer', 'text-domain' )
    ) );
}
add_action( 'after_setup_theme', 'planty_register_menus' );
