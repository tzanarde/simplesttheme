<?php

function simplesttheme_load_scripts(){
    wp_enqueue_style('simplesttheme-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700&display=swap', array(), null);
    wp_enqueue_style('scripts', get_template_directory_uri() . '/js/scripts.js', array(), true);
}

add_action('wp_enqueue_scripts', 'simplesttheme_load_scripts');
