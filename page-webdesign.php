<?php
/**
 * Template Name: Webdesign Pakketten
 * Template Post Type: page
 * 
 * Uitgebreide pagina met alle webdesign pakketten
 *
 * @package Webbiecorn_Starter
 */

get_header();

// Hero via template part
get_template_part('template-parts/hero', null, array(
    'badge_text'   => 'Webdesign & Development',
    'badge_color'  => 'blue',
    'title'        => 'Websites die werken — op maat gebouwd',
    'title_accent' => 'op maat gebouwd',
    'subtitle'     => 'Geen templates, geen pagebuilders. Alleen schone code, snelle laadtijden en een design dat past bij jouw merk. Kies het pakket dat bij je past.',
    'cta'          => array('label' => 'Offerte aanvragen', 'url' => home_url('/contact/#wc-contact-form'), 'variant' => 'primary'),
    'stats'        => array(
        array('icon' => '⚡', 'text' => '<1s laadtijd'),
        array('icon' => '🎨', 'text' => '100% maatwerk'),
        array('icon' => '📱', 'text' => 'Mobile-first'),
    )
));
?>

<!-- Why Webbiecorn -->
<section class="wc-section">
    <div class="wc-container">
        <div class="wc-why__grid">
            <div class="wc-why__item wc-card wc-card--hover wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Supersnel</h3>
                <p class="wc-why__desc">Hand-coded websites laden tot 3x sneller dan template-sites. Goed voor bezoekers én Google.</p>
            </div>
            <div class="wc-why__item wc-card wc-card--hover wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                        <line x1="3" y1="9" x2="21" y2="9"/>
                        <line x1="9" y1="21" x2="9" y2="9"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">100% Maatwerk</h3>
                <p class="wc-why__desc">Geen standaard template waar je merk in geperst wordt. Alles wordt specifiek voor jou ontworpen.</p>
            </div>
            <div class="wc-why__item wc-card wc-card--hover wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Transparant</h3>
                <p class="wc-why__desc">Vaste prijzen, duidelijke doorlooptijden en heldere communicatie. Geen verrassingen achteraf.</p>
            </div>
            <div class="wc-why__item wc-card wc-card--hover wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Veilig & Stabiel</h3>
                <p class="wc-why__desc">Schone code betekent minder kwetsbaarheden. Plus: onderhoud en updates zijn makkelijker.</p>
            </div>
        </div>
    </div>
</section>


<!-- ========================================
     6 LAPTOPS GRID - CLICK TO OPEN
     ======================================== -->
<section class="wc-laptops-showcase">
    <div class="wc-container">
        <div class="wc-laptops-intro" data-animate="laptops-intro">
            <h2 class="wc-laptops-intro__title">Wat krijg je per branche?</h2>
            <p class="wc-laptops-intro__desc">Klik op een laptop om te zien welke functies en inhoud jouw website standaard bevat voor jouw branche.</p>
        </div>
        
        <!-- 6 Laptops Grid -->
        <div class="wc-laptops-grid">
            
            <!-- Laptop 1: Restaurant -->
            <div class="wc-laptop-item" data-laptop="restaurant">
                <div class="wc-laptop-portal">
                    <div class="wc-laptop-portal__screen">
                        <!-- Sleeping State -->
                        <div class="wc-laptop-portal__sleep">
                            <div class="wc-laptop-portal__bg" style="background-image: url('/wp-content/uploads/2025/12/demo-restaurant.webp');"></div>
                            <div class="wc-laptop-portal__glow"></div>
                            <div class="wc-laptop-portal__orb">
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-core"></div>
                            </div>
                            <div class="wc-laptop-portal__zzz"><span>Z</span><span>z</span><span>z</span></div>
                            <span class="wc-laptop-portal__label">Restaurant</span>
                            <button class="wc-laptop-portal__wake">Wakker maken</button>
                        </div>
                        <!-- Portal Vortex (shows during transition) -->
                        <div class="wc-laptop-portal__vortex">
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                        </div>
                        <!-- Awake State - Website Content -->
                        <div class="wc-laptop-portal__awake" data-site="restaurant"></div>
                    </div>
                    <div class="wc-laptop-portal__base">
                        <div class="wc-laptop-portal__trackpad"></div>
                    </div>
                </div>
            </div>
            
            <!-- Laptop 2: Fitness -->
            <div class="wc-laptop-item" data-laptop="fitness">
                <div class="wc-laptop-portal">
                    <div class="wc-laptop-portal__screen">
                        <div class="wc-laptop-portal__sleep">
                            <div class="wc-laptop-portal__bg" style="background-image: url('/wp-content/uploads/2025/12/demo-fitness.webp');"></div>
                            <div class="wc-laptop-portal__glow"></div>
                            <div class="wc-laptop-portal__orb">
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-core"></div>
                            </div>
                            <div class="wc-laptop-portal__zzz"><span>Z</span><span>z</span><span>z</span></div>
                            <span class="wc-laptop-portal__label">Fitness</span>
                            <button class="wc-laptop-portal__wake">Wakker maken</button>
                        </div>
                        <div class="wc-laptop-portal__vortex">
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                        </div>
                        <div class="wc-laptop-portal__awake" data-site="fitness"></div>
                    </div>
                    <div class="wc-laptop-portal__base">
                        <div class="wc-laptop-portal__trackpad"></div>
                    </div>
                </div>
            </div>
            
            <!-- Laptop 3: Kapper -->
            <div class="wc-laptop-item" data-laptop="kapper">
                <div class="wc-laptop-portal">
                    <div class="wc-laptop-portal__screen">
                        <div class="wc-laptop-portal__sleep">
                            <div class="wc-laptop-portal__bg" style="background-image: url('/wp-content/uploads/2025/12/demo-kapper.webp');"></div>
                            <div class="wc-laptop-portal__glow"></div>
                            <div class="wc-laptop-portal__orb">
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-core"></div>
                            </div>
                            <div class="wc-laptop-portal__zzz"><span>Z</span><span>z</span><span>z</span></div>
                            <span class="wc-laptop-portal__label">Kapsalon</span>
                            <button class="wc-laptop-portal__wake">Wakker maken</button>
                        </div>
                        <div class="wc-laptop-portal__vortex">
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                        </div>
                        <div class="wc-laptop-portal__awake" data-site="kapper"></div>
                    </div>
                    <div class="wc-laptop-portal__base">
                        <div class="wc-laptop-portal__trackpad"></div>
                    </div>
                </div>
            </div>
            
            <!-- Laptop 4: Fotograaf -->
            <div class="wc-laptop-item" data-laptop="fotograaf">
                <div class="wc-laptop-portal">
                    <div class="wc-laptop-portal__screen">
                        <div class="wc-laptop-portal__sleep">
                            <div class="wc-laptop-portal__bg" style="background-image: url('/wp-content/uploads/2025/12/demo-fotograaf.webp');"></div>
                            <div class="wc-laptop-portal__glow"></div>
                            <div class="wc-laptop-portal__orb">
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-core"></div>
                            </div>
                            <div class="wc-laptop-portal__zzz"><span>Z</span><span>z</span><span>z</span></div>
                            <span class="wc-laptop-portal__label">Fotografie</span>
                            <button class="wc-laptop-portal__wake">Wakker maken</button>
                        </div>
                        <div class="wc-laptop-portal__vortex">
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                        </div>
                        <div class="wc-laptop-portal__awake" data-site="fotograaf"></div>
                    </div>
                    <div class="wc-laptop-portal__base">
                        <div class="wc-laptop-portal__trackpad"></div>
                    </div>
                </div>
            </div>
            
            <!-- Laptop 5: Advocaat -->
            <div class="wc-laptop-item" data-laptop="advocaat">
                <div class="wc-laptop-portal">
                    <div class="wc-laptop-portal__screen">
                        <div class="wc-laptop-portal__sleep">
                            <div class="wc-laptop-portal__bg" style="background-image: url('/wp-content/uploads/2025/12/demo-advocaat.webp');"></div>
                            <div class="wc-laptop-portal__glow"></div>
                            <div class="wc-laptop-portal__orb">
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-core"></div>
                            </div>
                            <div class="wc-laptop-portal__zzz"><span>Z</span><span>z</span><span>z</span></div>
                            <span class="wc-laptop-portal__label">Advocatuur</span>
                            <button class="wc-laptop-portal__wake">Wakker maken</button>
                        </div>
                        <div class="wc-laptop-portal__vortex">
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                        </div>
                        <div class="wc-laptop-portal__awake" data-site="advocaat"></div>
                    </div>
                    <div class="wc-laptop-portal__base">
                        <div class="wc-laptop-portal__trackpad"></div>
                    </div>
                </div>
            </div>
            
            <!-- Laptop 6: Bakker -->
            <div class="wc-laptop-item" data-laptop="bakker">
                <div class="wc-laptop-portal">
                    <div class="wc-laptop-portal__screen">
                        <div class="wc-laptop-portal__sleep">
                            <div class="wc-laptop-portal__bg" style="background-image: url('/wp-content/uploads/2025/12/demo-bakker.webp');"></div>
                            <div class="wc-laptop-portal__glow"></div>
                            <div class="wc-laptop-portal__orb">
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-ring"></div>
                                <div class="wc-laptop-portal__orb-core"></div>
                            </div>
                            <div class="wc-laptop-portal__zzz"><span>Z</span><span>z</span><span>z</span></div>
                            <span class="wc-laptop-portal__label">Bakkerij</span>
                            <button class="wc-laptop-portal__wake">Wakker maken</button>
                        </div>
                        <div class="wc-laptop-portal__vortex">
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                            <div class="wc-laptop-portal__ring"></div>
                        </div>
                        <div class="wc-laptop-portal__awake" data-site="bakker"></div>
                    </div>
                    <div class="wc-laptop-portal__base">
                        <div class="wc-laptop-portal__trackpad"></div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- CTA -->
        <div class="wc-laptops-cta" data-animate="laptops-cta">
            <p>Wil je ook zo'n website?</p>
            <a href="/contact/" class="wc-btn wc-btn--primary">Start jouw project</a>
        </div>
    </div>
