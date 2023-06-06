<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Тестове завдання</title>
</head>
<body>
    <main>
        <div class="success" id="success"></div>
        <form method="post" id="form">
            <div class="errors" id="errors"></div>
            <label for="name">Ім'я</label>
            <input type="text" name="name" id="name" placeholder="Введіть ім'я" value="">
            <label for="surname">Прізвище</label>
            <input type="text" name="surname" id="surname" placeholder="Введіть прізвище" value="">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Введіть email" value="">
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password" placeholder="Введіть пароль">
            <label for="password_confirm">Підтвердження паролю</label>
            <input type="password" name="password_confirm" id="password_confirm" placeholder="Підтвердіть пароль">
            <input type="button" id="btn" value="Відправити">
        </form>
    </main>
<script src="assets/js/main.js"></script>
</body>
</html>

