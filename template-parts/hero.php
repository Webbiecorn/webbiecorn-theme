<?php
/**
 * Template Part: Page Hero
 * 
 * Reusable dark gradient hero section used across pages.
 * 
 * Usage:
 * get_template_part('template-parts/hero', null, array(
 *     'badge_text'    => 'Badge Label',
 *     'badge_color'   => 'green|blue|purple',  // optional, default: green
 *     'title'         => 'Page Title',
 *     'title_accent'  => 'accented word',      // optional
 *     'subtitle'      => 'Subtitle text',
 *     'stats'         => array(                // optional
 *         array('icon' => '🚀', 'text' => 'Stat 1'),
 *         array('icon' => '💯', 'text' => 'Stat 2'),
 *     )
 * ));
 * 
 * @package Webbiecorn_Starter
 * @since 2.3.0
 */

// Get passed arguments
$badge_text   = $args['badge_text'] ?? 'Welcome';
$badge_color  = $args['badge_color'] ?? 'green';
$title        = $args['title'] ?? '';
$title_accent = $args['title_accent'] ?? '';
$subtitle     = $args['subtitle'] ?? '';
$stats        = $args['stats'] ?? array();

// Build badge class
$badge_class = 'wc-contact-hero__badge';
if ($badge_color !== 'green') {
    $badge_class .= ' wc-contact-hero__badge--' . esc_attr($badge_color);
}

// Build title with accent
$title_html = esc_html($title);
if ($title_accent) {
    $title_html = str_replace(
        $title_accent, 
        '<span class="wc-text-gradient">' . esc_html($title_accent) . '</span>', 
        $title_html
    );
}
?>

<section class="wc-contact-hero">
    <div class="wc-contact-hero__bg">
        <div class="wc-contact-hero__gradient"></div>
        <div class="wc-contact-hero__pattern"></div>
    </div>
    
    <div class="wc-container">
        <div class="wc-contact-hero__content">
            <span class="<?php echo esc_attr($badge_class); ?>">
                <span class="wc-contact-hero__badge-dot"></span>
                <?php echo esc_html($badge_text); ?>
            </span>
            
            <h1 class="wc-contact-hero__title">
                <?php echo $title_html; ?>
            </h1>
            
            <?php if ($subtitle) : ?>
            <p class="wc-contact-hero__subtitle">
                <?php echo esc_html($subtitle); ?>
            </p>
            <?php endif; ?>
            
            <?php if (!empty($stats)) : ?>
            <div class="wc-contact-hero__stats">
                <?php foreach ($stats as $stat) : ?>
                <span class="wc-contact-stat">
                    <span class="wc-contact-stat__icon"><?php echo $stat['icon']; ?></span>
                    <span class="wc-contact-stat__text"><?php echo esc_html($stat['text']); ?></span>
                </span>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
