<?php
/**
 * Template Name: Onderhoud & Support
 * 
 * @package Webbiecorn_Starter
 */

get_header();

// Hero via template part
get_template_part('template-parts/hero', null, array(
    'badge_text'   => 'Onderhoud & Support',
    'badge_color'  => 'green',
    'title'        => 'Jouw website in topvorm',
    'title_accent' => 'topvorm',
    'subtitle'     => 'Een website is nooit "af". Updates, backups, beveiliging en snelle support — we regelen het zodat jij je kunt focussen op je business.',
    'stats'        => array(
        array('icon' => '🔒', 'text' => 'Beveiliging'),
        array('icon' => '💾', 'text' => 'Dagelijkse backups'),
        array('icon' => '🚀', 'text' => 'Updates & support'),
    )
));
?>

<!-- Why Maintenance -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Waarom onderhoud belangrijk is</h2>
        <p class="wc-section__subtitle">
            90% van gehackte websites had verouderde software.
        </p>
        
        <div class="wc-why__grid">
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Beveiliging</h3>
                <p class="wc-why__desc">Regelmatige updates dichten beveiligingslekken voordat hackers ze misbruiken.</p>
            </div>
            
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Uptime</h3>
                <p class="wc-why__desc">Monitoring zorgt dat problemen direct worden opgemerkt en opgelost.</p>
            </div>
            
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Snelheid</h3>
                <p class="wc-why__desc">Optimalisaties houden je website snel — cruciaal voor SEO en conversie.</p>
            </div>
            
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <polyline points="17 8 12 3 7 8"/>
                        <line x1="12" y1="3" x2="12" y2="15"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Backups</h3>
                <p class="wc-why__desc">Automatische backups zorgen dat je nooit data verliest bij een crash.</p>
            </div>
        </div>
    </div>
</section>

<!-- Maintenance Packages -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <h2 class="wc-section__title">Onderhoudspakketten</h2>
        <p class="wc-section__subtitle">Kies het niveau dat bij jouw website past.</p>
        
        <div class="wc-maintenance-grid">
            <!-- Basic -->
            <div class="wc-maintenance-card">
                <div class="wc-maintenance-card__header">
                    <h3 class="wc-maintenance-card__title">Basis</h3>
                    <p class="wc-maintenance-card__subtitle">Voor kleine websites</p>
                </div>
                <div class="wc-maintenance-card__price">
                    <span class="wc-maintenance-card__amount">€29</span>
                    <span class="wc-maintenance-card__period">/maand</span>
                </div>
                <ul class="wc-maintenance-card__features">
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        WordPress core updates
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Plugin & thema updates
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Wekelijkse backup
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Uptime monitoring
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Maandelijks rapport
                    </li>
                    <li class="wc-maintenance-card__feature wc-maintenance-card__feature--muted">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        Kleine aanpassingen
                    </li>
                    <li class="wc-maintenance-card__feature wc-maintenance-card__feature--muted">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        Prioriteit support
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="wc-btn wc-btn--secondary wc-btn--full">
                    Selecteer Basis
                </a>
            </div>
            
            <!-- Pro -->
            <div class="wc-maintenance-card wc-maintenance-card--featured">
                <div class="wc-maintenance-card__badge">Populair</div>
                <div class="wc-maintenance-card__header">
                    <h3 class="wc-maintenance-card__title">Pro</h3>
                    <p class="wc-maintenance-card__subtitle">Voor groeiende bedrijven</p>
                </div>
                <div class="wc-maintenance-card__price">
                    <span class="wc-maintenance-card__amount">€59</span>
                    <span class="wc-maintenance-card__period">/maand</span>
                </div>
                <ul class="wc-maintenance-card__features">
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Alles uit Basis
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Dagelijkse backup
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Security scanning
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Performance optimalisatie
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <strong>30 min</strong> kleine aanpassingen/mnd
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Support binnen 24 uur
                    </li>
                    <li class="wc-maintenance-card__feature wc-maintenance-card__feature--muted">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        Prioriteit support
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="wc-btn wc-btn--primary wc-btn--full">
                    Selecteer Pro
                </a>
            </div>
            
            <!-- Business -->
            <div class="wc-maintenance-card">
                <div class="wc-maintenance-card__header">
                    <h3 class="wc-maintenance-card__title">Business</h3>
                    <p class="wc-maintenance-card__subtitle">Voor kritieke websites</p>
                </div>
                <div class="wc-maintenance-card__price">
                    <span class="wc-maintenance-card__amount">€99</span>
                    <span class="wc-maintenance-card__period">/maand</span>
                </div>
                <ul class="wc-maintenance-card__features">
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Alles uit Pro
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Real-time backup
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Malware verwijdering
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <strong>60 min</strong> kleine aanpassingen/mnd
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Prioriteit support (< 4 uur)
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        Maandelijks strategiegesprek
                    </li>
                    <li class="wc-maintenance-card__feature">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        99.9% uptime garantie
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="wc-btn wc-btn--secondary wc-btn--full">
                    Selecteer Business
                </a>
            </div>
        </div>
        
        <p class="wc-maintenance-note">
            💡 <strong>Tip:</strong> Nieuwe website bij ons laten bouwen? De eerste maand onderhoud is gratis inbegrepen.
        </p>
    </div>
