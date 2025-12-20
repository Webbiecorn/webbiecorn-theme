<?php
/**
 * Template Name: Portfolio
 * 
 * Complete redesign met GSAP animaties
 * @package Webbiecorn_Starter
 */

get_header();
?>

<!-- Page-wide background -->
<div class="wc-portfolio-page">
    <!-- Single unified background canvas -->
    <canvas id="bgCanvas" class="wc-portfolio-bg"></canvas>

<!-- ========================================
     EPIC PORTFOLIO HERO
     ======================================== -->
<section class="wc-portfolio-hero">
    
    <!-- Hero Content -->
    <div class="wc-container wc-portfolio-hero__content">
        <div class="wc-portfolio-hero__badge" data-animate="badge">
            <span class="wc-portfolio-hero__badge-dot"></span>
            Ons Werk
        </div>
        
        <h1 class="wc-portfolio-hero__title" data-animate="title">
            <span class="wc-split-line">Projecten die</span>
            <span class="wc-split-line wc-split-line--accent">indruk maken</span>
        </h1>
        
        <p class="wc-portfolio-hero__subtitle" data-animate="subtitle">
            Van concept tot lancering — elk project is een verhaal van innovatie, 
            creativiteit en technische excellentie.
        </p>
        
        <!-- Animated Stats in Hero -->
        <div class="wc-portfolio-hero__stats" data-animate="stats">
            <div class="wc-hero-stat">
                <span class="wc-hero-stat__number" data-count="17">0</span>
                <span class="wc-hero-stat__label">Projecten</span>
            </div>
            <div class="wc-hero-stat__divider"></div>
            <div class="wc-hero-stat">
                <span class="wc-hero-stat__number" data-count="100">0</span>
                <span class="wc-hero-stat__suffix">%</span>
                <span class="wc-hero-stat__label">Maatwerk</span>
            </div>
            <div class="wc-hero-stat__divider"></div>
            <div class="wc-hero-stat">
                <span class="wc-hero-stat__number" data-count="24">0</span>
                <span class="wc-hero-stat__suffix">h</span>
                <span class="wc-hero-stat__label">Reactietijd</span>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="wc-portfolio-hero__scroll" data-animate="scroll">
            <span>Scroll om te ontdekken</span>
            <div class="wc-scroll-indicator">
                <div class="wc-scroll-indicator__dot"></div>
            </div>
        </div>
    </div>
</section>


<!-- ========================================
     PORTFOLIO COMING SOON - PROJECT TEASERS
     ======================================== -->
