<?php
/**
 * WordPress Head Cleanup
 *
 * @package Webbiecorn_Starter
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove WordPress version from head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Disable WordPress emoji scripts (not needed, causes CSP issues)
 */
function webbiecorn_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    
    // Remove from TinyMCE
    add_filter('tiny_mce_plugins', 'webbiecorn_disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'webbiecorn_disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'webbiecorn_disable_emojis');

function webbiecorn_disable_emojis_tinymce($plugins) {
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    }
    return array();
}

function webbiecorn_disable_emojis_remove_dns_prefetch($urls, $relation_type) {
    if ('dns-prefetch' == $relation_type) {
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
        $urls = array_diff($urls, array($emoji_svg_url));
    }
    return $urls;
}

/**
 * Remove unnecessary items from wp_head
 */
function webbiecorn_head_cleanup() {
    // RSD link
    remove_action('wp_head', 'rsd_link');
    // Windows Live Writer manifest
    remove_action('wp_head', 'wlwmanifest_link');
    // Shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');
    // REST API link
    remove_action('wp_head', 'rest_output_link_wp_head');
    // oEmbed discovery links
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    // REST API link in HTTP headers
    remove_action('template_redirect', 'rest_output_link_header', 11);
}
add_action('init', 'webbiecorn_head_cleanup');

/**
 * Performance cleanups: Dequeue unnecessary scripts/styles
 */
function webbiecorn_performance_cleanups() {
    // Disable WooCommerce cart fragments on non-shop pages
    if (function_exists('is_woocommerce')) {
        if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page()) {
            wp_dequeue_script('wc-cart-fragments');
        }
    }

    // Disable Gutenberg blocks on front page (custom HTML hero/sections used)
    if (is_front_page()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-block-style');
    }
}
add_action('wp_enqueue_scripts', 'webbiecorn_performance_cleanups', 100);