</section>

<!-- What's Included -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Wat zit er precies in?</h2>
        <p class="wc-section__subtitle">Transparant over wat je krijgt voor je geld.</p>
        
        <div class="wc-included-grid">
            <div class="wc-included-item">
                <div class="wc-included-item__icon">🔄</div>
                <h3 class="wc-included-item__title">Updates</h3>
                <p class="wc-included-item__desc">WordPress core, plugins en thema's worden veilig geüpdatet na testen op een staging omgeving.</p>
            </div>
            
            <div class="wc-included-item">
                <div class="wc-included-item__icon">💾</div>
                <h3 class="wc-included-item__title">Backups</h3>
                <p class="wc-included-item__desc">Automatische backups van bestanden én database. Herstel binnen 24 uur mogelijk.</p>
            </div>
            
            <div class="wc-included-item">
                <div class="wc-included-item__icon">🛡️</div>
                <h3 class="wc-included-item__title">Beveiliging</h3>
                <p class="wc-included-item__desc">Firewall, malware scanning, brute force bescherming en SSL certificaat beheer.</p>
            </div>
            
            <div class="wc-included-item">
                <div class="wc-included-item__icon">📊</div>
                <h3 class="wc-included-item__title">Monitoring</h3>
                <p class="wc-included-item__desc">24/7 uptime monitoring. Bij downtime krijgen we direct een melding en gaan we aan de slag.</p>
            </div>
            
            <div class="wc-included-item">
                <div class="wc-included-item__icon">⚡</div>
                <h3 class="wc-included-item__title">Performance</h3>
                <p class="wc-included-item__desc">Cache optimalisatie, database opschoning en image compressie voor snelle laadtijden.</p>
            </div>
            
            <div class="wc-included-item">
                <div class="wc-included-item__icon">📝</div>
                <h3 class="wc-included-item__title">Rapportage</h3>
                <p class="wc-included-item__desc">Maandelijks rapport met uptime stats, uitgevoerde updates en aanbevelingen.</p>
            </div>
        </div>
    </div>
</section>

<!-- Hosting Add-on -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <div class="wc-hosting-banner">
            <div class="wc-hosting-banner__content">
                <span class="wc-hosting-banner__badge">Add-on</span>
                <h2 class="wc-hosting-banner__title">Hosting nodig?</h2>
                <p class="wc-hosting-banner__text">
                    Wil je dat we ook de hosting regelen? Dan hoef je nergens naar om te kijken. 
                    Snelle servers, gratis SSL, en alles in één factuur.
                </p>
                <ul class="wc-hosting-banner__features">
                    <li>✓ Snelle SSD hosting</li>
                    <li>✓ Gratis SSL certificaat</li>
                    <li>✓ Dagelijkse backups</li>
                    <li>✓ 99.9% uptime</li>
                </ul>
            </div>
            <div class="wc-hosting-banner__price">
                <span class="wc-hosting-banner__from">Vanaf</span>
                <span class="wc-hosting-banner__amount">€10</span>
                <span class="wc-hosting-banner__period">/maand</span>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="wc-btn wc-btn--primary">Vraag aan</a>
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
                <summary class="wc-faq-accordion__question">Wat als mijn website niet bij jou is gebouwd?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Geen probleem! We nemen ook onderhoud aan voor bestaande WordPress websites. Wel doen we eerst een gratis quick-scan om te kijken of de website in goede staat is.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Wat zijn "kleine aanpassingen"?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Tekst wijzigen, afbeeldingen vervangen, een nieuwe pagina toevoegen, contactgegevens updaten — dat soort dingen. Grotere wijzigingen zoals nieuwe functionaliteiten vallen buiten het pakket.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Kan ik tussentijds opzeggen?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Ja, maandelijks opzegbaar met 1 maand opzegtermijn. Geen lange contracten of verborgen kosten.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Wat gebeurt er als mijn site gehackt wordt?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Bij Pro en Business pakket is malware verwijdering inbegrepen. We herstellen je website vanuit een schone backup en dichten het beveiligingslek. Bij Basis pakket wordt dit apart gefactureerd.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Hoe snel reageer je bij problemen?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Basis: binnen 48 uur. Pro: binnen 24 uur. Business: binnen 4 uur op werkdagen. Bij kritieke downtime reageren we altijd zo snel mogelijk, ongeacht je pakket.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="wc-section wc-section--dark wc-cta">
    <div class="wc-container">
        <h2 class="wc-cta__title">Website zorgeloos online?</h2>
        <p class="wc-cta__text">
            Laat het onderhoud aan ons over en focus op waar je goed in bent.
        </p>
        <div class="wc-cta__buttons">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="wc-btn wc-btn--primary">
                Start met Onderhoud
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
            <a href="<?php echo esc_url(home_url('/webdesign')); ?>" class="wc-btn wc-btn--outline">
                Nieuwe Website Nodig?
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
