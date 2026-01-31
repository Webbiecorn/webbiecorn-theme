## 2025-12-11 - Asset Cleanup Strategy
**Learning:** Dequeuing `wc-cart-fragments` is a high-impact performance win in WordPress/WooCommerce environments because it prevents a blocking AJAX request (`/?wc-ajax=get_refreshed_fragments`) that otherwise runs on every page load.
**Action:** Always check for `wc-cart-fragments` when optimizing WooCommerce-enabled sites that don't display a mini-cart on every page.
