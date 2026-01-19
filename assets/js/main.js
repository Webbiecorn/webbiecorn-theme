/**
 * Webbiecorn Starter - Main JavaScript
 *
 * @package Webbiecorn_Starter
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initHeader();
        initMobileMenu();
        initScrollAnimations();
        initSmoothScroll();
        initExpandableCards();
        initAboutAnimation();
        initFaqAccordion();
    });

    /**
     * Header scroll effect
     */
    function initHeader() {
        const header = document.getElementById('header');
        if (!header) return;

        let lastScroll = 0;
        const scrollThreshold = 50;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            // Add/remove scrolled class
            if (currentScroll > scrollThreshold) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        }, { passive: true });
    }

    /**
     * Mobile menu toggle
     */
    function initMobileMenu() {
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (!menuToggle) return;

        menuToggle.addEventListener('click', function() {
            const isOpen = menuToggle.classList.toggle('active');
            if (mobileMenu) {
                if (isOpen) {
                    mobileMenu.style.display = 'flex';
                    setTimeout(() => mobileMenu.classList.add('active'), 10);
                } else {
                    mobileMenu.classList.remove('active');
                    setTimeout(() => mobileMenu.style.display = 'none', 400);
                }
            }
            document.body.classList.toggle('menu-open');
            this.setAttribute('aria-expanded', isOpen);
        });

        // Mobile submenu toggle
        if (mobileMenu) {
            const subMenuParents = mobileMenu.querySelectorAll('.wc-mobile-menu__item--has-sub');
            subMenuParents.forEach(function(parent) {
                const parentLink = parent.querySelector('.wc-mobile-menu__link--parent');
                if (parentLink) {
                    parentLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        parent.classList.toggle('open');
                    });
                }
            });
        }

        // Close menu when clicking on a link (but not parent links)
        if (mobileMenu) {
            const mobileLinks = mobileMenu.querySelectorAll('.wc-mobile-menu__link:not(.wc-mobile-menu__link--parent)');
            mobileLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    menuToggle.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    setTimeout(() => mobileMenu.style.display = 'none', 400);
                    document.body.classList.remove('menu-open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                });
            });
        }

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && document.body.classList.contains('menu-open')) {
                menuToggle.classList.remove('active');
                if (mobileMenu) {
                    mobileMenu.classList.remove('active');
                }
                document.body.classList.remove('menu-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /**
     * Scroll animations using Intersection Observer
     */
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('.wc-animate');
        
        if (!animatedElements.length) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -20px 0px',
            threshold: 0.05
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animatedElements.forEach(function(element, index) {
            // Minimal stagger delay - max 0.15s total
            const delay = Math.min(index * 0.03, 0.15);
            element.style.transitionDelay = delay + 's';
            observer.observe(element);
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (!targetElement) return;
                
                e.preventDefault();
                
                const headerHeight = document.getElementById('header')?.offsetHeight || 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    /**
     * Contact form handler (basic - you might want to add AJAX)
     */
    function initContactForm() {
        const form = document.querySelector('.wc-contact-form');
        if (!form) return;

        form.addEventListener('submit', function(e) {
            // Add your form handling logic here
            // For now, it will submit normally
            // You could add AJAX submission, validation, etc.
        });
    }

    /**
     * Expandable Service Cards with GSAP
     */
    function initExpandableCards() {
        const expandCards = document.querySelectorAll('.wc-expand-card:not(.wc-expand-card--cta)');
        
        if (!expandCards.length) return;
        
        expandCards.forEach(function(card) {
            const header = card.querySelector('.wc-expand-card__header');
            const content = card.querySelector('.wc-expand-card__content');
            
            if (!header || !content) return;
            
            header.addEventListener('click', function() {
                const isActive = card.classList.contains('active');
                
                // Close all other cards first
                expandCards.forEach(function(otherCard) {
                    if (otherCard !== card && otherCard.classList.contains('active')) {
                        otherCard.classList.remove('active');
                        const otherContent = otherCard.querySelector('.wc-expand-card__content');
                        if (otherContent && typeof gsap !== 'undefined') {
                            gsap.to(otherContent, {
                                maxHeight: 0,
                                duration: 0.4,
                                ease: 'power2.inOut'
                            });
                        }
                    }
                });
                
                // Toggle current card
                if (isActive) {
                    card.classList.remove('active');
                    if (typeof gsap !== 'undefined') {
                        gsap.to(content, {
                            maxHeight: 0,
                            duration: 0.4,
                            ease: 'power2.inOut'
                        });
                    }
                } else {
                    card.classList.add('active');
                    if (typeof gsap !== 'undefined') {
                        // Get natural height
                        content.style.maxHeight = 'none';
                        const naturalHeight = content.scrollHeight;
                        content.style.maxHeight = '0px';
                        
                        gsap.to(content, {
                            maxHeight: naturalHeight,
                            duration: 0.5,
                            ease: 'power2.out'
                        });
                    }
                }
            });
        });
        
        // Staggered entrance animation on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -50px 0px',
            threshold: 0.1
        };
        
        let hasAnimated = false;
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    
                    const allCards = document.querySelectorAll('.wc-expand-card');
                    
                    if (typeof gsap !== 'undefined') {
                        gsap.fromTo(allCards, 
                            {
                                opacity: 0,
                                y: 40
                            },
                            {
                                opacity: 1,
                                y: 0,
                                duration: 0.6,
                                stagger: 0.1,
                                ease: 'power2.out'
                            }
                        );
                    }
                    
                    observer.disconnect();
                }
            });
        }, observerOptions);
        
        const expandGrid = document.querySelector('.wc-expand-grid');
        if (expandGrid) {
            observer.observe(expandGrid);
        }
    }

    /**
     * About Section - Logo zoom + Glow text animation + Particles + Matrix
     */
    function initAboutAnimation() {
        const aboutVisual = document.getElementById('aboutVisual');
        const aboutLogo = document.getElementById('aboutLogo');
        const aboutGlowText = document.getElementById('aboutGlowText');
        const particlesContainer = document.getElementById('aboutParticles');
        const matrixCanvas = document.getElementById('matrixCanvas');
        
        if (!aboutVisual || !aboutLogo || !aboutGlowText) return;
        
        // Create particles
        if (particlesContainer) {
            createParticles(particlesContainer, 30);
        }
        
        // Initialize Matrix rain
        if (matrixCanvas) {
            initMatrixRain(matrixCanvas, aboutVisual);
        }
        
        let hasAnimated = false;
        
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -100px 0px',
            threshold: 0.3
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    
                    if (typeof gsap !== 'undefined') {
                        // Create timeline for sequenced animation
                        const tl = gsap.timeline();
                        
                        // Tech icons fade in first
                        const techIcons = document.querySelectorAll('.wc-about__tech-icon');
                        tl.to(techIcons, {
                            opacity: 0.7,
                            duration: 0.5,
                            stagger: 0.1,
                            ease: 'power2.out'
                        });
                        
                        // Logo: fade in + scale from small to large (zoom effect)
                        tl.to(aboutLogo, {
                            opacity: 1,
                            scale: 1,
                            duration: 1.5,
                            ease: 'power2.out'
                        }, '-=0.3');
                        
                        // Then text fades in with slight delay
                        tl.to(aboutGlowText, {
                            opacity: 1,
                            y: 0,
                            duration: 1,
                            ease: 'power2.out'
                        }, '-=0.5');
                        
                        // Initial state for text
                        gsap.set(aboutGlowText, { y: 20 });
                    } else {
                        // Fallback without GSAP
                        aboutLogo.style.opacity = '1';
                        aboutLogo.style.transform = 'scale(1)';
                        aboutGlowText.style.opacity = '1';
                    }
                    
                    observer.disconnect();
                }
            });
        }, observerOptions);
        
        observer.observe(aboutVisual);
    }
    
    /**
     * Create floating particles
     */
    function createParticles(container, count) {
        for (let i = 0; i < count; i++) {
            const particle = document.createElement('div');
            particle.className = 'wc-about__particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 8 + 's';
            particle.style.animationDuration = (5 + Math.random() * 5) + 's';
            
            // Random sizes
            const size = 2 + Math.random() * 4;
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            
            // Random colors (red shades)
            const opacity = 0.3 + Math.random() * 0.5;
            particle.style.background = `rgba(227, 6, 19, ${opacity})`;
            
            container.appendChild(particle);
        }
    }
    
    /**
     * Matrix Rain Effect - Lazily Initialized for Performance
     * ⚡ Performance Optimization: The expensive setup for the matrix rain (canvas context,
     * character arrays, resizing) is deferred until the very first time the user hovers
     * over the container. This improves initial page load time and reduces memory usage
     * for users who never interact with this specific animation.
     */
    function initMatrixRain(canvas, container) {
        container.addEventListener('mouseenter', function() {
            const ctx = canvas.getContext('2d');
            
            function resizeCanvas() {
                canvas.width = container.offsetWidth;
                canvas.height = container.offsetHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);
            
            const chars = '01<>/{}[]();:="\'HTML CSS JS PHP WP CODE DIV CLASS FUNCTION VAR CONST LET IMPORT EXPORT';
            const charArray = chars.split('');
            const fontSize = 14;
            const columns = canvas.width / fontSize;

            const drops = [];
            for (let i = 0; i < columns; i++) {
                drops[i] = Math.random() * -100;
            }
            
            let animationId = null;

            function draw() {
                ctx.fillStyle = 'rgba(10, 10, 10, 0.05)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.fillStyle = '#E30613';
                ctx.font = fontSize + 'px monospace';

                for (let i = 0; i < drops.length; i++) {
                    const char = charArray[Math.floor(Math.random() * charArray.length)];
                    ctx.fillText(char, i * fontSize, drops[i] * fontSize);
                    if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                        drops[i] = 0;
                    }
                    drops[i]++;
                }
                animationId = requestAnimationFrame(draw);
            }

            // Start drawing immediately on first hover
            ctx.fillStyle = 'rgba(10, 10, 10, 1)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            draw();

            container.addEventListener('mouseleave', function() {
                if (animationId) {
                    cancelAnimationFrame(animationId);
                    animationId = null;
                }
                // Clear canvas on mouse leave
                ctx.clearRect(0, 0, canvas.width, canvas.height);
            });

            // Re-start animation on subsequent hovers without re-initializing
            container.addEventListener('mouseenter', function() {
                if (!animationId) {
                    ctx.fillStyle = 'rgba(10, 10, 10, 1)';
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                    draw();
                }
            });

        }, { once: true }); // Crucial for lazy initialization: runs only once.
    }

    /**
     * FAQ Accordion with GSAP
     */
    function initFaqAccordion() {
        const faqItems = document.querySelectorAll('.wc-faq-modern__item');
        
        if (!faqItems.length) return;
        
        faqItems.forEach(function(item) {
            const question = item.querySelector('.wc-faq-modern__question');
            const answer = item.querySelector('.wc-faq-modern__answer');
            
            if (!question || !answer) return;
            
            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');
                
                // Close all other items
                faqItems.forEach(function(otherItem) {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.wc-faq-modern__answer');
                        const otherQuestion = otherItem.querySelector('.wc-faq-modern__question');
                        
                        if (otherAnswer && typeof gsap !== 'undefined') {
                            gsap.to(otherAnswer, {
                                maxHeight: 0,
                                duration: 0.4,
                                ease: 'power2.inOut'
                            });
                        }
                        
                        if (otherQuestion) {
                            otherQuestion.setAttribute('aria-expanded', 'false');
                        }
                    }
                });
                
                // Toggle current item
                if (isActive) {
                    item.classList.remove('active');
                    question.setAttribute('aria-expanded', 'false');
                    
                    if (typeof gsap !== 'undefined') {
                        gsap.to(answer, {
                            maxHeight: 0,
                            duration: 0.4,
                            ease: 'power2.inOut'
                        });
                    }
                } else {
                    item.classList.add('active');
                    question.setAttribute('aria-expanded', 'true');
                    
                    if (typeof gsap !== 'undefined') {
                        // Get natural height
                        answer.style.maxHeight = 'none';
                        const naturalHeight = answer.scrollHeight;
                        answer.style.maxHeight = '0px';
                        
                        gsap.to(answer, {
                            maxHeight: naturalHeight,
                            duration: 0.5,
                            ease: 'power2.out'
                        });
                    }
                }
            });
        });
    }

})();
