# prom_site

Сайт каталога профессиональной пиротехники на PHP 8.3 и MySQL 8.

## Локальный запуск

```bash
docker compose up --build -d
```

Открыть http://localhost:8080/. База создаётся из `database/prof.sql`, затем применяется миграция `database/migrations/20261019_catalog_numeric.sql`. Для повторного запуска с чистой БД: `docker compose down -v` и `docker compose up --build -d`.

## Развёртывание

Нужен PHP 8.3+ с расширениями `pdo_mysql` и `gd` (GD используется для ускоренной выдачи изображений в формате WebP). Документный корень — корень репозитория; Apache должен применять `.htaccess`. Для Nginx необходимо явно запретить доступ к каталогам `include/`, `database/`, `tests/` и `.github/` и к скрытым файлам.

Задать переменные окружения `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, `DB_PASSWORD`. Не использовать учётную запись MySQL `root`.

Существующей базе однократно применить миграцию:

```bash
mysql -u prom_site -p prof < database/migrations/20261019_catalog_numeric.sql
```

Перед миграцией сделать резервную копию. Миграция переводит `price` и `diameter` в числовой формат; проверить данные, если они отличаются от исходного дампа.

Вся публичная навигация продолжает поддерживать `/?cat=...`, `page`, `calibr` и `short`.

## Проверка

```bash
find . -name '*.php' -print0 | xargs -0 -n1 php -l
php tests/catalog_test.php
```

Скрипт `image.php` отдаёт исходный PNG или кешированный WebP, если PHP поддерживает GD. Кеш WebP сохраняется во временном каталоге сервера, оригиналы не меняются.
