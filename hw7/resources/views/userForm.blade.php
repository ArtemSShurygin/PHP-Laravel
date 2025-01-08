<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ url('/store-user') }}">
        @csrf
        <div class="form">
            <div class="form__item">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form__item">
                <label for="surname">Surname</label>
                <input type="text" name="surname" id="surname">
            </div>
            <div class="form__item">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <button type="submit" class="userForm__button">Отправить</button>
        </div>

    </form>
</body>
