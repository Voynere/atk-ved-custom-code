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

## Сервер

- Хост: `78.24.222.52`
- Путь на сервере: `/var/www/atkvedru/data/www/atk-ved.ru`
- Пользователь: `root`

## Локальная копия

Полная копия сайта лежит локально в этой папке (включая core, uploads и плагины), но git отслеживает только кастомную тему. Остальное игнорируется через `.gitignore`.
