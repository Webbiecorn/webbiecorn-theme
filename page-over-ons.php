<?php
/**
 * Template Name: Over Ons
 * 
 * @package Webbiecorn_Starter
 */

get_header();
?>

<!-- Page Hero with GSAP Animations -->
<section class="wc-page-hero wc-page-hero--about">
    <!-- Animated Background -->
    <div class="wc-about-hero__bg">
        <div class="wc-about-hero__particles"></div>
        <div class="wc-about-hero__glow"></div>
    </div>
    
    <div class="wc-container">
        <span class="wc-page-hero__kicker wc-about-hero__kicker">👋 Hey, welkom!</span>
        <h1 class="wc-page-hero__title wc-about-hero__title">
            <span class="wc-split-line">Wij zijn</span>
            <span class="wc-split-line wc-split-line--accent">Webbiecorn</span>
        </h1>
        <p class="wc-page-hero__subtitle wc-about-hero__subtitle">
            Een kleine, wendbare studio die grote dingen bouwt. 
            Van slimme webapps tot opvallende websites — altijd met passie en precisie.
        </p>
    </div>
</section>

<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<!-- About Hero Animation Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Register ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);
    
    // Split text into individual characters
    const splitLines = document.querySelectorAll('.wc-split-line');
    splitLines.forEach(line => {
        const text = line.textContent;
        line.innerHTML = '';
        text.split('').forEach((char, i) => {
            const span = document.createElement('span');
            span.className = 'wc-char';
            span.textContent = char === ' ' ? '\u00A0' : char;
            span.style.display = 'inline-block';
            line.appendChild(span);
        });
    });
    
    // Master timeline
    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    
    // Animate background glow
    tl.fromTo('.wc-about-hero__glow', 
        { scale: 0, opacity: 0 },
        { scale: 1, opacity: 1, duration: 1 }
    );
    
    // Animate kicker badge with bounce
    tl.fromTo('.wc-about-hero__kicker',
        { y: -50, opacity: 0, scale: 0.8 },
        { y: 0, opacity: 1, scale: 1, duration: 0.6, ease: 'back.out(1.7)' },
        '-=0.5'
    );
    
    // Animate each character with wave effect
    tl.fromTo('.wc-char',
        { y: 80, opacity: 0, rotateX: -90 },
        { 
            y: 0, 
            opacity: 1, 
            rotateX: 0,
            duration: 0.8, 
            stagger: 0.02,
            ease: 'back.out(1.2)'
        },
        '-=0.3'
    );
    
    // Animate subtitle
    tl.fromTo('.wc-about-hero__subtitle',
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8 },
        '-=0.4'
    );
    
    // Continuous floating animation for particles
    gsap.to('.wc-about-hero__particles', {
        backgroundPosition: '100% 100%',
        duration: 20,
        repeat: -1,
        ease: 'none'
    });
    
    // Subtle glow pulse
    gsap.to('.wc-about-hero__glow', {
        scale: 1.1,
        opacity: 0.8,
        duration: 3,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });
});
</script>

