<?php
/**
 * Security Enhancements
 *
 * @package Webbiecorn_Starter
 * @since 2.3.1
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add security headers to prevent MIME-sniffing.
 *
 * @since 2.3.1
 */
function webbiecorn_add_security_headers() {
    header('X-Content-Type-Options: nosniff');
}
add_action('send_headers', 'webbiecorn_add_security_headers');
