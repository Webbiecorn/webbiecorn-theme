<?php
/**
 * 404 Error Page Template
 *
 * @package Webbiecorn_Starter
 */

get_header();
?>

<style>
.wc-404 {
    min-height: calc(100vh - 200px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 4rem 2rem;
    background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
    position: relative;
    overflow: hidden;
}

.wc-404::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 80%;
    height: 150%;
    background: radial-gradient(circle, rgba(227, 6, 19, 0.15) 0%, transparent 60%);
    pointer-events: none;
}

.wc-404__container {
    max-width: 600px;
    text-align: center;
    position: relative;
    z-index: 1;
}

.wc-404__code {
    font-size: clamp(6rem, 20vw, 12rem);
    font-weight: 800;
    background: linear-gradient(135deg, #E30613 0%, #ff6b6b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 1rem;
}

.wc-404__title {
    font-size: clamp(1.5rem, 4vw, 2rem);
    font-weight: 700;
    color: #fff;
    margin-bottom: 1rem;
}

.wc-404__text {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.7;
    margin-bottom: 2rem;
}

.wc-404__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}

.wc-404__btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.875rem 1.75rem;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.wc-404__btn--primary {
    background: #E30613;
    color: #fff;
}

.wc-404__btn--primary:hover {
    background: #c70511;
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(227, 6, 19, 0.3);
}

.wc-404__btn--secondary {
    background: #1a1a2e;
    color: #fff;
}

.wc-404__btn--secondary:hover {
    background: #2d2d4a;
    transform: translateY(-2px);
}

.wc-404__illustration {
    margin-bottom: 2rem;
}

.wc-404__illustration svg {
    width: 200px;
    height: 200px;
    color: #E30613;
}

.wc-404__links {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.wc-404__links-title {
    font-size: 1rem;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 1rem;
}

.wc-404__links-list {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
    list-style: none;
    padding: 0;
    margin: 0;
}

.wc-404__links-list a {
    color: #ff6b6b;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s ease;
}

.wc-404__links-list a:hover {
    color: #E30613;
    text-decoration: underline;
}
</style>

<section class="wc-404">
    <div class="wc-404__container">
        <div class="wc-404__illustration">
            <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="100" r="80" stroke="currentColor" stroke-width="4" stroke-dasharray="10 5" opacity="0.3"/>
                <path d="M70 80 L90 100 L70 120" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M130 80 L110 100 L130 120" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="100" cy="140" r="8" fill="currentColor"/>
            </svg>
        </div>
        
        <div class="wc-404__code">404</div>
        
        <h1 class="wc-404__title">Oeps! Pagina niet gevonden</h1>
        
        <p class="wc-404__text">
            De pagina die je zoekt bestaat niet of is verplaatst. 
            Geen zorgen — we helpen je graag terug op weg!
        </p>
        
        <div class="wc-404__actions">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="wc-404__btn wc-404__btn--primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                Naar homepage
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="wc-404__btn wc-404__btn--secondary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                Contact
            </a>
        </div>
        
        <div class="wc-404__links">
            <p class="wc-404__links-title">Misschien zoek je dit:</p>
            <ul class="wc-404__links-list">
                <li><a href="<?php echo esc_url(home_url('/diensten/')); ?>">Diensten</a></li>
                <li><a href="<?php echo esc_url(home_url('/portfolio/')); ?>">Portfolio</a></li>
                <li><a href="<?php echo esc_url(home_url('/webdesign/')); ?>">Webdesign</a></li>
                <li><a href="<?php echo esc_url(home_url('/over-ons/')); ?>">Over ons</a></li>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();