<section class="wc-portfolio-teaser-section">
    <div class="wc-container">
        
        <!-- Section Intro -->
        <div class="wc-teaser-intro" data-animate="teaser-intro">
            <span class="wc-section-badge">✨ Ons Werk</span>
            <h2 class="wc-section-title">Projecten in de Spotlight</h2>
            <p class="wc-section-subtitle">Een greep uit onze projecten. Uitgebreide case studies volgen binnenkort!</p>
        </div>
        
        <!-- ====== APPS CATEGORY ====== -->
        <div class="wc-teaser-category" data-animate="category">
            <div class="wc-teaser-category__header">
                <span class="wc-teaser-category__icon">🧠</span>
                <h3 class="wc-teaser-category__title">Apps & Webapps</h3>
            </div>
            <div class="wc-teaser-grid wc-teaser-grid--apps">
                
                <!-- Buurtconciërge -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🏘️</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Buurtconciërge</h4>
                        <p class="wc-teaser-card__desc">Complete webapp voor wijkbeheer. Bewoners melden, beheerders behandelen.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>Firebase</span><span>TypeScript</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- Buurtmeldingen -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">📍</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Buurtmeldingen</h4>
                        <p class="wc-teaser-card__desc">Meldingenportaal voor gemeente & wijkbeheer met interactieve kaart.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>Maps API</span><span>Tailwind</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- Kluswinkel -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🔧</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Kluswinkel</h4>
                        <p class="wc-teaser-card__desc">Klusjessysteem met planning, beheer en klantenoverzicht.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>Node.js</span><span>PostgreSQL</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
            </div>
        </div>
        
        <!-- ====== WEBSITES CATEGORY ====== -->
        <div class="wc-teaser-category" data-animate="category">
            <div class="wc-teaser-category__header">
                <span class="wc-teaser-category__icon">🌐</span>
                <h3 class="wc-teaser-category__title">Websites</h3>
            </div>
            <div class="wc-teaser-grid wc-teaser-grid--websites">
                
                <!-- Webbiecorn -->
                <article class="wc-teaser-card" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-logo-red.png" alt="Webbiecorn Logo" class="wc-teaser-card__logo">
                        </div>
                        <div class="wc-teaser-card__badge wc-teaser-card__badge--live">Live</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Webbiecorn</h4>
                        <p class="wc-teaser-card__desc">Onze eigen agency website. Custom WordPress thema met alle toeters en bellen.</p>
                        <div class="wc-teaser-card__tags">
                            <span>WordPress</span><span>PHP</span><span>GSAP</span>
                        </div>
                        <a href="https://webbiecorn.nl" target="_blank" class="wc-teaser-card__cta wc-teaser-card__cta--live">Bekijk project <span class="wc-teaser-card__cta-icon">→</span></a>
                    </div>
                </article>
                
                <!-- Gifteez -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🎁</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Gifteez</h4>
                        <p class="wc-teaser-card__desc">Affiliate cadeauplatform met AI-suggesties voor gepersonaliseerde cadeaus.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>Firebase</span><span>AI</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- Gardeneez -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🌱</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Gardeneez</h4>
                        <p class="wc-teaser-card__desc">Tuinplanning platform met slimme suggesties en seizoensadvies.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>Firebase</span><span>AI</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- MyGuiltyPleasure -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🍿</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">MyGuiltyPleasure</h4>
                        <p class="wc-teaser-card__desc">Entertainment discovery platform met persoonlijke aanbevelingen.</p>
                        <div class="wc-teaser-card__tags">
                            <span>Next.js</span><span>API</span><span>Tailwind</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
            </div>
        </div>
        
        <!-- ====== TOOLS CATEGORY ====== -->
        <div class="wc-teaser-category" data-animate="category">
            <div class="wc-teaser-category__header">
                <span class="wc-teaser-category__icon">🛠️</span>
                <h3 class="wc-teaser-category__title">Tools & Dashboards</h3>
            </div>
            <div class="wc-teaser-grid wc-teaser-grid--tools">
                
                <!-- Planningboard -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">📋</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Planningboard</h4>
                        <p class="wc-teaser-card__desc">Drag & drop planningsysteem voor teams en projecten.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>DnD</span><span>Firebase</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- Urenregistratie -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">⏱️</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Urenregistratie</h4>
                        <p class="wc-teaser-card__desc">Tijdtracking voor medewerkers met rapportages en exports.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>Charts</span><span>PDF</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- Meldingenmodule -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🔔</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Meldingenmodule</h4>
                        <p class="wc-teaser-card__desc">Meldingen- en ticketsysteem met status tracking.</p>
                        <div class="wc-teaser-card__tags">
                            <span>React</span><span>Real-time</span><span>Notifications</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- OCR Tool -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">📄</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">OCR Scanner</h4>
                        <p class="wc-teaser-card__desc">Document scanner met AI-tekstherkenning en data extractie.</p>
                        <div class="wc-teaser-card__tags">
                            <span>Python</span><span>Tesseract</span><span>AI</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
            </div>
        </div>
        
        <!-- ====== EXPERIMENTS CATEGORY ====== -->
        <div class="wc-teaser-category" data-animate="category">
            <div class="wc-teaser-category__header">
                <span class="wc-teaser-category__icon">🧪</span>
                <h3 class="wc-teaser-category__title">Experimenten</h3>
            </div>
            <div class="wc-teaser-grid wc-teaser-grid--experiments">
                
                <!-- WebbieWalletSnifferBot -->
                <article class="wc-teaser-card wc-teaser-card--experiment" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🔍</span>
                        </div>
                        <div class="wc-teaser-card__badge wc-teaser-card__badge--experiment">Experiment</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">WebbieWalletSnifferBot</h4>
                        <p class="wc-teaser-card__desc">Telegram bot die crypto wallets monitort en alerts stuurt.</p>
                        <div class="wc-teaser-card__tags">
                            <span>Python</span><span>Telegram</span><span>Web3</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- WebbieWalletTrackerBot -->
                <article class="wc-teaser-card wc-teaser-card--experiment" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">📊</span>
                        </div>
                        <div class="wc-teaser-card__badge wc-teaser-card__badge--experiment">Experiment</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">WebbieWalletTrackerBot</h4>
                        <p class="wc-teaser-card__desc">Portfolio tracker bot met real-time updates en P&L tracking.</p>
                        <div class="wc-teaser-card__tags">
                            <span>Python</span><span>Telegram</span><span>API</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- AI Tools -->
                <article class="wc-teaser-card wc-teaser-card--experiment" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🤖</span>
                        </div>
                        <div class="wc-teaser-card__badge wc-teaser-card__badge--experiment">Experiment</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">AI Automation Tools</h4>
                        <p class="wc-teaser-card__desc">Diverse AI-experimenten voor automatisering en content creatie.</p>
                        <div class="wc-teaser-card__tags">
                            <span>OpenAI</span><span>Python</span><span>Automation</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
            </div>
        </div>
        
        <!-- ====== DESIGN CATEGORY ====== -->
        <div class="wc-teaser-category" data-animate="category">
            <div class="wc-teaser-category__header">
                <span class="wc-teaser-category__icon">🎨</span>
                <h3 class="wc-teaser-category__title">Design & Branding</h3>
            </div>
            <div class="wc-teaser-grid wc-teaser-grid--design">
                
                <!-- Mascots -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">🦄</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Mascot Designs</h4>
                        <p class="wc-teaser-card__desc">Custom mascots en karakterontwerpen voor merken en projecten.</p>
                        <div class="wc-teaser-card__tags">
                            <span>Illustratie</span><span>AI</span><span>Branding</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- UI Experiments -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">✨</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">UI Experiments</h4>
                        <p class="wc-teaser-card__desc">Micro-interacties, animaties en visuele experimenten.</p>
                        <div class="wc-teaser-card__tags">
                            <span>CSS</span><span>GSAP</span><span>Motion</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
                <!-- Social Media Assets -->
                <article class="wc-teaser-card wc-teaser-card--coming-soon" data-animate="teaser">
                    <div class="wc-teaser-card__visual">
                        <div class="wc-teaser-card__placeholder">
                            <span class="wc-teaser-card__emoji">📱</span>
                        </div>
                        <div class="wc-teaser-card__badge">Coming Soon</div>
                    </div>
                    <div class="wc-teaser-card__content">
                        <h4 class="wc-teaser-card__title">Social Media Assets</h4>
                        <p class="wc-teaser-card__desc">Templates en content voor Pinterest, Instagram en meer.</p>
                        <div class="wc-teaser-card__tags">
                            <span>Canva</span><span>Figma</span><span>AI</span>
                        </div>
                        <span class="wc-teaser-card__cta">Bekijk binnenkort <span class="wc-teaser-card__cta-icon">→</span></span>
                    </div>
                </article>
                
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="wc-teaser-cta" data-animate="cta">
            <div class="wc-teaser-cta__content">
                <h3 class="wc-teaser-cta__title">🚀 Jouw project hier?</h3>
                <p class="wc-teaser-cta__desc">Laten we samen iets bijzonders bouwen dat indruk maakt.</p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="wc-btn wc-btn--primary wc-btn--glow">
                    Start een project
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        
    </div>
