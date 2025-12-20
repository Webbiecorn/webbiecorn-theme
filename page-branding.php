<?php
/**
 * Template Name: Branding & Identiteit
 * 
 * @package Webbiecorn_Starter
 */

get_header();

// Hero via template part
get_template_part('template-parts/hero', null, array(
    'badge_text'   => 'Branding & Identiteit',
    'badge_color'  => 'purple',
    'title'        => 'Een merk dat blijft hangen',
    'title_accent' => 'blijft hangen',
    'subtitle'     => 'Van logo tot complete huisstijl. We ontwerpen visuele identiteiten die jouw bedrijf professioneel en herkenbaar maken — op elk touchpoint.',
    'stats'        => array(
        array('icon' => '🎨', 'text' => 'Logo ontwerp'),
        array('icon' => '📋', 'text' => 'Huisstijl'),
        array('icon' => '✨', 'text' => 'Visual identity'),
    )
));
?>

<!-- Why Branding -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Waarom investeren in branding?</h2>
        <p class="wc-section__subtitle">
            Een sterke visuele identiteit is de basis voor vertrouwen en herkenbaarheid.
        </p>
        
        <div class="wc-why__grid">
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 16v-4M12 8h.01"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Eerste Indruk</h3>
                <p class="wc-why__desc">Je hebt 7 seconden om een eerste indruk te maken. Een professioneel logo doet het werk voor je.</p>
            </div>
            
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Herkenbaarheid</h3>
                <p class="wc-why__desc">Consistente branding zorgt dat klanten je herkennen — online, offline, overal.</p>
            </div>
            
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Professionaliteit</h3>
                <p class="wc-why__desc">Een samenhangende huisstijl straalt kwaliteit en betrouwbaarheid uit naar potentiële klanten.</p>
            </div>
            
            <div class="wc-why__item">
                <div class="wc-why__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="23"/>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <h3 class="wc-why__title">Hogere Waarde</h3>
                <p class="wc-why__desc">Klanten betalen meer voor merken die er verzorgd en premium uitzien.</p>
            </div>
        </div>
    </div>
</section>

<!-- Branding Services -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <h2 class="wc-section__title">Branding Diensten</h2>
        <p class="wc-section__subtitle">Van een los logo tot complete merkidentiteit.</p>
        
        <div class="wc-branding-grid">
            <!-- Logo Design -->
            <div class="wc-branding-card">
                <div class="wc-branding-card__icon">🎯</div>
                <h3 class="wc-branding-card__title">Logo Design</h3>
                <p class="wc-branding-card__desc">
                    Een uniek, tijdloos logo dat jouw merk perfect representeert. 
                    Inclusief vectorbestanden voor print en web.
                </p>
                <ul class="wc-branding-card__features">
                    <li>✓ 3 conceptvoorstellen</li>
                    <li>✓ 2 revisierondes</li>
                    <li>✓ Alle bestandsformaten (SVG, PNG, PDF)</li>
                    <li>✓ Kleurvariaties (kleur, zwart-wit)</li>
                </ul>
                <div class="wc-branding-card__price">
                    <span class="wc-branding-card__from">Vanaf</span>
                    <span class="wc-branding-card__amount">€150</span>
                </div>
            </div>
            
            <!-- Huisstijl Basis -->
            <div class="wc-branding-card wc-branding-card--featured">
                <div class="wc-branding-card__badge">Populair</div>
                <div class="wc-branding-card__icon">🎨</div>
                <h3 class="wc-branding-card__title">Huisstijl Basis</h3>
                <p class="wc-branding-card__desc">
                    Complete visuele basis voor je merk. Logo plus alle elementen 
                    die je nodig hebt om consistent over te komen.
                </p>
                <ul class="wc-branding-card__features">
                    <li>✓ Logo design (zoals hierboven)</li>
                    <li>✓ Kleurenpalet (primair + secundair)</li>
                    <li>✓ Typografie selectie</li>
                    <li>✓ Visitekaartje ontwerp</li>
                    <li>✓ Basis brand guidelines (PDF)</li>
                </ul>
                <div class="wc-branding-card__price">
                    <span class="wc-branding-card__from">Vanaf</span>
                    <span class="wc-branding-card__amount">€350</span>
                </div>
            </div>
            
            <!-- Complete Brand Identity -->
            <div class="wc-branding-card">
                <div class="wc-branding-card__icon">✨</div>
                <h3 class="wc-branding-card__title">Complete Brand Identity</h3>
                <p class="wc-branding-card__desc">
                    Alles wat je nodig hebt om je merk professioneel te presenteren, 
                    online en offline.
                </p>
                <ul class="wc-branding-card__features">
                    <li>✓ Alles uit Huisstijl Basis</li>
                    <li>✓ Social media templates</li>
                    <li>✓ E-mail handtekening</li>
                    <li>✓ Briefpapier & factuur template</li>
                    <li>✓ Favicon & app icon</li>
                    <li>✓ Uitgebreide brand guidelines</li>
                </ul>
                <div class="wc-branding-card__price">
                    <span class="wc-branding-card__from">Vanaf</span>
                    <span class="wc-branding-card__amount">€600</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Hoe werkt het?</h2>
        <p class="wc-section__subtitle">Van briefing tot oplevering in 4 stappen.</p>
        
        <div class="wc-process-timeline">
            <div class="wc-process-step">
                <div class="wc-process-step__number">1</div>
                <div class="wc-process-step__content">
                    <h3>Kennismaking & Briefing</h3>
                    <p>We bespreken jouw bedrijf, doelgroep, concurrenten en visuele voorkeuren. We vragen naar voorbeelden die je aanspreken.</p>
                </div>
            </div>
            
            <div class="wc-process-step">
                <div class="wc-process-step__number">2</div>
                <div class="wc-process-step__content">
                    <h3>Concepten</h3>
                    <p>We werken 2-3 logo concepten uit in verschillende stijlen. Je krijgt een presentatie met uitleg bij elke richting.</p>
                </div>
            </div>
            
            <div class="wc-process-step">
                <div class="wc-process-step__number">3</div>
                <div class="wc-process-step__content">
                    <h3>Verfijning</h3>
                    <p>Na jouw feedback werken we het gekozen concept verder uit. Kleuren, typografie en details worden geperfectioneerd.</p>
                </div>
            </div>
            
            <div class="wc-process-step">
                <div class="wc-process-step__number">4</div>
                <div class="wc-process-step__content">
                    <h3>Oplevering</h3>
                    <p>Je ontvangt alle bestanden in de juiste formaten, plus een brand guide zodat je alles consistent kunt toepassen.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add-ons -->
