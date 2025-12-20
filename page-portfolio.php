<?php
/**
 * Template Name: Portfolio V2
 * 
 * Clean, modern portfolio with subtle animations
 * @package Webbiecorn_Starter
 * @version 2.3.0
 */

get_header();
?>

<main class="wc-portfolio-v2">

<?php
// Hero via template part
get_template_part('template-parts/hero', null, array(
    'badge_text'   => 'Portfolio',
    'badge_color'  => 'blue',
    'title'        => 'Projecten die resultaat leveren',
    'title_accent' => 'resultaat',
    'subtitle'     => 'Van concept tot launch — maatwerk websites en webapps die converteren, presteren en groeien.',
    'stats'        => array(
        array('icon' => '🚀', 'text' => '17+ Projecten'),
        array('icon' => '💯', 'text' => '100% Maatwerk'),
        array('icon' => '⚡', 'text' => '<1s Laadtijd'),
    )
));
?>

    <!-- ========================================
         FEATURED PROJECTS
         ======================================== -->
    <section class="pf-projects">
        <div class="wc-container">
            
            <div class="pf-section-header">
                <h2 class="pf-section-title">Uitgelichte Projecten</h2>
                <p class="pf-section-subtitle">Een selectie van ons beste werk</p>
            </div>
            
            <!-- Project Grid -->
            <div class="pf-grid">
                
                <!-- FEATURED: Webbiecorn -->
                <article class="pf-card pf-card--featured pf-card--live">
                    <div class="pf-card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/webbiecorn-preview.jpg" 
                             alt="Webbiecorn Website"
                             loading="lazy"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="pf-card__placeholder" style="display:none;">
                            <span class="pf-card__icon">🦄</span>
                        </div>
                        <div class="pf-card__overlay">
                            <a href="https://webbiecorn.nl" target="_blank" class="pf-card__link">
                                Bekijk live <span>→</span>
                            </a>
                        </div>
                    </div>
                    <div class="pf-card__content">
                        <div class="pf-card__meta">
                            <span class="pf-card__badge pf-card__badge--live">Live</span>
                            <span class="pf-card__category">Website</span>
                        </div>
                        <h3 class="pf-card__title">Webbiecorn.nl</h3>
                        <p class="pf-card__desc">
                            Onze eigen agency website. Custom WordPress thema, volledig hand-coded 
                            met GSAP animaties en <1s laadtijd.
                        </p>
                        <div class="pf-card__tech">
                            <span>WordPress</span>
                            <span>PHP</span>
                            <span>GSAP</span>
                            <span>CSS</span>
                        </div>
                    </div>
                </article>
                
                <!-- Buurtconciërge App -->
                <article class="pf-card pf-card--live">
                    <div class="pf-card__image">
                        <div class="pf-card__placeholder pf-card__placeholder--blue">
                            <span class="pf-card__icon">🏘️</span>
                        </div>
                        <div class="pf-card__overlay">
                            <span class="pf-card__link pf-card__link--disabled">
                                Case study binnenkort
                            </span>
                        </div>
                    </div>
                    <div class="pf-card__content">
                        <div class="pf-card__meta">
                            <span class="pf-card__badge pf-card__badge--live">Live</span>
                            <span class="pf-card__category">Web App</span>
                        </div>
                        <h3 class="pf-card__title">Buurtconciërge</h3>
                        <p class="pf-card__desc">
                            Complete webapp voor wijkbeheer. Bewoners melden problemen, 
                            beheerders behandelen en volgen op.
                        </p>
                        <div class="pf-card__tech">
                            <span>React</span>
                            <span>Firebase</span>
                            <span>TypeScript</span>
                        </div>
                    </div>
                </article>
                
                <!-- Gifteez -->
                <article class="pf-card">
                    <div class="pf-card__image">
                        <div class="pf-card__placeholder pf-card__placeholder--pink">
                            <span class="pf-card__icon">🎁</span>
                        </div>
                        <div class="pf-card__overlay">
                            <span class="pf-card__link pf-card__link--disabled">
                                In ontwikkeling
                            </span>
                        </div>
                    </div>
                    <div class="pf-card__content">
                        <div class="pf-card__meta">
                            <span class="pf-card__badge">In Dev</span>
                            <span class="pf-card__category">Platform</span>
                        </div>
                        <h3 class="pf-card__title">Gifteez</h3>
                        <p class="pf-card__desc">
                            Affiliate cadeauplatform met AI-suggesties voor 
                            gepersonaliseerde cadeau aanbevelingen.
                        </p>
                        <div class="pf-card__tech">
                            <span>React</span>
                            <span>AI</span>
                            <span>Branding</span>
                        </div>
                    </div>
                </article>
                
                <!-- Social Media Assets -->
                <article class="pf-card pf-card--live">
                    <div class="pf-card__image">
                        <div class="pf-card__placeholder pf-card__placeholder--purple">
                            <span class="pf-card__icon">🎨</span>
                        </div>
                    </div>
                    <div class="pf-card__content">
                        <div class="pf-card__meta">
                            <span class="pf-card__badge pf-card__badge--live">Live</span>
                            <span class="pf-card__category">Visual Design</span>
                        </div>
                        <h3 class="pf-card__title">Social Media Assets</h3>
                        <p class="pf-card__desc">
                            Hero banners, Pinterest pins, Instagram stories en 
                            AI-gestuurde visuals voor diverse klanten.
                        </p>
                        <div class="pf-card__tech">
                            <span>Branding</span>
                            <span>AI Art</span>
                            <span>Design</span>
                        </div>
                    </div>
                </article>
                
            </div>
            
        </div>
    </section>
    
    <!-- ========================================
         MORE PROJECTS COMING
         ======================================== -->
    <section class="pf-coming">
        <div class="wc-container">
            <div class="pf-coming__content">
                <span class="pf-coming__icon">🚀</span>
                <h3 class="pf-coming__title">Meer projecten in de maak</h3>
                <p class="pf-coming__text">
                    We werken continu aan nieuwe projecten. Uitgebreide case studies 
                    met before/after, uitdagingen en resultaten volgen binnenkort.
                </p>
                <div class="pf-coming__preview">
                    <span class="pf-coming__tag">🌱 Gardeneez</span>
                    <span class="pf-coming__tag">📋 Planningboard</span>
                    <span class="pf-coming__tag">⏱️ Urenregistratie</span>
                    <span class="pf-coming__tag">🍿 MyGuiltyPleasure</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ========================================
         SKILLS / TECH STACK
         ======================================== -->
    <section class="pf-skills">
        <div class="wc-container">
            <div class="pf-section-header">
                <h2 class="pf-section-title">Onze Tech Stack</h2>
                <p class="pf-section-subtitle">De tools waarmee we bouwen</p>
            </div>
            
            <div class="pf-skills__grid">
                <div class="pf-skill-group">
                    <h4 class="pf-skill-group__title">Frontend</h4>
                    <div class="pf-skill-group__items">
                        <span>HTML5</span>
                        <span>CSS3</span>
                        <span>JavaScript</span>
                        <span>React</span>
                        <span>Next.js</span>
                        <span>GSAP</span>
                    </div>
                </div>
                <div class="pf-skill-group">
                    <h4 class="pf-skill-group__title">Backend</h4>
                    <div class="pf-skill-group__items">
                        <span>PHP</span>
                        <span>WordPress</span>
                        <span>Node.js</span>
                        <span>Firebase</span>
                        <span>Python</span>
                    </div>
                </div>
                <div class="pf-skill-group">
                    <h4 class="pf-skill-group__title">Design</h4>
                    <div class="pf-skill-group__items">
                        <span>Figma</span>
                        <span>UI/UX</span>
                        <span>Branding</span>
                        <span>AI Art</span>
                    </div>
                </div>
                <div class="pf-skill-group">
                    <h4 class="pf-skill-group__title">Tools</h4>
                    <div class="pf-skill-group__items">
                        <span>Git</span>
                        <span>VS Code</span>
                        <span>Docker</span>
                        <span>Vercel</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<?php
	get_template_part('template-parts/cta-footer', null, array(
		'title' => 'Klaar voor jouw project?',
		'text' => 'Laten we samen iets moois bouwen. Gratis adviesgesprek, vrijblijvende offerte binnen 24 uur.',
		'primary' => array('label' => 'Start jouw project', 'url' => home_url('/contact/')),
		'secondary' => array('label' => 'Bekijk diensten', 'url' => home_url('/diensten/')),
	));
	?>

</main>

<?php get_footer(); ?>
