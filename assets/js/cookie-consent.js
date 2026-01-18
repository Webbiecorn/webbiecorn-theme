(function() {
    'use strict';
    document.addEventListener('DOMContentLoaded', function() {
        var consent = localStorage.getItem('wc_cookie_consent');
        var banner = document.getElementById('wc-cookie-banner');

        if (!consent && banner) {
            banner.style.display = 'block';
        }

        var acceptButton = document.getElementById('wc-cookie-accept');
        if (acceptButton) {
            acceptButton.addEventListener('click', function() {
                localStorage.setItem('wc_cookie_consent', 'accepted');
                if (banner) {
                    banner.style.display = 'none';
                }
                // Reload to activate GA or other services
                location.reload();
            });
        }

        var declineButton = document.getElementById('wc-cookie-decline');
        if (declineButton) {
            declineButton.addEventListener('click', function() {
                localStorage.setItem('wc_cookie_consent', 'declined');
                if (banner) {
                    banner.style.display = 'none';
                }
            });
        }
    });
})();
