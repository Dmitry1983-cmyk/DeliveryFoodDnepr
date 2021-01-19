<?php include("includes/header.php");
?>
<div class="container mregister">
    <div id="login">
        <h1>Регистрация</h1>
        <form action="register.php" id="registerform" method="post"name="registerform">
            <p><label for="user_login">Фамилия<br>
                    <input class="input" id="full_name" name="full_name"size="32"  type="text" value=""></label></p>
            <p><label for="user_pass">Имя пользователя<br>
                    <input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
            <p><label for="user_pass">E-mail<br>
                    <input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
            <p><label for="user_pass">Номер телефона<br>
                    <input class="input" id="phone" name="userphone"size="10" type="text" value=""></label></p>
            <p><label for="user_pass">Псевдоним пользователя на сайте<br>
                    <input class="input" id="nickname" name="nickname"size="15" type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
            <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
            <p class="regtext">Уже зарегистрированы? <a href= "index.php">Введите имя пользователя</a>!</p>
        </form>
    </div>
</div>

<?php include("includes/footer.php");
include_once ("register/registration.php");
registrationClient();
?>

