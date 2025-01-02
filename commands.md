# Продвинутое программирование на PHP — Laravel
Начальная страница:
>http://localhost:8080

phpMyAdmin:
>http://localhost:8081

Разворачивам проект:
```
docker compose up --build
```


## hw1 Введение, установка и первичная настройка
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

## hw2 Контроллеры, экшены и роутинг
Создаем контроллер:
```
php artisan make:controller FormProcessor
```

## hw3 Работа с базами данных. ORM-система Eloquent
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
