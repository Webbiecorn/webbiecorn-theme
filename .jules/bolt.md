## 2025-05-22 - WooCommerce AJAX Optimization
**Learning:** The `wc-cart-fragments` script in WooCommerce triggers a `/?wc-ajax=get_refreshed_fragments` request on every single page load by default. This is a non-cacheable AJAX request that can significantly increase server load and slow down Time to First Byte (TTFB).
**Action:** Always dequeue `wc-cart-fragments` on pages where a real-time cart update in the header is not critical, or on all non-shop/cart/checkout pages if the theme doesn't feature a global AJAX-dependent cart icon.
