<?php
/**
 * Custom Post Types
 *
 * @package Webbiecorn_Starter
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

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
