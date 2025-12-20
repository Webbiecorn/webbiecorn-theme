<?php
/**
 * Template Name: SEO & Analyse
 * 
 * @package Webbiecorn_Starter
 */

get_header();

// Hero via template part
get_template_part('template-parts/hero', null, array(
    'badge_text'   => 'SEO & Analyse',
    'badge_color'  => 'blue',
    'title'        => 'Word gevonden door je ideale klanten',
    'title_accent' => 'gevonden',
    'subtitle'     => 'Geen bezoekers = geen omzet. We helpen je website hoger ranken in Google met technische SEO, content optimalisatie en heldere rapportages.',
    'cta'          => array('label' => 'SEO audit aanvragen', 'url' => home_url('/contact/#wc-contact-form'), 'variant' => 'primary'),
    'stats'        => array(
        array('icon' => '📈', 'text' => 'Hogere ranking'),
        array('icon' => '🔍', 'text' => 'Technische SEO'),
        array('icon' => '📊', 'text' => 'Heldere rapportages'),
    )
));
?>

<!-- What is SEO -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Waarom SEO belangrijk is</h2>
        <p class="wc-section__subtitle wc-text-narrow">
            93% van online ervaringen begint bij een zoekmachine.
        </p>
        
        <div class="wc-why__grid">
            <div class="wc-why__item wc-card wc-card--hover">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Organisch Verkeer</h3>
                <p class="wc-why__desc">Gratis bezoekers die actief naar jouw diensten zoeken — 24/7, zonder advertentiekosten.</p>
            </div>
            
            <div class="wc-why__item wc-card wc-card--hover">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M12 20V10M18 20V4M6 20v-4"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Meetbaar Resultaat</h3>
                <p class="wc-why__desc">Met Google Analytics en Search Console zie je precies wat werkt en waar kansen liggen.</p>
            </div>
            
            <div class="wc-why__item wc-card wc-card--hover">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                        <polyline points="17 6 23 6 23 12"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Langetermijn ROI</h3>
                <p class="wc-why__desc">Eenmalig geoptimaliseerd = jarenlang voordeel. SEO is een investering, geen kostenpost.</p>
            </div>
            
            <div class="wc-why__item wc-card wc-card--hover">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Vertrouwen</h3>
                <p class="wc-why__desc">Hoog in Google = geloofwaardig. Bezoekers vertrouwen organische resultaten meer dan advertenties.</p>
            </div>
        </div>
    </div>
</section>

