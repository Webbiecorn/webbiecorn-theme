<?php
/**
 * Footer Template
 *
 * @package Webbiecorn_Starter
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
</main>

<footer class="wc-footer">
    <div class="wc-container">
        <div class="wc-footer__inner">
            <!-- Brand Column -->
            <div class="wc-footer__brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="wc-footer__logo">
                    <img src="<?php echo esc_url(home_url('/wp-content/uploads/2025/12/webbiecorn-logo-red.png')); ?>" alt="" class="wc-footer__logo-img">
                    <span class="wc-footer__logo-text">WEBBIECORN</span>
                </a>
                <p class="wc-footer__description">
                    Technische webstudio voor maatwerk websites, branding en digitale groei. Hand-coded, geen templates.
                </p>
                
                <!-- Social Links -->
                <div class="wc-footer__social">
                    <a href="https://linkedin.com/company/webbiecorn" class="wc-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="https://instagram.com/webbiecorn" class="wc-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://x.com/webbiecorn" class="wc-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Diensten Links -->
            <div class="wc-footer__column">
                <h4 class="wc-footer__heading">Diensten</h4>
                <ul class="wc-footer__links">
                    <li><a href="/webdesign/" class="wc-footer__link">Webdesign</a></li>
                    <li><a href="/branding/" class="wc-footer__link">Branding</a></li>
                    <li><a href="/seo-analyse/" class="wc-footer__link">SEO & Analyse</a></li>
                    <li><a href="/onderhoud/" class="wc-footer__link">Onderhoud</a></li>
                </ul>
            </div>

            <!-- Webbiecorn Links -->
            <div class="wc-footer__column">
                <h4 class="wc-footer__heading">Webbiecorn</h4>
                <ul class="wc-footer__links">
                    <li><a href="/over-ons/" class="wc-footer__link">Over ons</a></li>
                    <li><a href="/portfolio/" class="wc-footer__link">Portfolio</a></li>
                    <li><a href="/diensten/" class="wc-footer__link">Alle diensten</a></li>
                    <li><a href="/contact/" class="wc-footer__link">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="wc-footer__column">
                <h4 class="wc-footer__heading">Contact</h4>
                <ul class="wc-footer__links wc-footer__contact">
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <a href="mailto:info@webbiecorn.nl" class="wc-footer__link">info@webbiecorn.nl</a>
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>Nederland</span>
                    </li>
                    <li style="margin-top: 1rem;">
                        <a href="/contact/" class="wc-btn wc-btn--primary wc-btn--small">
                            Project starten
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="wc-footer__bottom">
            <p class="wc-footer__copyright">
                &copy; <?php echo date('Y'); ?> Webbiecorn. Alle rechten voorbehouden.
            </p>
            <div class="wc-footer__legal">
                <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="wc-footer__legal-link">Privacybeleid</a>
                <span class="wc-footer__legal-sep">•</span>
                <a href="<?php echo esc_url(home_url('/voorwaarden')); ?>" class="wc-footer__legal-link">Algemene voorwaarden</a>
            </div>
        </div>
    </div>
</footer>

<!-- GSAP is loaded locally via functions.php -->

<!-- Cookie Consent Banner -->
<div id="wc-cookie-banner" class="wc-cookie-banner" style="display: none;">
    <div class="wc-cookie-banner__content">
        <p class="wc-cookie-banner__text">
            🍪 Wij gebruiken cookies om je ervaring te verbeteren en onze website te analyseren. 
            <a href="<?php echo esc_url(home_url('/privacy')); ?>">Meer info</a>
        </p>
        <div class="wc-cookie-banner__buttons">
            <button id="wc-cookie-decline" class="wc-cookie-btn wc-cookie-btn--decline">Weigeren</button>
            <button id="wc-cookie-accept" class="wc-cookie-btn wc-cookie-btn--accept">Accepteren</button>
        </div>
    </div>
</div>

<script>
(function() {
    var consent = localStorage.getItem('wc_cookie_consent');
    var banner = document.getElementById('wc-cookie-banner');
    
    if (!consent && banner) {
        banner.style.display = 'block';
    }
    
    document.getElementById('wc-cookie-accept')?.addEventListener('click', function() {
        localStorage.setItem('wc_cookie_consent', 'accepted');
        banner.style.display = 'none';
        // Reload to activate GA
        location.reload();
    });
    
    document.getElementById('wc-cookie-decline')?.addEventListener('click', function() {
        localStorage.setItem('wc_cookie_consent', 'declined');
        banner.style.display = 'none';
    });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
