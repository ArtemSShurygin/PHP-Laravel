```
docker compose up --build
```

### Работа в php-cli
Заходим в контейнер с php-cli:
>docker compose exec php-cli bash

Обновляем конфиг после его изменения:
```
php artisan config:clear
```

Создаем модель:
```
php artisan make:model Employee
```

Создаем файл миграции:
```
php artisan make:migration create_employees_table

php artisan make:migration employees_add_first_name
```

Выполнение миграций:
```
php artisan migrate
```