<!-- SEO Services -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <h2 class="wc-section__title">SEO Diensten</h2>
        <p class="wc-section__subtitle">Van eenmalige audit tot doorlopende optimalisatie.</p>
        
        <div class="wc-branding-grid">
            <!-- SEO Audit -->
            <div class="wc-branding-card">
                <div class="wc-branding-card__icon">📋</div>
                <h3 class="wc-branding-card__title">SEO Audit</h3>
                <p class="wc-branding-card__desc">
                    Een grondige analyse van je website met concrete verbeterpunten. 
                    Je weet precies wat er moet gebeuren.
                </p>
                <ul class="wc-branding-card__features">
                    <li>✓ Technische SEO check (snelheid, mobiel)</li>
                    <li>✓ On-page analyse (titels, meta, content)</li>
                    <li>✓ Concurrentie-analyse (3 concurrenten)</li>
                    <li>✓ Keyword onderzoek (20 termen)</li>
                    <li>✓ Rapport met prioriteitenlijst</li>
                </ul>
                <div class="wc-branding-card__price">
                    <span class="wc-branding-card__from">Eenmalig</span>
                    <span class="wc-branding-card__amount">€150</span>
                </div>
            </div>
            
            <!-- SEO Optimalisatie -->
            <div class="wc-branding-card wc-branding-card--featured">
                <div class="wc-branding-card__badge">Aanbevolen</div>
                <div class="wc-branding-card__icon">🚀</div>
                <h3 class="wc-branding-card__title">SEO Optimalisatie</h3>
                <p class="wc-branding-card__desc">
                    Audit + we voeren alle verbeteringen zelf door. 
                    Jouw website klaar om te ranken.
                </p>
                <ul class="wc-branding-card__features">
                    <li>✓ Volledige SEO Audit</li>
                    <li>✓ Technische fixes doorvoeren</li>
                    <li>✓ Meta titels & beschrijvingen</li>
                    <li>✓ Schema markup toevoegen</li>
                    <li>✓ Google Analytics & Search Console</li>
                    <li>✓ XML sitemap + robots.txt</li>
                </ul>
                <div class="wc-branding-card__price">
                    <span class="wc-branding-card__from">Eenmalig</span>
                    <span class="wc-branding-card__amount">€300</span>
                </div>
            </div>
            
            <!-- SEO Maandpakket -->
            <div class="wc-branding-card">
                <div class="wc-branding-card__icon">📈</div>
                <h3 class="wc-branding-card__title">SEO Maandpakket</h3>
                <p class="wc-branding-card__desc">
                    Doorlopende optimalisatie voor wie serieus wil groeien. 
                    Elke maand beter ranken.
                </p>
                <ul class="wc-branding-card__features">
                    <li>✓ Maandelijkse performance rapportage</li>
                    <li>✓ Keyword ranking monitoring</li>
                    <li>✓ Content optimalisatie (2 pagina's/mnd)</li>
                    <li>✓ Technische monitoring & fixes</li>
                    <li>✓ Maandelijks strategiegesprek (30 min)</li>
                </ul>
                <div class="wc-branding-card__price">
                    <span class="wc-branding-card__from">Per maand</span>
                    <span class="wc-branding-card__amount">€150</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What I Check -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Wat wordt er geanalyseerd?</h2>
        <p class="wc-section__subtitle">Een complete doorlichting van alle SEO-factoren.</p>
        
        <div class="wc-seo-checklist">
            <div class="wc-seo-category">
                <h3 class="wc-seo-category__title">
                    <span class="wc-seo-category__icon">⚙️</span>
                    Technische SEO
                </h3>
                <ul class="wc-seo-category__list">
                    <li>Laadsnelheid (Core Web Vitals)</li>
                    <li>Mobiele optimalisatie</li>
                    <li>HTTPS & beveiligingscertificaat</li>
                    <li>Crawlbaarheid & indexering</li>
                    <li>URL-structuur</li>
                    <li>404 errors & broken links</li>
                </ul>
            </div>
            
            <div class="wc-seo-category">
                <h3 class="wc-seo-category__title">
                    <span class="wc-seo-category__icon">📝</span>
                    On-Page SEO
                </h3>
                <ul class="wc-seo-category__list">
                    <li>Title tags & meta descriptions</li>
                    <li>Heading structuur (H1-H6)</li>
                    <li>Keyword gebruik & densiteit</li>
                    <li>Interne links</li>
                    <li>Afbeelding alt-teksten</li>
                    <li>Content kwaliteit & lengte</li>
                </ul>
            </div>
            
            <div class="wc-seo-category">
                <h3 class="wc-seo-category__title">
                    <span class="wc-seo-category__icon">🔗</span>
                    Off-Page & Autoriteit
                </h3>
                <ul class="wc-seo-category__list">
                    <li>Backlink profiel analyse</li>
                    <li>Domain autoriteit</li>
                    <li>Google Mijn Bedrijf (lokaal)</li>
                    <li>Social signals</li>
                    <li>NAP consistentie</li>
                    <li>Concurrentiepositie</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Reporting -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <div class="wc-report-preview">
            <div class="wc-report-preview__content">
                <h2 class="wc-section__title" style="text-align: left;">Heldere Rapportages</h2>
                <p class="wc-report-preview__text">
                    Geen technisch jargon, maar begrijpelijke rapporten met:
                </p>
                <ul class="wc-report-preview__list">
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Samenvatting van de huidige status</span>
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Top 10 prioriteiten met uitleg</span>
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Concrete actiepunten die je zelf kunt doen</span>
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Vooruitgang ten opzichte van vorige periode</span>
                    </li>
                </ul>
            </div>
            <div class="wc-report-preview__visual">
                <div class="wc-report-mockup">
                    <div class="wc-report-mockup__header">
                        <span class="wc-report-mockup__dot"></span>
                        <span class="wc-report-mockup__dot"></span>
                        <span class="wc-report-mockup__dot"></span>
                    </div>
                    <div class="wc-report-mockup__content">
                        <div class="wc-report-mockup__title">SEO Rapport</div>
                        <div class="wc-report-mockup__score">
                            <span class="wc-report-mockup__number">72</span>
                            <span class="wc-report-mockup__label">/100</span>
                        </div>
                        <div class="wc-report-mockup__bars">
                            <div class="wc-report-mockup__bar" style="width: 85%;"></div>
                            <div class="wc-report-mockup__bar" style="width: 65%;"></div>
                            <div class="wc-report-mockup__bar" style="width: 78%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Veelgestelde Vragen</h2>
        <p class="wc-section__subtitle">Antwoorden over SEO en resultaten.</p>
        
        <div class="wc-faq__list">
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Hoe snel zie ik resultaat van SEO?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>SEO is een marathon, geen sprint. Technische verbeteringen hebben vaak direct effect, maar voor keyword rankings moet je rekenen op 3-6 maanden. De resultaten zijn wel blijvend.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Garandeer je een #1 positie in Google?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Nee, en wees voorzichtig met bureaus die dat wel beloven. Google's algoritme is niet te manipuleren. Wat we wel garanderen: een technisch perfecte website en een strategie die bewezen werkt.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Heb ik SEO nodig als ik adverteer?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Ja! SEO en SEA (advertenties) vullen elkaar aan. Organisch verkeer is gratis en bouwt autoriteit op. Een goede mix verlaagt je totale acquisitiekosten.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Wat is het verschil tussen de audit en optimalisatie?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>De audit is een rapport met bevindingen — je krijgt een lijst met verbeterpunten. Bij optimalisatie voeren we die verbeteringen ook daadwerkelijk door op je website.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Welke tools gebruik je?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Google Search Console, Google Analytics 4, Screaming Frog, Ahrefs/SEMrush voor backlinks, PageSpeed Insights voor performance, en eigen tools voor specifieke analyses.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/cta-footer', null, array(
    'title' => 'Wil je weten hoe je website scoort?',
    'text' => 'Vraag een gratis quickscan aan of boek direct een volledige SEO audit.',
    'primary' => array('label' => 'SEO audit aanvragen', 'url' => home_url('/contact/#wc-contact-form')),
    'secondary' => array('label' => 'Bekijk webdesign pakketten', 'url' => home_url('/webdesign/')),
));
?>

<?php get_footer(); ?>
