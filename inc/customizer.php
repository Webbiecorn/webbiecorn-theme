<?php
/**
 * Theme Customizer Settings
 *
 * @package Webbiecorn_Starter
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

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
