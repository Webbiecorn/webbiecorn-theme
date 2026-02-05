## 2025-05-15 - Optimizing WooCommerce AJAX Overhead
**Learning:** The `wc-cart-fragments` script triggers an AJAX request (`?wc-ajax=get_refreshed_fragments`) on every page load to update cart totals. This bypasses most server-side caches and significantly bottlenecks performance (TTFB) even on non-shop pages.
**Action:** Conditionally dequeue `wc-cart-fragments` and other WooCommerce assets on non-shop/cart/checkout/account pages to eliminate this overhead. Always check `class_exists('WooCommerce')` before using WooCommerce conditional tags.
