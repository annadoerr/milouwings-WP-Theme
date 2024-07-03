<?php

function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css',
        array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support ('menus');

register_nav_menus(
    [
        'top-menu' => 'Hauptmenü',
        'footer-menu' => 'Fußmatte',
    ]
);

add_theme_support ('post-thumbnails');
add_image_size('smallest', 800, 400, true);
add_image_size('largest', 1280, 600, true);

function tn_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

?>
