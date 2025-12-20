<?php
/**
 * Template Name: Over Ons
 * 
 * @package Webbiecorn_Starter
 */

get_header();

// Hero via template part
get_template_part('template-parts/hero', null, array(
    'badge_text'   => 'Maak kennis',
    'badge_color'  => 'blue',
    'title'        => 'Wij zijn Webbiecorn',
    'title_accent' => 'Webbiecorn',
    'subtitle'     => 'Een kleine, wendbare studio die grote dingen bouwt. Van slimme webapps tot opvallende websites — altijd met passie en precisie.',
    'cta'          => array('label' => 'Bekijk ons werk', 'url' => home_url('/portfolio'), 'variant' => 'outline'),
    'stats'        => array(
        array('icon' => '🚀', 'text' => 'Opgericht in 2024'),
        array('icon' => '💡', 'text' => '100% maatwerk'),
        array('icon' => '🎯', 'text' => 'Resultaatgericht'),
    )
));
?>

<!-- Meet The Founder Section -->
<section class="wc-section wc-section--dark wc-about-team">
    <div class="wc-container">
        <div class="wc-team-intro">
            <span class="wc-section-badge">🚀 Ons verhaal</span>
            <h2 class="wc-team-intro__title">Een team met een missie</h2>
            <p class="wc-team-intro__text wc-text-narrow">
                Webbiecorn ontstond uit een simpele overtuiging: <strong>goede websites hoeven niet duur of ingewikkeld te zijn</strong>. 
                Na jaren ervaring bij agencies en als freelancers besloten we het anders te doen.
            </p>
            <p class="wc-team-intro__text wc-text-narrow">
                Geen eindeloze vergaderingen, geen accountmanagers, geen verborgen kosten. 
                Gewoon een <strong>klein team van specialisten</strong> dat direct met je samenwerkt aan oplossingen die werken.
            </p>
        </div>
        
        <div class="wc-team-stats">
            <div class="wc-team-stat">
                <span class="wc-team-stat__number">5+</span>
                <span class="wc-team-stat__label">Jaar ervaring</span>
            </div>
            <div class="wc-team-stat">
                <span class="wc-team-stat__number">17+</span>
                <span class="wc-team-stat__label">Projecten</span>
            </div>
            <div class="wc-team-stat">
                <span class="wc-team-stat__number">100%</span>
                <span class="wc-team-stat__label">Maatwerk</span>
            </div>
            <div class="wc-team-stat">
                <span class="wc-team-stat__number">24u</span>
                <span class="wc-team-stat__label">Reactietijd</span>
            </div>
        </div>
        
        <!-- Expertise Areas -->
        <div class="wc-team-expertise">
            <a href="<?php echo esc_url(home_url('/diensten/webdevelopment')); ?>" class="wc-expertise-card wc-expertise-card--clickable">
                <span class="wc-expertise-card__icon">💻</span>
                <h3 class="wc-expertise-card__title">Development</h3>
                <p class="wc-expertise-card__desc">Full-stack ontwikkeling met moderne technologieën. Van WordPress tot React apps.</p>
            </a>
            <a href="<?php echo esc_url(home_url('/diensten/branding')); ?>" class="wc-expertise-card wc-expertise-card--clickable">
                <span class="wc-expertise-card__icon">🎨</span>
                <h3 class="wc-expertise-card__title">Design</h3>
                <p class="wc-expertise-card__desc">UI/UX design en branding die opvalt. Functioneel én mooi.</p>
            </a>
            <a href="<?php echo esc_url(home_url('/diensten/seo-analyse')); ?>" class="wc-expertise-card wc-expertise-card--clickable">
                <span class="wc-expertise-card__icon">📈</span>
                <h3 class="wc-expertise-card__title">Strategie</h3>
                <p class="wc-expertise-card__desc">SEO, conversie-optimalisatie en digitale groeistrategieën.</p>
            </a>
        </div>
    </div>
</section>

