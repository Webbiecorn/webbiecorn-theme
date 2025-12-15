<?php
/**
 * Template Name: Hosting
 * 
 * Hosting is niet meer als losse dienst beschikbaar.
 * Redirect naar webdesign pagina waar hosting als add-on staat.
 * 
 * @package Webbiecorn_Starter
 */

// 301 Permanent Redirect naar webdesign pagina
wp_redirect(home_url('/webdesign/#add-ons'), 301);
exit;

get_header();
?>

<!-- Page Hero -->
<section class="wc-page-hero">
    <div class="wc-container">
        <div class="wc-page-hero__content wc-animate">
            <span class="wc-page-hero__kicker">🚀 WordPress Hosting</span>
            <h1 class="wc-page-hero__title">Supersnelle hosting voor jouw website</h1>
            <p class="wc-page-hero__subtitle">
                Geen gedoe met servers, updates of technische problemen. 
                Wij regelen alles zodat jouw website altijd online en razendsnel is.
            </p>
        </div>
    </div>
</section>

<!-- Why Our Hosting -->
<section class="wc-section">
    <div class="wc-container">
        <div class="wc-section__header wc-animate">
            <h2 class="wc-section__title">Waarom hosting via Webbiecorn?</h2>
            <p class="wc-section__subtitle">Hosting die écht werkt voor je business</p>
        </div>
        
        <div class="wc-why__grid">
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Razendsnelle servers</h3>
                <p class="wc-why__desc">LiteSpeed servers met SSD opslag. Laadtijden onder de 2 seconden gegarandeerd.</p>
            </div>
            
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">SSL certificaat</h3>
                <p class="wc-why__desc">Gratis SSL certificaat voor een veilige HTTPS verbinding. Verplicht voor SEO en vertrouwen.</p>
            </div>
            
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="17 8 12 3 7 8"/>
                        <line x1="12" y1="3" x2="12" y2="15"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Dagelijkse backups</h3>
                <p class="wc-why__desc">Automatische dagelijkse backups. Mocht er iets misgaan, dan herstellen we je site binnen minuten.</p>
            </div>
            
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">99.9% uptime</h3>
                <p class="wc-why__desc">Je website is altijd bereikbaar. We monitoren 24/7 en grijpen in bij problemen.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hosting Packages -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <div class="wc-section__header wc-animate">
            <h2 class="wc-section__title">Hosting pakketten</h2>
            <p class="wc-section__subtitle">Kies het pakket dat past bij jouw website</p>
        </div>
        
        <div class="wc-hosting-grid">
            <!-- Starter -->
            <div class="wc-hosting-card wc-animate">
                <div class="wc-hosting-card__header">
                    <h3 class="wc-hosting-card__title">Starter</h3>
                    <p class="wc-hosting-card__subtitle">Voor kleine websites & portfolios</p>
                </div>
                <div class="wc-hosting-card__price">
                    <span class="wc-hosting-card__amount">€9</span>
                    <span class="wc-hosting-card__period">/maand</span>
                </div>
                <ul class="wc-hosting-card__features">
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        5 GB SSD opslag
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Tot 10.000 bezoekers/maand
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        SSL certificaat
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Dagelijkse backups
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        1 e-mailadres
                    </li>
                    <li class="wc-hosting-card__feature wc-hosting-card__feature--muted">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        Staging omgeving
                    </li>
                    <li class="wc-hosting-card__feature wc-hosting-card__feature--muted">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        CDN (Content Delivery)
                    </li>
                </ul>
                <a href="/contact/" class="wc-btn wc-btn--outline wc-btn--full">Kies Starter</a>
            </div>

            <!-- Business - Popular -->
            <div class="wc-hosting-card wc-hosting-card--popular wc-animate">
                <div class="wc-hosting-card__badge">Populair</div>
                <div class="wc-hosting-card__header">
                    <h3 class="wc-hosting-card__title">Business</h3>
                    <p class="wc-hosting-card__subtitle">Voor bedrijfswebsites & webshops</p>
                </div>
                <div class="wc-hosting-card__price">
                    <span class="wc-hosting-card__amount">€19</span>
                    <span class="wc-hosting-card__period">/maand</span>
                </div>
                <ul class="wc-hosting-card__features">
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        20 GB SSD opslag
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Tot 50.000 bezoekers/maand
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        SSL certificaat
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Dagelijkse backups
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        5 e-mailadressen
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Staging omgeving
                    </li>
                    <li class="wc-hosting-card__feature wc-hosting-card__feature--muted">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        CDN (Content Delivery)
                    </li>
                </ul>
                <a href="/contact/" class="wc-btn wc-btn--primary wc-btn--full">Kies Business</a>
            </div>

            <!-- Pro -->
            <div class="wc-hosting-card wc-animate">
                <div class="wc-hosting-card__header">
                    <h3 class="wc-hosting-card__title">Pro</h3>
                    <p class="wc-hosting-card__subtitle">Voor high-traffic & e-commerce</p>
                </div>
                <div class="wc-hosting-card__price">
                    <span class="wc-hosting-card__amount">€39</span>
                    <span class="wc-hosting-card__period">/maand</span>
                </div>
                <ul class="wc-hosting-card__features">
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        50 GB SSD opslag
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Onbeperkt bezoekers
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        SSL certificaat
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Dagelijkse backups
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Onbeperkt e-mailadressen
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Staging omgeving
                    </li>
                    <li class="wc-hosting-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        CDN (Content Delivery)
                    </li>
                </ul>
                <a href="/contact/" class="wc-btn wc-btn--outline wc-btn--full">Kies Pro</a>
            </div>
        </div>
        
        <p class="wc-section__note wc-animate">
            💡 <strong>Tip:</strong> Combineer hosting met een <a href="/onderhoud/">onderhoudspakket</a> en krijg 10% korting op beide!
        </p>
    </div>
