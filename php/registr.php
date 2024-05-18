<?php 
    // Запуск сессии
    session_start();
    include ('../tpl/header.php');
    include ('../tpl/nav.php');
?> 
<html>
    <head>
        <title>Регистрация</title>
    </head>
    <body>
        <h2>Регистрация</h2>
        <form action="save_user.php" method="post">
            <p>
                <label>Ваше имя:</label>
                <input name="name" type="text" size="17" maxlength="17">
            </p>
            <p>
                <label>Ваш логин:</label>
                <input type="text" name="login" size="17" maxlength="17">
            </p>
            <p>
                <label>Ваш пароль:</label>
                <input type="password" name="pass" size="17" maxlength="17">
            </p>
            <p class="submit-btn">
                <input class="btn" type="submit" name="submit" value="Зарегистрироваться">
            </p>
        </form>
    </body>
</html>