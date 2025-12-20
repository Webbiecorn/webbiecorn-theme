<?php
/**
 * Schema.org Structured Data
 *
 * @package Webbiecorn_Starter
 * @since 2.2.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Output Organization Schema
 */
function webbiecorn_schema_organization() {
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "https://webbiecorn.nl/#organization",
        "name": "Webbiecorn",
        "alternateName": "Webbiecorn Studio",
        "description": "Technische webstudio voor maatwerk websites, branding en digitale groei. Hand-coded, geen templates.",
        "url": "https://webbiecorn.nl",
        "logo": {
            "@type": "ImageObject",
            "url": "https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-logo-red.png",
            "width": 512,
            "height": 512
        },
        "image": "https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-og-image.png",
        "sameAs": [
            "https://www.linkedin.com/company/webbiecorn",
            "https://www.instagram.com/webbiecorn.studio",
            "https://twitter.com/webbiecorn",
            "https://github.com/Webbiecorn"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "email": "info@webbiecorn.nl",
            "availableLanguage": ["Dutch", "English"],
            "areaServed": "NL"
        },
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "NL",
            "addressRegion": "Zuid-Holland"
        },
        "foundingDate": "2024",
        "slogan": "Maatwerk websites die converteren",
        "knowsAbout": [
            "Web Design",
            "Web Development", 
            "WordPress",
            "Branding",
            "SEO",
            "UI/UX Design",
            "Custom Web Applications"
        ]
    }
    </script>
    <?php
}

/**
 * Output LocalBusiness Schema
 */
function webbiecorn_schema_local_business() {
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Webbiecorn",
        "description": "Technische webstudio voor maatwerk websites, branding en digitale groei",
        "url": "https://webbiecorn.nl",
        "logo": "https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-logo-red.png",
        "image": "https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-og-image.png",
        "priceRange": "€€-€€€",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "NL",
            "addressRegion": "Zuid-Holland"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "addressCountry": "NL"
        },
        "telephone": "+31-6-12345678",
        "email": "info@webbiecorn.nl",
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "availableLanguage": ["Dutch", "English"]
        },
        "sameAs": [
            "https://www.linkedin.com/company/webbiecorn",
            "https://www.instagram.com/webbiecorn.studio"
        ],
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "17:00"
        },
        "areaServed": {
            "@type": "Country",
            "name": "Netherlands"
        },
        "serviceType": ["Webdesign", "Web Development", "Branding", "SEO", "Website Onderhoud"]
    }
    </script>
    <?php
}

/**
 * Output Website Schema (homepage only)
 */
function webbiecorn_schema_website() {
    if (!is_front_page()) return;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Webbiecorn",
        "url": "https://webbiecorn.nl",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://webbiecorn.nl/?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SiteNavigationElement",
        "name": ["Webdesign", "Portfolio", "Diensten", "Contact"],
        "url": [
            "https://webbiecorn.nl/webdesign/",
            "https://webbiecorn.nl/portfolio/",
            "https://webbiecorn.nl/diensten/",
            "https://webbiecorn.nl/contact/"
        ]
    }
    </script>
    <?php
}

/**
 * Output Breadcrumb Schema
 */
function webbiecorn_schema_breadcrumbs() {
    if (is_front_page()) return;
    
    $breadcrumbs = array(
        array('name' => 'Home', 'url' => home_url('/'))
    );
    
    if (is_page()) {
        $breadcrumbs[] = array('name' => get_the_title(), 'url' => get_permalink());
    } elseif (is_singular('post')) {
        $breadcrumbs[] = array('name' => 'Blog', 'url' => home_url('/blog/'));
        $breadcrumbs[] = array('name' => get_the_title(), 'url' => get_permalink());
    }
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            <?php foreach ($breadcrumbs as $index => $crumb) : ?>
            {
                "@type": "ListItem",
                "position": <?php echo $index + 1; ?>,
                "name": "<?php echo esc_js($crumb['name']); ?>",
                "item": "<?php echo esc_url($crumb['url']); ?>"
            }<?php echo $index < count($breadcrumbs) - 1 ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
    <?php
}

/**
 * Output Service Schema (for service pages)
 */
function webbiecorn_schema_service() {
    if (!is_page('webdesign') && !is_page('diensten')) return;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Web Design",
        "provider": {
            "@type": "LocalBusiness",
            "name": "Webbiecorn",
            "url": "https://webbiecorn.nl"
        },
        "areaServed": {
            "@type": "Country",
            "name": "Netherlands"
        },
        "description": "Professionele maatwerk websites, 100% hand-coded. Geen templates, geen pagebuilders.",
        "offers": {
            "@type": "Offer",
            "priceSpecification": {
                "@type": "PriceSpecification",
                "priceCurrency": "EUR",
                "minPrice": "500"
            }
        }
    }
    </script>
    <?php
}

/**
 * Output all Schema markup
 * Call this function in header.php
 */
function webbiecorn_output_schema() {
    webbiecorn_schema_organization();
    webbiecorn_schema_local_business();
    webbiecorn_schema_website();
    webbiecorn_schema_breadcrumbs();
    webbiecorn_schema_service();
}
