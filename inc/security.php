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
 * Add essential security headers to every response.
 *
 * - X-Frame-Options: Prevents clickjacking attacks.
 * - X-Content-Type-Options: Prevents MIME-sniffing.
 * - Referrer-Policy: Protects user privacy by controlling referrer information.
 */
function webbiecorn_add_security_headers() {
    header('X-Frame-Options: SAMEORIGIN');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
add_action('send_headers', 'webbiecorn_add_security_headers');
