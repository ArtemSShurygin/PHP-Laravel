```
docker compose up --build
```

### Работа в php-cli
Заходим в контейнер с php-cli:
>docker compose exec php-cli bash

Установка Laravel:
```
composer create-project laravel/laravel example-app
```

Меняем доступ к папке "storage/":
```
chmod 777 -R storage/
```