<!-- What Makes Us Different -->
<section class="wc-section wc-section--white wc-about-different">
    <div class="wc-container">
        <div class="wc-different-header">
            <span class="wc-section-badge wc-section-badge--dark">✨ Waarom wij?</span>
            <h2 class="wc-different__title">Geen agency bullshit</h2>
            <p class="wc-different__subtitle">Dit is hoe wij anders werken dan de rest</p>
        </div>
        
        <div class="wc-different-compare">
            <div class="wc-different-col wc-different-col--left">
                <h3>Anderen</h3>
                <ul class="wc-different-list wc-different-list--bad">
                    <li>"We gebruiken bewezen templates voor snelle levering"</li>
                    <li>"Onze accountmanager neemt contact op voor de offerte"</li>
                    <li>"Hosting kost €50/maand, wijzigingen €75 per uur extra"</li>
                </ul>
            </div>
            <div class="wc-different-col wc-different-col--right">
                <h3>Webbiecorn</h3>
                <ul class="wc-different-list wc-different-list--good">
                    <li>Elke regel code schrijven we zelf. Geen templates, geen bloat.</li>
                    <li>Je praat direct met het team dat jouw project bouwt.</li>
                    <li>Vaste prijzen, alles inbegrepen. Geen verrassingen.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="wc-section wc-section--alt wc-about-tech">
    <div class="wc-container">
        <div class="wc-tech-header">
            <span class="wc-section-badge wc-section-badge--dark">🛠️ Tools & Tech</span>
            <h2 class="wc-tech__title">Onze gereedschapskist</h2>
            <p class="wc-tech__subtitle">De technologieën waarmee we werken</p>
        </div>
        
        <div class="wc-tech-grid">
            <div class="wc-tech-category">
                <h3 class="wc-tech-category__title">Frontend</h3>
                <div class="wc-tech-category__items">
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">⚛️</span>
                        <span class="wc-tech-item__name">React</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">📘</span>
                        <span class="wc-tech-item__name">TypeScript</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🌊</span>
                        <span class="wc-tech-item__name">Tailwind</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🎬</span>
                        <span class="wc-tech-item__name">GSAP</span>
                    </div>
                </div>
            </div>
            <div class="wc-tech-category">
                <h3 class="wc-tech-category__title">Backend & CMS</h3>
                <div class="wc-tech-category__items">
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🐘</span>
                        <span class="wc-tech-item__name">PHP</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">📝</span>
                        <span class="wc-tech-item__name">WordPress</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🔥</span>
                        <span class="wc-tech-item__name">Firebase</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🟢</span>
                        <span class="wc-tech-item__name">Node.js</span>
                    </div>
                </div>
            </div>
            <div class="wc-tech-category">
                <h3 class="wc-tech-category__title">Design & AI</h3>
                <div class="wc-tech-category__items">
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🎨</span>
                        <span class="wc-tech-item__name">Figma</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🤖</span>
                        <span class="wc-tech-item__name">ChatGPT</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">🖼️</span>
                        <span class="wc-tech-item__name">Midjourney</span>
                    </div>
                    <div class="wc-tech-item">
                        <span class="wc-tech-item__icon">✨</span>
                        <span class="wc-tech-item__name">Cursor AI</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section - Redesigned -->
<section class="wc-section wc-section--dark wc-about-values">
    <div class="wc-container">
        <div class="wc-values-header">
            <span class="wc-section-badge">🎯 Onze waarden</span>
            <h2 class="wc-values__title">Waar we voor staan</h2>
        </div>
        <div class="wc-values-grid wc-values-grid--new">
            <div class="wc-value-card wc-value-card--new">
                <div class="wc-value-card__glow"></div>
                <div class="wc-value-card__icon">⚡</div>
                <h3 class="wc-value-card__title">Snelheid boven alles</h3>
                <p class="wc-value-card__desc">
                    Een website die 3 seconden laadt verliest 50% van de bezoekers. Wij bouwen sites die vliegen.
                </p>
            </div>
            <div class="wc-value-card wc-value-card--new">
                <div class="wc-value-card__glow"></div>
                <div class="wc-value-card__icon">🎯</div>
                <h3 class="wc-value-card__title">Resultaat telt</h3>
                <p class="wc-value-card__desc">
                    Een mooie website is leuk, maar conversies zijn leuker. We ontwerpen met jouw doelen in gedachten.
                </p>
            </div>
            <div class="wc-value-card wc-value-card--new">
                <div class="wc-value-card__glow"></div>
                <div class="wc-value-card__icon">💬</div>
                <h3 class="wc-value-card__title">Geen gedoe</h3>
                <p class="wc-value-card__desc">
                    Duidelijke communicatie, vaste prijzen, snelle reacties. Zo simpel kan het zijn.
                </p>
            </div>
            <div class="wc-value-card wc-value-card--new">
                <div class="wc-value-card__glow"></div>
                <div class="wc-value-card__icon">🔧</div>
                <h3 class="wc-value-card__title">Echte eigendom</h3>
                <p class="wc-value-card__desc">
                    Alles wat we bouwen is van jou. Geen lock-in, geen maandelijkse fees om je site te "behouden".
                </p>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/cta-footer', null, array(
    'title' => 'Klaar om samen te bouwen?',
    'text' => 'Geen salesgesprekken, gewoon een eerlijk gesprek over jouw project. Laten we kijken wat we voor elkaar kunnen betekenen.',
    'primary' => array('label' => 'Plan een gesprek', 'url' => home_url('/contact/')),
    'secondary' => array('label' => 'Bekijk ons werk', 'url' => home_url('/portfolio/')),
));
?>

<?php get_footer(); ?>
