<?php
/**
 * Template Name: Diensten Overzicht
 * Template Post Type: page
 * 
 * Overzichtspagina met alle diensten van Webbiecorn
 *
 * @package Webbiecorn_Starter
 */

get_header();

// Hero via template part
get_template_part('template-parts/hero', null, array(
    'badge_text'   => 'Onze Diensten',
    'badge_color'  => 'purple',
    'title'        => 'Alles wat je nodig hebt om online te groeien',
    'title_accent' => 'online te groeien',
    'subtitle'     => 'Van een professionele website tot een sterke merkidentiteit en betere vindbaarheid. Wij helpen ondernemers en startups om online impact te maken.',
    'stats'        => array(
        array('icon' => '🎨', 'text' => 'Webdesign & Development'),
        array('icon' => '🚀', 'text' => 'SEO & Marketing'),
        array('icon' => '🛡️', 'text' => 'Hosting & Onderhoud'),
    )
));
?>

<!-- Main Services Grid -->
<section class="wc-section">
    <div class="wc-container">
        <div class="wc-services-overview">
            
            <!-- Webdesign -->
            <a href="/webdesign/" class="wc-service-card wc-service-card--large wc-animate">
                <div class="wc-service-card__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <div class="wc-service-card__content">
                    <h2 class="wc-service-card__title">Webdesign & Development</h2>
                    <p class="wc-service-card__desc">
                        Professionele websites die écht werken. Hand-coded, supersnel en 100% op maat. 
                        Van landingspagina tot complete webshop — zonder templates of pagebuilders.
                    </p>
                    <ul class="wc-service-card__features">
                        <li>Custom WordPress development</li>
                        <li>Responsive design (mobile-first)</li>
                        <li>SEO-geoptimaliseerd</li>
                        <li>Snelle laadtijden</li>
                    </ul>
                    <div class="wc-service-card__cta">
                        <span class="wc-service-card__price">Vanaf €499</span>
                        <span class="wc-service-card__link">Bekijk pakketten →</span>
                    </div>
                </div>
            </a>

            <!-- Branding -->
            <a href="/branding/" class="wc-service-card wc-service-card--large wc-animate">
                <div class="wc-service-card__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 19l7-7 3 3-7 7-3-3z"/>
                        <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/>
                        <path d="M2 2l7.586 7.586"/>
                        <circle cx="11" cy="11" r="2"/>
                    </svg>
                </div>
                <div class="wc-service-card__content">
                    <h2 class="wc-service-card__title">Branding & Identiteit</h2>
                    <p class="wc-service-card__desc">
                        Een sterk merk begint bij een sterke identiteit. Van logo tot complete huisstijl — 
                        wij zorgen dat jouw merk er professioneel en herkenbaar uitziet.
                    </p>
                    <ul class="wc-service-card__features">
                        <li>Logo ontwerp</li>
                        <li>Complete huisstijl</li>
                        <li>Social media templates</li>
                        <li>Brand guidelines</li>
                    </ul>
                    <div class="wc-service-card__cta">
                        <span class="wc-service-card__price">Vanaf €299</span>
                        <span class="wc-service-card__link">Ontdek branding →</span>
                    </div>
                </div>
            </a>

            <!-- SEO -->
            <a href="/seo-analyse/" class="wc-service-card wc-service-card--large wc-animate">
                <div class="wc-service-card__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                        <path d="M11 8v6"/>
                        <path d="M8 11h6"/>
                    </svg>
                </div>
                <div class="wc-service-card__content">
                    <h2 class="wc-service-card__title">SEO & Analyse</h2>
                    <p class="wc-service-card__desc">
                        Gevonden worden in Google is geen toeval. Met slimme SEO en data-analyse 
                        zorgen we dat de juiste mensen jouw website vinden.
                    </p>
                    <ul class="wc-service-card__features">
                        <li>SEO Quick Scan</li>
                        <li>Keyword onderzoek</li>
                        <li>Technische optimalisatie</li>
                        <li>Google Analytics setup</li>
                    </ul>
                    <div class="wc-service-card__cta">
                        <span class="wc-service-card__price">Vanaf €149</span>
                        <span class="wc-service-card__link">Verbeter je SEO →</span>
                    </div>
                </div>
            </a>

            <!-- Onderhoud -->
            <a href="/onderhoud/" class="wc-service-card wc-service-card--large wc-animate">
                <div class="wc-service-card__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <div class="wc-service-card__content">
                    <h2 class="wc-service-card__title">Onderhoud & Support</h2>
                    <p class="wc-service-card__desc">
                        Een website bouwen is stap één. Hem veilig, snel en up-to-date houden is stap twee. 
                        Met onze onderhoudsabonnementen ben je altijd gedekt.
                    </p>
                    <ul class="wc-service-card__features">
                        <li>Maandelijkse updates</li>
                        <li>Dagelijkse backups</li>
                        <li>Uptime monitoring</li>
                        <li>Priority support</li>
                    </ul>
                    <div class="wc-service-card__cta">
                        <span class="wc-service-card__price">Vanaf €49/maand</span>
                        <span class="wc-service-card__link">Bekijk abonnementen →</span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <div class="wc-section__header wc-animate">
            <h2 class="wc-section__title">Waarom Webbiecorn?</h2>
            <p class="wc-section__subtitle">We doen dingen anders dan de meeste bureaus</p>
        </div>
        
        <div class="wc-why__grid wc-why__grid--diensten">
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Persoonlijk contact</h3>
                <p class="wc-why__desc">Geen account managers of callcenters. Je praat altijd direct met de maker.</p>
            </div>
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Snelle oplevering</h3>
                <p class="wc-why__desc">Geen maanden wachten. De meeste projecten zijn binnen 1-3 weken live.</p>
            </div>
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                        <line x1="1" y1="10" x2="23" y2="10"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Vaste prijzen</h3>
                <p class="wc-why__desc">Je weet vooraf wat je betaalt. Geen uurtje-factuurtje of verborgen kosten.</p>
            </div>
            <div class="wc-why__item wc-animate">
                <div class="wc-why__icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Kwaliteitsgarantie</h3>
                <p class="wc-why__desc">Niet tevreden? We werken door tot je dat wél bent. Zonder meerkosten.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="wc-section">
    <div class="wc-container">
        <div class="wc-section__header wc-animate">
            <h2 class="wc-section__title">Hoe werkt het?</h2>
            <p class="wc-section__subtitle">Van eerste idee tot lancering in 4 stappen</p>
        </div>
        
        <div class="wc-process wc-process--diensten">
            <div class="wc-process__step wc-animate">
                <div class="wc-process__number">01</div>
                <h3 class="wc-process__title">Kennismaking</h3>
                <p class="wc-process__desc">
                    We starten met een vrijblijvend gesprek. Wat zijn je doelen? Wie is je doelgroep? 
                    Wat verwacht je van je website of branding?
                </p>
            </div>
            <div class="wc-process__step wc-animate">
                <div class="wc-process__number">02</div>
                <h3 class="wc-process__title">Voorstel & Planning</h3>
                <p class="wc-process__desc">
                    Je ontvangt een helder voorstel met vaste prijs, planning en wat je kunt verwachten. 
                    Geen verrassingen achteraf.
                </p>
            </div>
            <div class="wc-process__step wc-animate">
                <div class="wc-process__number">03</div>
                <h3 class="wc-process__title">Ontwerp & Bouw</h3>
                <p class="wc-process__desc">
                    We gaan aan de slag! Je krijgt regelmatig updates en kunt feedback geven. 
                    Samen maken we het perfect.
                </p>
            </div>
            <div class="wc-process__step wc-animate">
                <div class="wc-process__number">04</div>
                <h3 class="wc-process__title">Lancering & Support</h3>
                <p class="wc-process__desc">
                    We zetten alles live en zorgen dat je zelf aan de slag kunt. 
                    En daarna? Blijven we beschikbaar voor vragen en updates.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/cta-footer', null, array(
    'title' => 'Klaar om te starten?',
    'text' => 'Vertel ons over je project en we nemen binnen 24 uur contact op. Vrijblijvend en gratis.',
    'primary' => array('label' => 'Project bespreken', 'url' => home_url('/contact/')),
    'secondary' => array('label' => 'Bekijk portfolio', 'url' => home_url('/portfolio/')),
));
?>

<?php get_footer(); ?>
