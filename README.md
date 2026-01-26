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

## Quality checks
PHP lint:
```bash
php -l functions.php
php -l inc/*.php
php -l template-parts/*.php
php -l page-*.php
```

## Asset Management

### CSS Bundling

To improve performance, common CSS files are bundled into a single file at `assets/css/bundle.css`. If you modify any of the following base CSS files, you must regenerate the bundle:

- `assets/css/base.css`
- `assets/css/header.css`
- `assets/css/buttons.css`
- `assets/css/footer.css`
- `assets/css/animations.css`
- `assets/css/responsive.css`
- `assets/css/cookie-consent.css`

To regenerate the bundle, run the following script from the theme root:

```bash
./scripts/bundle-css.sh
```

## Deploy
See `DEPLOY.md` (centrale deploy-handleiding, incl. SSH key-based deploy en `Host webbiecorn`).

## Security
- Never commit passwords/API keys/private keys.
- Keep editor configs out of Git (`.vscode/` is ignored).
- Do not embed GitHub tokens in `git remote` URLs; use SSH or a credential manager.
