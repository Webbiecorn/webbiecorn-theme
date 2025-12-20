<?php
/**
 * Front Page Template - Homepage
 *
 * @package Webbiecorn_Starter
 */

get_header();
?>

<!-- Hero Section - Clean Split Layout -->
<style>
/* Mobile-first hero styles */
.wc-hero-v3__title {
    font-size: 2rem;
    font-weight: 800;
    color: #1a1a2e;
    line-height: 1.2;
    margin-bottom: 0;
    text-align: center;
}
.wc-hero-v3__rotating-line {
    display: flex;
    justify-content: center;
    width: 100%;
    margin-bottom: 24px;
}
.wc-hero-v3__rotating-word {
    color: #e30613;
    font-size: 2rem;
    font-weight: 800;
    line-height: 1.2;
}
/* Desktop overrides */
@media (min-width: 1025px) {
    .wc-hero-v3__title {
        font-size: 3.5rem;
        text-align: left;
        margin-bottom: 0;
    }
    .wc-hero-v3__title-inline {
        display: inline;
    }
    .wc-hero-v3__rotating-line {
        display: inline;
    }
    .wc-hero-v3__rotating-word {
        font-size: 3.5rem;
    }
}
</style>
<section class="wc-hero-v3" id="heroSection">
    <!-- Light gradient background -->
    <div class="wc-hero-v3__bg"></div>
    
    <div class="wc-container">
        <div class="wc-hero-v3__grid">
            <!-- Left: Content -->
            <div class="wc-hero-v3__content">
                <!-- Kicker -->
                <div class="wc-hero-v3__kicker">
                    <span class="wc-hero-v3__kicker-dot"></span>
                    Webdesign & Development Studio
                </div>
                
                <!-- Main Headline -->
                <h1 class="wc-hero-v3__title"><span class="wc-hero-v3__title-inline">Wij bouwen websites die </span><span class="wc-hero-v3__rotating-line"><span id="rotatingWord" class="wc-hero-v3__rotating-word">converteren</span></span></h1>
                
                <!-- Subtitle -->
                <p class="wc-hero-v3__subtitle">
                    Professionele websites en webapplicaties, volledig op maat gemaakt. 
                    100% custom code — geen templates of page builders.
                </p>
                
                <!-- USP Pills -->
                <div class="wc-hero-v3__usps">
                    <div class="wc-hero-v3__usp">
                        <span class="wc-hero-v3__usp-icon">
                            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        Razendsnelle laadtijden
                    </div>
                    <div class="wc-hero-v3__usp">
                        <span class="wc-hero-v3__usp-icon">
                            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        SEO geoptimaliseerd
                    </div>
                    <div class="wc-hero-v3__usp">
                        <span class="wc-hero-v3__usp-icon">
                            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        100% maatwerk
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="wc-hero-v3__ctas">
                    <a href="#contact" class="wc-hero-v3__cta-primary">
                        <span>Start jouw project</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#portfolio" class="wc-hero-v3__cta-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="5 3 19 12 5 21 5 3"/>
                        </svg>
                        <span>Bekijk ons werk</span>
                    </a>
                </div>
            </div>
            
            <!-- Right: Device Mockup -->
            <div class="wc-hero-v3__visual">
                <div class="wc-hero-v3__mockup-scene">
                    <!-- Laptop -->
                    <div class="wc-hero-v3__device wc-hero-v3__device--laptop">
                        <div class="wc-hero-v3__device-screen"></div>
                    </div>
                    
                    <!-- Tablet -->
                    <div class="wc-hero-v3__device wc-hero-v3__device--tablet">
                        <div class="wc-hero-v3__device-screen"></div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="wc-hero-v3__device wc-hero-v3__device--phone">
                        <div class="wc-hero-v3__device-screen"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats Bar at bottom -->
    <div class="wc-hero-v3__stats-bar">
        <div class="wc-hero-v3__stat">
            <span class="wc-hero-v3__stat-number">17</span>
            <span class="wc-hero-v3__stat-label">Projecten</span>
        </div>
        <div class="wc-hero-v3__stat-divider"></div>
        <div class="wc-hero-v3__stat">
            <span class="wc-hero-v3__stat-number">&lt;1s</span>
            <span class="wc-hero-v3__stat-label">Laadtijd</span>
        </div>
        <div class="wc-hero-v3__stat-divider"></div>
        <div class="wc-hero-v3__stat">
            <span class="wc-hero-v3__stat-number">100%</span>
            <span class="wc-hero-v3__stat-label">Custom Code</span>
        </div>
        <div class="wc-hero-v3__stat-divider"></div>
        <div class="wc-hero-v3__stat">
            <span class="wc-hero-v3__stat-number">5★</span>
            <span class="wc-hero-v3__stat-label">Reviews</span>
        </div>
    </div>