<section class="wc-section wc-section--alt">
    <div class="wc-container">
        <div class="wc-addons__header">
            <h2 class="wc-section__title">Extra Brand Assets</h2>
            <p class="wc-section__subtitle">Breid je huisstijl uit met extra materialen.</p>
        </div>
        
        <div class="wc-addons__grid">
            <div class="wc-addon">
                <span class="wc-addon__title">Social Media Kit (5 templates)</span>
                <span class="wc-addon__price">€100</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Flyer/Poster ontwerp</span>
                <span class="wc-addon__price">€75/stuk</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">PowerPoint template</span>
                <span class="wc-addon__price">€150</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Iconenset (10 custom icons)</span>
                <span class="wc-addon__price">€120</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Merchandise ontwerp</span>
                <span class="wc-addon__price">€50/item</span>
            </div>
            <div class="wc-addon">
                <span class="wc-addon__title">Brand fotografie advies</span>
                <span class="wc-addon__price">€75</span>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="wc-section wc-section--white">
    <div class="wc-container">
        <h2 class="wc-section__title">Veelgestelde Vragen</h2>
        <p class="wc-section__subtitle">Antwoorden op de meest gestelde branding vragen.</p>
        
        <div class="wc-faq__list">
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Hoe lang duurt een logo ontwerp?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Een standaard logo ontwerp duurt 5-7 werkdagen, inclusief revisies. Voor complete huisstijlen rekenen we 2-3 weken. Spoedopdrachten zijn mogelijk tegen een toeslag.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Krijg ik de bronbestanden?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Ja, je krijgt alle bestanden in bewerkbare formaten (AI, EPS, SVG) plus gebruiksklare versies (PNG, JPG, PDF). Zo kun je je logo overal gebruiken.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Wat als ik het logo niet mooi vind?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Daarom beginnen we met meerdere concepten. Als geen enkele richting bevalt, kunnen we in overleg een extra ronde concepten doen. Dit komt zelden voor door de uitgebreide briefing vooraf.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Kan ik mijn huidige logo laten verbeteren?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Absoluut! Een logo refresh of modernisering is een populaire optie. We behouden de herkenbaarheid maar geven het een frisse, moderne uitstraling. Vanaf €100.</p>
                </div>
            </details>
            
            <details class="wc-faq-accordion">
                <summary class="wc-faq-accordion__question">Combineer je branding met webdesign?</summary>
                <div class="wc-faq-accordion__answer">
                    <p>Ja, dat is zelfs aan te raden! Bij het Professional Web & Branding pakket (€900-€1.800) krijg je website én huisstijl in één keer — en bespaar je op het totaal.</p>
                </div>
            </details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="wc-section wc-section--dark wc-cta">
    <div class="wc-container">
        <h2 class="wc-cta__title">Klaar voor een sterk merk?</h2>
        <p class="wc-cta__text">
            Laten we bespreken hoe we jouw visuele identiteit kunnen vormgeven.
        </p>
        <div class="wc-cta__buttons">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="wc-btn wc-btn--primary">
                Branding Aanvragen
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
            <a href="<?php echo esc_url(home_url('/webdesign')); ?>" class="wc-btn wc-btn--outline">
                Bekijk Webdesign Pakketten
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
