<?php
/**
 * Security Enhancements
 *
 * @package Webbiecorn_Starter
 * @since 2.4.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add security-related HTTP headers
 */
function webbiecorn_add_security_headers() {
    // Prevent clickjacking
    header('X-Frame-Options: SAMEORIGIN');

    // Prevent content sniffing
    header('X-Content-Type-Options: nosniff');

    // Control referrer information
    header('Referrer-Policy: strict-origin-when-cross-origin');

    // Content Security Policy (CSP) - A powerful but complex header.
    // It's commented out by default because a misconfiguration can easily
    // break site functionality (e.g., inline scripts, external assets).
    //
    // To enable, you must carefully build a policy that fits your site.
    // Start with a restrictive policy and gradually allow what's needed.
    // Example (very restrictive):
    // header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self';");
}
add_action('send_headers', 'webbiecorn_add_security_headers');
