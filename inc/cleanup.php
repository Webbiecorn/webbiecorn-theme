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
 * Optimize Assets - Dequeue unused scripts and styles
 * Reduces HTTP requests on non-shop pages by removing Gutenberg and WooCommerce assets.
 */
function webbiecorn_optimize_assets() {
    // 1. Remove Gutenberg Block Library CSS from loading on the frontend
    // The theme is "hand-coded" and does not rely on default block styles.
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');

    // 2. Dequeue WooCommerce styles and scripts on non-WooCommerce pages
    if (class_exists('WooCommerce')) {
        // Only load WC assets on shop-related pages (Shop, Product, Cart, Checkout, My Account)
        if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page()) {
            wp_dequeue_style('woocommerce-layout');
            wp_dequeue_style('woocommerce-smallscreen');
            wp_dequeue_style('woocommerce-general');
            wp_dequeue_style('woocommerce_frontend_styles');
            wp_dequeue_style('woocommerce-inline');

            wp_dequeue_script('wc-add-to-cart');
            wp_dequeue_script('woocommerce');
            wp_dequeue_script('wc-cart-fragments');
            wp_dequeue_script('wc-checkout');
            wp_dequeue_script('wc-add-to-cart-variation');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-cart');
            wp_dequeue_script('wc-chosen');
        }
    }
}
add_action('wp_enqueue_scripts', 'webbiecorn_optimize_assets', 100);
