```
docker compose up --build
```

### Работа в php-cli
Заходим в контейнер с php-cli:
>docker compose exec php-cli bash

Создаем контроллер:
```
php artisan make:controller FormProcessor
```
