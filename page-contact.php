<?php
/**
 * Template Name: Contact
 * 
 * @package Webbiecorn_Starter
 */

get_header();
?>

<!-- Contact Hero - Split Design -->
<section class="wc-contact-hero">
    <div class="wc-contact-hero__bg">
        <div class="wc-contact-hero__gradient"></div>
        <div class="wc-contact-hero__pattern"></div>
    </div>
    
    <div class="wc-container">
        <div class="wc-contact-hero__content">
            <span class="wc-contact-hero__badge">
                <span class="wc-contact-hero__badge-dot"></span>
                Beschikbaar voor nieuwe projecten
            </span>
            <h1 class="wc-contact-hero__title">
                Laten we iets <span class="wc-text-gradient">moois</span> bouwen
            </h1>
            <p class="wc-contact-hero__subtitle">
                Of je nu een vraag hebt, een idee wilt bespreken of direct wilt starten — ik hoor graag van je.
            </p>
            
            <!-- Quick Stats -->
            <div class="wc-contact-hero__stats">
                <div class="wc-contact-stat">
                    <span class="wc-contact-stat__icon">⚡</span>
                    <span class="wc-contact-stat__text">Reactie binnen 24 uur</span>
                </div>
                <div class="wc-contact-stat">
                    <span class="wc-contact-stat__icon">💬</span>
                    <span class="wc-contact-stat__text">Gratis adviesgesprek</span>
                </div>
                <div class="wc-contact-stat">
                    <span class="wc-contact-stat__icon">🎯</span>
                    <span class="wc-contact-stat__text">Geen verplichtingen</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section class="wc-section wc-contact-main">
    <div class="wc-container">
        <div class="wc-contact-layout">
            
            <!-- Left: Contact Methods -->
            <div class="wc-contact-methods">
                <div class="wc-contact-methods__header">
                    <h2 class="wc-contact-methods__title">Neem contact op</h2>
                    <p class="wc-contact-methods__subtitle">Kies de manier die bij je past</p>
                </div>
                
                <!-- Email Card - Primary -->
                <a href="mailto:info@webbiecorn.nl" class="wc-contact-method wc-contact-method--primary">
                    <div class="wc-contact-method__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <div class="wc-contact-method__content">
                        <span class="wc-contact-method__label">E-mail</span>
                        <span class="wc-contact-method__value">info@webbiecorn.nl</span>
                        <span class="wc-contact-method__hint">Voor projectaanvragen & vragen</span>
                    </div>
                    <div class="wc-contact-method__arrow">→</div>
                </a>
                
                <!-- Phone Card - Secondary option -->
                <div class="wc-contact-method wc-contact-method--secondary">
                    <div class="wc-contact-method__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <div class="wc-contact-method__content">
                        <span class="wc-contact-method__label">Liever bellen?</span>
                        <span class="wc-contact-method__value">Op aanvraag</span>
                        <span class="wc-contact-method__hint">Vraag via mail/chat om een belafspraak</span>
                    </div>
                </div>
                
                <!-- Location Info -->
                <div class="wc-contact-location">
                    <div class="wc-contact-location__icon">📍</div>
                    <div class="wc-contact-location__content">
                        <span class="wc-contact-location__label">Locatie</span>
                        <span class="wc-contact-location__value">Nederland</span>
                        <span class="wc-contact-location__hint">Remote-first, heel Nederland</span>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="wc-contact-socials">
                    <span class="wc-contact-socials__label">Volg Webbiecorn</span>
                    <div class="wc-contact-socials__links">
                        <a href="https://linkedin.com/company/webbiecorn" target="_blank" rel="noopener" class="wc-social-btn" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com/webbiecorn" target="_blank" rel="noopener" class="wc-social-btn" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://x.com/webbiecorn" target="_blank" rel="noopener" class="wc-social-btn" aria-label="X">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Right: Contact Form -->
            <div class="wc-contact-form-wrapper">
                <div class="wc-contact-form-card wc-contact-form-card--new">
                    <div class="wc-contact-form__header">
                        <span class="wc-contact-form__emoji">✉️</span>
                        <h2 class="wc-contact-form__title">Stuur een bericht</h2>
                        <p class="wc-contact-form__subtitle">Beschrijf je project of vraag en ik neem zo snel mogelijk contact op.</p>
                    </div>
                    
                    <?php 
                    // Contact Form 7 shortcode (ID 41)
                    echo do_shortcode('[contact-form-7 id="41" title="Contact formulier"]'); 
                    ?>
                    
                    <div class="wc-contact-form__footer">
                        <span class="wc-contact-form__privacy">
                            🔒 Je gegevens worden nooit gedeeld met derden
                        </span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Simple Process Section -->
<section class="wc-section wc-contact-process-simple">
    <div class="wc-container">
        <div class="wc-process-simple">
            <div class="wc-process-simple__step">
                <div class="wc-process-simple__icon">💬</div>
                <div class="wc-process-simple__content">
                    <h3>Stuur een bericht</h3>
                    <p>Via formulier, mail of chat</p>
                </div>
            </div>
            <div class="wc-process-simple__arrow">→</div>
            <div class="wc-process-simple__step">
                <div class="wc-process-simple__icon">⚡</div>
                <div class="wc-process-simple__content">
                    <h3>Reactie binnen 24u</h3>
                    <p>Meestal veel sneller</p>
                </div>
            </div>
            <div class="wc-process-simple__arrow">→</div>
            <div class="wc-process-simple__step">
                <div class="wc-process-simple__icon">📋</div>
                <div class="wc-process-simple__content">
                    <h3>Offerte op maat</h3>
                    <p>Duidelijk en vrijblijvend</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Teaser -->
<section class="wc-section wc-section--white wc-contact-faq">
    <div class="wc-container">
        <div class="wc-faq-teaser">
            <div class="wc-faq-teaser__content">
                <span class="wc-faq-teaser__icon">❓</span>
                <h2 class="wc-faq-teaser__title">Veelgestelde vragen?</h2>
                <p class="wc-faq-teaser__text">
                    Bekijk de FAQ's op de homepagina voor antwoorden op vragen over prijzen, levertijden, technologie en meer.
                </p>
                <a href="<?php echo esc_url(home_url('/#faq')); ?>" class="wc-btn wc-btn--primary">
                    Bekijk FAQ's
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            <div class="wc-faq-teaser__visual">
                <div class="wc-faq-teaser__cards">
                    <div class="wc-faq-mini-card">Wat kost een website?</div>
                    <div class="wc-faq-mini-card">Hoe lang duurt het?</div>
                    <div class="wc-faq-mini-card">Welke technologie?</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
