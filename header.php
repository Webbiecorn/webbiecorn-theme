<?php
/**
 * Header Template
 *
 * @package Webbiecorn_Starter
 */

if (!defined('ABSPATH')) {
    exit;
}

// Dynamic SEO Meta Data per pagina
$seo_data = array(
    'title' => 'Webbiecorn — Technische Webstudio voor Maatwerk Websites',
    'description' => 'Webbiecorn is een technische webstudio voor maatwerk websites, branding en digitale groei. Hand-coded, geen templates. Vanaf €300.',
    'keywords' => 'webdesign, website laten maken, maatwerk website, webdevelopment, branding, SEO, Nederland'
);

// Specifieke SEO per pagina
if (is_front_page()) {
    $seo_data = array(
        'title' => 'Webbiecorn — Maatwerk Websites & Webdesign | Technische Webstudio',
        'description' => 'Webbiecorn: technische webstudio voor maatwerk websites, branding en digitale groei. Hand-coded, geen templates. Persoonlijke aanpak vanaf €300.',
        'keywords' => 'maatwerk website, website laten maken, webdesign, webdevelopment, branding, SEO, technische webstudio'
    );
} elseif (is_page('diensten')) {
    $seo_data = array(
        'title' => 'Onze Diensten — Webdesign, Branding & SEO | Webbiecorn',
        'description' => 'Ontdek onze diensten: maatwerk webdesign, branding, SEO-optimalisatie en onderhoud. Transparante prijzen vanaf €300. Bekijk wat wij voor jou kunnen doen.',
        'keywords' => 'webdesign diensten, branding, SEO optimalisatie, website onderhoud, webdevelopment, tarieven'
    );
} elseif (is_page('over-ons') || is_page('over')) {
    $seo_data = array(
        'title' => 'Over Webbiecorn — Wie Wij Zijn | Technische Webstudio',
        'description' => 'Leer ons kennen: Webbiecorn is een technische webstudio met passie voor hand-coded websites. Persoonlijke service, geen templates, wel resultaat.',
        'keywords' => 'over webbiecorn, webstudio, webdesigner, webdeveloper, maatwerk websites'
    );
} elseif (is_page('contact')) {
    $seo_data = array(
        'title' => 'Contact — Neem Contact Op | Webbiecorn',
        'description' => 'Neem contact op met Webbiecorn voor een vrijblijvend gesprek over jouw website of branding project. Wij reageren binnen 24 uur.',
        'keywords' => 'contact webbiecorn, website offerte, webdesign contact, gratis advies'
    );
} elseif (is_page('portfolio') || is_page('projecten')) {
    $seo_data = array(
        'title' => 'Portfolio — Onze Projecten | Webbiecorn',
        'description' => 'Bekijk onze portfolio met maatwerk websites en branding projecten. Van concept tot launch, wij bouwen websites die werken.',
        'keywords' => 'portfolio, webdesign projecten, maatwerk websites, website voorbeelden'
    );
} elseif (is_page('hosting')) {
    $seo_data = array(
        'title' => 'Hosting & Onderhoud — Zorgeloos Online | Webbiecorn',
        'description' => 'Betrouwbare hosting en website onderhoud voor jouw maatwerk website. Snelle servers, SSL, backups en 24/7 support.',
        'keywords' => 'website hosting, website onderhoud, managed hosting, SSL certificaat, website support'
    );
} elseif (is_singular('post')) {
    $seo_data = array(
        'title' => get_the_title() . ' | Webbiecorn Blog',
        'description' => wp_strip_all_tags(get_the_excerpt()) ?: 'Lees het laatste nieuws en tips over webdesign, development en online marketing van Webbiecorn.',
        'keywords' => 'webdesign blog, website tips, online marketing, SEO tips'
    );
} else {
    // Fallback voor andere paginas
    $page_title = get_the_title();
    if ($page_title) {
        $seo_data['title'] = $page_title . ' | Webbiecorn';
        $excerpt = wp_strip_all_tags(get_the_excerpt());
        if ($excerpt) {
            $seo_data['description'] = $excerpt;
        }
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Title Tag -->
    <title><?php echo esc_attr($seo_data['title']); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo esc_attr($seo_data['description']); ?>">
    <meta name="keywords" content="<?php echo esc_attr($seo_data['keywords']); ?>">
    <meta name="author" content="Webbiecorn">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo is_front_page() ? esc_url(home_url('/')) : esc_url(get_permalink()); ?>">
    
    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="nl-NL" href="<?php echo is_front_page() ? esc_url(home_url('/')) : esc_url(get_permalink()); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo is_front_page() ? esc_url(home_url('/')) : esc_url(get_permalink()); ?>">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="<?php echo is_singular('post') ? 'article' : 'website'; ?>">
    <meta property="og:url" content="<?php echo is_front_page() ? esc_url(home_url('/')) : esc_url(get_permalink()); ?>">
    <meta property="og:title" content="<?php echo esc_attr($seo_data['title']); ?>">
    <meta property="og:description" content="<?php echo esc_attr($seo_data['description']); ?>">
    <meta property="og:image" content="<?php echo esc_url(home_url('/wp-content/uploads/2025/12/webbiecorn-og-image.png')); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="nl_NL">
    <meta property="og:site_name" content="Webbiecorn">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($seo_data['title']); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($seo_data['description']); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(home_url('/wp-content/uploads/2025/12/webbiecorn-og-image.png')); ?>">
    
    <!-- Structured Data / Schema.org -->
    <?php webbiecorn_output_schema(); ?>

    <!-- Google Analytics 4 (loads only after cookie consent) -->
    <script>
    window.wcCookieConsent = localStorage.getItem('wc_cookie_consent');
    if (window.wcCookieConsent === 'accepted') {
        var script = document.createElement('script');
        script.async = true;
        script.src = 'https://www.googletagmanager.com/gtag/js?id=G-WJ8K52V0ZF';
        document.head.appendChild(script);
        script.onload = function() {
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-WJ8K52V0ZF');
        };
    }
    </script>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url(home_url('/favicon.ico')); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(home_url('/favicon.ico')); ?>">
    <link rel="apple-touch-icon" href="<?php echo esc_url(home_url('/wp-content/uploads/2025/12/webbiecorn-logo-red.png')); ?>">
    
    <!-- Preload Critical Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"></noscript>
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#E30613">
    <meta name="msapplication-TileColor" content="#E30613">

    <?php wp_head(); ?>
    <style id="wc-header-critical">
    /* Critical Header Styles - Inline with !important to override any cached CSS */
    .wc-header{position:fixed!important;top:0!important;left:0!important;right:0!important;z-index:1000!important}
    .wc-header__container{max-width:1400px!important;margin:0 auto!important;padding:1rem 2rem!important}
    .wc-header__inner{display:flex!important;align-items:center!important;justify-content:space-between!important;background:rgba(15,15,35,0.95)!important;backdrop-filter:blur(20px)!important;-webkit-backdrop-filter:blur(20px)!important;border-radius:100px!important;padding:0.5rem 0.5rem 0.5rem 1.5rem!important;box-shadow:0 4px 30px rgba(0,0,0,0.3)!important;border:1px solid rgba(255,255,255,0.1)!important;transition:background 0.3s ease,box-shadow 0.3s ease!important}
    .wc-header.scrolled .wc-header__inner{background:rgba(15,15,35,0.75)!important;box-shadow:0 4px 20px rgba(0,0,0,0.2)!important}
    .wc-logo{display:flex!important;align-items:center!important;gap:0.75rem!important;text-decoration:none!important;flex-shrink:0!important}
    .wc-logo__icon{width:44px!important;height:44px!important;display:flex!important;align-items:center!important;justify-content:center!important;flex-shrink:0!important}
    .wc-logo__icon img{width:44px!important;height:44px!important;object-fit:contain!important}
    .wc-logo__text{font-weight:800!important;font-size:1.1rem!important;letter-spacing:0.02em!important;color:#ffffff!important;text-transform:uppercase!important;display:inline!important}
    .wc-nav{display:flex!important;align-items:center!important}
    .wc-nav__menu{display:flex!important;align-items:center!important;gap:0.25rem!important;list-style:none!important;margin:0!important;padding:0!important}
    .wc-nav__link{display:block!important;font-size:0.9rem!important;font-weight:500!important;color:rgba(255,255,255,0.7)!important;padding:0.6rem 1rem!important;border-radius:50px!important;text-decoration:none!important}
    .wc-nav__link:hover,.wc-nav__link.active{color:#ffffff!important}
    .wc-header__cta{display:inline-flex!important;align-items:center!important;gap:0.5rem!important;background:#E30613!important;color:#ffffff!important;font-size:0.9rem!important;font-weight:600!important;padding:0.75rem 1.5rem!important;border-radius:50px!important;text-decoration:none!important;margin-left:1rem!important;flex-shrink:0!important}
    .wc-menu-toggle{display:none!important;flex-direction:column;justify-content:center;gap:5px;width:44px!important;height:44px!important;padding:10px;background:rgba(255,255,255,0.1)!important;border:none!important;border-radius:12px!important;cursor:pointer;flex-shrink:0!important}
    .wc-menu-toggle span{display:block;width:100%;height:2px;background:#ffffff!important;border-radius:2px}
    .wc-header__mobile-actions{display:none!important;align-items:center;gap:0.5rem;flex-shrink:0!important}
    .wc-header__cta.mobile-only{display:none!important;margin-left:0!important;padding:0.6rem 1rem!important;font-size:0.8rem!important;white-space:nowrap}
    @media(max-width:1024px){
        .wc-nav{display:none!important}
        .wc-header__cta.desktop-only{display:none!important}
        .wc-header__cta.mobile-only{display:inline-flex!important}
        .wc-header__mobile-actions{display:flex!important}
        .wc-menu-toggle{display:flex!important}
        .wc-header__container{padding:0.75rem 1rem!important}
        .wc-header__inner{padding:0.5rem 0.5rem 0.5rem 1rem!important}
    }
    @media(max-width:480px){
        .wc-logo__text{display:inline!important;font-size:0.7rem!important;font-weight:700!important;letter-spacing:0.05em!important;opacity:0.9!important}
        .wc-logo__icon,.wc-logo__icon img{width:32px!important;height:32px!important}
        .wc-logo{gap:0.4rem!important}
        .wc-header__cta.mobile-only{padding:0.45rem 0.7rem!important;font-size:0.65rem!important;border-radius:20px!important}
        .wc-header__cta.mobile-only svg{width:10px!important;height:10px!important}
        .wc-menu-toggle{width:36px!important;height:36px!important;padding:8px;border-radius:10px!important}
        .wc-header__mobile-actions{gap:0.5rem!important}
        .wc-header__inner{padding:0.35rem 0.35rem 0.35rem 0.6rem!important}
    }
    @media(max-width:380px){
        .wc-logo__text{display:inline!important;font-size:0.55rem!important}
        .wc-logo__icon,.wc-logo__icon img{width:28px!important;height:28px!important}
        .wc-header__cta.mobile-only{padding:0.4rem 0.6rem!important;font-size:0.6rem!important}
        .wc-menu-toggle{width:32px!important;height:32px!important;padding:6px}
    }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main" class="skip-link"><?php esc_html_e('Spring naar content', 'webbiecorn-starter'); ?></a>

<header class="wc-header" id="header">
    <div class="wc-header__container">
        <div class="wc-header__inner">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="wc-logo">
                <div class="wc-logo__icon">
                    <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/12/webbiecorn-logo-red.png')); ?>" alt="Webbiecorn">
                </div>
                <span class="wc-logo__text">WEBBIECORN</span>
            </a>

            <!-- Navigation -->
            <nav class="wc-nav" aria-label="<?php esc_attr_e('Hoofdnavigatie', 'webbiecorn-starter'); ?>">
                <ul class="wc-nav__menu" id="primaryMenu">
                    <li class="wc-nav__item wc-nav__item--dropdown">
                        <a href="/diensten/" class="wc-nav__link">
                            Diensten
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </a>
                        <ul class="wc-nav__dropdown">
                            <li><a href="/diensten/" class="wc-nav__dropdown-link wc-nav__dropdown-link--overview">Alle diensten →</a></li>
                            <li><a href="/webdesign/" class="wc-nav__dropdown-link">Webdesign</a></li>
                            <li><a href="/branding/" class="wc-nav__dropdown-link">Branding</a></li>
                            <li><a href="/seo-analyse/" class="wc-nav__dropdown-link">SEO & Analyse</a></li>
                            <li><a href="/onderhoud/" class="wc-nav__dropdown-link">Onderhoud</a></li>
                        </ul>
                    </li>
                    <li><a href="/portfolio/" class="wc-nav__link">Portfolio</a></li>
                    <li><a href="/over-ons/" class="wc-nav__link">Over ons</a></li>
                    <li><a href="/contact/" class="wc-nav__link">Contact</a></li>
                </ul>
            </nav>
            
            <!-- Desktop CTA -->
            <a href="/contact/" class="wc-btn wc-btn--primary wc-header__cta desktop-only">
                <span><?php esc_html_e('Project starten', 'webbiecorn-starter'); ?></span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>

            <!-- Mobile CTA + Menu Toggle -->
            <div class="wc-header__mobile-actions">
                <a href="/contact/" class="wc-btn wc-btn--primary wc-header__cta mobile-only">
                    <span><?php esc_html_e('Project starten', 'webbiecorn-starter'); ?></span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                
                <button class="wc-menu-toggle" id="menuToggle" aria-label="<?php esc_attr_e('Menu openen', 'webbiecorn-starter'); ?>" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay - Outside header -->
<div class="wc-mobile-menu" id="mobileMenu" style="display: none;">
    <nav class="wc-mobile-menu__nav">
        <ul class="wc-mobile-menu__list">
            <li class="wc-mobile-menu__item--has-sub">
                <a href="/diensten/" class="wc-mobile-menu__link wc-mobile-menu__link--parent">
                    Diensten
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                </a>
                <ul class="wc-mobile-menu__sub">
                    <li><a href="/diensten/" class="wc-mobile-menu__link wc-mobile-menu__link--overview">Alle diensten →</a></li>
                    <li><a href="/webdesign/" class="wc-mobile-menu__link">Webdesign</a></li>
                    <li><a href="/branding/" class="wc-mobile-menu__link">Branding</a></li>
                    <li><a href="/seo-analyse/" class="wc-mobile-menu__link">SEO & Analyse</a></li>
                    <li><a href="/onderhoud/" class="wc-mobile-menu__link">Onderhoud</a></li>
                </ul>
            </li>
            <li><a href="/portfolio/" class="wc-mobile-menu__link">Portfolio</a></li>
            <li><a href="/over-ons/" class="wc-mobile-menu__link">Over ons</a></li>
            <li><a href="/contact/" class="wc-mobile-menu__link">Contact</a></li>
        </ul>
        <a href="/contact/" class="wc-btn wc-btn--primary wc-btn--full">
            <?php esc_html_e('Project starten', 'webbiecorn-starter'); ?>
        </a>
    </nav>
</div>

<main id="main" class="wc-main">
