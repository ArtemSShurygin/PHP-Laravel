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

## Урок 9. Работа с событиями

Создаем событие NewsHidden:
```
php artisan make:event NewsHidden
```

Создаем слушатель NewsHiddenListener:
```
php artisan make:listener NewsHiddenListener --event=NewsHidden
```

Создаем класс-наблюдатель NewsObserve:
```
php artisan make:observer NewsObserver --model=News
```


## Урок 10. Встроенные возможности Laravel

Создаем миграцию для очереди в БД:
```
php artisan queue:table

php artisan migrate
```

В файле .env прописываем:
>QUEUE_CONNECTION=database

Создаем задание, которое будет выполняться в очереди:
```
php artisan make:job ClearCache
```

Запускаем обработчик очереди:
```
php artisan queue:listen
```

Единоразовое выполнение всех задач в планировщике:
```
php artisan schedule:run
```

Запуск планировщика:
```
php artisan schedule:work
```


## Урок 11. Реализация авторизации
Установка библиотеки Laravel Breez:
```
composer require laravel/breeze
```

Установка файлов библиотеки:
```
php artisan breeze:install
```

Собрать фронтенд проекта:
```
npm install && npm run dev
```

Создание политики:
```
php artisan make:policy UserPolicy --model=User
```

## Урок 12. Интеграция с внешними сервисами

Подключение клиент мессенджера Telegram:
```
composer require irazasyed/telegram-bot-sdk
```

Публикацмя файлов пакета (выбрать telegram-config):
```
php artisan vendor:publish
```

Проверка работоспособности бота по токену:
```
https://api.telegram.org/bot<token>/getUpdates
```

Создание письма Welcome.php:
```
php artisan make:mail Welcome
```

## Урок 13. Тестирование и отладка Laravel-приложений

Создать класс-фабрику для сущности Product:
```
php artisan make:factory ProductFactory

```

Создать класс-наполнитель для сущности Product:
```
php artisan make:seeder ProductsSeeder
```

Наполнение базы данных сгенерированными данными:
```
php artisan db:seed
```

Создать тест:
```
php artisan make:test Products/ProductTest
```

Запустить выполнение тестов:
```
php artisan test
```


## Урок 14. Создание администраторской панели

Установить voyager командой:
```
composer require tcg/voyager
```

Установить voyager внутри вашего приложения командой:
```
php artisan voyager:install
```

Создать администратора вашего приложения:
```
php artisan voyager:admin admin@mail.com --create
```