</section>

<!-- What's Included -->
<section class="wc-section">
    <div class="wc-container">
        <div class="wc-section__header wc-animate">
            <h2 class="wc-section__title">Wat zit er allemaal bij?</h2>
            <p class="wc-section__subtitle">Meer dan alleen serverruimte</p>
        </div>
        
        <div class="wc-features-grid">
            <div class="wc-feature-item wc-animate">
                <div class="wc-feature-item__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                        <line x1="6" y1="6" x2="6.01" y2="6"/>
                        <line x1="6" y1="18" x2="6.01" y2="18"/>
                    </svg>
                </div>
                <h4 class="wc-feature-item__title">LiteSpeed Server</h4>
                <p class="wc-feature-item__desc">Tot 10x sneller dan traditionele Apache servers</p>
            </div>
            
            <div class="wc-feature-item wc-animate">
                <div class="wc-feature-item__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <h4 class="wc-feature-item__title">Malware scanning</h4>
                <p class="wc-feature-item__desc">Dagelijkse scans op virussen en malware</p>
            </div>
            
            <div class="wc-feature-item wc-animate">
                <div class="wc-feature-item__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="2" y1="12" x2="22" y2="12"/>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                    </svg>
                </div>
                <h4 class="wc-feature-item__title">Nederlandse servers</h4>
                <p class="wc-feature-item__desc">Datacenters in Nederland voor snelle laadtijden</p>
            </div>
            
            <div class="wc-feature-item wc-animate">
                <div class="wc-feature-item__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
                <h4 class="wc-feature-item__title">E-mail hosting</h4>
                <p class="wc-feature-item__desc">Professionele e-mail @jouwdomein.nl</p>
            </div>
            
            <div class="wc-feature-item wc-animate">
                <div class="wc-feature-item__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <h4 class="wc-feature-item__title">One-click WordPress</h4>
                <p class="wc-feature-item__desc">WordPress voorgeïnstalleerd en geoptimaliseerd</p>
            </div>
            
            <div class="wc-feature-item wc-animate">
                <div class="wc-feature-item__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                    </svg>
                </div>
                <h4 class="wc-feature-item__title">24/7 monitoring</h4>
                <p class="wc-feature-item__desc">Continue bewaking van uptime en performance</p>
            </div>
        </div>
    </div>
</section>

<!-- Migration -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <div class="wc-migration wc-animate">
            <div class="wc-migration__content">
                <h2 class="wc-migration__title">Al een website elders gehost?</h2>
                <p class="wc-migration__text">
                    Geen probleem! Wij verhuizen je website gratis en zonder downtime naar onze servers. 
                    Je hoeft zelf niets te doen — wij regelen alles.
                </p>
                <ul class="wc-migration__list">
                    <li>✓ Gratis migratie</li>
                    <li>✓ Geen downtime</li>
                    <li>✓ DNS overdracht geregeld</li>
                    <li>✓ Binnen 24-48 uur live</li>
                </ul>
            </div>
            <div class="wc-migration__cta">
                <a href="/contact/" class="wc-btn wc-btn--primary wc-btn--lg">
                    Gratis migratie aanvragen
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Veelgestelde Vragen</h2>
        
        <div class="wc-faq__list">
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Kan ik mijn eigen domeinnaam gebruiken?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Ja, je kunt je eigen domeinnaam koppelen aan onze hosting. Heb je nog geen domein? Dan kunnen wij er ook een voor je registreren (vanaf €12/jaar).</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Wat als ik meer opslag nodig heb?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Je kunt altijd upgraden naar een hoger pakket. Ook kun je extra opslag bijkopen voor €2 per 5GB per maand.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Hoe zit het met de opzegtermijn?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Je kunt maandelijks opzeggen. Geen langlopende contracten of verborgen kosten. Je betaalt alleen voor wat je gebruikt.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Is er een uptime garantie?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Ja, we garanderen 99.9% uptime. Bij lagere uptime krijg je naar rato korting op je volgende factuur.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Kan ik ook een webshop hosten?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Absoluut! Onze Business en Pro pakketten zijn perfect geschikt voor WooCommerce webshops. We zorgen voor de juiste PHP instellingen en caching voor optimale performance.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="wc-section wc-section--cta">
    <div class="wc-container">
        <div class="wc-cta wc-animate">
            <h2 class="wc-cta__title">Klaar voor snelle, betrouwbare hosting?</h2>
            <p class="wc-cta__text">
                Start vandaag nog met hosting die écht werkt. Gratis migratie inbegrepen.
            </p>
            <div class="wc-cta__buttons">
                <a href="/contact/" class="wc-btn wc-btn--primary wc-btn--lg">
                    Start met hosting
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
                <a href="/contact/" class="wc-btn wc-btn--outline wc-btn--lg">Stel een vraag</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
