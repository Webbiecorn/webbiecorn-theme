<?php
/**
 * Template Name: Shop - Digitale Producten
 * Template Post Type: page
 * 
 * Custom shop pagina voor digitale producten (templates, bundles)
 *
 * @package Webbiecorn_Starter
 */

get_header();
?>

<!-- Page Hero -->
<section class="wc-page-hero wc-shop-hero">
    <div class="wc-container">
        <div class="wc-page-hero__content wc-animate">
            <span class="wc-page-hero__kicker">✨ Templates & Resources</span>
            <h1 class="wc-page-hero__title">Digitale producten voor jouw business</h1>
            <p class="wc-page-hero__subtitle">
                Professionele templates, bundles en tools. Direct downloaden en aan de slag. Gemaakt door designers, voor ondernemers.
            </p>
        </div>
    </div>
</section>

<!-- Trust Badges -->
<section class="wc-shop-trust">
    <div class="wc-container">
        <div class="wc-shop-trust__grid">
            <div class="wc-shop-trust__item wc-animate">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <polyline points="9 12 11 14 15 10"/>
                </svg>
                <span>Veilig betalen met iDEAL</span>
            </div>
            <div class="wc-shop-trust__item wc-animate">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7 10 12 15 17 10"/>
                    <line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                <span>Direct downloaden</span>
            </div>
            <div class="wc-shop-trust__item wc-animate">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
                <span>Levenslange toegang</span>
            </div>
            <div class="wc-shop-trust__item wc-animate">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                <span>Support via email</span>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="wc-section wc-shop-products">
    <div class="wc-container">
        
        <?php if (class_exists('WooCommerce')) : ?>
            
            <?php
            // Query WooCommerce products
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            $products = new WP_Query($args);
            ?>
            
            <?php if ($products->have_posts()) : ?>
                
                <div class="wc-shop-grid">
                    <?php while ($products->have_posts()) : $products->the_post(); 
                        global $product;
                    ?>
                        <article class="wc-product-card wc-animate">
                            <!-- Product Image -->
                            <a href="<?php the_permalink(); ?>" class="wc-product-card__image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large'); ?>
                                <?php else : ?>
                                    <div class="wc-product-card__placeholder">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                            <circle cx="8.5" cy="8.5" r="1.5"/>
                                            <polyline points="21 15 16 10 5 21"/>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- Sale Badge -->
                                <?php if ($product->is_on_sale()) : ?>
                                    <span class="wc-product-card__badge wc-product-card__badge--sale">Sale</span>
                                <?php endif; ?>
                                
                                <!-- Hover Overlay -->
                                <div class="wc-product-card__overlay">
                                    <span class="wc-product-card__view">Bekijk product →</span>
                                </div>
                            </a>
                            
                            <!-- Product Info -->
                            <div class="wc-product-card__content">
                                <!-- Category -->
                                <?php 
                                $terms = get_the_terms(get_the_ID(), 'product_cat');
                                if ($terms && !is_wp_error($terms)) : 
                                    $term = $terms[0];
                                ?>
                                    <span class="wc-product-card__category"><?php echo esc_html($term->name); ?></span>
                                <?php endif; ?>
                                
                                <!-- Title -->
                                <h3 class="wc-product-card__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                
                                <!-- Short Description -->
                                <?php if ($product->get_short_description()) : ?>
                                    <p class="wc-product-card__desc">
                                        <?php echo wp_trim_words($product->get_short_description(), 15); ?>
                                    </p>
                                <?php endif; ?>
                                
                                <!-- Price & CTA -->
                                <div class="wc-product-card__footer">
                                    <div class="wc-product-card__price">
                                        <?php echo $product->get_price_html(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="wc-product-card__btn">
                                        Bekijk
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <?php wp_reset_postdata(); ?>
                
            <?php else : ?>
                
                <!-- No Products Yet - Coming Soon -->
                <div class="wc-shop-empty">
                    <div class="wc-shop-empty__icon">🚀</div>
                    <h2 class="wc-shop-empty__title">Binnenkort beschikbaar!</h2>
                    <p class="wc-shop-empty__text">
                        We werken hard aan onze eerste digitale producten. Social media templates, branding kits en meer. 
                        Laat je e-mail achter om als eerste op de hoogte te zijn.
                    </p>
                    
                    <!-- Coming Soon Products Preview -->
                    <div class="wc-shop-coming-soon">
                        <div class="wc-coming-soon-card">
                            <div class="wc-coming-soon-card__icon">📱</div>
                            <h3>Social Media Bundle</h3>
                            <p>30+ Instagram & LinkedIn templates</p>
                            <span class="wc-coming-soon-card__price">€29</span>
                        </div>
                        <div class="wc-coming-soon-card">
                            <div class="wc-coming-soon-card__icon">🎨</div>
                            <h3>Branding Kit Template</h3>
                            <p>Complete huisstijl template set</p>
                            <span class="wc-coming-soon-card__price">€49</span>
                        </div>
                        <div class="wc-coming-soon-card">
                            <div class="wc-coming-soon-card__icon">🤖</div>
                            <h3>AI Prompts Pack</h3>
                            <p>50+ prompts voor ondernemers</p>
                            <span class="wc-coming-soon-card__price">€19</span>
                        </div>
                        <div class="wc-coming-soon-card">
                            <div class="wc-coming-soon-card__icon">💼</div>
                            <h3>Portfolio Template</h3>
                            <p>Showcase jouw werk professioneel</p>
                            <span class="wc-coming-soon-card__price">€39</span>
                        </div>
                    </div>
                    
                    <a href="/contact/" class="wc-btn wc-btn--primary">
                        Houd me op de hoogte
                    </a>
                </div>
                
            <?php endif; ?>
            
        <?php else : ?>
            
            <div class="wc-shop-empty">
                <p>Shop wordt geladen...</p>
            </div>
            
        <?php endif; ?>
        
    </div>
</section>

<!-- FAQ Section -->
<section class="wc-section wc-section--alt wc-shop-faq">
    <div class="wc-container wc-container--narrow">
        <h2 class="wc-section__title wc-animate">Veelgestelde vragen</h2>
        
        <div class="wc-faq-list">
            <details class="wc-faq-item wc-animate">
                <summary class="wc-faq-item__question">
                    Hoe ontvang ik mijn bestelling?
                    <svg class="wc-faq-item__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </summary>
                <div class="wc-faq-item__answer">
                    <p>Direct na betaling ontvang je een e-mail met downloadlinks. Je kunt de bestanden ook altijd terugvinden in je account op onze website. Geen wachttijd!</p>
                </div>
            </details>
            
            <details class="wc-faq-item wc-animate">
                <summary class="wc-faq-item__question">
                    Welke bestandsformaten krijg ik?
                    <svg class="wc-faq-item__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </summary>
                <div class="wc-faq-item__answer">
                    <p>Afhankelijk van het product ontvang je Canva templates (met bewerkbare link), Figma bestanden, PDF's en/of PNG's. Elk product vermeldt duidelijk welke formaten inbegrepen zijn.</p>
                </div>
            </details>
            
            <details class="wc-faq-item wc-animate">
                <summary class="wc-faq-item__question">
                    Kan ik de templates commercieel gebruiken?
                    <svg class="wc-faq-item__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </summary>
                <div class="wc-faq-item__answer">
                    <p>Ja! Alle templates zijn bedoeld voor commercieel gebruik. Je mag ze gebruiken voor je eigen bedrijf of voor klanten. Het enige wat niet mag is de templates doorverkopen als template.</p>
                </div>
            </details>
            
            <details class="wc-faq-item wc-animate">
                <summary class="wc-faq-item__question">
                    Wat als ik niet tevreden ben?
                    <svg class="wc-faq-item__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </summary>
                <div class="wc-faq-item__answer">
                    <p>Neem binnen 14 dagen contact met ons op. Bij digitale producten is het lastig om te retourneren, maar we denken graag mee naar een oplossing die voor jou werkt.</p>
                </div>
            </details>
            
            <details class="wc-faq-item wc-animate">
                <summary class="wc-faq-item__question">
                    Hoe betaal ik?
                    <svg class="wc-faq-item__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </summary>
                <div class="wc-faq-item__answer">
                    <p>Je kunt betalen met iDEAL, creditcard (Visa, Mastercard, American Express), Bancontact of Apple Pay. Alle betalingen worden veilig verwerkt via Stripe.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="wc-cta-section wc-animate">
    <div class="wc-container">
        <div class="wc-cta-content">
            <h2 class="wc-cta-title">Liever iets op maat?</h2>
            <p class="wc-cta-text">
                Onze templates zijn een goed startpunt, maar soms heb je iets unieks nodig. 
                We maken ook custom designs, websites en branding op maat.
            </p>
            <div class="wc-cta-buttons">
                <a href="/webdesign/" class="wc-btn wc-btn--white">Bekijk pakketten</a>
                <a href="/contact/" class="wc-btn wc-btn--outline-white">Neem contact op</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