</section>

<!-- Hero Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rotating words
    const words = ['converteren', 'presteren', 'groeien', 'scoren'];
    const el = document.getElementById('rotatingWord');
    let i = 0;
    
    if (el) {
        // Forceer mobile styling via inline styles
        function applyMobileStyles() {
            if (window.innerWidth <= 768) {
                el.style.display = 'block';
                el.style.textAlign = 'center';
                el.style.width = '100%';
                el.style.minHeight = '56px';
            }
        }
        
        // Apply on load
        applyMobileStyles();
        
        // Apply on resize
        window.addEventListener('resize', applyMobileStyles);
        
        setInterval(function() {
            el.style.opacity = '0';
            setTimeout(function() {
                i = (i + 1) % words.length;
                el.textContent = words[i];
                el.style.opacity = '1';
                applyMobileStyles(); // Re-apply after text change
            }, 300);
        }, 2500);
    }
});
</script>

<!-- Services Section - Modern Bento Grid -->
<section class="wc-section wc-section--services" id="diensten">
    <div class="wc-container">
        <div class="wc-services-v2__header wc-animate">
            <span class="wc-kicker">Onze expertise</span>
            <h2 class="wc-services-v2__title">Wat wij voor je bouwen</h2>
            <p class="wc-services-v2__subtitle">Van concept tot launch — alles hand-coded, geen templates</p>
        </div>
        
        <div class="wc-bento-grid">
            <!-- Main Service: Websites (Large) -->
            <a href="/webdesign/" class="wc-bento-card wc-bento-card--large wc-bento-card--primary">
                <div class="wc-bento-card__bg">
                    <div class="wc-bento-card__glow"></div>
                </div>
                <div class="wc-bento-card__content">
                    <div class="wc-bento-card__icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <line x1="3" y1="9" x2="21" y2="9"/>
                            <line x1="9" y1="21" x2="9" y2="9"/>
                        </svg>
                    </div>
                    <div class="wc-bento-card__text">
                        <span class="wc-bento-card__label">Websites</span>
                        <h3 class="wc-bento-card__title">Custom Webdesign</h3>
                        <p class="wc-bento-card__desc">Snelle, responsive websites die converteren. 100% maatwerk, SEO-geoptimaliseerd en gebouwd voor groei.</p>
                        <div class="wc-bento-card__meta">
                            <span class="wc-bento-card__price">Vanaf €500</span>
                            <span class="wc-bento-card__arrow">→</span>
                        </div>
                    </div>
                </div>
                <div class="wc-bento-card__tags">
                    <span>WordPress</span>
                    <span>HTML/CSS</span>
                    <span>JavaScript</span>
                </div>
            </a>
            
            <!-- Branding -->
            <a href="/branding/" class="wc-bento-card wc-bento-card--medium">
                <div class="wc-bento-card__bg">
                    <div class="wc-bento-card__glow"></div>
                </div>
                <div class="wc-bento-card__content">
                    <div class="wc-bento-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="13.5" cy="6.5" r="2.5"/>
                            <path d="M17.5 10.5c0 2.5-4 2.5-4 5 0 1.5 1.5 2.5 4 2.5"/>
                            <path d="M3 21l7-7"/>
                            <circle cx="7.5" cy="16.5" r="2.5"/>
                        </svg>
                    </div>
                    <div class="wc-bento-card__text">
                        <span class="wc-bento-card__label">Branding</span>
                        <h3 class="wc-bento-card__title">Visuele Identiteit</h3>
                        <p class="wc-bento-card__desc">Logo, huisstijl en merkidentiteit die blijft hangen.</p>
                        <div class="wc-bento-card__meta">
                            <span class="wc-bento-card__price">Vanaf €300</span>
                            <span class="wc-bento-card__arrow">→</span>
                        </div>
                    </div>
                </div>
            </a>
            
            <!-- SEO -->
            <a href="/seo-analyse/" class="wc-bento-card wc-bento-card--medium">
                <div class="wc-bento-card__bg">
                    <div class="wc-bento-card__glow"></div>
                </div>
                <div class="wc-bento-card__content">
                    <div class="wc-bento-card__icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                        </svg>
                    </div>
                    <div class="wc-bento-card__text">
                        <span class="wc-bento-card__label">Marketing</span>
                        <h3 class="wc-bento-card__title">SEO & Content</h3>
                        <p class="wc-bento-card__desc">Gevonden worden in Google met content die converteert.</p>
                        <div class="wc-bento-card__meta">
                            <span class="wc-bento-card__price">Vanaf €150</span>
                            <span class="wc-bento-card__arrow">→</span>
                        </div>
                    </div>
                </div>
            </a>
            
            <!-- Onderhoud -->
            <a href="/onderhoud/" class="wc-bento-card wc-bento-card--small">
                <div class="wc-bento-card__bg">
                    <div class="wc-bento-card__glow"></div>
                </div>
                <div class="wc-bento-card__content">
                    <div class="wc-bento-card__icon">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <polyline points="9 12 11 14 15 10"/>
                        </svg>
                    </div>
                    <div class="wc-bento-card__text">
                        <h3 class="wc-bento-card__title">Onderhoud</h3>
                        <div class="wc-bento-card__meta">
                            <span class="wc-bento-card__price">€49/maand</span>
                            <span class="wc-bento-card__arrow">→</span>
                        </div>
                    </div>
                </div>
            </a>
            
            <!-- CTA Card -->
            <div class="wc-bento-card wc-bento-card--cta">
                <div class="wc-bento-card__content">
                    <div class="wc-bento-card__text">
                        <h3 class="wc-bento-card__title">Iets anders nodig?</h3>
                        <p class="wc-bento-card__desc">Laten we het bespreken!</p>
                    </div>
                    <a href="#contact" class="wc-btn wc-btn--primary wc-btn--small">Contact →</a>
                </div>
            </div>
        </div>
        
        <!-- CTA Banner -->
        <div class="wc-services-cta">
            <div class="wc-services-cta__content">
                <h3 class="wc-services-cta__title">Niet zeker wat je nodig hebt?</h3>
                <p class="wc-services-cta__text">Plan een gratis adviesgesprek en we helpen je op weg.</p>
            </div>
            <a href="#contact" class="wc-btn wc-btn--white">
                Gratis advies
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- Werkwijze Section -->
<section class="wc-section wc-section--alt" id="werkwijze">
    <div class="wc-container">
        <div class="wc-process__header wc-animate">
            <span class="wc-services__kicker">Werkwijze</span>
            <h2 class="wc-services__title">Hoe werkt het?</h2>
            <p class="wc-services__subtitle">Van eerste gesprek tot live website in 4 duidelijke stappen.</p>
        </div>
        
        <div class="wc-timeline">
            <div class="wc-timeline__line"></div>
            
            <div class="wc-timeline__step" data-step="1">
                <div class="wc-timeline__marker">
                    <span class="wc-timeline__number">01</span>
                    <div class="wc-timeline__pulse"></div>
                </div>
                <div class="wc-timeline__content">
                    <h3 class="wc-timeline__title">Kennismaking</h3>
                    <p class="wc-timeline__desc">We bespreken je wensen, doelen en budget. Gratis en vrijblijvend. Binnen 24 uur ontvang je een heldere offerte.</p>
                </div>
            </div>
            
            <div class="wc-timeline__step" data-step="2">
                <div class="wc-timeline__marker">
                    <span class="wc-timeline__number">02</span>
                    <div class="wc-timeline__pulse"></div>
                </div>
                <div class="wc-timeline__content">
                    <h3 class="wc-timeline__title">Design & Ontwikkeling</h3>
                    <p class="wc-timeline__desc">Na akkoord en aanbetaling gaan we aan de slag. Je ontvangt een preview link om mee te kijken en feedback te geven.</p>
                </div>
            </div>
            
            <div class="wc-timeline__step" data-step="3">
                <div class="wc-timeline__marker">
                    <span class="wc-timeline__number">03</span>
                    <div class="wc-timeline__pulse"></div>
                </div>
                <div class="wc-timeline__content">
                    <h3 class="wc-timeline__title">Revisie & Feedback</h3>
                    <p class="wc-timeline__desc">Je geeft feedback, wij verwerken het. Afhankelijk van je pakket heb je 1-3 revisierondes om alles perfect te krijgen.</p>
                </div>
            </div>
            
            <div class="wc-timeline__step" data-step="4">
                <div class="wc-timeline__marker">
                    <span class="wc-timeline__number">04</span>
                    <div class="wc-timeline__pulse"></div>
                </div>
                <div class="wc-timeline__content">
                    <h3 class="wc-timeline__title">Oplevering & Live</h3>
                    <p class="wc-timeline__desc">Na goedkeuring zetten we je site live. Je ontvangt alle toegangsgegevens en indien gewenst: een onderhoudscontract.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section - Modern Teaser Style -->