</section>

<!-- ========================================
     LAPTOP MODAL OVERLAY (Open Laptop View)
     ======================================== -->
<div class="wc-laptop-modal" id="laptopModal">
    <div class="wc-laptop-modal__backdrop"></div>
    <div class="wc-laptop-modal__content">
        <button class="wc-laptop-modal__close" aria-label="Sluiten">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        
        <!-- Open MacBook -->
        <div class="wc-macbook wc-macbook--modal">
            <div class="wc-macbook__screen">
                <div class="wc-macbook__bezel">
                    <div class="wc-macbook__notch">
                        <div class="wc-macbook__camera"></div>
                    </div>
                    <div class="wc-macbook__viewport" id="modalViewport">
                        
                        <!-- ============ DEMO SITE: RESTAURANT (Parallax + Menu Cards) ============ -->
                        <div class="wc-demo-site wc-demo-site--restaurant" data-site="restaurant">
                            <!-- Parallax Hero -->
                            <div class="wc-demo-parallax-hero">
                                <div class="wc-demo-parallax-bg"></div>
                                <div class="wc-demo-parallax-overlay"></div>
                                <nav class="wc-demo-nav wc-demo-nav--transparent">
                                    <div class="wc-demo-logo">🍽️ Bistro Bella</div>
                                    <div class="wc-demo-nav__links"><span>Menu</span><span>Reserveren</span><span>Contact</span></div>
                                </nav>
                                <div class="wc-demo-parallax-content">
                                    <span class="wc-demo-badge">★★★★★ MICHELIN AANBEVOLEN</span>
                                    <h1>Authentiek<br><em>Italiaans</em></h1>
                                    <p>Waar traditie en passie samenkomen</p>
                                    <button class="wc-demo-btn wc-demo-btn--gold">Reserveer Nu</button>
                                </div>
                                <div class="wc-demo-scroll-indicator">↓ Scroll</div>
                            </div>
                            
                            <!-- Floating Menu Cards -->
                            <div class="wc-demo-menu-section">
                                <h2 class="wc-demo-elegant-title">Ons Menu</h2>
                                <div class="wc-demo-menu-cards">
                                    <div class="wc-demo-menu-card" style="--delay: 0;">
                                        <div class="wc-demo-menu-card__icon">🍝</div>
                                        <h3>Primi Piatti</h3>
                                        <p>Huisgemaakte pasta's met verse ingrediënten</p>
                                        <span class="wc-demo-menu-card__price">vanaf €14</span>
                                    </div>
                                    <div class="wc-demo-menu-card" style="--delay: 1;">
                                        <div class="wc-demo-menu-card__icon">🍕</div>
                                        <h3>Pizza</h3>
                                        <p>Uit onze authentieke houtoven</p>
                                        <span class="wc-demo-menu-card__price">vanaf €12</span>
                                    </div>
                                    <div class="wc-demo-menu-card" style="--delay: 2;">
                                        <div class="wc-demo-menu-card__icon">🥩</div>
                                        <h3>Secondi</h3>
                                        <p>Premium vlees & verse vis</p>
                                        <span class="wc-demo-menu-card__price">vanaf €22</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Quote Section -->
                            <div class="wc-demo-quote-section">
                                <blockquote>"De beste carbonara buiten Rome"</blockquote>
                                <cite>— Het Parool ★★★★★</cite>
                            </div>
                            
                            <!-- Contact Banner -->
                            <div class="wc-demo-contact-banner">
                                <div class="wc-demo-contact-info">
                                    <span>📍 Prinsengracht 123</span>
                                    <span>📞 020-1234567</span>
                                    <span>🕐 Di-Zo 17:00-23:00</span>
                                </div>
                            </div>
                            <div class="wc-demo-footer" style="background: #1a0f0a;"><p>© 2025 Bistro Bella — Gemaakt door Webbiecorn</p></div>
                        </div>
                        
                        <!-- ============ DEMO SITE: FITNESS (Animated Gradient + Stats) ============ -->
                        <div class="wc-demo-site wc-demo-site--fitness" data-site="fitness" style="display: none;">
                            <!-- Animated Gradient Hero -->
                            <div class="wc-demo-gradient-hero">
                                <div class="wc-demo-gradient-bg"></div>
                                <nav class="wc-demo-nav">
                                    <div class="wc-demo-logo wc-demo-logo--bold">💪 POWER GYM</div>
                                    <div class="wc-demo-nav__links"><span>Classes</span><span>Prijzen</span><span>Join</span></div>
                                </nav>
                                <div class="wc-demo-gradient-content">
                                    <div class="wc-demo-big-text">TRAIN</div>
                                    <div class="wc-demo-big-text wc-demo-big-text--outline">HARDER</div>
                                    <p>Eerste week gratis — Geen verplichtingen</p>
                                    <button class="wc-demo-btn wc-demo-btn--neon">Start Nu →</button>
                                </div>
                            </div>
                            
                            <!-- Stats Counter -->
                            <div class="wc-demo-stats-bar">
                                <div class="wc-demo-stat-item">
                                    <span class="wc-demo-stat-number">500+</span>
                                    <span class="wc-demo-stat-label">Leden</span>
                                </div>
                                <div class="wc-demo-stat-item">
                                    <span class="wc-demo-stat-number">50+</span>
                                    <span class="wc-demo-stat-label">Classes/week</span>
                                </div>
                                <div class="wc-demo-stat-item">
                                    <span class="wc-demo-stat-number">24/7</span>
                                    <span class="wc-demo-stat-label">Open</span>
                                </div>
                            </div>
                            
                            <!-- Classes Grid -->
                            <div class="wc-demo-classes-section">
                                <h2>POPULAIRE CLASSES</h2>
                                <div class="wc-demo-class-grid">
                                    <div class="wc-demo-class-card wc-demo-class-card--yoga">
                                        <span class="wc-demo-class-tag">🧘 Yoga</span>
                                        <h3>Morning Flow</h3>
                                        <p>Ma/Wo/Vr 07:00</p>
                                    </div>
                                    <div class="wc-demo-class-card wc-demo-class-card--hiit">
                                        <span class="wc-demo-class-tag">🔥 HIIT</span>
                                        <h3>Burn 500</h3>
                                        <p>Elke dag 18:00</p>
                                    </div>
                                    <div class="wc-demo-class-card wc-demo-class-card--boxing">
                                        <span class="wc-demo-class-tag">🥊 Boxing</span>
                                        <h3>Fight Club</h3>
                                        <p>Di/Do 20:00</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- CTA -->
                            <div class="wc-demo-fitness-cta">
                                <h2>Word vandaag nog lid</h2>
                                <div class="wc-demo-price-tag">
                                    <span class="wc-demo-price-old">€49</span>
                                    <span class="wc-demo-price-new">€29<small>/maand</small></span>
                                </div>
                                <button class="wc-demo-btn wc-demo-btn--neon wc-demo-btn--large">Claim Aanbieding</button>
                            </div>
                            <div class="wc-demo-footer" style="background: #0a0a14;"><p>© 2025 Power Gym — Gemaakt door Webbiecorn</p></div>
                        </div>
                        
                        <!-- ============ DEMO SITE: KAPPER (Horizontal Scroll Gallery) ============ -->
                        <div class="wc-demo-site wc-demo-site--kapper" data-site="kapper" style="display: none;">
                            <!-- Split Hero -->
                            <div class="wc-demo-split-hero">
                                <div class="wc-demo-split-left">
                                    <nav class="wc-demo-nav wc-demo-nav--vertical">
                                        <div class="wc-demo-logo">✂️</div>
                                        <div class="wc-demo-logo-text">THE<br>BARBER</div>
                                    </nav>
                                    <div class="wc-demo-split-content">
                                        <span class="wc-demo-est">EST. 2018</span>
                                        <h1>Stijl.<br>Vakmanschap.<br><em>Perfectie.</em></h1>
                                        <button class="wc-demo-btn wc-demo-btn--gold">Boek Afspraak</button>
                                    </div>
                                </div>
                                <div class="wc-demo-split-right">
                                    <div class="wc-demo-barber-pattern"></div>
                                </div>
                            </div>
                            
                            <!-- Horizontal Scroll Services -->
                            <div class="wc-demo-services-scroll">
                                <h2>Onze Diensten</h2>
                                <div class="wc-demo-services-track">
                                    <div class="wc-demo-service-item">
                                        <div class="wc-demo-service-icon">💇</div>
                                        <h3>Knippen</h3>
                                        <span class="wc-demo-service-price">€25</span>
                                    </div>
                                    <div class="wc-demo-service-item">
                                        <div class="wc-demo-service-icon">🧔</div>
                                        <h3>Baard</h3>
                                        <span class="wc-demo-service-price">€15</span>
                                    </div>
                                    <div class="wc-demo-service-item">
                                        <div class="wc-demo-service-icon">✨</div>
                                        <h3>Deluxe</h3>
                                        <span class="wc-demo-service-price">€45</span>
                                    </div>
                                    <div class="wc-demo-service-item">
                                        <div class="wc-demo-service-icon">🧴</div>
                                        <h3>Hot Towel</h3>
                                        <span class="wc-demo-service-price">€35</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Barber Showcase -->
                            <div class="wc-demo-barber-showcase">
                                <div class="wc-demo-barber-card">
                                    <div class="wc-demo-barber-avatar">👨</div>
                                    <h3>Mike</h3>
                                    <p>Master Barber</p>
                                    <span class="wc-demo-barber-exp">12 jaar ervaring</span>
                                </div>
                                <div class="wc-demo-barber-card">
                                    <div class="wc-demo-barber-avatar">🧑</div>
                                    <h3>James</h3>
                                    <p>Senior Stylist</p>
                                    <span class="wc-demo-barber-exp">8 jaar ervaring</span>
                                </div>
                            </div>
                            
                            <!-- Book CTA -->
                            <div class="wc-demo-book-cta">
                                <p>Walk-ins welkom • Online boeken</p>
                                <button class="wc-demo-btn wc-demo-btn--gold wc-demo-btn--large">Boek Nu</button>
                            </div>
                            <div class="wc-demo-footer" style="background: #0d0d0d;"><p>© 2025 The Barber — Gemaakt door Webbiecorn</p></div>
                        </div>
                        
                        <!-- ============ DEMO SITE: FOTOGRAAF (Fullscreen Photo Grid) ============ -->
                        <div class="wc-demo-site wc-demo-site--fotograaf" data-site="fotograaf" style="display: none;">
                            <!-- Minimal Hero -->
                            <div class="wc-demo-minimal-hero">
                                <nav class="wc-demo-nav wc-demo-nav--minimal">
                                    <div class="wc-demo-logo">STUDIO LENS</div>
                                    <div class="wc-demo-nav__links"><span>Work</span><span>About</span><span>Contact</span></div>
                                </nav>
                                <h1 class="wc-demo-giant-text">Capturing<br><span>Moments</span></h1>
                            </div>
                            
                            <!-- Photo Grid -->
                            <div class="wc-demo-photo-grid">
                                <div class="wc-demo-photo-item wc-demo-photo-item--tall" style="background: url('/wp-content/uploads/2025/12/demo-foto-1.webp') center/cover no-repeat;"></div>
                                <div class="wc-demo-photo-item" style="background: url('/wp-content/uploads/2025/12/demo-foto-2.webp') center/cover no-repeat;"></div>
                                <div class="wc-demo-photo-item" style="background: url('/wp-content/uploads/2025/12/demo-foto-3.webp') center/cover no-repeat;"></div>
                                <div class="wc-demo-photo-item wc-demo-photo-item--wide" style="background: url('/wp-content/uploads/2025/12/demo-foto-4.webp') center/cover no-repeat;"></div>
                                <div class="wc-demo-photo-item" style="background: url('/wp-content/uploads/2025/12/demo-foto-5.webp') center/cover no-repeat;"></div>
                            </div>
                            
                            <!-- Services List -->
                            <div class="wc-demo-services-list">
                                <div class="wc-demo-service-row">
                                    <span class="wc-demo-service-name">Bruiloften</span>
                                    <span class="wc-demo-service-line"></span>
                                    <span class="wc-demo-service-price">vanaf €1.500</span>
                                </div>
                                <div class="wc-demo-service-row">
                                    <span class="wc-demo-service-name">Portretten</span>
                                    <span class="wc-demo-service-line"></span>
                                    <span class="wc-demo-service-price">vanaf €250</span>
                                </div>
                                <div class="wc-demo-service-row">
                                    <span class="wc-demo-service-name">Commercieel</span>
                                    <span class="wc-demo-service-line"></span>
                                    <span class="wc-demo-service-price">op aanvraag</span>
                                </div>
                            </div>
                            
                            <!-- Contact -->
                            <div class="wc-demo-contact-minimal">
                                <h2>Laten we praten</h2>
                                <a class="wc-demo-email-link">hello@studiolens.nl →</a>
                            </div>
                            <div class="wc-demo-footer" style="background: #000;"><p>© 2025 Studio Lens — Gemaakt door Webbiecorn</p></div>
                        </div>
                        
                        <!-- ============ DEMO SITE: ADVOCAAT (Corporate Split + Stats) ============ -->
                        <div class="wc-demo-site wc-demo-site--advocaat" data-site="advocaat" style="display: none;">
                            <!-- Corporate Hero -->
                            <div class="wc-demo-corporate-hero">
                                <nav class="wc-demo-nav wc-demo-nav--corporate">
                                    <div class="wc-demo-logo">⚖️ JANSEN & PARTNERS</div>
                                    <div class="wc-demo-nav__links"><span>Expertise</span><span>Team</span><span>Contact</span></div>
                                </nav>
                                <div class="wc-demo-corporate-content">
                                    <div class="wc-demo-corporate-badge">ADVOCATENKANTOOR SINDS 1985</div>
                                    <h1>Recht.<br>Met resultaat.</h1>
                                    <p>Persoonlijk, doortastend, deskundig.</p>
                                    <div class="wc-demo-corporate-ctas">
                                        <button class="wc-demo-btn wc-demo-btn--corporate">Gratis Consult</button>
                                        <span class="wc-demo-phone">📞 010-9876543</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Stats Row -->
                            <div class="wc-demo-corporate-stats">
                                <div class="wc-demo-corp-stat">
                                    <span class="wc-demo-corp-stat-num">40+</span>
                                    <span class="wc-demo-corp-stat-label">Jaar ervaring</span>
                                </div>
                                <div class="wc-demo-corp-stat">
                                    <span class="wc-demo-corp-stat-num">2500+</span>
                                    <span class="wc-demo-corp-stat-label">Zaken gewonnen</span>
                                </div>
                                <div class="wc-demo-corp-stat">
                                    <span class="wc-demo-corp-stat-num">98%</span>
                                    <span class="wc-demo-corp-stat-label">Klanttevredenheid</span>
                                </div>
                            </div>
                            
                            <!-- Expertise Cards -->
                            <div class="wc-demo-expertise-section">
                                <h2>Onze Expertise</h2>
                                <div class="wc-demo-expertise-grid">
                                    <div class="wc-demo-expertise-card">
                                        <span class="wc-demo-expertise-icon">🏠</span>
                                        <h3>Familierecht</h3>
                                        <p>Scheiding, alimentatie, voogdij</p>
                                    </div>
                                    <div class="wc-demo-expertise-card">
                                        <span class="wc-demo-expertise-icon">💼</span>
                                        <h3>Ondernemingsrecht</h3>
                                        <p>Contracten, fusies, geschillen</p>
                                    </div>
                                    <div class="wc-demo-expertise-card">
                                        <span class="wc-demo-expertise-icon">⚖️</span>
                                        <h3>Strafrecht</h3>
                                        <p>Verdediging, advies, beroep</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- CTA -->
                            <div class="wc-demo-corporate-cta">
                                <h2>Eerste gesprek gratis</h2>
                                <p>Neem contact op voor een vrijblijvend advies</p>
                                <button class="wc-demo-btn wc-demo-btn--corporate wc-demo-btn--large">Plan Afspraak</button>
                            </div>
                            <div class="wc-demo-footer" style="background: #0d1520;"><p>© 2025 Jansen & Partners — Gemaakt door Webbiecorn</p></div>
                        </div>
                        
                        <!-- ============ DEMO SITE: BAKKER (Cozy Storytelling) ============ -->
                        <div class="wc-demo-site wc-demo-site--bakker" data-site="bakker" style="display: none;">
                            <!-- Warm Hero -->
                            <div class="wc-demo-bakery-hero">
                                <div class="wc-demo-bakery-pattern"></div>
                                <nav class="wc-demo-nav">
                                    <div class="wc-demo-logo">🥐 De Gouden Korst</div>
                                    <div class="wc-demo-nav__links"><span>Menu</span><span>Bestellen</span><span>Over Ons</span></div>
                                </nav>
                                <div class="wc-demo-bakery-content">
                                    <span class="wc-demo-handwritten">Ambachtelijk sinds 1952</span>
                                    <h1>Elke dag vers<br>uit eigen oven</h1>
                                    <div class="wc-demo-bakery-badge">🏆 Beste Bakker 2024</div>
                                </div>
                            </div>
                            
                            <!-- Today's Fresh -->
                            <div class="wc-demo-fresh-section">
                                <h2>Vandaag Vers</h2>
                                <div class="wc-demo-fresh-grid">
                                    <div class="wc-demo-fresh-item">
                                        <span class="wc-demo-fresh-emoji">🍞</span>
                                        <h3>Zuurdesem</h3>
                                        <p>Huisgemaakt</p>
                                        <span class="wc-demo-fresh-price">€4.50</span>
                                    </div>
                                    <div class="wc-demo-fresh-item">
                                        <span class="wc-demo-fresh-emoji">🥐</span>
                                        <h3>Croissant</h3>
                                        <p>Roomboter</p>
                                        <span class="wc-demo-fresh-price">€2.75</span>
                                    </div>
                                    <div class="wc-demo-fresh-item">
                                        <span class="wc-demo-fresh-emoji">🧁</span>
                                        <h3>Cupcakes</h3>
                                        <p>Seizoenssmaken</p>
                                        <span class="wc-demo-fresh-price">€3.50</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Story Section -->
                            <div class="wc-demo-story-section">
                                <div class="wc-demo-story-quote">
                                    <span class="wc-demo-big-quote">"</span>
                                    <p>Al drie generaties bakken wij met liefde en passie. Onze recepten gaan terug tot oma's keuken.</p>
                                    <cite>— Familie Bakker</cite>
                                </div>
                            </div>
                            
                            <!-- Order Section -->
                            <div class="wc-demo-order-section">
                                <h2>Online Bestellen</h2>
                                <p>Voor 18:00 besteld, morgen vers opgehaald</p>
                                <button class="wc-demo-btn wc-demo-btn--bakery wc-demo-btn--large">Bestel Nu 🥖</button>
                            </div>
                            
                            <!-- Hours -->
                            <div class="wc-demo-hours-section">
                                <div class="wc-demo-hours-grid">
                                    <div><strong>Ma-Vr</strong><br>06:30 - 18:00</div>
                                    <div><strong>Zaterdag</strong><br>07:00 - 17:00</div>
                                    <div><strong>Zondag</strong><br>08:00 - 14:00</div>
                                </div>
                            </div>
                            <div class="wc-demo-footer" style="background: #3d2510;"><p>© 2025 De Gouden Korst — Gemaakt door Webbiecorn</p></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="wc-macbook__base">
                <div class="wc-macbook__keyboard-area">
                    <div class="wc-macbook__touchpad"></div>
                </div>
            </div>
            <div class="wc-macbook__edge"></div>
        </div>
        
        <!-- Hint -->
        <div class="wc-laptop-modal__hint">
            <span>👆 Scroll door de site of klik buiten om te sluiten</span>
        </div>
    </div>
