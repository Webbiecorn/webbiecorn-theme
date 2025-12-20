<?php
/**
 * Helper Functions
 *
 * @package Webbiecorn_Starter
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Helper function to get theme mod with default
 */
function wc_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * Add lazy loading to all images
 */
function webbiecorn_lazy_load_images($content) {
    // Add loading="lazy" to img tags that don't have it
    $content = preg_replace(
        '/<img(?![^>]*loading=)([^>]*)>/i',
        '<img loading="lazy"$1>',
        $content
    );
    return $content;
}
add_filter('the_content', 'webbiecorn_lazy_load_images');
add_filter('post_thumbnail_html', 'webbiecorn_lazy_load_images');
add_filter('get_avatar', 'webbiecorn_lazy_load_images');

/**
 * Add lazy loading attribute to wp_get_attachment_image
 */
function webbiecorn_attachment_image_attributes($attr) {
    $attr['loading'] = 'lazy';
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'webbiecorn_attachment_image_attributes');