<section class="wc-section wc-home-portfolio" id="portfolio">
    <div class="wc-container">
        
        <!-- Section Intro -->
        <div class="wc-teaser-intro wc-animate">
            <span class="wc-section-badge">✨ Portfolio</span>
            <h2 class="wc-section-title">Recent Werk</h2>
            <p class="wc-section-subtitle">Een greep uit onze projecten. Van webapps tot complete merkidentiteiten.</p>
        </div>
        
        <!-- Portfolio Grid - Teaser Style -->
        <div class="wc-teaser-grid wc-teaser-grid--home">
            
            <!-- Buurt/Conciërge App -->
            <article class="wc-teaser-card wc-animate" data-animate="teaser">
                <div class="wc-teaser-card__visual">
                    <div class="wc-teaser-card__placeholder wc-teaser-card__placeholder--image">
                        <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/portfolio-buurtapp-2.png" alt="Buurt/Conciërge App" class="wc-teaser-card__img">
                    </div>
                    <div class="wc-teaser-card__badge wc-teaser-card__badge--live">Live</div>
                </div>
                <div class="wc-teaser-card__content">
                    <span class="wc-teaser-card__category-label">🧠 Web App</span>
                    <h4 class="wc-teaser-card__title">Buurt/Conciërge App</h4>
                    <p class="wc-teaser-card__desc">Full-stack webapp voor meldingenbeheer bij woningcorporaties en VvEs.</p>
                    <div class="wc-teaser-card__tags">
                        <span>React</span><span>Firebase</span><span>TypeScript</span>
                    </div>
                </div>
            </article>
            
            <!-- Gifteez -->
            <article class="wc-teaser-card wc-animate" data-animate="teaser">
                <div class="wc-teaser-card__visual">
                    <div class="wc-teaser-card__placeholder wc-teaser-card__placeholder--image">
                        <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/portfolio-gifteez-website-4.png" alt="Gifteez Cadeauplatform" class="wc-teaser-card__img">
                    </div>
                    <div class="wc-teaser-card__badge">In Development</div>
                </div>
                <div class="wc-teaser-card__content">
                    <span class="wc-teaser-card__category-label">🎁 Website + Branding</span>
                    <h4 class="wc-teaser-card__title">Gifteez</h4>
                    <p class="wc-teaser-card__desc">Affiliate cadeauplatform met speelse merkidentiteit en eigen mascotte.</p>
                    <div class="wc-teaser-card__tags">
                        <span>React</span><span>AI</span><span>Branding</span>
                    </div>
                </div>
            </article>
            
            <!-- Webbiecorn -->
            <article class="wc-teaser-card wc-animate" data-animate="teaser">
                <div class="wc-teaser-card__visual">
                    <div class="wc-teaser-card__placeholder wc-teaser-card__placeholder--image">
                        <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/portfolio-webbiecorn-website-1.png" alt="Webbiecorn Website" class="wc-teaser-card__img">
                    </div>
                    <div class="wc-teaser-card__badge wc-teaser-card__badge--live">Live</div>
                </div>
                <div class="wc-teaser-card__content">
                    <span class="wc-teaser-card__category-label">🌐 Website</span>
                    <h4 class="wc-teaser-card__title">Webbiecorn.nl</h4>
                    <p class="wc-teaser-card__desc">Onze eigen website — volledig hand-coded WordPress theme met custom design.</p>
                    <div class="wc-teaser-card__tags">
                        <span>WordPress</span><span>PHP</span><span>GSAP</span>
                    </div>
                </div>
            </article>
            
            <!-- Visual Design -->
            <article class="wc-teaser-card wc-animate" data-animate="teaser">
                <div class="wc-teaser-card__visual">
                    <div class="wc-teaser-card__placeholder wc-teaser-card__placeholder--image">
                        <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/portfolio-virtualdesign-1.png" alt="Visual Design Assets" class="wc-teaser-card__img">
                    </div>
                    <div class="wc-teaser-card__badge wc-teaser-card__badge--live">Live</div>
                </div>
                <div class="wc-teaser-card__content">
                    <span class="wc-teaser-card__category-label">🎨 Visual Design</span>
                    <h4 class="wc-teaser-card__title">Social Media Assets</h4>
                    <p class="wc-teaser-card__desc">Hero banners, Pinterest pins, Instagram stories en AI-gestuurde visuals.</p>
                    <div class="wc-teaser-card__tags">
                        <span>Branding</span><span>AI Art</span><span>Design</span>
                    </div>
                </div>
            </article>
            
        </div>
        
        <!-- CTA to Portfolio Page -->
        <div class="wc-home-portfolio__cta wc-animate">
            <a href="/portfolio" class="wc-btn wc-btn--outline wc-btn--large">
                Bekijk alle projecten
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
        
    </div>