<!-- Meet The Founder Section -->
<section class="wc-section wc-section--dark wc-about-team">
    <div class="wc-container">
        <div class="wc-team-intro">
            <span class="wc-section-badge">🚀 Ons verhaal</span>
            <h2 class="wc-team-intro__title">Een team met een missie</h2>
            <p class="wc-team-intro__text">
                Webbiecorn ontstond uit een simpele overtuiging: <strong>goede websites hoeven niet duur of ingewikkeld te zijn</strong>. 
                Na jaren ervaring bij agencies en als freelancers besloten we het anders te doen.
            </p>
            <p class="wc-team-intro__text">
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
            <div class="wc-expertise-card">
                <span class="wc-expertise-card__icon">💻</span>
                <h3 class="wc-expertise-card__title">Development</h3>
                <p class="wc-expertise-card__desc">Full-stack ontwikkeling met moderne technologieën. Van WordPress tot React apps.</p>
            </div>
            <div class="wc-expertise-card">
                <span class="wc-expertise-card__icon">🎨</span>
                <h3 class="wc-expertise-card__title">Design</h3>
                <p class="wc-expertise-card__desc">UI/UX design en branding die opvalt. Functioneel én mooi.</p>
            </div>
            <div class="wc-expertise-card">
                <span class="wc-expertise-card__icon">📈</span>
                <h3 class="wc-expertise-card__title">Strategie</h3>
                <p class="wc-expertise-card__desc">SEO, conversie-optimalisatie en digitale groeistrategieën.</p>
            </div>
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
        
        <div class="wc-different-grid">
            <!-- VS Card 1 -->
            <div class="wc-vs-card">
                <div class="wc-vs-card__header">
                    <span class="wc-vs-card__icon wc-vs-card__icon--bad">❌</span>
                    <span class="wc-vs-card__label wc-vs-card__label--bad">Anderen</span>
                </div>
                <p class="wc-vs-card__text">"We gebruiken bewezen templates voor snelle levering"</p>
            </div>
            <div class="wc-vs-card wc-vs-card--good">
                <div class="wc-vs-card__header">
                    <span class="wc-vs-card__icon wc-vs-card__icon--good">✅</span>
                    <span class="wc-vs-card__label wc-vs-card__label--good">Webbiecorn</span>
                </div>
                <p class="wc-vs-card__text">"Elke regel code schrijven we zelf. Geen templates, geen bloat."</p>
            </div>
            
            <!-- VS Card 2 -->
            <div class="wc-vs-card">
                <div class="wc-vs-card__header">
                    <span class="wc-vs-card__icon wc-vs-card__icon--bad">❌</span>
                    <span class="wc-vs-card__label wc-vs-card__label--bad">Anderen</span>
                </div>
                <p class="wc-vs-card__text">"Onze accountmanager neemt contact op voor de offerte"</p>
            </div>
            <div class="wc-vs-card wc-vs-card--good">
                <div class="wc-vs-card__header">
                    <span class="wc-vs-card__icon wc-vs-card__icon--good">✅</span>
                    <span class="wc-vs-card__label wc-vs-card__label--good">Webbiecorn</span>
                </div>
                <p class="wc-vs-card__text">"Je praat direct met het team dat jouw project bouwt."</p>
            </div>
            
            <!-- VS Card 3 -->
            <div class="wc-vs-card">
                <div class="wc-vs-card__header">
                    <span class="wc-vs-card__icon wc-vs-card__icon--bad">❌</span>
                    <span class="wc-vs-card__label wc-vs-card__label--bad">Anderen</span>
                </div>
                <p class="wc-vs-card__text">"Hosting kost €50/maand, wijzigingen €75 per uur extra"</p>
            </div>
            <div class="wc-vs-card wc-vs-card--good">
                <div class="wc-vs-card__header">
                    <span class="wc-vs-card__icon wc-vs-card__icon--good">✅</span>
                    <span class="wc-vs-card__label wc-vs-card__label--good">Webbiecorn</span>
                </div>
                <p class="wc-vs-card__text">"Vaste prijzen, alles inbegrepen. Geen verrassingen."</p>
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

<!-- CTA -->
<section class="wc-section wc-section--gradient wc-cta wc-about-cta">
    <div class="wc-container">
        <div class="wc-about-cta__content">
            <span class="wc-about-cta__emoji">🚀</span>
            <h2 class="wc-cta__title">Klaar om samen te bouwen?</h2>
            <p class="wc-cta__text">
                Geen salesgesprekken, gewoon een eerlijk gesprek over jouw project. 
                Laten we kijken wat we voor elkaar kunnen betekenen.
            </p>
            <div class="wc-cta__buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="wc-btn wc-btn--white wc-btn--large">
                    Plan een gesprek
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="wc-btn wc-btn--ghost wc-btn--large">
                    Bekijk ons werk
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
