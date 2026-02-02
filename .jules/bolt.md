## 2026-02-02 - Dequeue WooCommerce cart fragments on non-shop pages
**Learning:** The `wc-cart-fragments` script in WooCommerce is a significant performance bottleneck because it triggers an AJAX request (`/?wc-ajax=get_refreshed_fragments`) on every page load, bypassing most caches and forcing a full WordPress boot.
**Action:** Dequeue `wc-cart-fragments` on all pages except shop, product, cart, checkout, and account pages to drastically improve Time to First Byte (TTFB) and reduce server load across the entire site.