</section>

<!-- About Section -->
<section class="wc-section wc-section--alt" id="over-ons">
    <div class="wc-container">
        <div class="wc-about__inner">
            <div class="wc-about__visual" id="aboutVisual">
                <div class="wc-about__visual-bg">
                    <!-- Particle Background -->
                    <div class="wc-about__particles" id="aboutParticles"></div>
                    
                    <!-- Matrix Rain (shows on hover) -->
                    <canvas class="wc-about__matrix" id="matrixCanvas"></canvas>
                    
                    <!-- Glowing Ring -->
                    <div class="wc-about__ring"></div>
                    <div class="wc-about__ring wc-about__ring--2"></div>
                    
                    <!-- Tech Stack Icons -->
                    <div class="wc-about__tech-icons">
                        <span class="wc-about__tech-icon" data-icon="html">&lt;/&gt;</span>
                        <span class="wc-about__tech-icon" data-icon="css">#</span>
                        <span class="wc-about__tech-icon" data-icon="js">JS</span>
                        <span class="wc-about__tech-icon" data-icon="react">⚛</span>
                        <span class="wc-about__tech-icon" data-icon="php">PHP</span>
                        <span class="wc-about__tech-icon" data-icon="wp">WP</span>
                    </div>
                    
                    <!-- Logo -->
                    <div class="wc-about__logo-wrapper">
                        <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/12/webbiecorn-logo-red.png')); ?>" alt="Webbiecorn Logo" class="wc-about__logo-anim" id="aboutLogo">
                    </div>
                    
                    <!-- Glow Text -->
                    <div class="wc-about__glow-text" id="aboutGlowText">
                        <span>Hand-coded</span>
                        <span>websites</span>
                    </div>
                </div>
            </div>
            
            <div class="wc-about__content wc-animate">
                <span class="wc-about__kicker">Over Webbiecorn</span>
                <h2 class="wc-about__title">Hand-coded websites, geen templates</h2>
                <p class="wc-about__text">
                    Webbiecorn is een technische webstudio die gelooft in maatwerk. Geen drag-and-drop pagebuilders, maar échte code. Dat betekent snellere websites, betere SEO en volledige controle over elk detail.
                </p>
                <p class="wc-about__text">
                    Of je nu een simpele landingspagina nodig hebt of een complete webapplicatie met integraties — we bouwen het. Professioneel, op tijd en binnen budget.
                </p>
                
                <div class="wc-about__highlights">
                    <div class="wc-highlight">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>100% hand-coded (HTML/CSS/JS)</span>
                    </div>
                    <div class="wc-highlight">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Snelle laadtijden & SEO-ready</span>
                    </div>
                    <div class="wc-highlight">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Transparante prijzen, geen verrassingen</span>
                    </div>
                    <div class="wc-highlight">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#E30613" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <span>Persoonlijk contact, snelle support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="wc-section wc-section--testimonials" id="testimonials">
    <div class="wc-container">
        <div class="wc-testimonials__header wc-animate">
            <span class="wc-kicker">⭐ Wat klanten zeggen</span>
            <h2 class="wc-testimonials__title">Tevreden klanten, succesvolle projecten</h2>
            <p class="wc-testimonials__subtitle">Lees ervaringen van ondernemers die we hebben geholpen met hun online aanwezigheid</p>
        </div>
        
        <div class="wc-testimonials__grid">
            <!-- Testimonial 1 -->
            <article class="wc-testimonial-card wc-animate" itemscope itemtype="https://schema.org/Review">
                <div class="wc-testimonial-card__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                    <meta itemprop="ratingValue" content="5">
                    <meta itemprop="bestRating" content="5">
                    <span>⭐⭐⭐⭐⭐</span>
                </div>
                <blockquote class="wc-testimonial-card__quote" itemprop="reviewBody">
                    "Webbiecorn leverde exact wat we nodig hadden: een snelle, moderne website die onze diensten perfect presenteert. De communicatie was top en de oplevering eerder dan gepland. Aanrader!"
                </blockquote>
                <div class="wc-testimonial-card__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="wc-testimonial-card__avatar">
                        <span>JV</span>
                    </div>
                    <div class="wc-testimonial-card__info">
                        <cite class="wc-testimonial-card__name" itemprop="name">Jan Vermeer</cite>
                        <span class="wc-testimonial-card__role">Eigenaar, Vermeer Installaties</span>
                    </div>
                </div>
                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                    <meta itemprop="name" content="Webbiecorn">
                    <meta itemprop="image" content="https://webbiecorn.nl/wp-content/themes/webbiecorn-starter-v2/assets/images/logo-webbiecorn-white.png">
                </div>
            </article>
            
            <!-- Testimonial 2 -->
            <article class="wc-testimonial-card wc-testimonial-card--featured wc-animate" itemscope itemtype="https://schema.org/Review">
                <div class="wc-testimonial-card__badge">Uitgelicht</div>
                <div class="wc-testimonial-card__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                    <meta itemprop="ratingValue" content="5">
                    <meta itemprop="bestRating" content="5">
                    <span>⭐⭐⭐⭐⭐</span>
                </div>
                <blockquote class="wc-testimonial-card__quote" itemprop="reviewBody">
                    "Eindelijk een webbureau dat begrijpt wat maatwerk betekent. Geen templates, geen gedoe — gewoon een website die snel laadt en er fantastisch uitziet. Onze conversie is met 40% gestegen!"
                </blockquote>
                <div class="wc-testimonial-card__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="wc-testimonial-card__avatar wc-testimonial-card__avatar--featured">
                        <span>SB</span>
                    </div>
                    <div class="wc-testimonial-card__info">
                        <cite class="wc-testimonial-card__name" itemprop="name">Sandra de Boer</cite>
                        <span class="wc-testimonial-card__role">Marketing Manager, TechFlow B.V.</span>
                    </div>
                </div>
                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                    <meta itemprop="name" content="Webbiecorn">
                    <meta itemprop="image" content="https://webbiecorn.nl/wp-content/themes/webbiecorn-starter-v2/assets/images/logo-webbiecorn-white.png">
                </div>
            </article>
            
            <!-- Testimonial 3 -->
            <article class="wc-testimonial-card wc-animate" itemscope itemtype="https://schema.org/Review">
                <div class="wc-testimonial-card__rating" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                    <meta itemprop="ratingValue" content="5">
                    <meta itemprop="bestRating" content="5">
                    <span>⭐⭐⭐⭐⭐</span>
                </div>
                <blockquote class="wc-testimonial-card__quote" itemprop="reviewBody">
                    "Als startup hadden we een beperkt budget, maar Webbiecorn dacht met ons mee. Het resultaat: een professionele website waar we trots op zijn. Super fijne samenwerking!"
                </blockquote>
                <div class="wc-testimonial-card__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <div class="wc-testimonial-card__avatar">
                        <span>MK</span>
                    </div>
                    <div class="wc-testimonial-card__info">
                        <cite class="wc-testimonial-card__name" itemprop="name">Mohammed Khalil</cite>
                        <span class="wc-testimonial-card__role">Founder, GreenBytes</span>
                    </div>
                </div>
                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                    <meta itemprop="name" content="Webbiecorn">
                    <meta itemprop="image" content="https://webbiecorn.nl/wp-content/themes/webbiecorn-starter-v2/assets/images/logo-webbiecorn-white.png">
                </div>
            </article>
        </div>
        
        <!-- Trust Indicators -->
        <div class="wc-testimonials__trust wc-animate">
            <div class="wc-trust-stat">
                <span class="wc-trust-stat__number">5.0</span>
                <span class="wc-trust-stat__label">Gemiddelde score</span>
            </div>
            <div class="wc-trust-stat">
                <span class="wc-trust-stat__number">100%</span>
                <span class="wc-trust-stat__label">Tevreden klanten</span>
            </div>
            <div class="wc-trust-stat">
                <span class="wc-trust-stat__number">24u</span>
                <span class="wc-trust-stat__label">Reactietijd</span>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="wc-section wc-section--faq" id="faq">
    <div class="wc-container">
        <div class="wc-faq-modern__header wc-animate">
            <span class="wc-services__kicker">Veelgestelde vragen</span>
            <h2 class="wc-services__title">Alles wat je wilt weten</h2>
            <p class="wc-services__subtitle">Heb je een andere vraag? Neem gerust contact op!</p>
        </div>
        
        <div class="wc-faq-modern">
            <!-- FAQ Item 1 -->
            <div class="wc-faq-modern__item">
                <button class="wc-faq-modern__question" aria-expanded="false">
                    <span class="wc-faq-modern__icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                            <line x1="12" y1="17" x2="12.01" y2="17"/>
                        </svg>
                    </span>
                    <span class="wc-faq-modern__text">Hoe lang duurt het bouwen van een website?</span>
                    <span class="wc-faq-modern__toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19" class="wc-faq-modern__plus-v"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </button>
                <div class="wc-faq-modern__answer">
                    <div class="wc-faq-modern__answer-inner">
                        <p>Afhankelijk van het pakket en de complexiteit:</p>
                        <ul>
                            <li><strong>Landingspagina:</strong> 1-3 werkdagen</li>
                            <li><strong>Bedrijfswebsite (5-10 pagina's):</strong> 1-2 weken</li>
                            <li><strong>Webapplicatie:</strong> 3-6 weken</li>
                        </ul>
                        <p>Dit is exclusief wachttijd op jouw feedback en content.</p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="wc-faq-modern__item">
                <button class="wc-faq-modern__question" aria-expanded="false">
                    <span class="wc-faq-modern__icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </span>
                    <span class="wc-faq-modern__text">Wat als ik niet tevreden ben?</span>
                    <span class="wc-faq-modern__toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19" class="wc-faq-modern__plus-v"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </button>
                <div class="wc-faq-modern__answer">
                    <div class="wc-faq-modern__answer-inner">
                        <p>Elk pakket bevat <strong>2-3 revisierondes</strong> om aanpassingen te doen. We stoppen niet tot je 100% tevreden bent!</p>
                        <p>Extra revisies na de inclusieve rondes kosten €50 per ronde. Dit voorkomt eindeloze feedbackloops en houdt het project op koers.</p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="wc-faq-modern__item">
                <button class="wc-faq-modern__question" aria-expanded="false">
                    <span class="wc-faq-modern__icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                            <line x1="6" y1="6" x2="6.01" y2="6"/>
                            <line x1="6" y1="18" x2="6.01" y2="18"/>
                        </svg>
                    </span>
                    <span class="wc-faq-modern__text">Moet ik zelf hosting regelen?</span>
                    <span class="wc-faq-modern__toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19" class="wc-faq-modern__plus-v"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </button>
                <div class="wc-faq-modern__answer">
                    <div class="wc-faq-modern__answer-inner">
                        <p>Nee, bij elk websitepakket regelen wij de hosting voor je. Dit is <strong>altijd inbegrepen</strong> bij onze diensten:</p>
                        <ul>
                            <li>Snelle SSD servers in Nederland</li>
                            <li>Gratis SSL-certificaat</li>
                            <li>Dagelijkse backups</li>
                            <li>99.9% uptime garantie</li>
                        </ul>
                        <p>Hosting is alleen beschikbaar in combinatie met een websitepakket, niet los af te nemen.</p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="wc-faq-modern__item">
                <button class="wc-faq-modern__question" aria-expanded="false">
                    <span class="wc-faq-modern__icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="20" x2="12" y2="10"/>
                            <line x1="18" y1="20" x2="18" y2="4"/>
                            <line x1="6" y1="20" x2="6" y2="16"/>
                        </svg>
                    </span>
                    <span class="wc-faq-modern__text">Kan ik later uitbreiden?</span>
                    <span class="wc-faq-modern__toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19" class="wc-faq-modern__plus-v"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </button>
                <div class="wc-faq-modern__answer">
                    <div class="wc-faq-modern__answer-inner">
                        <p><strong>Absoluut!</strong> Alle websites zijn gebouwd met groei in gedachten. Later toevoegen is makkelijk:</p>
                        <ul>
                            <li>Extra pagina's of secties</li>
                            <li>Blog of nieuws functionaliteit</li>
                            <li>Integraties (CRM, analytics, etc.)</li>
                            <li>E-commerce uitbreiding</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Item 5 -->
            <div class="wc-faq-modern__item">
                <button class="wc-faq-modern__question" aria-expanded="false">
                    <span class="wc-faq-modern__icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="16 18 22 12 16 6"/>
                            <polyline points="8 6 2 12 8 18"/>
                        </svg>
                    </span>
                    <span class="wc-faq-modern__text">Waarom geen WordPress pagebuilders?</span>
                    <span class="wc-faq-modern__toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19" class="wc-faq-modern__plus-v"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </button>
                <div class="wc-faq-modern__answer">
                    <div class="wc-faq-modern__answer-inner">
                        <p>Pagebuilders zoals Elementor en Divi hebben nadelen:</p>
                        <ul>
                            <li><strong>Traag:</strong> Veel onnodige code die je site vertraagt</li>
                            <li><strong>Onveilig:</strong> Meer plugins = meer beveiligingsrisico's</li>
                            <li><strong>Afhankelijkheid:</strong> Site kapot als plugin stopt</li>
                            <li><strong>Slechte SEO:</strong> Opgeblazen HTML schaadt rankings</li>
                        </ul>
                        <p>Hand-coded sites zijn <strong>sneller, veiliger en scoren beter</strong> in Google.</p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Item 6 -->
            <div class="wc-faq-modern__item">
                <button class="wc-faq-modern__question" aria-expanded="false">
                    <span class="wc-faq-modern__icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                            <line x1="1" y1="10" x2="23" y2="10"/>
                        </svg>
                    </span>
                    <span class="wc-faq-modern__text">Hoe werkt betaling?</span>
                    <span class="wc-faq-modern__toggle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="5" x2="12" y2="19" class="wc-faq-modern__plus-v"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </span>
                </button>
                <div class="wc-faq-modern__answer">
                    <div class="wc-faq-modern__answer-inner">
                        <p>Wij hanteren een transparante betalingsstructuur:</p>
                        <ul>
                            <li><strong>Eenmalige projecten:</strong> 50% vooraf, 50% bij oplevering</li>
                            <li><strong>Grote projecten:</strong> Gefaseerde betaling mogelijk (3 termijnen)</li>
                            <li><strong>Onderhoud/hosting:</strong> Maandelijks vooruit via automatische incasso</li>
                        </ul>
                        <p>Betalen kan via bankoverschrijving of iDEAL.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section - Modern Design -->
<section class="wc-section wc-home-contact" id="contact">
    <div class="wc-container">
        <div class="wc-home-contact__wrapper">
            
            <!-- Left Side - Info & CTA -->
            <div class="wc-home-contact__info">
                <span class="wc-section-badge">💬 Contact</span>
                <h2 class="wc-home-contact__title">Laten we samen iets <span class="wc-text-gradient">moois</span> bouwen</h2>
                <p class="wc-home-contact__subtitle">
                    Heb je een idee, vraag of project? Vul het formulier in en we reageren binnen 24 uur. Gratis en vrijblijvend.
                </p>
                
                <!-- Quick Benefits -->
                <div class="wc-home-contact__benefits">
                    <div class="wc-home-contact__benefit">
                        <span class="wc-home-contact__benefit-icon">⚡</span>
                        <span>Reactie binnen 24 uur</span>
                    </div>
                    <div class="wc-home-contact__benefit">
                        <span class="wc-home-contact__benefit-icon">💰</span>
                        <span>Gratis adviesgesprek</span>
                    </div>
                    <div class="wc-home-contact__benefit">
                        <span class="wc-home-contact__benefit-icon">🎯</span>
                        <span>Vrijblijvende offerte</span>
                    </div>
                </div>
                
                <!-- Direct Contact -->
                <div class="wc-home-contact__direct">
                    <p class="wc-home-contact__direct-label">Liever direct mailen?</p>
                    <a href="mailto:info@webbiecorn.nl" class="wc-home-contact__email">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        info@webbiecorn.nl
                    </a>
                </div>
            </div>
            
            <!-- Right Side - Form -->
            <div class="wc-home-contact__form">
                <div class="wc-home-contact__form-card">
                    <?php 
                    // Try to use Contact Form 7 if available
                    if (function_exists('wpcf7_contact_form') && shortcode_exists('contact-form-7')) {
                        echo do_shortcode('[contact-form-7 id="41" html_class="wc-contact-form"]');
                    } else {
                    ?>
                    <div class="wc-form-fallback">
                        <p>Stuur ons een e-mail:</p>
                        <a href="mailto:info@webbiecorn.nl?subject=Project aanvraag via webbiecorn.nl" class="wc-btn wc-btn--primary wc-btn--large">
                            E-mail versturen →
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- FAQ Schema - Structured Data for Google Rich Results -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Hoe lang duurt het bouwen van een website?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Afhankelijk van het pakket en de complexiteit: Landingspagina: 1-3 werkdagen. Bedrijfswebsite (5-10 pagina's): 1-2 weken. Webapplicatie: 3-6 weken. Dit is exclusief wachttijd op jouw feedback en content."
            }
        },
        {
            "@type": "Question",
            "name": "Wat als ik niet tevreden ben?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Elk pakket bevat 2-3 revisierondes om aanpassingen te doen. We stoppen niet tot je 100% tevreden bent! Extra revisies na de inclusieve rondes kosten €50 per ronde."
            }
        },
        {
            "@type": "Question",
            "name": "Moet ik zelf hosting regelen?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Nee, bij elk websitepakket regelen wij de hosting voor je. Dit is altijd inbegrepen: snelle SSD servers in Nederland, gratis SSL-certificaat, dagelijkse backups en 99.9% uptime garantie. Hosting is alleen beschikbaar in combinatie met een websitepakket, niet los af te nemen."
            }
        },
        {
            "@type": "Question",
            "name": "Kan ik later uitbreiden?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absoluut! Alle websites zijn gebouwd met groei in gedachten. Later toevoegen is makkelijk: extra pagina's of secties, blog of nieuws functionaliteit, integraties (CRM, analytics, etc.) en e-commerce uitbreiding."
            }
        },
        {
            "@type": "Question",
            "name": "Waarom geen WordPress pagebuilders?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Pagebuilders zoals Elementor en Divi hebben nadelen: ze zijn traag door veel onnodige code, onveilig door meer plugins, creëren afhankelijkheid, en hebben slechte SEO door opgeblazen HTML. Hand-coded sites zijn sneller, veiliger en scoren beter in Google."
            }
        },
        {
            "@type": "Question",
            "name": "Hoe werkt betaling?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Wij hanteren een transparante betalingsstructuur: Eenmalige projecten: 50% vooraf, 50% bij oplevering. Grote projecten: gefaseerde betaling mogelijk (3 termijnen). Onderhoud/hosting: maandelijks vooruit via automatische incasso. Betalen kan via bankoverschrijving of iDEAL."
            }
        }
    ]
}
</script>

<?php
get_footer();
