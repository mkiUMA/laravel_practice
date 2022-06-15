# Laravel_db課題

### Dockerを起動

```=bash
docker-compose up -d
```
### laravelインストール

```=bash
docker compose exec app composer create-project --prefer-dist laravel/laravel project
```

### .envの書き換え

html\project\.envのDBの値を変更する

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=password


## DB作成

### DB接続確認

```=bash
docker compose exec -w /var/www/html/project app php artisan migrate
```

```
docker compose exec -w /var/www/html/project app php artisan migrate:fresh