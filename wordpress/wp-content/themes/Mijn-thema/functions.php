<?php
/**
 * Theme functions and definitions
 */

function theme_setup() {
    // Enable support for various WordPress features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo', array('width' => 120, 'height' => 40));

    // Register navigation menu
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'your-text-domain'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts() {
    // Enqueue stylesheets
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue scripts
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