</section>


<!-- ========================================
     TECH STACK - ORBIT ANIMATION
     ======================================== -->
<section class="wc-tech-section">
    <div class="wc-container">
        <div class="wc-tech-header" data-animate="tech-header">
            <span class="wc-section-badge">🛠️ Onze Stack</span>
            <h2 class="wc-section-title">Technologieën die we gebruiken</h2>
            <p class="wc-section-subtitle">Modern, betrouwbaar, en schaalbaar</p>
        </div>
        
        <div class="wc-tech-orbit" data-animate="orbit">
            <!-- Center Logo -->
            <div class="wc-tech-orbit__center">
                <img src="https://webbiecorn.nl/wp-content/uploads/2025/12/webbiecorn-logo-red.png" alt="Webbiecorn" class="wc-tech-orbit__logo">
            </div>
            
            <!-- Orbit Ring 1 -->
            <div class="wc-tech-orbit__ring wc-tech-orbit__ring--1">
                <div class="wc-tech-orbit__item" style="--angle: 0deg;">
                    <span class="wc-tech-icon">⚛️</span>
                    <span class="wc-tech-label">React</span>
                </div>
                <div class="wc-tech-orbit__item" style="--angle: 90deg;">
                    <span class="wc-tech-icon">🔥</span>
                    <span class="wc-tech-label">Firebase</span>
                </div>
                <div class="wc-tech-orbit__item" style="--angle: 180deg;">
                    <span class="wc-tech-icon">📘</span>
                    <span class="wc-tech-label">TypeScript</span>
                </div>
                <div class="wc-tech-orbit__item" style="--angle: 270deg;">
                    <span class="wc-tech-icon">🎨</span>
                    <span class="wc-tech-label">Tailwind</span>
                </div>
            </div>
            
            <!-- Orbit Ring 2 -->
            <div class="wc-tech-orbit__ring wc-tech-orbit__ring--2">
                <div class="wc-tech-orbit__item" style="--angle: 45deg;">
                    <span class="wc-tech-icon">🌐</span>
                    <span class="wc-tech-label">WordPress</span>
                </div>
                <div class="wc-tech-orbit__item" style="--angle: 135deg;">
                    <span class="wc-tech-icon">▲</span>
                    <span class="wc-tech-label">Next.js</span>
                </div>
                <div class="wc-tech-orbit__item" style="--angle: 225deg;">
                    <span class="wc-tech-icon">🎭</span>
                    <span class="wc-tech-label">Figma</span>
                </div>
                <div class="wc-tech-orbit__item" style="--angle: 315deg;">
                    <span class="wc-tech-icon">🤖</span>
                    <span class="wc-tech-label">AI Tools</span>
                </div>
            </div>
        </div>
        
        <!-- Mobile: Simple Grid -->
        <div class="wc-tech-grid-mobile">
            <div class="wc-tech-grid-item"><span>⚛️</span> React</div>
            <div class="wc-tech-grid-item"><span>🔥</span> Firebase</div>
            <div class="wc-tech-grid-item"><span>📘</span> TypeScript</div>
            <div class="wc-tech-grid-item"><span>🎨</span> Tailwind</div>
            <div class="wc-tech-grid-item"><span>🌐</span> WordPress</div>
            <div class="wc-tech-grid-item"><span>▲</span> Next.js</div>
            <div class="wc-tech-grid-item"><span>🎭</span> Figma</div>
            <div class="wc-tech-grid-item"><span>🤖</span> AI Tools</div>
        </div>
    </div>
