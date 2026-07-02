# ATK-VED Custom Code

Репозиторий кастомного кода сайта [atk-ved.ru](https://atk-ved.ru). Модель такая же, как у [ferma-dv-custom-code](https://github.com/Voynere/ferma-dv-custom-code): в git попадает только то, что мы разрабатываем сами.

## Что в репозитории

- `wp-content/themes/atk-ved-theme/` — тема сайта

## Что не в репозитории

- WordPress core (`wp-admin/`, `wp-includes/`, корневые `wp-*.php`)
- сторонние плагины (`wordpress-seo`, `wp-super-cache`)
- uploads, кэш, языковые пакеты, бэкапы, логи
- чувствительные файлы: `wp-config.php`, `.htaccess`
- сгенерированные и служебные файлы: `llms.txt`, файлы верификации поисковиков
- **`seov/`** — локальная SEO-база, RAG, планы и клиентский отчёт (см. `seov/README.md`)

## Сервер

- Хост: `78.24.222.52`
- Путь на сервере: `/var/www/atkvedru/data/www/atk-ved.ru`
- Пользователь: `root`

## Локальная копия

Полная копия сайта лежит локально в этой папке (включая core, uploads и плагины), но git отслеживает только кастомную тему. Остальное игнорируется через `.gitignore`.

## Деплой

GitHub Actions при пуше в `main` (или вручную через workflow_dispatch) заливает только `wp-content/themes/atk-ved-theme/` на сервер через rsync.

Required GitHub secrets:

- `SERVER_HOST` — `78.24.222.52`
- `SERVER_USER` — `root`
- `SERVER_PORT` — `22`
- `SERVER_SSH_KEY` — приватный SSH-ключ с доступом к серверу
- `SERVER_PATH` — `/var/www/atkvedru/data/www/atk-ved.ru`

Перед деплоем делается бэкап темы в `/tmp/atk-ved-deploy-backups/`, после — сброс WP Super Cache и прогрев главных страниц.
