## 2025-05-14 - Selective Asset Loading in WordPress
**Learning:** In a performance-focused WordPress theme, the default enqueuing of heavy plugin assets (like WooCommerce) and core styles (like Block Library) on every page is a major bottleneck. Conditionally dequeueing these based on the page context can significantly reduce the initial payload and HTTP requests.
**Action:** Always check for redundant assets being loaded by plugins or core on the front page and other non-essential pages. Use `wp_dequeue_style` and `wp_dequeue_script` in a high-priority `wp_enqueue_scripts` hook.
