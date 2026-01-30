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
 * Optimize asset loading
 * Dequeue WooCommerce assets on non-shop pages
 * Dequeue block library on front page
 *
 * @since 2.3.1
 */
function webbiecorn_optimize_assets() {
    // 1. Dequeue WooCommerce assets on non-shop pages
    // Check if WooCommerce is active and we are not on a shop-related page
    if (class_exists('WooCommerce')) {
        $is_woo_page = false;
        if (function_exists('is_woocommerce') && is_woocommerce()) $is_woo_page = true;
        if (function_exists('is_cart') && is_cart()) $is_woo_page = true;
        if (function_exists('is_checkout') && is_checkout()) $is_woo_page = true;
        if (function_exists('is_account_page') && is_account_page()) $is_woo_page = true;

        // Also check for the custom shop page template
        if (is_page_template('page-shop.php')) $is_woo_page = true;

        if (!$is_woo_page) {
            wp_dequeue_style('woocommerce-layout');
            wp_dequeue_style('woocommerce-smallscreen');
            wp_dequeue_style('woocommerce-general');
            wp_dequeue_style('woocommerce-inline');
            wp_dequeue_script('wc-add-to-cart');
            wp_dequeue_script('cart-fragments');
            wp_dequeue_script('woocommerce');
            wp_dequeue_script('wc-cart-fragments');
        }
    }

    // 2. Dequeue block library CSS on front page (since it's all custom HTML)
    // This significantly reduces the amount of unused CSS on the most visited page
    if (is_front_page()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-blocks-style');
        wp_dequeue_style('wc-all-blocks-style'); // WooCommerce blocks
    }
}
add_action('wp_enqueue_scripts', 'webbiecorn_optimize_assets', 99);
