# Custom code scope

## Included in the repository

- `wp-content/themes/atk-ved-theme/`

## Explicitly excluded

- WordPress core: `wp-admin/`, `wp-includes/`, root `wp-*.php`
- third-party plugins: `wordpress-seo`, `wp-super-cache`
- environment-specific files: `wp-config.php`, `.htaccess`
- uploads, caches, language packs, backups, logs
- generated artifacts: `llms.txt`, search-engine verification HTML files
- default theme: `twentytwentyfive`

## Notes

If custom plugins are added later, whitelist them in `.gitignore` and extend the deploy workflow to sync those directories explicitly.
