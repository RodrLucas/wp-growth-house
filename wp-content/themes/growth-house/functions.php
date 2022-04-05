<?php

function load_scripts(){
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), '1.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('main-media-768', get_template_directory_uri() . '/css/main-media-768.css', array(), '1.0', 'all');
    wp_enqueue_style('main-media-1024', get_template_directory_uri() . '/css/main-media-1024.css', array(), '1.0', 'all');
    wp_enqueue_style('header-media-1440', get_template_directory_uri() . '/css/header-media-1440.css', array(), '1.0', 'all');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0', 'all');

    wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');