</div>


<!-- Packages Section -->
<section class="wc-section wc-section--alt" id="pakketten">
    <div class="wc-container">
        <div class="wc-packages__header wc-animate">
            <h2 class="wc-section__title">Kies je pakket</h2>
            <p class="wc-section__subtitle">Van een simpele landingspagina tot een complete bedrijfswebsite met doorlopende ondersteuning.</p>
        </div>
        
        <div class="wc-packages__grid wc-packages__grid--page">
            
            <!-- Package 1: Micro One-Page -->
            <div class="wc-package-card wc-animate">
                <div class="wc-package-card__header">
                    <span class="wc-package-card__tag">Starters</span>
                    <h3 class="wc-package-card__title">Micro One-Page</h3>
                    <p class="wc-package-card__desc">Compacte landingspagina voor starters, campagnes of productlanceringen.</p>
                </div>
                <div class="wc-package-card__price">
                    <span class="wc-package-card__amount">€300 – €500</span>
                </div>
                <ul class="wc-package-card__features">
                    <li>✓ 1 pagina, volledig custom coded</li>
                    <li>✓ Clean, responsive design</li>
                    <li>✓ Basis SEO (meta, titel, headings)</li>
                    <li>✓ Contactformulier (optioneel)</li>
                    <li>✓ Hostingadvies + basis setup</li>
                </ul>
                <div class="wc-package-card__meta">
                    <span><strong>Levertijd:</strong> 1-3 dagen</span>
                    <span><strong>Revisies:</strong> 1 ronde</span>
                </div>
                <a href="<?php echo home_url('/#contact'); ?>" class="wc-btn wc-btn--secondary wc-btn--full">Offerte aanvragen</a>
            </div>
            
            <!-- Package 2: Starter Web -->
            <div class="wc-package-card wc-animate">
                <div class="wc-package-card__header">
                    <span class="wc-package-card__tag">Populair</span>
                    <h3 class="wc-package-card__title">Starter Web</h3>
                    <p class="wc-package-card__desc">Nette website voor zzp'ers, freelancers en kleine bedrijven.</p>
                </div>
                <div class="wc-package-card__price">
                    <span class="wc-package-card__amount">€500 – €800</span>
                </div>
                <ul class="wc-package-card__features">
                    <li>✓ 1-5 pagina's</li>
                    <li>✓ Responsive design</li>
                    <li>✓ Basis SEO-optimalisatie</li>
                    <li>✓ Contactformulier</li>
                    <li>✓ Hostingadvies, basis beveiliging</li>
                </ul>
                <div class="wc-package-card__meta">
                    <span><strong>Levertijd:</strong> 3-7 dagen</span>
                    <span><strong>Revisies:</strong> 2 rondes</span>
                </div>
                <a href="<?php echo home_url('/#contact'); ?>" class="wc-btn wc-btn--primary wc-btn--full">Offerte aanvragen</a>
            </div>
            
            <!-- Package 3: Professional -->
            <div class="wc-package-card wc-package-card--featured wc-animate">
                <div class="wc-package-card__badge">Aanbevolen</div>
                <div class="wc-package-card__header">
                    <span class="wc-package-card__tag">Bedrijven</span>
                    <h3 class="wc-package-card__title">Professional Web & Branding</h3>
                    <p class="wc-package-card__desc">Complete website met optionele branding voor bedrijven die willen uitstralen.</p>
                </div>
                <div class="wc-package-card__price">
                    <span class="wc-package-card__amount">€900 – €1.800</span>
                </div>
                <ul class="wc-package-card__features">
                    <li>✓ Tot ±10 pagina's / secties</li>
                    <li>✓ Custom website of lichte webapp</li>
                    <li>✓ Branding-optie (logo, kleuren, typografie)</li>
                    <li>✓ On-page SEO-optimalisatie</li>
                    <li>✓ Formulieren met backend-verwerking</li>
                    <li>✓ 1 maand kleine aanpassingen & bugfixes</li>
                    <li>✓ Documentatie voor beheer</li>
                </ul>
                <div class="wc-package-card__meta">
                    <span><strong>Levertijd:</strong> 1-2 weken</span>
                    <span><strong>Revisies:</strong> 2 + 1 correctie</span>
                </div>
                <a href="<?php echo home_url('/#contact'); ?>" class="wc-btn wc-btn--primary wc-btn--full">Offerte aanvragen</a>
            </div>
            
            <!-- Package 4: Business Growth -->
            <div class="wc-package-card wc-animate">
                <div class="wc-package-card__header">
                    <span class="wc-package-card__tag">Groei</span>
                    <h3 class="wc-package-card__title">Business Web & Growth</h3>
                    <p class="wc-package-card__desc">Voor bedrijven die technische zekerheid en doorontwikkeling zoeken.</p>
                </div>
                <div class="wc-package-card__price">
                    <span class="wc-package-card__amount">€1.800 – €3.500+</span>
                    <span class="wc-package-card__recurring">+ €50-€200/maand support</span>
                </div>
                <ul class="wc-package-card__features">
                    <li>✓ Full-custom website of webapp</li>
                    <li>✓ Complete branding & visuele assets</li>
                    <li>✓ SEO + performance optimalisatie</li>
                    <li>✓ API-integraties (mailinglists, CRM, etc.)</li>
                    <li>✓ Caching en beveiliging</li>
                    <li>✓ Onderhoudscontract inclusief</li>
                    <li>✓ Optioneel: SEO-content, blogs</li>
                </ul>
                <div class="wc-package-card__meta">
                    <span><strong>Levertijd:</strong> 2-4 weken</span>
                    <span><strong>Revisies:</strong> 3 rondes</span>
                </div>
                <a href="<?php echo home_url('/#contact'); ?>" class="wc-btn wc-btn--secondary wc-btn--full">Offerte aanvragen</a>
            </div>
            
            <!-- Package 5: Full Service -->
            <div class="wc-package-card wc-animate">
                <div class="wc-package-card__header">
                    <span class="wc-package-card__tag">Premium</span>
                    <h3 class="wc-package-card__title">Full Service Premium</h3>
                    <p class="wc-package-card__desc">Complete ontzorging: website, content, strategie en doorontwikkeling.</p>
                </div>
                <div class="wc-package-card__price">
                    <span class="wc-package-card__amount">€2.500 – €4.000+</span>
                    <span class="wc-package-card__recurring">+ €100-€300/maand retainer</span>
                </div>
                <ul class="wc-package-card__features">
                    <li>✓ Alles uit Business Web & Growth</li>
                    <li>✓ Contentproductie (blogs, SEO-teksten)</li>
                    <li>✓ Social media templates</li>
                    <li>✓ Kwartaalrapportage + groeiplan</li>
                    <li>✓ Doorlopende doorontwikkeling</li>
                    <li>✓ Prioriteit support</li>
                </ul>
                <div class="wc-package-card__meta">
                    <span><strong>Levertijd:</strong> 3-5 weken</span>
                    <span><strong>Revisies:</strong> 4 per fase</span>
                </div>
                <a href="<?php echo home_url('/#contact'); ?>" class="wc-btn wc-btn--secondary wc-btn--full">Offerte aanvragen</a>
            </div>
            
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="wc-section">
    <div class="wc-container">
        <div class="wc-compare__header wc-animate">
            <h2 class="wc-section__title">Vergelijk de pakketten</h2>
            <p class="wc-section__subtitle">Een overzicht van wat elk pakket bevat</p>
        </div>
        
        <div class="wc-compare__table-wrap wc-animate">
            <table class="wc-compare__table">
                <thead>
                    <tr>
                        <th>Functie</th>
                        <th>Micro</th>
                        <th>Starter</th>
                        <th class="wc-compare__highlight">Professional</th>
                        <th>Business</th>
                        <th>Full Service</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Aantal pagina's</td>
                        <td>1</td>
                        <td>1-5</td>
                        <td class="wc-compare__highlight">±10</td>
                        <td>Onbeperkt</td>
                        <td>Onbeperkt</td>
                    </tr>
                    <tr>
                        <td>Responsive design</td>
                        <td>✓</td>
                        <td>✓</td>
                        <td class="wc-compare__highlight">✓</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>SEO-optimalisatie</td>
                        <td>Basis</td>
                        <td>Basis</td>
                        <td class="wc-compare__highlight">Volledig</td>
                        <td>Volledig+</td>
                        <td>Volledig+</td>
                    </tr>
                    <tr>
                        <td>Contactformulier</td>
                        <td>Optioneel</td>
                        <td>✓</td>
                        <td class="wc-compare__highlight">✓</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Branding (logo, kleuren)</td>
                        <td>—</td>
                        <td>—</td>
                        <td class="wc-compare__highlight">Optioneel</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>API-integraties</td>
                        <td>—</td>
                        <td>—</td>
                        <td class="wc-compare__highlight">Basis</td>
                        <td>Uitgebreid</td>
                        <td>Uitgebreid</td>
                    </tr>
                    <tr>
                        <td>Onderhoud na oplevering</td>
                        <td>—</td>
                        <td>—</td>
                        <td class="wc-compare__highlight">1 maand</td>
                        <td>Contract</td>
                        <td>Contract</td>
                    </tr>
                    <tr>
                        <td>Contentproductie</td>
                        <td>—</td>
                        <td>—</td>
                        <td class="wc-compare__highlight">—</td>
                        <td>Optioneel</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Revisierondes</td>
                        <td>1</td>
                        <td>2</td>
                        <td class="wc-compare__highlight">2+1</td>
                        <td>3</td>
                        <td>4/fase</td>
                    </tr>
                    <tr>
                        <td>Levertijd</td>
                        <td>1-3 dagen</td>
                        <td>3-7 dagen</td>
                        <td class="wc-compare__highlight">1-2 weken</td>
                        <td>2-4 weken</td>
                        <td>3-5 weken</td>
                    </tr>
                    <tr class="wc-compare__price-row">
                        <td><strong>Prijs</strong></td>
                        <td><strong>€300-500</strong></td>
                        <td><strong>€500-800</strong></td>
                        <td class="wc-compare__highlight"><strong>€900-1.800</strong></td>
                        <td><strong>€1.800-3.500+</strong></td>
                        <td><strong>€2.500-4.000+</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Add-ons Section -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <div class="wc-addons__header wc-animate">
            <h2 class="wc-section__title">Add-ons & Uitbreidingen</h2>
            <p class="wc-section__subtitle">Extra's die je aan elk pakket kunt toevoegen</p>
        </div>
        
        <div class="wc-addons__grid wc-animate">
            <div class="wc-addon">
                <span class="wc-addon__title">Extra pagina's</span>
                <span class="wc-addon__price">vanaf €75/pagina</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Blog / nieuws sectie</span>
                <span class="wc-addon__price">vanaf €150</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">API-koppeling</span>
                <span class="wc-addon__price">vanaf €200</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">E-commerce basis</span>
                <span class="wc-addon__price">vanaf €500</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Logo ontwerp</span>
                <span class="wc-addon__price">vanaf €250</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Huisstijl compleet</span>
                <span class="wc-addon__price">vanaf €500</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">SEO-content (per pagina)</span>
                <span class="wc-addon__price">vanaf €100</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Maandelijks onderhoud</span>
                <span class="wc-addon__price">€50-200/maand</span>
            </div>
        </div>
    </div>
