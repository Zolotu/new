<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Регистрация </title>
</head>
<body>
<div class="container register">
    <div id="login">
        <h1> Регистрация </h1>
        <form action="register.php" id="register_form" method="post" name="register_form">
            <p><label for="user_login">Логин<br>
                    <input class="input" id="full_name" name="full_name" size="25" type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password" size="25" type="password" value=""></label></p>
            <p><label for="user_pass_ok">Еще раз пароль<br>
                    <input class="input" id="password_ok" name="password_ok" size="25" type="password" value=""></label></p>
            <p><label for="user_tel">Телефон<br>
                    <input class="input" id="tel" name="tel" size="25" type="tel" value=""></label></p>
            <p><label class="input" for="user_count">Страна<br>
                    <select name="user_count">
                        <option selected="selected"></option>
                        <option>Украина</option>
                        <option>Молдовия</option>
                        <option>Беларусь</option>
                        <option>Германия</option>
                    </select>
            <p><label class="input" for="user_city">Город<br>
                    <select name="user_city">
                        <option selected="selected"></option>
                        <option>Харьков</option>
                        <option>Киев</option>
                        <option>Одесса</option>
                        <option>Кременчуг</option>
                    </select>
            <p><label for="user_inv">Инвайт<br>
                    <input class="input" id="inv" name="inv" size="25"   type="text" value=""></label></p>

            <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Регистрация"></p>
            <p class="submit"><input class="button" id="reset" name= "reset" type="reset" value="Очистить"></p>
        </form>
    </div>
</div>
</body>
</html>