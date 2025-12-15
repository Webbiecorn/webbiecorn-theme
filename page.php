<?php
/**
 * Generic Page Template
 *
 * @package Webbiecorn_Starter
 */

get_header();
?>

<section class="wc-section" style="padding-top: calc(var(--wc-header-height) + var(--wc-space-3xl));">
    <div class="wc-container wc-container--narrow">
        <?php while (have_posts()) : the_post(); ?>
            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="wc-page-header wc-animate">
                    <h1 class="wc-page-title"><?php the_title(); ?></h1>
                </header>
                
                <div class="wc-prose wc-animate">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php
get_footer();
