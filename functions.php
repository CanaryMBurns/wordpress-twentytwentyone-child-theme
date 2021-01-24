<?php

/* CSS */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}

/* JS */
add_action('wp_enqueue_scripts', 'my_theme_enqueue_js', 999);
function my_theme_enqueue_js() {
    wp_register_script('child-js',
        get_stylesheet_directory_uri() . '/js/main.js', 
        array()
    );
    wp_enqueue_script('child-js');
}