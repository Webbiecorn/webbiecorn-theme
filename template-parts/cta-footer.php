<?php
/**
 * Template Part: CTA Footer
 *
 * Standardized CTA section used at the bottom of key pages.
 *
 * Usage:
 * get_template_part('template-parts/cta-footer', null, array(
 *   'title'   => 'Klaar om te starten?',
 *   'text'    => 'Vertel ons over je project en we nemen binnen 24 uur contact op.',
 *   'primary' => array('label' => 'Project bespreken', 'url' => home_url('/contact/')),
 *   'secondary' => array('label' => 'Bekijk portfolio', 'url' => home_url('/portfolio/')),
 * ));
 *
 * @package Webbiecorn_Starter
 */

if (!defined('ABSPATH')) {
    exit;
}

$title = $args['title'] ?? 'Klaar om te starten?';
$text = $args['text'] ?? 'Vertel ons over je project en we nemen binnen 24 uur contact op. Vrijblijvend en gratis.';
$primary = $args['primary'] ?? array('label' => 'Project bespreken', 'url' => home_url('/contact/'));
$secondary = $args['secondary'] ?? array('label' => 'Bekijk portfolio', 'url' => home_url('/portfolio/'));

$primary_label = is_array($primary) ? ($primary['label'] ?? '') : '';
$primary_url = is_array($primary) ? ($primary['url'] ?? '') : '';

$secondary_label = is_array($secondary) ? ($secondary['label'] ?? '') : '';
$secondary_url = is_array($secondary) ? ($secondary['url'] ?? '') : '';
?>

<section class="wc-section wc-section--cta">
    <div class="wc-container">
        <div class="wc-cta wc-animate">
            <h2 class="wc-cta__title"><?php echo esc_html($title); ?></h2>
            <p class="wc-cta__text wc-text-narrow"><?php echo esc_html($text); ?></p>
            <div class="wc-cta__buttons">
                <?php if ($primary_label && $primary_url) : ?>
                    <a href="<?php echo esc_url($primary_url); ?>" class="wc-btn wc-btn--primary wc-btn--lg">
                        <?php echo esc_html($primary_label); ?>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if ($secondary_label && $secondary_url) : ?>
                    <a href="<?php echo esc_url($secondary_url); ?>" class="wc-btn wc-btn--outline wc-btn--lg">
                        <?php echo esc_html($secondary_label); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
