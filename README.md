# Webbiecorn Starter V2 (WordPress theme)

Custom WordPress theme for https://webbiecorn.nl.

## Structure
- `functions.php` loads modules from `inc/`
- `inc/` contains setup/enqueue/schema/helpers/etc.
- `template-parts/` contains reusable UI parts (e.g. `hero.php`, `cta-footer.php`)
- `assets/` contains CSS/JS

## Local development
This repo lives inside a WordPress install (typically under `wp-content/themes/webbiecorn-starter-v2/`).
Activate the theme in WP Admin.

### CSS Asset Management (⚡ Performance by Bolt)
To improve performance, this theme uses a smart bundling strategy for its CSS assets. Instead of loading many small files, we bundle them into a few, optimized files. This reduces HTTP requests while avoiding loading unnecessary CSS on pages that don't need it.

The strategy includes:
- **A common bundle:** `bundle-common.css` contains styles used across the entire site (header, footer, buttons, etc.).
- **Page-specific bundles:** Files like `bundle-front-page.css`, `bundle-portfolio.css`, `bundle-services.css`, and `bundle-pages.css` contain styles needed only for those specific sections, ensuring no unnecessary CSS is loaded.

**Important:** After making any changes to a `.css` file in `assets/css/`, you must regenerate all the bundles by running the following command from the repository root:
```bash
./assets/build-css.sh
```
This ensures your changes are included in the final stylesheets. Do not edit the `bundle-*.css` files directly, as your changes will be overwritten.

## Quality checks
PHP lint:
```bash
php -l functions.php
php -l inc/*.php
php -l template-parts/*.php
php -l page-*.php
```

## Deploy
See `DEPLOY.md` (centrale deploy-handleiding, incl. SSH key-based deploy en `Host webbiecorn`).

## Security
- Never commit passwords/API keys/private keys.
- Keep editor configs out of Git (`.vscode/` is ignored).
- Do not embed GitHub tokens in `git remote` URLs; use SSH or a credential manager.
