/**
 * Portfolio V2 - Scroll Animations
 * Uses Intersection Observer for performant scroll-based animations
 * CSS handles the actual animations, JS just triggers them
 * 
 * @version 2.2.0
 */

(function() {
    'use strict';
    
    // Mark elements as waiting for intersection
    const animatedElements = document.querySelectorAll('.pf-card, .pf-skill-group, .pf-coming__content');
    
    animatedElements.forEach(el => {
        el.classList.add('waiting');
    });
    
    // Check if IntersectionObserver is supported
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('waiting');
                    entry.target.classList.add('in-view');
                    // Unobserve after animation triggers
                    observer.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            rootMargin: '0px 0px -50px 0px',
            threshold: 0.1
        });
        
        animatedElements.forEach(el => {
            observer.observe(el);
        });
    } else {
        // Fallback: just show all elements
        animatedElements.forEach(el => {
            el.classList.remove('waiting');
            el.classList.add('in-view');
        });
    }
    
    // =========================================
    // Optional: GSAP enhancement if available
    // =========================================
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        // Hero stats counter animation
        gsap.utils.toArray('.pf-stat__number').forEach(stat => {
            const text = stat.textContent;
            const hasPlus = text.includes('+');
            const hasPercent = text.includes('%');
            const hasLessThan = text.includes('<');
            const hasSuffix = text.replace(/[0-9<+%]/g, '');
            const number = parseInt(text.replace(/[^0-9]/g, ''), 10);
            
            if (!isNaN(number)) {
                const prefix = hasLessThan ? '<' : '';
                const suffix = (hasPlus ? '+' : '') + (hasPercent ? '%' : '') + hasSuffix;
                
                gsap.from(stat, {
                    textContent: 0,
                    duration: 1.5,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: stat,
                        start: 'top 80%',
                        once: true
                    },
                    snap: { textContent: 1 },
                    onUpdate: function() {
                        stat.textContent = prefix + Math.round(this.targets()[0].textContent) + suffix;
                    }
                });
            }
        });
        
        // Subtle parallax on hero orb
        gsap.to('.pf-hero__orb', {
            y: 100,
            ease: 'none',
            scrollTrigger: {
                trigger: '.pf-hero',
                start: 'top top',
                end: 'bottom top',
                scrub: 1
            }
        });
    }
})();
