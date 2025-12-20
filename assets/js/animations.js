/**
 * Webbiecorn Global GSAP Animations
 * 
 * Handles all scroll-triggered and interaction animations site-wide.
 * Uses GSAP 3.12.5 with ScrollTrigger (locally hosted, no CDN dependency)
 * 
 * @version 2.2.0
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // =========================================================================
    // GSAP AVAILABILITY CHECK
    // =========================================================================
    
    if (typeof gsap === 'undefined') {
        console.warn('Webbiecorn: GSAP not loaded, using CSS fallbacks');
        document.body.classList.add('no-gsap');
        // Show all elements that would be animated
        document.querySelectorAll('.wc-animate, [data-animate]').forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
        return;
    }
    
    // Register GSAP plugins
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    } else {
        console.warn('Webbiecorn: ScrollTrigger not loaded, scroll animations disabled');
    }
    
    // =========================================================================
    // CONFIGURATION
    // =========================================================================
    
    const isMobile = window.innerWidth <= 768;
    
    const config = {
        // Animation defaults - FAST & SNAPPY
        duration: 0.5,
        ease: 'power2.out',
        staggerAmount: 0.06,
        
        // ScrollTrigger defaults - trigger earlier
        triggerStart: 'top 90%',
        triggerEnd: 'bottom 20%',
        
        // Reduced motion check
        prefersReducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
        
        // Mobile: only fade, no movement
        isMobile: isMobile
    };
    
    // Skip animations if user prefers reduced motion
    if (config.prefersReducedMotion) {
        // Still show elements, just no animation
        document.querySelectorAll('[data-animate], .wc-animate').forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
        console.log('Webbiecorn: Reduced motion preference detected, skipping animations');
        return;
    }
    
    // =========================================================================
    // UTILITY FUNCTIONS
    // =========================================================================
    
    /**
     * Create a scroll-triggered animation for elements
     * On mobile: only fade, no x/y movement
     */
    function animateOnScroll(selector, fromVars, toVars = {}) {
        const elements = gsap.utils.toArray(selector);
        if (elements.length === 0) return;
        
        // Mobile: simplify to fade only
        if (config.isMobile) {
            fromVars = { opacity: 0 };
            toVars = { ...toVars, opacity: 1, x: 0, y: 0, scale: 1 };
        }
        
        elements.forEach((el, i) => {
            gsap.fromTo(el, 
                fromVars,
                {
                    ...toVars,
                    opacity: 1,
                    duration: toVars.duration || config.duration,
                    ease: toVars.ease || config.ease,
                    scrollTrigger: {
                        trigger: el,
                        start: toVars.start || config.triggerStart,
                        once: true,
                        ...toVars.scrollTrigger
                    }
                }
            );
        });
    }
    
    /**
     * Create staggered animation for multiple elements
     * On mobile: only fade, no x/y movement
     */
    function staggerOnScroll(containerSelector, itemSelector, fromVars, toVars = {}) {
        const containers = gsap.utils.toArray(containerSelector);
        if (containers.length === 0) return;
        
        // Mobile: simplify to fade only
        if (config.isMobile) {
            fromVars = { opacity: 0 };
            toVars = { ...toVars, opacity: 1, x: 0, y: 0, scale: 1 };
        }
        
        containers.forEach(container => {
            const items = container.querySelectorAll(itemSelector);
            if (items.length === 0) return;
            
            gsap.fromTo(items,
                fromVars,
                {
                    ...toVars,
                    opacity: 1,
                    duration: toVars.duration || config.duration,
                    ease: toVars.ease || config.ease,
                    stagger: toVars.stagger || config.staggerAmount,
                    scrollTrigger: {
                        trigger: container,
                        start: toVars.start || config.triggerStart,
                        once: true,
                        ...toVars.scrollTrigger
                    }
                }
            );
        });
    }
    
    // =========================================================================
    // FADE IN ANIMATIONS
    // =========================================================================
    
    // Fade in from bottom (most common)
    animateOnScroll('[data-animate="fade-up"]', 
        { opacity: 0, y: 40 },
        { opacity: 1, y: 0 }
    );
    
    // Fade in from left
    animateOnScroll('[data-animate="fade-left"]',
        { opacity: 0, x: -40 },
        { opacity: 1, x: 0 }
    );
    
    // Fade in from right
    animateOnScroll('[data-animate="fade-right"]',
        { opacity: 0, x: 40 },
        { opacity: 1, x: 0 }
    );
    
    // Simple fade in
    animateOnScroll('[data-animate="fade"]',
        { opacity: 0 },
        { opacity: 1 }
    );
    
    // Scale in
    animateOnScroll('[data-animate="scale"]',
        { opacity: 0, scale: 0.9 },
        { opacity: 1, scale: 1 }
    );
    
    // =========================================================================
    // PORTFOLIO PAGE SPECIFIC ANIMATIONS
    // =========================================================================
    
    // Portfolio hero elements
    animateOnScroll('[data-animate="badge"]',
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, duration: 0.4 }
    );
    
    animateOnScroll('[data-animate="title"]',
        { opacity: 0, y: 30 },
        { opacity: 1, y: 0, duration: 0.5 }
    );
    
    animateOnScroll('[data-animate="subtitle"]',
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, duration: 0.4 }
    );
    
    animateOnScroll('[data-animate="stats"]',
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, duration: 0.5 }
    );
    
    animateOnScroll('[data-animate="scroll"]',
        { opacity: 0 },
        { opacity: 1, duration: 0.6, delay: 0.3 }
    );
    
    // Teaser intro
    animateOnScroll('[data-animate="teaser-intro"]',
        { opacity: 0, y: 30 },
        { opacity: 1, y: 0, duration: 0.5 }
    );
    
    // Category headers
    animateOnScroll('[data-animate="category"]',
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, duration: 0.4 }
    );
    
    // Teaser cards - staggered
    const teaserGrids = document.querySelectorAll('.wc-teaser-grid');
    teaserGrids.forEach(grid => {
        const cards = grid.querySelectorAll('[data-animate="teaser"]');
        if (cards.length === 0) return;
        
        const fromVars = config.isMobile ? { opacity: 0 } : { opacity: 0, y: 40 };
        
        gsap.fromTo(cards, 
            fromVars,
            {
                opacity: 1,
                y: 0,
                duration: 0.5,
                stagger: 0.1,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: grid,
                    start: 'top 85%',
                    once: true
                }
            }
        );
    });
    
    // =========================================================================
    // SECTION ANIMATIONS
    // =========================================================================
    
    // Section headers - badge, title, subtitle - FAST
    // Exclude elements that are inside a data-animate container (to prevent double animation)
    staggerOnScroll('.wc-section-header:not([data-animate]), .wc-services-v2__header:not([data-animate])', '.wc-section-badge, .wc-section-title, .wc-section-subtitle, .wc-section-text, .wc-kicker, .wc-services-v2__title, .wc-services-v2__subtitle',
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, stagger: 0.06, duration: 0.35 }
    );
    
    // Hero sections - FAST intro (exclude hero-v3 which has its own animation)
    const heroSections = document.querySelectorAll('.wc-hero:not(.wc-hero-v3), .wc-page-hero, .wc-portfolio-hero');
    heroSections.forEach(hero => {
        // Skip if this is hero-v3
        if (hero.classList.contains('wc-hero-v3')) return;
        
        const tl = gsap.timeline({ defaults: { ease: 'power2.out' }});
        
        const badge = hero.querySelector('.wc-section-badge, .wc-hero-badge, .wc-hero__kicker, [data-animate="badge"]');
        const title = hero.querySelector('h1:not(.wc-hero-v3__title), .wc-hero-title, .wc-hero__title, [data-animate="title"]');
        const subtitle = hero.querySelector('.wc-hero-subtitle, .wc-hero-text, .wc-hero__subtitle, [data-animate="subtitle"]');
        const buttons = hero.querySelector('.wc-hero__buttons, .wc-btn, .wc-cta');
        const visual = hero.querySelector('.wc-hero__visual, .wc-hero__lottie');
        const stats = hero.querySelector('[data-animate="stats"]');
        
        if (badge) tl.from(badge, { opacity: 0, y: 15, duration: 0.3 });
        if (title) tl.from(title, { opacity: 0, y: 20, duration: 0.4 }, '-=0.15');
        if (subtitle) tl.from(subtitle, { opacity: 0, y: 15, duration: 0.35 }, '-=0.2');
        if (stats) tl.from(stats, { opacity: 0, y: 15, duration: 0.35 }, '-=0.15');
        if (buttons) tl.from(buttons, { opacity: 0, y: 15, duration: 0.3 }, '-=0.15');
        if (visual) tl.from(visual, { opacity: 0, scale: 0.95, duration: 0.5 }, '-=0.2');
    });
    
    // =========================================================================
    // CARD ANIMATIONS
    // =========================================================================
    
    // Staggered cards in grids - FAST
    staggerOnScroll('.wc-grid, .wc-cards, [class*="grid"]:not(.wc-bento-grid)', '.wc-card, [class*="card"]',
        { opacity: 0, y: 25 },
        { opacity: 1, y: 0, stagger: 0.05, duration: 0.4 }
    );
    
    // Portfolio items - SNAPPY
    staggerOnScroll('.wc-portfolio-grid, .wc-home-portfolio__grid', '.wc-portfolio-item, .wc-home-portfolio__item',
        { opacity: 0, y: 30 },
        { opacity: 1, y: 0, stagger: 0.08, duration: 0.45 }
    );
    
    // Bento grid items - QUICK cascade
    staggerOnScroll('.wc-bento-grid', '.wc-bento-card',
        { opacity: 0, y: 20 },
        { opacity: 1, y: 0, stagger: 0.04, duration: 0.35 }
    );
    
    // =========================================================================
    // STAT/COUNTER ANIMATIONS
    // =========================================================================
    
    // Stats section - numbers count up effect
    const statNumbers = document.querySelectorAll('.wc-stat-number, [class*="stat"] .number');
    statNumbers.forEach(stat => {
        const target = parseInt(stat.textContent.replace(/\D/g, ''), 10);
        if (isNaN(target)) return;
        
        const suffix = stat.textContent.replace(/[0-9]/g, '');
        
        gsap.from(stat, {
            textContent: 0,
            duration: 2,
            ease: 'power2.out',
            snap: { textContent: 1 },
            scrollTrigger: {
                trigger: stat,
                start: 'top 85%',
                once: true
            },
            onUpdate: function() {
                stat.textContent = Math.round(this.targets()[0].textContent) + suffix;
            }
        });
    });
    
    // =========================================================================
    // IMAGE ANIMATIONS
    // =========================================================================
    
    // Images reveal with clip-path
    animateOnScroll('[data-animate="reveal"]',
        { clipPath: 'inset(0 100% 0 0)' },
        { clipPath: 'inset(0 0% 0 0)', duration: 1, ease: 'power4.inOut' }
    );
    
    // Image zoom on scroll
    const zoomImages = document.querySelectorAll('[data-animate="zoom"]');
    zoomImages.forEach(img => {
        gsap.to(img, {
            scale: 1.1,
            scrollTrigger: {
                trigger: img,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1
            }
        });
    });
    
    // =========================================================================
    // PARALLAX EFFECTS
    // =========================================================================
    
    // Simple parallax for backgrounds
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    parallaxElements.forEach(el => {
        const speed = parseFloat(el.dataset.parallax) || 0.2;
        
        gsap.to(el, {
            y: () => window.innerHeight * speed,
            ease: 'none',
            scrollTrigger: {
                trigger: el.parentElement || el,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true
            }
        });
    });
    
    // Floating elements
    const floaters = document.querySelectorAll('.wc-floater, [class*="float"]');
    floaters.forEach((el, i) => {
        gsap.to(el, {
            y: -30 - (i * 10),
            ease: 'none',
            scrollTrigger: {
                trigger: el.parentElement || el,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1
            }
        });
    });
    
    // =========================================================================
    // LINE/DIVIDER ANIMATIONS
    // =========================================================================
    
    // Horizontal lines expand
    animateOnScroll('.wc-divider, hr, [class*="divider"]',
        { scaleX: 0, transformOrigin: 'left center' },
        { scaleX: 1, duration: 1, ease: 'power2.out' }
    );
    
    // =========================================================================
    // HOVER ANIMATIONS (CSS fallback for no-JS)
    // =========================================================================
    
    // Card hover lift
    const hoverCards = document.querySelectorAll('.wc-card, .wc-portfolio-item, [class*="card"]');
    hoverCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, { y: -8, duration: 0.3, ease: 'power2.out' });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, { y: 0, duration: 0.3, ease: 'power2.out' });
        });
    });
    
    // Button hover scale
    const buttons = document.querySelectorAll('.wc-btn, [class*="btn"]:not(.wc-nav__link)');
    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            gsap.to(btn, { scale: 1.02, duration: 0.2, ease: 'power2.out' });
        });
        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, { scale: 1, duration: 0.2, ease: 'power2.out' });
        });
    });
    
    // =========================================================================
    // MARQUEE / SCROLLING TEXT
    // =========================================================================
    
    const marquees = document.querySelectorAll('.wc-marquee');
    marquees.forEach(marquee => {
        const content = marquee.querySelector('.wc-marquee__content');
        if (!content) return;
        
        // Clone content for seamless loop
        const clone = content.cloneNode(true);
        marquee.appendChild(clone);
        
        const speed = parseFloat(marquee.dataset.speed) || 20;
        const direction = marquee.dataset.direction === 'right' ? 1 : -1;
        
        gsap.to([content, clone], {
            x: direction * -100 + '%',
            ease: 'none',
            duration: speed,
            repeat: -1
        });
    });
    
    // =========================================================================
    // TEXT ANIMATIONS
    // =========================================================================
    
    // Split text animation (word by word) - without SplitText plugin
    const splitTexts = document.querySelectorAll('[data-animate="split"]');
    splitTexts.forEach(el => {
        const text = el.textContent;
        const words = text.split(' ');
        el.innerHTML = words.map(word => `<span class="wc-word" style="display:inline-block">${word}</span>`).join(' ');
        
        const wordSpans = el.querySelectorAll('.wc-word');
        gsap.from(wordSpans, {
            opacity: 0,
            y: 20,
            stagger: 0.05,
            duration: 0.5,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                once: true
            }
        });
    });
    
    // Typewriter effect
    const typewriters = document.querySelectorAll('[data-animate="typewriter"]');
    typewriters.forEach(el => {
        const text = el.textContent;
        el.textContent = '';
        
        gsap.to(el, {
            duration: text.length * 0.05,
            text: { value: text },
            ease: 'none',
            scrollTrigger: {
                trigger: el,
                start: 'top 85%',
                once: true
            }
        });
    });
    
    // =========================================================================
    // PAGE TRANSITIONS
    // =========================================================================
    
    // Fade in page on load
    gsap.from('body', {
        opacity: 0,
        duration: 0.5,
        ease: 'power2.out'
    });
    
    // =========================================================================
    // SCROLL PROGRESS INDICATOR
    // =========================================================================
    
    const progressBar = document.querySelector('.wc-scroll-progress');
    if (progressBar) {
        gsap.to(progressBar, {
            scaleX: 1,
            transformOrigin: 'left center',
            ease: 'none',
            scrollTrigger: {
                trigger: document.body,
                start: 'top top',
                end: 'bottom bottom',
                scrub: 0.3
            }
        });
    }
    
    // =========================================================================
    // REFRESH ON RESIZE
    // =========================================================================
    
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            ScrollTrigger.refresh();
        }, 250);
    });
    
    // =========================================================================
    // HERO V3 - ROTATING WORDS
    // =========================================================================
    
    function initRotatingWords() {
        const rotatingContainer = document.querySelector('.wc-hero-v3__rotating-word');
        if (!rotatingContainer) return;
        
        const words = rotatingContainer.querySelectorAll('.wc-hero-v3__word');
        if (words.length === 0) return;
        
        let currentIndex = 0;
        const intervalTime = 2500; // Change word every 2.5 seconds
        
        // Set first word as active
        words[0].classList.add('active');
        
        function rotateWords() {
            // Remove active from current word
            words[currentIndex].classList.remove('active');
            
            // Move to next word
            currentIndex = (currentIndex + 1) % words.length;
            
            // Add active to new word
            words[currentIndex].classList.add('active');
        }
        
        // Start rotation after a delay (to let intro animation play)
        setTimeout(() => {
            setInterval(rotateWords, intervalTime);
        }, 1500);
    }
    
    initRotatingWords();
    
    console.log('Webbiecorn: GSAP Animations initialized ✨');
    
});
