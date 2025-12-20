<?php
/**
 * Webbiecorn Starter Theme Functions
 *
 * @package Webbiecorn_Starter
 * @version 2.3.0
 * 
 * ==========================================================================
 * ARCHITECTURE
 * ==========================================================================
 * 
 * This file serves as a loader for modular PHP includes.
 * All functionality is organized in the /inc/ directory:
 * 
 * /inc/
 * ├── setup.php       - Theme setup, image sizes, body classes
 * ├── enqueue.php     - Scripts & styles (CSS conditional, local GSAP)
 * ├── nav-walker.php  - Custom navigation walker class
 * ├── customizer.php  - Theme customizer settings
 * ├── cpt.php         - Custom Post Types (Portfolio)
 * ├── helpers.php     - Helper functions, lazy loading
 * ├── cleanup.php     - WP head cleanup, disable emojis
 * └── schema.php      - Schema.org structured data (JSON-LD)
 * 
 * ==========================================================================
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Define theme constants
 */
define('WEBBIECORN_VERSION', '2.3.0');
define('WEBBIECORN_DIR', get_template_directory());
define('WEBBIECORN_URI', get_template_directory_uri());
define('WEBBIECORN_INC', WEBBIECORN_DIR . '/inc');

/**
 * Load theme modules
 */

// Theme setup (add_theme_support, menus, image sizes)
require_once WEBBIECORN_INC . '/setup.php';

// Scripts and styles enqueue
require_once WEBBIECORN_INC . '/enqueue.php';

// Custom navigation walker
require_once WEBBIECORN_INC . '/nav-walker.php';

// Theme customizer settings
require_once WEBBIECORN_INC . '/customizer.php';

// Custom Post Types
require_once WEBBIECORN_INC . '/cpt.php';

// Helper functions
require_once WEBBIECORN_INC . '/helpers.php';

// Head cleanup (remove version, disable emojis)
require_once WEBBIECORN_INC . '/cleanup.php';

// Schema.org structured data
require_once WEBBIECORN_INC . '/schema.php';
