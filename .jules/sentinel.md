## 2025-05-22 - Security Headers via send_headers
**Vulnerability:** Lack of basic security headers (Clickjacking, MIME-sniffing, etc.)
**Learning:** In this WordPress theme architecture, the `inc/cleanup.php` file is the designated location for security hardening. Headers should be added using the `send_headers` action to ensure they are sent as early as possible.
**Prevention:** Always implement defense-in-depth headers (X-Frame-Options, X-Content-Type-Options, etc.) using the `send_headers` hook in `inc/cleanup.php`.
