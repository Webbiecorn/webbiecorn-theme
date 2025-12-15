<?php
/**
 * Index Template - Fallback
 *
 * @package Webbiecorn_Starter
 */

get_header();
?>

<section class="wc-section">
    <div class="wc-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p><?php esc_html_e('Geen content gevonden.', 'webbiecorn-starter'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
