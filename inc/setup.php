<?php
/**
 * Theme Setup Functions
 *
 * @package Webbiecorn_Starter
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function webbiecorn_starter_setup() {
    // Add title tag support
    add_theme_support('title-tag');
    
    // Add post thumbnails support
    add_theme_support('post-thumbnails');
    
    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'webbiecorn-starter'),
        'footer'    => __('Footer Menu', 'webbiecorn-starter'),
    ));
    
    // Add wide alignment support for Gutenberg
    add_theme_support('align-wide');
    
    // Add responsive embeds support
    add_theme_support('responsive-embeds');
    
    // WooCommerce Support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'webbiecorn_starter_setup');

/**
 * Add custom image sizes
 */
function webbiecorn_starter_image_sizes() {
    add_image_size('wc-hero', 1200, 800, true);
    add_image_size('wc-portfolio', 800, 500, true);
    add_image_size('wc-thumbnail', 400, 300, true);
}
add_action('after_setup_theme', 'webbiecorn_starter_image_sizes');

/**
 * Add body classes
 */
function webbiecorn_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'webbiecorn_body_classes');

/**
 * Add security headers
 *
 * @since 2.3.0
 */
function webbiecorn_add_security_headers() {
    header('X-Frame-Options: SAMEORIGIN');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
add_action('send_headers', 'webbiecorn_add_security_headers');