</section>

<!-- ========================================
     FINAL CTA
     ======================================== -->
<section class="wc-portfolio-cta">
    <div class="wc-portfolio-cta__bg"></div>
    <div class="wc-container">
        <div class="wc-portfolio-cta__content" data-animate="cta">
            <span class="wc-portfolio-cta__badge">Klaar om te starten?</span>
            <h2 class="wc-portfolio-cta__title">Laten we iets <span>geweldigs</span> bouwen</h2>
            <p class="wc-portfolio-cta__text">
                Van idee tot lancering — we begeleiden je bij elke stap.
            </p>
            <div class="wc-portfolio-cta__buttons">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="wc-btn wc-btn--primary wc-btn--large wc-btn--glow">
                    Neem Contact Op
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="<?php echo esc_url(home_url('/webdesign/')); ?>" class="wc-btn wc-btn--outline wc-btn--large">
                    Bekijk Pakketten
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     SIMPLIFIED ANIMATIONS
     ======================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);
    
    // ========================================
    // HERO ANIMATIONS - SIMPLIFIED
    // ========================================
    const heroTl = gsap.timeline({ defaults: { ease: 'power2.out' }});
    
    // Simple fade in sequence
    heroTl
        .from('[data-animate="badge"]', { opacity: 0, y: 20, duration: 0.6 })
        .from('.wc-split-line', { opacity: 0, y: 30, duration: 0.8, stagger: 0.15 }, '-=0.3')
        .from('[data-animate="subtitle"]', { opacity: 0, y: 20, duration: 0.6 }, '-=0.4')
        .from('.wc-hero-stat', { opacity: 0, y: 20, duration: 0.5, stagger: 0.1 }, '-=0.3')
        .from('[data-animate="scroll"]', { opacity: 0, duration: 0.5 }, '-=0.2');
    
    // Count-up animation for numbers (on scroll into view)
    document.querySelectorAll('[data-count]').forEach(el => {
        const target = parseInt(el.dataset.count);
        gsap.to(el, {
            innerText: target,
            duration: 1.5,
            snap: { innerText: 1 },
            ease: 'power1.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 80%',
                once: true
            }
        });
    });
    
    // ========================================
    // TEASER SECTION - SIMPLE FADE IN
    // ========================================
    const teaserIntro = document.querySelector('.wc-teaser-intro');
    if (teaserIntro) {
        gsap.from(teaserIntro, {
            opacity: 0,
            y: 30,
            duration: 0.8,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: teaserIntro,
                start: 'top 80%',
                once: true
            }
        });
    }
    
    // Category headers and cards - simple fade in
    document.querySelectorAll('.wc-teaser-category').forEach((category) => {
        const header = category.querySelector('.wc-teaser-category__header');
        const cards = category.querySelectorAll('.wc-teaser-card');
        
        if (header) {
            gsap.from(header, {
                opacity: 0,
                y: 20,
                duration: 0.6,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: header,
                    start: 'top 80%',
                    once: true
                }
            });
        }
        
        if (cards.length) {
            gsap.from(cards, {
                opacity: 0,
                y: 30,
                duration: 0.6,
                stagger: 0.1,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: cards[0],
                    start: 'top 80%',
                    once: true
                }
            });
        }
    });
    
    // ========================================
    // FILTER BUTTONS - SIMPLE FADE IN
    // ========================================
    gsap.from('.wc-filter-btn', {
        opacity: 0,
        y: 20,
        duration: 0.5,
        stagger: 0.08,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.wc-portfolio-filter-wrap',
            start: 'top 80%',
            once: true
        }
    });
    
    // ========================================
    // PROJECT CARDS - SIMPLE REVEAL
    // ========================================
    const cards = document.querySelectorAll('.wc-project-card');
    
    gsap.from(cards, {
        opacity: 0,
        y: 40,
        duration: 0.6,
        stagger: 0.12,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.wc-portfolio-grid-new',
            start: 'top 75%',
            once: true
        }
    });
    
    // ========================================
    // FILTER FUNCTIONALITY
    // ========================================
    const filterBtns = document.querySelectorAll('.wc-filter-btn');
    const projectCards = document.querySelectorAll('.wc-project-card[data-category]');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active state
            filterBtns.forEach(b => b.classList.remove('wc-filter-btn--active'));
            this.classList.add('wc-filter-btn--active');
            
            // Simple filter without animation for better performance
            projectCards.forEach(card => {
                const shouldShow = filter === 'all' || card.dataset.category === filter;
                card.style.display = shouldShow ? 'block' : 'none';
            });
        });
    });
    
    // ========================================
    // TECH SECTION - SIMPLE FADE IN
    // ========================================
    gsap.from('.wc-tech-header', {
        opacity: 0,
        y: 30,
        duration: 0.6,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.wc-tech-section',
            start: 'top 80%',
            once: true
        }
    });
    
    gsap.from('.wc-tech-orbit', {
        opacity: 0,
        scale: 0.95,
        duration: 0.8,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.wc-tech-orbit',
            start: 'top 80%',
            once: true
        }
    });
    
    // Slow orbit rotation (optional - keep it simple)
    gsap.to('.wc-tech-orbit__ring--1', {
        rotation: 360,
        duration: 80,
        repeat: -1,
        ease: 'none'
    });
    
    gsap.to('.wc-tech-orbit__ring--2', {
        rotation: -360,
        duration: 100,
        repeat: -1,
        ease: 'none'
    });
    
    // Counter-rotate items to keep them upright
    document.querySelectorAll('.wc-tech-orbit__ring--1 .wc-tech-orbit__item').forEach(item => {
        gsap.to(item, {
            rotation: -360,
            duration: 80,
            repeat: -1,
            ease: 'none'
        });
    });
    
    document.querySelectorAll('.wc-tech-orbit__ring--2 .wc-tech-orbit__item').forEach(item => {
        gsap.to(item, {
            rotation: 360,
            duration: 100,
            repeat: -1,
            ease: 'none'
        });
    });
    
    // ========================================
    // CTA - SIMPLE FADE IN
    // ========================================
    gsap.from('.wc-portfolio-cta__content > *', {
        opacity: 0,
        y: 30,
        duration: 0.6,
        stagger: 0.1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.wc-portfolio-cta',
            start: 'top 80%',
            once: true
        }
    });
    
    // ========================================
    // UNIFIED BACKGROUND CANVAS
    // ========================================
    const bgCanvas = document.getElementById('bgCanvas');
    if (bgCanvas) {
        const ctx = bgCanvas.getContext('2d');
        let animationId;
        let time = 0;
        let scrollY = 0;
        
        // Track scroll position
        window.addEventListener('scroll', () => {
            scrollY = window.pageYOffset;
        });
        
        // Resize canvas to full page height
        function resizeCanvas() {
            bgCanvas.width = window.innerWidth;
            bgCanvas.height = Math.max(
                document.documentElement.scrollHeight,
                window.innerHeight * 3
            );
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);
        
        // Smooth noise function
        function noise(x, y, t) {
            return Math.sin(x * 0.01 + t) * Math.cos(y * 0.008 + t * 0.5) * 
                   Math.sin((x + y) * 0.005 + t * 0.3);
        }
        
        // Floating orbs data
        const orbs = [
            { x: 0.15, y: 0.1, size: 300, color: [227, 6, 19], speed: 0.3 },
            { x: 0.85, y: 0.25, size: 250, color: [124, 77, 255], speed: 0.25 },
            { x: 0.5, y: 0.45, size: 200, color: [227, 6, 19], speed: 0.35 },
            { x: 0.2, y: 0.6, size: 180, color: [0, 180, 150], speed: 0.28 },
            { x: 0.8, y: 0.75, size: 220, color: [124, 77, 255], speed: 0.32 },
            { x: 0.4, y: 0.9, size: 280, color: [227, 6, 19], speed: 0.22 }
        ];
        
        // Flowing lines data
        const lines = [];
        for (let i = 0; i < 8; i++) {
            lines.push({
                startY: i * 0.15,
                amplitude: 30 + Math.random() * 40,
                frequency: 0.002 + Math.random() * 0.002,
                speed: 0.3 + Math.random() * 0.4,
                opacity: 0.08 + Math.random() * 0.12,
                offset: Math.random() * Math.PI * 2
            });
        }
        
        // Small floating particles
        const particles = [];
        for (let i = 0; i < 60; i++) {
            particles.push({
                x: Math.random(),
                y: Math.random(),
                size: 1 + Math.random() * 2,
                speedX: (Math.random() - 0.5) * 0.0003,
                speedY: (Math.random() - 0.5) * 0.0002,
                opacity: 0.2 + Math.random() * 0.4,
                color: Math.random() > 0.6 ? [227, 6, 19] : (Math.random() > 0.5 ? [124, 77, 255] : [0, 180, 150])
            });
        }
        
        function draw() {
            ctx.clearRect(0, 0, bgCanvas.width, bgCanvas.height);
            
            // Dark gradient base
            const bgGradient = ctx.createLinearGradient(0, 0, 0, bgCanvas.height);
            bgGradient.addColorStop(0, '#0a0a12');
            bgGradient.addColorStop(0.3, '#0f0f1a');
            bgGradient.addColorStop(0.6, '#0a0a12');
            bgGradient.addColorStop(1, '#08080f');
            ctx.fillStyle = bgGradient;
            ctx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);
            
            // Draw floating orbs with glow
            orbs.forEach((orb, i) => {
                const wobbleX = Math.sin(time * orb.speed + i) * 30;
                const wobbleY = Math.cos(time * orb.speed * 0.7 + i * 2) * 20;
                const x = orb.x * bgCanvas.width + wobbleX;
                const y = orb.y * bgCanvas.height + wobbleY;
                const pulseSize = orb.size + Math.sin(time * 0.5 + i) * 20;
                
                const gradient = ctx.createRadialGradient(x, y, 0, x, y, pulseSize);
                gradient.addColorStop(0, `rgba(${orb.color[0]}, ${orb.color[1]}, ${orb.color[2]}, 0.15)`);
                gradient.addColorStop(0.5, `rgba(${orb.color[0]}, ${orb.color[1]}, ${orb.color[2]}, 0.05)`);
                gradient.addColorStop(1, `rgba(${orb.color[0]}, ${orb.color[1]}, ${orb.color[2]}, 0)`);
                
                ctx.fillStyle = gradient;
                ctx.beginPath();
                ctx.arc(x, y, pulseSize, 0, Math.PI * 2);
                ctx.fill();
            });
            
            // Draw flowing horizontal lines
            lines.forEach((line, i) => {
                ctx.beginPath();
                ctx.strokeStyle = `rgba(227, 6, 19, ${line.opacity})`;
                ctx.lineWidth = 1;
                
                const baseY = line.startY * bgCanvas.height;
                
                for (let x = 0; x <= bgCanvas.width; x += 3) {
                    const waveY = Math.sin(x * line.frequency + time * line.speed + line.offset) * line.amplitude;
                    const noiseY = noise(x, baseY, time * 0.5) * 15;
                    const y = baseY + waveY + noiseY;
                    
                    if (x === 0) {
                        ctx.moveTo(x, y);
                    } else {
                        ctx.lineTo(x, y);
                    }
                }
                ctx.stroke();
            });
            
            // Draw particles
            particles.forEach(p => {
                // Update position
                p.x += p.speedX;
                p.y += p.speedY;
                
                // Wrap around
                if (p.x < 0) p.x = 1;
                if (p.x > 1) p.x = 0;
                if (p.y < 0) p.y = 1;
                if (p.y > 1) p.y = 0;
                
                const px = p.x * bgCanvas.width;
                const py = p.y * bgCanvas.height;
                const pulseOpacity = p.opacity * (0.7 + Math.sin(time * 2 + p.x * 10) * 0.3);
                
                ctx.beginPath();
                ctx.arc(px, py, p.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(${p.color[0]}, ${p.color[1]}, ${p.color[2]}, ${pulseOpacity})`;
                ctx.fill();
            });
            
            // Draw connection lines between close particles
            ctx.strokeStyle = 'rgba(227, 6, 19, 0.06)';
            ctx.lineWidth = 0.5;
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = (particles[i].x - particles[j].x) * bgCanvas.width;
                    const dy = (particles[i].y - particles[j].y) * bgCanvas.height;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    
                    if (dist < 120) {
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x * bgCanvas.width, particles[i].y * bgCanvas.height);
                        ctx.lineTo(particles[j].x * bgCanvas.width, particles[j].y * bgCanvas.height);
                        ctx.globalAlpha = (1 - dist / 120) * 0.3;
                        ctx.stroke();
                        ctx.globalAlpha = 1;
                    }
                }
            }
            
            time += 0.008;
            animationId = requestAnimationFrame(draw);
        }
        
        draw();
        
        // Performance: reduce frame rate when tab not visible
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                cancelAnimationFrame(animationId);
                animationId = null;
            } else {
                if (!animationId) draw();
            }
        });
    }
    
});
</script>

</div><!-- .wc-portfolio-page -->

<?php get_footer(); ?>
