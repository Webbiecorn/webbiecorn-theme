<?php
/**
 * Webbiecorn Starter Theme Functions
 *
 * @package Webbiecorn_Starter
 * @version 2.0
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
}
add_action('after_setup_theme', 'webbiecorn_starter_setup');

/**
 * Enqueue Scripts and Styles
 */
function webbiecorn_starter_scripts() {
    // Google Fonts - Inter
    wp_enqueue_style(
        'webbiecorn-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Main stylesheet
    wp_enqueue_style(
        'webbiecorn-starter-style',
        get_stylesheet_uri(),
        array('webbiecorn-fonts'),
        '2.1.0'
    );
    
    // =========================================================================
    // GSAP Animation Library (Free Plugins)
    // =========================================================================
    
    // GSAP Core
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );
    
    // ScrollTrigger - scroll-based animations
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.5',
        true
    );
    
    // Observer - touch/scroll/pointer detection
    wp_enqueue_script(
        'gsap-observer',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Observer.min.js',
        array('gsap'),
        '3.12.5',
        true
    );
    
    // TextPlugin - text animation effects (free)
    wp_enqueue_script(
        'gsap-textplugin',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js',
        array('gsap'),
        '3.12.5',
        true
    );
    
    // Main JavaScript (depends on GSAP)
    wp_enqueue_script(
        'webbiecorn-starter-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array('gsap', 'gsap-scrolltrigger'),
        '2.1.0',
        true
    );
    
    // GSAP Animations - global site animations
    wp_enqueue_script(
        'webbiecorn-animations',
        get_template_directory_uri() . '/assets/js/animations.js',
        array('gsap', 'gsap-scrolltrigger'),
        '2.1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'webbiecorn_starter_scripts');

/**
 * Custom Walker for Navigation
 */
class Webbiecorn_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'wc-nav__item';
        
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $output .= '<li' . $class_names . '>';
        
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        $atts['class']  = 'wc-nav__link';
        
        if (in_array('current-menu-item', $classes)) {
            $atts['class'] .= ' active';
        }
        
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        $title = apply_filters('the_title', $item->title, $item->ID);
        
        $item_output = $args->before ?? '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= ($args->link_before ?? '') . $title . ($args->link_after ?? '');
        $item_output .= '</a>';
        $item_output .= $args->after ?? '';
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

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
 * Disable Gutenberg for pages (optional - remove if you want to use Gutenberg)
 */
// function webbiecorn_disable_gutenberg($can_edit, $post_type) {
//     if ($post_type === 'page') {
//         return false;
//     }
//     return $can_edit;
// }
// add_filter('use_block_editor_for_post_type', 'webbiecorn_disable_gutenberg', 10, 2);

/**
 * Register Custom Post Type: Portfolio
 */
function webbiecorn_register_portfolio_cpt() {
    $labels = array(
        'name'               => __('Portfolio', 'webbiecorn-starter'),
        'singular_name'      => __('Project', 'webbiecorn-starter'),
        'menu_name'          => __('Portfolio', 'webbiecorn-starter'),
        'add_new'            => __('Nieuw Project', 'webbiecorn-starter'),
        'add_new_item'       => __('Nieuw Project Toevoegen', 'webbiecorn-starter'),
        'edit_item'          => __('Project Bewerken', 'webbiecorn-starter'),
        'view_item'          => __('Project Bekijken', 'webbiecorn-starter'),
        'all_items'          => __('Alle Projecten', 'webbiecorn-starter'),
        'search_items'       => __('Zoek Projecten', 'webbiecorn-starter'),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'project'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );
    
    register_post_type('portfolio', $args);
    
    // Portfolio Categories
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name'          => __('Categorieën', 'webbiecorn-starter'),
            'singular_name' => __('Categorie', 'webbiecorn-starter'),
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'portfolio-categorie'),
    ));
}
add_action('init', 'webbiecorn_register_portfolio_cpt');

/**
 * Theme Customizer Settings
 */
function webbiecorn_starter_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('webbiecorn_hero', array(
        'title'    => __('Hero Sectie', 'webbiecorn-starter'),
        'priority' => 30,
    ));
    
    // Hero Kicker
    $wp_customize->add_setting('hero_kicker', array(
        'default'           => 'Studio voor web & content',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_kicker', array(
        'label'   => __('Hero Kicker Tekst', 'webbiecorn-starter'),
        'section' => 'webbiecorn_hero',
        'type'    => 'text',
    ));
    
    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Websites, flows en content die helder zijn — en blijven.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Titel', 'webbiecorn-starter'),
        'section' => 'webbiecorn_hero',
        'type'    => 'textarea',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Webbiecorn helpt bedrijven en makers met moderne, snelle en rustige sites waar bezoekers direct begrijpen wat jij doet.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitel', 'webbiecorn-starter'),
        'section' => 'webbiecorn_hero',
        'type'    => 'textarea',
    ));
    
    // Contact Info Section
    $wp_customize->add_section('webbiecorn_contact', array(
        'title'    => __('Contact Informatie', 'webbiecorn-starter'),
        'priority' => 35,
    ));
    
    // Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'info@webbiecorn.nl',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('E-mailadres', 'webbiecorn-starter'),
        'section' => 'webbiecorn_contact',
        'type'    => 'email',
    ));
    
    // Phone
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Telefoonnummer', 'webbiecorn-starter'),
        'section' => 'webbiecorn_contact',
        'type'    => 'text',
    ));
    
    // Social Media Section
    $wp_customize->add_section('webbiecorn_social', array(
        'title'    => __('Social Media', 'webbiecorn-starter'),
        'priority' => 40,
    ));
    
    // LinkedIn
    $wp_customize->add_setting('social_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_linkedin', array(
        'label'   => __('LinkedIn URL', 'webbiecorn-starter'),
        'section' => 'webbiecorn_social',
        'type'    => 'url',
    ));
    
    // Instagram
    $wp_customize->add_setting('social_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_instagram', array(
        'label'   => __('Instagram URL', 'webbiecorn-starter'),
        'section' => 'webbiecorn_social',
        'type'    => 'url',
    ));
    
    // Twitter/X
    $wp_customize->add_setting('social_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_twitter', array(
        'label'   => __('Twitter/X URL', 'webbiecorn-starter'),
        'section' => 'webbiecorn_social',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'webbiecorn_starter_customize_register');

/**
 * Helper function to get theme mod with default
 */
function wc_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

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

/**
 * Remove WordPress version from head
 */
remove_action('wp_head', 'wp_generator');

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