</section>

<!-- Payment Terms -->
<section class="wc-section">
    <div class="wc-container">
        <div class="wc-terms wc-animate">
            <h2 class="wc-section__title">Betalingsvoorwaarden</h2>
            
            <div class="wc-terms__grid">
                <div class="wc-terms__item">
                    <h3>Projecten tot €1.500</h3>
                    <div class="wc-terms__visual">
                        <div class="wc-terms__bar">
                            <div class="wc-terms__fill" style="width: 50%;"></div>
                        </div>
                        <span>50% vooraf</span>
                        <div class="wc-terms__bar">
                            <div class="wc-terms__fill wc-terms__fill--alt" style="width: 50%;"></div>
                        </div>
                        <span>50% bij oplevering</span>
                    </div>
                </div>
                
                <div class="wc-terms__item">
                    <h3>Projecten boven €1.500</h3>
                    <div class="wc-terms__visual">
                        <div class="wc-terms__bar">
                            <div class="wc-terms__fill" style="width: 40%;"></div>
                        </div>
                        <span>40% bij start</span>
                        <div class="wc-terms__bar">
                            <div class="wc-terms__fill wc-terms__fill--mid" style="width: 40%;"></div>
                        </div>
                        <span>40% bij eerste versie</span>
                        <div class="wc-terms__bar">
                            <div class="wc-terms__fill wc-terms__fill--alt" style="width: 20%;"></div>
                        </div>
                        <span>20% bij afronding</span>
                    </div>
                </div>
            </div>
            
            <p class="wc-terms__note">
                Onderhoudsabonnementen worden maandelijks vooraf gefactureerd. Project start zodra de eerste betaling is ontvangen.
            </p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="wc-section wc-section--alt" id="faq">
    <div class="wc-container">
        <div class="wc-faq__header wc-animate">
            <h2 class="wc-section__title">Veelgestelde vragen</h2>
        </div>
        
        <div class="wc-faq__list wc-animate">
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Hoe lang duurt het bouwen van een website?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Dat hangt af van het pakket. Een Micro One-Page is vaak binnen 1-3 dagen klaar. Een complete Professional website duurt 1-2 weken, en grotere projecten 2-5 weken. De doorlooptijd is exclusief wachttijd op jouw feedback.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Wat als ik niet tevreden ben met het ontwerp?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Elk pakket bevat revisierondes om aanpassingen te doen. We stoppen pas als je tevreden bent. Extra revisies buiten het pakket kosten €50 per ronde.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Moet ik zelf hosting regelen?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Dat kan, maar we helpen je graag. We adviseren betrouwbare hostingpartijen en kunnen de volledige setup voor je doen. Hosting kost gemiddeld €5-15 per maand.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Kan ik later nog uitbreiden?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Absoluut! Alle websites zijn gebouwd met uitbreiding in gedachten. Extra pagina's, functies of integraties kunnen altijd later toegevoegd worden via onze add-ons.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Waarom geen WordPress pagebuilders?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Pagebuilders zoals Elementor of Divi maken websites traag (vaak 3-5 seconden laadtijd) en moeilijk te onderhouden. Hand-coded sites laden in onder de 2 seconden, zijn veiliger en scoren beter in Google.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Krijg ik toegang tot de code?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Ja, na oplevering krijg je volledige toegang tot alle bestanden en de hosting. De website is 100% van jou. Bij onderhoudspakketten beheren wij de techniek voor je.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Wat hebben we van jou nodig om te starten?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>We beginnen met een kort intakegesprek (telefonisch of video) om je wensen te bespreken. Daarna hebben we nodig: je logo (indien aanwezig), teksten/content, en eventuele foto's. Geen zorgen als je dit nog niet hebt — we kunnen hierbij helpen.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/cta-footer', null, array(
    'title' => 'Klaar om te starten?',
    'text' => 'Vertel ons over je project. We reageren binnen 24 uur met een vrijblijvende offerte.',
    'primary' => array('label' => 'Offerte aanvragen', 'url' => home_url('/contact/')),
    'secondary' => array('label' => 'Direct mailen', 'url' => 'mailto:info@webbiecorn.nl'),
));
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========================================
    // 6 LAPTOPS GRID - PORTAL EFFECT
    // ========================================
    const laptopItems = document.querySelectorAll('.wc-laptop-item');
    const laptopModal = document.getElementById('laptopModal');
    const modalViewport = document.getElementById('modalViewport');
    const modalClose = document.querySelector('.wc-laptop-modal__close');
    const modalBackdrop = document.querySelector('.wc-laptop-modal__backdrop');
    
    if (laptopItems.length) {
        let activeLaptop = null;
        
        // Mini site content voor elke laptop (compact preview - clean images)
        const miniSiteContent = {
            restaurant: `
                <div class="wc-mini-site wc-mini-site--restaurant">
                    <div class="wc-mini-hero" style="position: relative; height: 100%; overflow: hidden;">
                        <div class="wc-mini-hero__bg" style="position: absolute; inset: 0; background: url('/wp-content/uploads/2025/12/demo-restaurant.webp') center/cover;"></div>
                    </div>
                </div>
            `,
            fitness: `
                <div class="wc-mini-site wc-mini-site--fitness">
                    <div class="wc-mini-hero" style="position: relative; height: 100%; overflow: hidden;">
                        <div class="wc-mini-hero__bg" style="position: absolute; inset: 0; background: url('/wp-content/uploads/2025/12/demo-fitness.webp') center/cover;"></div>
                    </div>
                </div>
            `,
            kapper: `
                <div class="wc-mini-site wc-mini-site--kapper">
                    <div class="wc-mini-hero" style="position: relative; height: 100%; overflow: hidden;">
                        <div class="wc-mini-hero__bg" style="position: absolute; inset: 0; background: url('/wp-content/uploads/2025/12/demo-kapper.webp') center/cover;"></div>
                    </div>
                </div>
            `,
            fotograaf: `
                <div class="wc-mini-site wc-mini-site--fotograaf">
                    <div class="wc-mini-hero" style="position: relative; height: 100%; overflow: hidden;">
                        <div class="wc-mini-hero__bg" style="position: absolute; inset: 0; background: url('/wp-content/uploads/2025/12/demo-fotograaf.webp') center/cover;"></div>
                    </div>
                </div>
            `,
            advocaat: `
                <div class="wc-mini-site wc-mini-site--advocaat">
                    <div class="wc-mini-hero" style="position: relative; height: 100%; overflow: hidden;">
                        <div class="wc-mini-hero__bg" style="position: absolute; inset: 0; background: url('/wp-content/uploads/2025/12/demo-advocaat.webp') center/cover;"></div>
                    </div>
                </div>
            `,
            bakker: `
                <div class="wc-mini-site wc-mini-site--bakker">
                    <div class="wc-mini-hero" style="position: relative; height: 100%; overflow: hidden;">
                        <div class="wc-mini-hero__bg" style="position: absolute; inset: 0; background: url('/wp-content/uploads/2025/12/demo-bakker.webp') center/cover;"></div>
                    </div>
                </div>
            `
        };
        
        // Showcase content voor browser window (uitgebreide versie)
        const showcaseContent = {
            restaurant: {
                title: 'Restaurant Website',
                subtitle: 'Alles wat je horeca nodig heeft',
                bgImage: '/wp-content/uploads/2025/12/demo-restaurant.webp',
                icon: '🍽️',
                features: [
                    { icon: '📅', text: 'Online reserveringssysteem', desc: 'Gasten boeken 24/7 online. Automatische bevestigingen, herinneringen en no-show preventie. Koppeling met je agenda.' },
                    { icon: '📱', text: 'Digitaal menu met foto\'s', desc: 'Appetijt opwekken met prachtige gerechten foto\'s. Allergenen filter, seizoensmenu\'s en dagelijkse specials.' },
                    { icon: '⭐', text: 'Review integratie', desc: 'Toon je beste Google en TripAdvisor reviews automatisch. Social proof die nieuwe gasten overtuigt.' },
                    { icon: '📍', text: 'Locatie & openingstijden', desc: 'Google Maps integratie, routebeschrijving en actuele openingstijden. Nooit meer bellen voor info.' },
                    { icon: '📸', text: 'Sfeervolle fotogalerij', desc: 'Professionele ambiance foto\'s die de sfeer van jouw restaurant overbrengen. Fullscreen lightbox.' },
                    { icon: '📧', text: 'Nieuwsbrief & contact', desc: 'Bouw een mailinglijst op voor events en aanbiedingen. Direct contact voor groepsreserveringen.' }
                ],
                price: 'Vanaf €500',
                cta: 'Perfect voor jouw restaurant?'
            },
            fitness: {
                title: 'Fitness Website',
                subtitle: 'Meer leden, minder gedoe',
                bgImage: '/wp-content/uploads/2025/12/demo-fitness.webp',
                icon: '💪',
                features: [
                    { icon: '📆', text: 'Lesrooster met filters', desc: 'Interactief lesrooster gefilterd op trainer, niveau of type les. Leden zien direct beschikbaarheid.' },
                    { icon: '💳', text: 'Abonnementen overzicht', desc: 'Duidelijke vergelijking van alle abonnementsvormen. Voordelen, prijzen en wat inbegrepen is.' },
                    { icon: '👥', text: 'Trainers profielen', desc: 'Stel je team voor met foto\'s, specialisaties en certficaten. Persoonlijke connectie maken.' },
                    { icon: '📱', text: 'App-achtige ervaring', desc: 'Mobiel-first design dat voelt als een native app. Snel, responsive en intuïtief.' },
                    { icon: '🎯', text: 'Proefles aanvragen', desc: 'Laagdrempelig formulier voor gratis proefles. Direct leads in je mailbox met alle info.' },
                    { icon: '📊', text: 'Resultaten showcase', desc: 'Toon transformaties en succesverhalen. Before/after galerij die inspireert.' }
                ],
                price: 'Vanaf €500',
                cta: 'Klaar om te groeien?'
            },
            kapper: {
                title: 'Kapsalon Website',
                subtitle: 'Boekingen op automatische piloot',
                bgImage: '/wp-content/uploads/2025/12/demo-kapper.webp',
                icon: '✂️',
                features: [
                    { icon: '📅', text: 'Online afspraken boeken', desc: 'Klanten boeken zelf hun behandeling, kapper en tijdstip. Automatische bevestigingen en herinneringen.' },
                    { icon: '💰', text: 'Behandelingen & prijzen', desc: 'Complete prijslijst met alle behandelingen. Van knippen tot kleuren, duidelijk en transparant.' },
                    { icon: '👩‍🦰', text: 'Team specialisaties', desc: 'Elke stylist met eigen profiel en expertise. Klanten kiezen hun favoriete kapper.' },
                    { icon: '📸', text: 'Before/after galerij', desc: 'Toon je mooiste transformaties. Inspiratie voor klanten en bewijs van vakmanschap.' },
                    { icon: '⭐', text: 'Klantreviews', desc: 'Automatische Google reviews integratie. Laat tevreden klanten voor je spreken.' },
                    { icon: '🎁', text: 'Cadeaubonnen verkoop', desc: 'Online cadeaubonnen verkopen met unieke codes. Perfect cadeau, extra omzet voor jou.' }
                ],
                price: 'Vanaf €500',
                cta: 'Minder telefoon, meer knippen?'
            },
            fotograaf: {
                title: 'Fotografie Website',
                subtitle: 'Laat je werk voor zich spreken',
                bgImage: '/wp-content/uploads/2025/12/demo-fotograaf.webp',
                icon: '📷',
                features: [
                    { icon: '🖼️', text: 'Fullscreen portfolio galerij', desc: 'Je mooiste werk in fullscreen glory. Lightbox galerij met smooth transities en categorieën.' },
                    { icon: '📦', text: 'Pakketten & prijzen', desc: 'Duidelijke shootpakketten met wat inbegrepen is. Van mini-sessies tot volledige trouwreportages.' },
                    { icon: '📝', text: 'Offerte aanvragen', desc: 'Slim formulier met datum, type shoot en wensen. Direct alle info voor een gepersonaliseerde offerte.' },
                    { icon: '🎬', text: 'Video integratie', desc: 'Videografie showcase naast foto\'s. Behind-the-scenes en highlight reels embedden.' },
                    { icon: '📱', text: 'Instagram feed', desc: 'Live Instagram feed op je website. Altijd actueel met je nieuwste werk.' },
                    { icon: '📅', text: 'Beschikbaarheid', desc: 'Kalender met beschikbare datums. Voorkom dubbele boekingen en plan efficiënt.' }
                ],
                price: 'Vanaf €500',
                cta: 'Jouw werk verdient dit'
            },
            advocaat: {
                title: 'Advocatenkantoor Website',
                subtitle: 'Vertrouwen uitstralen, cliënten winnen',
                bgImage: '/wp-content/uploads/2025/12/demo-advocaat.webp',
                icon: '⚖️',
                features: [
                    { icon: '⚖️', text: 'Rechtsgebieden overzicht', desc: 'Duidelijk overzicht van alle expertisegebieden. Potentiële cliënten vinden snel de juiste hulp.' },
                    { icon: '👔', text: 'Team expertise', desc: 'Elke advocaat met profiel, specialisaties en track record. Vertrouwen opbouwen vanaf eerste bezoek.' },
                    { icon: '📞', text: 'Gratis consult', desc: 'Laagdrempelige kennismaking. Formulier voor gratis eerste gesprek, direct in agenda.' },
                    { icon: '📰', text: 'Juridisch nieuws', desc: 'Blog met juridische updates en uitleg. Positie als thought leader in je vakgebied.' },
                    { icon: '🏆', text: 'Succesverhalen', desc: 'Geanonimiseerde cases en resultaten. Laat zien wat je voor cliënten hebt bereikt.' },
                    { icon: '🔒', text: 'Veilig contact', desc: 'Versleuteld contactformulier voor gevoelige informatie. Privacy en veiligheid gegarandeerd.' }
                ],
                price: 'Vanaf €800',
                cta: 'Professionele uitstraling nodig?'
            },
            bakker: {
                title: 'Bakkerij Website',
                subtitle: 'Jouw ambacht online',
                bgImage: '/wp-content/uploads/2025/12/demo-bakker.webp',
                icon: '🥐',
                features: [
                    { icon: '🍞', text: 'Assortiment met prijzen', desc: 'Volledig assortiment met smakelijke foto\'s en prijzen. Van brood tot gebak, alles in één overzicht.' },
                    { icon: '🛒', text: 'Online bestellen', desc: 'Klanten bestellen vooruit en halen af wanneer het uitkomt. Minder wachtrij, meer gemak.' },
                    { icon: '📖', text: 'Jouw verhaal', desc: 'Deel de passie en tradities achter je bakkerij. Authentieke verhalen die verbinden.' },
                    { icon: '📍', text: 'Vestigingen & tijden', desc: 'Alle locaties met adressen, openingstijden en routebeschrijving. Altijd actueel.' },
                    { icon: '🎂', text: 'Taarten op maat', desc: 'Bestelformulier voor speciale taarten. Foto\'s, smaken, maten en datum kiezen.' },
                    { icon: '📧', text: 'Weekaanbiedingen', desc: 'Nieuwsbrief met weekspecials en seizoensproducten. Klanten komen terug voor meer.' }
                ],
                price: 'Vanaf €500',
                cta: 'Laat klanten watertanden?'
            }
        };
        
        // Wake up laptop (Portal Effect)
        function wakeLaptop(laptopItem) {
            const siteType = laptopItem.dataset.laptop;
            const awakeContainer = laptopItem.querySelector('.wc-laptop-portal__awake');
            
            // Als al wakker, doe niets (click handler regelt expand)
            if (laptopItem.classList.contains('is-awake')) {
                return;
            }
            
            // Sluit eventuele andere laptops
            if (activeLaptop && activeLaptop !== laptopItem) {
                sleepLaptop(activeLaptop);
            }
            
            // Voeg portal opening class toe
            laptopItem.classList.add('is-opening');
            
            // Injecteer mini site content + expand hint
            awakeContainer.innerHTML = `
                ${miniSiteContent[siteType] || '<div style="padding: 20px; color: #fff;">Laden...</div>'}
                <div class="wc-laptop-expand-hint">
                    <span>🔍 Klik om te vergroten</span>
                </div>
            `;
            
            // Voeg close button toe
            const closeBtn = document.createElement('button');
            closeBtn.className = 'wc-laptop-portal__close';
            closeBtn.innerHTML = '×';
            closeBtn.onclick = (e) => {
                e.stopPropagation();
                sleepLaptop(laptopItem);
            };
            
            const screen = laptopItem.querySelector('.wc-laptop-portal__screen');
            if (!screen.querySelector('.wc-laptop-portal__close')) {
                screen.appendChild(closeBtn);
            }
            
            // Portal animatie met GSAP
            const vortex = laptopItem.querySelector('.wc-laptop-portal__vortex');
            const sleep = laptopItem.querySelector('.wc-laptop-portal__sleep');
            const awake = laptopItem.querySelector('.wc-laptop-portal__awake');
            
            gsap.timeline()
                // Vortex draait
                .to(vortex, { opacity: 1, duration: 0.3 })
                // Sleep content verdwijnt in vortex
                .to(sleep, { 
                    opacity: 0, 
                    scale: 0.3, 
                    rotation: 180,
                    duration: 0.5, 
                    ease: 'power2.in' 
                }, '-=0.2')
                // Opening class verwijderen, awake class toevoegen
                .call(() => {
                    laptopItem.classList.remove('is-opening');
                    laptopItem.classList.add('is-awake');
                    activeLaptop = laptopItem;
                })
                // Vortex verdwijnt
                .to(vortex, { opacity: 0, duration: 0.3 })
                // Website verschijnt
                .to(awake, { 
                    opacity: 1, 
                    scale: 1, 
                    duration: 0.5, 
                    ease: 'back.out(1.2)' 
                }, '-=0.2');
        }
        
        // Put laptop to sleep
        function sleepLaptop(laptopItem) {
            const vortex = laptopItem.querySelector('.wc-laptop-portal__vortex');
            const sleep = laptopItem.querySelector('.wc-laptop-portal__sleep');
            const awake = laptopItem.querySelector('.wc-laptop-portal__awake');
            const closeBtn = laptopItem.querySelector('.wc-laptop-portal__close');
            
            gsap.timeline()
                // Website verdwijnt in vortex
                .to(awake, { 
                    opacity: 0, 
                    scale: 0.5, 
                    duration: 0.3, 
                    ease: 'power2.in' 
                })
                // Vortex verschijnt even
                .to(vortex, { opacity: 1, duration: 0.2 }, '-=0.1')
                // Awake class verwijderen
                .call(() => {
                    laptopItem.classList.remove('is-awake');
                    laptopItem.classList.remove('is-opening');
                    if (closeBtn) closeBtn.remove();
                    if (activeLaptop === laptopItem) activeLaptop = null;
                })
                // Sleep content komt terug
                .to(sleep, { 
                    opacity: 1, 
                    scale: 1, 
                    rotation: 0,
                    duration: 0.4, 
                    ease: 'back.out(1.5)' 
                })
                // Vortex verdwijnt
                .to(vortex, { opacity: 0, duration: 0.2 }, '-=0.3');
        }
        
        // Click handlers for laptops
        laptopItems.forEach(item => {
            item.addEventListener('click', (e) => {
                // Niet triggeren als je op close button klikt
                if (e.target.closest('.wc-laptop-portal__close')) return;
                if (e.target.closest('.wc-browser-window__close')) return;
                
                // Als laptop wakker is, expand naar browser window
                if (item.classList.contains('is-awake') && !item.classList.contains('is-expanded')) {
                    expandToBrowser(item);
                } 
                // Als nog niet wakker, maak wakker
                else if (!item.classList.contains('is-awake')) {
                    wakeLaptop(item);
                }
            });
        });
        
        // ========================================
        // WINDOW MORPH - Expand to Browser
        // ========================================
        let expandedLaptop = null;
        
        function expandToBrowser(laptopItem) {
            const siteType = laptopItem.dataset.laptop;
            const showcase = showcaseContent[siteType];
            
            if (!showcase) return;
            
            // Genereer feature list HTML met data-desc voor popup
            const featuresHTML = showcase.features.map((f, index) => 
                `<div class="wc-showcase-feature" data-desc="${f.desc.replace(/"/g, '&quot;')}" data-icon="${f.icon}" data-title="${f.text.replace(/"/g, '&quot;')}">
                    <span class="wc-showcase-feature__icon">${f.icon}</span>
                    <span class="wc-showcase-feature__text">${f.text}</span>
                    <span class="wc-showcase-feature__hint">ℹ️</span>
                </div>`
            ).join('');
            
            // Maak browser window overlay met showcase content
            const browserOverlay = document.createElement('div');
            browserOverlay.className = 'wc-browser-overlay';
            browserOverlay.innerHTML = `
                <div class="wc-browser-backdrop"></div>
                <div class="wc-browser-window">
                    <div class="wc-browser-window__chrome">
                        <div class="wc-browser-window__dots">
                            <span class="wc-browser-dot wc-browser-dot--red"></span>
                            <span class="wc-browser-dot wc-browser-dot--yellow"></span>
                            <span class="wc-browser-dot wc-browser-dot--green"></span>
                        </div>
                        <div class="wc-browser-window__urlbar">
                            <span class="wc-browser-window__lock">🔒</span>
                            <span class="wc-browser-window__url">webbiecorn.nl/${siteType}-website</span>
                        </div>
                        <button class="wc-browser-window__close">×</button>
                    </div>
                    <div class="wc-browser-window__content">
                        <div class="wc-showcase">
                            <div class="wc-showcase__bg" style="background-image: url('${showcase.bgImage}');"></div>
                            <div class="wc-showcase__overlay"></div>
                            <div class="wc-showcase__header">
                                <div class="wc-showcase__icon">${showcase.icon}</div>
                                <h2 class="wc-showcase__title">${showcase.title}</h2>
                                <p class="wc-showcase__subtitle">${showcase.subtitle}</p>
                            </div>
                            
                            <div class="wc-showcase__features">
                                <h3 class="wc-showcase__features-title">✨ Wat krijg je:</h3>
                                <div class="wc-showcase__features-grid">
                                    ${featuresHTML}
                                </div>
                            </div>
                            
                            <div class="wc-showcase__footer">
                                <div class="wc-showcase__price">
                                    <span class="wc-showcase__price-label">Investering:</span>
                                    <span class="wc-showcase__price-value">${showcase.price}</span>
                                </div>
                                <div class="wc-showcase__cta">
                                    <p class="wc-showcase__cta-text">${showcase.cta}</p>
                                    <a href="/contact/" class="wc-showcase__cta-btn">Start Jouw Project →</a>
                                </div>
                            </div>
                            
                            <div class="wc-showcase__coin">
                                <div class="wc-showcase__coin-inner">
                                    <div class="wc-showcase__coin-front">
                                        <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-logo-red.png" alt="Webbiecorn">
                                    </div>
                                    <div class="wc-showcase__coin-back">
                                        <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-logo-red.png" alt="Webbiecorn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(browserOverlay);
            document.body.style.overflow = 'hidden';
            
            // Get laptop positie voor morph animatie
            const laptopRect = laptopItem.getBoundingClientRect();
            const browserWindow = browserOverlay.querySelector('.wc-browser-window');
            const backdrop = browserOverlay.querySelector('.wc-browser-backdrop');
            
            // Start positie = laptop positie
            gsap.set(browserWindow, {
                position: 'fixed',
                left: laptopRect.left,
                top: laptopRect.top,
                width: laptopRect.width,
                height: laptopRect.height,
                borderRadius: '12px'
            });
            
            // Verberg originele laptop
            laptopItem.style.opacity = '0';
            laptopItem.classList.add('is-expanded');
            expandedLaptop = laptopItem;
            
            // Animatie: Morph naar browser window
            const tl = gsap.timeline();
            
            tl.to(backdrop, {
                opacity: 1,
                duration: 0.3,
                ease: 'power2.out'
            })
            .to(browserWindow, {
                left: '50%',
                top: '50%',
                xPercent: -50,
                yPercent: -50,
                width: 'min(90vw, 1200px)',
                height: 'min(80vh, 800px)',
                borderRadius: '12px',
                duration: 0.6,
                ease: 'power3.out'
            }, '-=0.2')
            .from('.wc-browser-window__chrome', {
                height: 0,
                opacity: 0,
                duration: 0.3,
                ease: 'power2.out'
            }, '-=0.3')
            .from('.wc-browser-window__dots span', {
                scale: 0,
                stagger: 0.05,
                duration: 0.2,
                ease: 'back.out(3)'
            }, '-=0.1')
            .from('.wc-browser-window__urlbar', {
                width: 0,
                opacity: 0,
                duration: 0.3,
                ease: 'power2.out'
            }, '-=0.2');
            
            // Close handlers
            browserOverlay.querySelector('.wc-browser-window__close').addEventListener('click', () => closeBrowser(browserOverlay, laptopItem));
            browserOverlay.querySelector('.wc-browser-backdrop').addEventListener('click', () => closeBrowser(browserOverlay, laptopItem));
            
            // Feature click handlers voor popup
            browserOverlay.querySelectorAll('.wc-showcase-feature').forEach(feature => {
                feature.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const desc = feature.dataset.desc;
                    const icon = feature.dataset.icon;
                    const title = feature.dataset.title;
                    showFeaturePopup(feature, icon, title, desc);
                });
            });
        }
        
        // Feature popup functie
        function showFeaturePopup(featureEl, icon, title, desc) {
            // Verwijder bestaande popup
            const existingPopup = document.querySelector('.wc-feature-popup');
            if (existingPopup) {
                existingPopup.remove();
            }
            
            // Maak popup
            const popup = document.createElement('div');
            popup.className = 'wc-feature-popup';
            popup.innerHTML = `
                <div class="wc-feature-popup__arrow"></div>
                <button class="wc-feature-popup__close">×</button>
                <div class="wc-feature-popup__icon">${icon}</div>
                <h4 class="wc-feature-popup__title">${title}</h4>
                <p class="wc-feature-popup__desc">${desc}</p>
            `;
            
            // Voeg toe aan browser window content
            const browserContent = document.querySelector('.wc-browser-window__content');
            browserContent.appendChild(popup);
            
            // Positie berekenen relatief aan het feature element
            const featureRect = featureEl.getBoundingClientRect();
            const contentRect = browserContent.getBoundingClientRect();
            const popupWidth = 320;
            
            // Horizontaal centreren boven het feature
            let left = (featureRect.left - contentRect.left) + (featureRect.width / 2) - (popupWidth / 2);
            let top = (featureRect.top - contentRect.top) - 10;
            
            // Voorkom dat popup buiten viewport gaat
            if (left < 20) left = 20;
            if (left + popupWidth > contentRect.width - 20) left = contentRect.width - popupWidth - 20;
            
            popup.style.left = left + 'px';
            popup.style.bottom = (contentRect.height - top) + 'px';
            
            // Animate in
            gsap.fromTo(popup, 
                { opacity: 0, scale: 0.8, y: 20 },
                { opacity: 1, scale: 1, y: 0, duration: 0.3, ease: 'back.out(2)' }
            );
            
            // Highlight active feature
            document.querySelectorAll('.wc-showcase-feature').forEach(f => f.classList.remove('is-active'));
            featureEl.classList.add('is-active');
            
            // Close popup handler
            popup.querySelector('.wc-feature-popup__close').addEventListener('click', (e) => {
                e.stopPropagation();
                closeFeaturePopup(popup, featureEl);
            });
            
            // Click buiten popup sluit
            setTimeout(() => {
                document.addEventListener('click', function closeOnOutsideClick(e) {
                    if (!popup.contains(e.target) && !featureEl.contains(e.target)) {
                        closeFeaturePopup(popup, featureEl);
                        document.removeEventListener('click', closeOnOutsideClick);
                    }
                });
            }, 100);
        }
        
        function closeFeaturePopup(popup, featureEl) {
            gsap.to(popup, {
                opacity: 0,
                scale: 0.8,
                y: 10,
                duration: 0.2,
                ease: 'power2.in',
                onComplete: () => {
                    popup.remove();
                    if (featureEl) featureEl.classList.remove('is-active');
                }
            });
        }
        
        function closeBrowser(overlay, laptopItem) {
            const browserWindow = overlay.querySelector('.wc-browser-window');
            const backdrop = overlay.querySelector('.wc-browser-backdrop');
            const laptopRect = laptopItem.getBoundingClientRect();
            
            // Animatie: Morph terug naar laptop
            gsap.timeline({
                onComplete: () => {
                    overlay.remove();
                    document.body.style.overflow = '';
                    laptopItem.style.opacity = '1';
                    laptopItem.classList.remove('is-expanded');
                    expandedLaptop = null;
                }
            })
            .to('.wc-browser-window__chrome', {
                height: 0,
                opacity: 0,
                duration: 0.2,
                ease: 'power2.in'
            })
            .to(browserWindow, {
                left: laptopRect.left,
                top: laptopRect.top,
                xPercent: 0,
                yPercent: 0,
                width: laptopRect.width,
                height: laptopRect.height,
                duration: 0.5,
                ease: 'power3.inOut'
            }, '-=0.1')
            .to(backdrop, {
                opacity: 0,
                duration: 0.3,
                ease: 'power2.in'
            }, '-=0.3')
            .to(browserWindow, {
                opacity: 0,
                scale: 0.9,
                duration: 0.2
            }, '-=0.2');
        }
        
        // ESC key to close expanded browser or active laptop
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const overlay = document.querySelector('.wc-browser-overlay');
                if (overlay && expandedLaptop) {
                    closeBrowser(overlay, expandedLaptop);
                } else if (activeLaptop) {
                    sleepLaptop(activeLaptop);
                }
            }
        });
        
        // ========================================
        // UITGEBREIDE GSAP ANIMATIES
        // ========================================
        
        // 1. SCROLL-TRIGGERED STAGGERED ENTRANCE
        gsap.from('.wc-laptops-intro', {
            scrollTrigger: {
                trigger: '.wc-laptops-showcase',
                start: 'top 80%',
            },
            y: 60,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });
        
        // Laptops vliegen in met 3D rotatie
        gsap.from('.wc-laptop-item', {
            scrollTrigger: {
                trigger: '.wc-laptops-grid',
                start: 'top 85%',
            },
            y: 100,
            rotateX: 45,
            rotateY: -15,
            opacity: 0,
            scale: 0.8,
            duration: 1,
            stagger: {
                each: 0.15,
                from: "random"
            },
            ease: 'back.out(1.7)'
        });
        
        gsap.from('.wc-laptops-cta', {
            scrollTrigger: {
                trigger: '.wc-laptops-cta',
                start: 'top 90%',
            },
            y: 40,
            opacity: 0,
            duration: 0.8,
            ease: 'power3.out'
        });
        
        // 2. 3D TILT HOVER EFFECT (alleen voor slapende laptops)
        laptopItems.forEach(laptop => {
            const portal = laptop.querySelector('.wc-laptop-portal');
            
            laptop.addEventListener('mousemove', (e) => {
                // Skip als laptop wakker is
                if (laptop.classList.contains('is-awake')) return;
                
                const rect = laptop.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 12;
                const rotateY = (centerX - x) / 12;
                
                gsap.to(portal, {
                    rotateX: -rotateX,
                    rotateY: rotateY,
                    transformPerspective: 1000,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
            
            laptop.addEventListener('mouseleave', () => {
                gsap.to(portal, {
                    rotateX: 0,
                    rotateY: 0,
                    duration: 0.5,
                    ease: 'elastic.out(1, 0.5)'
                });
            });
        });
        // 4. PULSE EFFECT OP WAKE BUTTONS
        gsap.to('.wc-laptop-portal__wake', {
            opacity: 0.9,
            scale: 1.02,
            duration: 1.5,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            stagger: 0.3
        });
    }
});
</script>


<?php get_footer(); ?>
