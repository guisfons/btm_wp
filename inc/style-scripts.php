<?php
define('ASSETS_VERSION','1');

/**
 * Enqueue scripts and styles that are used on every page
 * Dequeue unused scripts and styles
 */
function themeFiles() {
    wp_deregister_script('jquery');
    wp_dequeue_style('wp-block-library');
    
    wp_register_style('style', get_stylesheet_directory_uri() . '/assets/css/main.min.css', array(), ASSETS_VERSION, 'screen');
    wp_enqueue_style('style');

    enqueueTargetAssets(getTargetType());
}
add_action('wp_enqueue_scripts', 'themeFiles');