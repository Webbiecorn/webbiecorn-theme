<?php
/**
 * Scripts and Styles Enqueue
 *
 * @package Webbiecorn_Starter
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue Scripts and Styles
 * Optimized: Local GSAP, conditional CSS loading
 */
function webbiecorn_starter_scripts() {
    $theme_uri = get_template_directory_uri();
    $version = defined('WEBBIECORN_VERSION') ? WEBBIECORN_VERSION : '2.3.0';
    
    // =========================================================================
    // FONTS
    // =========================================================================
    wp_enqueue_style(
        'webbiecorn-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // =========================================================================
    // CSS - Smart Bundling by Bolt ⚡
    // =========================================================================
    // A common bundle is loaded on all pages. Then, page-specific bundles
    // are loaded conditionally to balance performance and maintainability.

    // 1. Common Bundle (always loaded)
    wp_enqueue_style('wc-bundle-common', $theme_uri . '/assets/css/bundle-common.css', array('webbiecorn-fonts'), $version);
    
    // Main stylesheet (fallback for any remaining styles)
    wp_enqueue_style(
        'webbiecorn-starter-style',
        get_stylesheet_uri(),
        array('wc-bundle-common'),
        $version
    );
    
    // =========================================================================
    // CSS - Conditional Bundles
    // =========================================================================
    
    // Homepage
    if (is_front_page()) {
        wp_enqueue_style('wc-bundle-front-page', $theme_uri . '/assets/css/bundle-front-page.css', array('wc-bundle-common'), $version);
    }
    
    // Portfolio page - V2 clean design
    if (is_page('portfolio') || is_page('projecten')) {
        wp_enqueue_style('wc-bundle-portfolio', $theme_uri . '/assets/css/bundle-portfolio.css', array('wc-bundle-common'), $version);
    }
    
    // Service pages with pricing
    if (is_page('webdesign') || is_page('diensten') || is_page('hosting') || is_page('onderhoud') || is_page('branding') || is_page('seo-analyse')) {
        wp_enqueue_style('wc-bundle-services', $theme_uri . '/assets/css/bundle-services.css', array('wc-bundle-common'), $version);
    }
    
    // Other standard pages (that are not the front page, portfolio, or a service page)
    if (is_page() && !is_front_page() && !is_page('portfolio') && !is_page('projecten') && !is_page('webdesign') && !is_page('diensten') && !is_page('hosting') && !is_page('onderhoud') && !is_page('branding') && !is_page('seo-analyse')) {
        wp_enqueue_style('wc-bundle-pages', $theme_uri . '/assets/css/bundle-pages.css', array('wc-bundle-common'), $version);
    }
    
    // =========================================================================
    // GSAP Animation Library - LOCAL (no CDN dependency)
    // =========================================================================
    
    // GSAP Core
    wp_enqueue_script('gsap', $theme_uri . '/assets/js/vendor/gsap.min.js', array(), '3.12.5', array('strategy' => 'defer', 'in_footer' => true));
    
    // ScrollTrigger - scroll-based animations
    wp_enqueue_script('gsap-scrolltrigger', $theme_uri . '/assets/js/vendor/ScrollTrigger.min.js', array('gsap'), '3.12.5', array('strategy' => 'defer', 'in_footer' => true));
    
    // Observer - touch/scroll/pointer detection (only on pages that need it)
    if (is_front_page() || is_page('portfolio')) {
        wp_enqueue_script('gsap-observer', $theme_uri . '/assets/js/vendor/Observer.min.js', array('gsap'), '3.12.5', array('strategy' => 'defer', 'in_footer' => true));
    }
    
    // TextPlugin - text animation effects (only on homepage)
    if (is_front_page()) {
        wp_enqueue_script('gsap-textplugin', $theme_uri . '/assets/js/vendor/TextPlugin.min.js', array('gsap'), '3.12.5', array('strategy' => 'defer', 'in_footer' => true));
    }
    
    // Main JavaScript (depends on GSAP)
    wp_enqueue_script('webbiecorn-starter-script', $theme_uri . '/assets/js/main.js', array('gsap', 'gsap-scrolltrigger'), $version, array('strategy' => 'defer', 'in_footer' => true));
    
    // GSAP Animations - global site animations
    wp_enqueue_script('webbiecorn-animations', $theme_uri . '/assets/js/animations.js', array('gsap', 'gsap-scrolltrigger'), $version, array('strategy' => 'defer', 'in_footer' => true));
    
    // Portfolio V2 - scroll animations (only on portfolio page)
    if (is_page('portfolio') || is_page('projecten')) {
        wp_enqueue_script('webbiecorn-portfolio-v2', $theme_uri . '/assets/js/portfolio-v2.js', array('gsap', 'gsap-scrolltrigger'), $version, array('strategy' => 'defer', 'in_footer' => true));
    }
}
add_action('wp_enqueue_scripts', 'webbiecorn_starter_scripts');

/**
 * Add preconnect for Google Fonts
 */
function webbiecorn_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'webbiecorn_resource_hints', 10, 2);
