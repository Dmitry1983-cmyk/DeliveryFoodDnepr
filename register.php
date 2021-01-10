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

<?php include("includes/footer.php"); ?>

<?php
$con = mysqli_connect("localhost", "root", "", "DeliveryFoodDnepr")  or die("Ошибка " . mysqli_error($con));

if(isset($_POST["register"])){

    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty(($_POST['userphone']))
        && !empty(($_POST['nickname']))  && !empty($_POST['password'])) {
        $lastname= htmlspecialchars($_POST['full_name']);
        $username=htmlspecialchars($_POST['username']);
        $email=htmlspecialchars($_POST['email']);
        $phone=htmlspecialchars($_POST['userphone']);
        $nickname=htmlspecialchars($_POST['nickname']);
        $password=htmlspecialchars($_POST['password']);
        $query=mysqli_query($con,"SELECT * FROM DataUser WHERE UserNickname='".$nickname."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==0)
        {
            mysqli_query($con,"START TRANSACTION");

            $query1 = mysqli_query($con,"insert into LogPasUser(HeshPas)values('$password')");
            $query2=mysqli_query($con, "insert into DataUser(UserName,LastNameUser,UserMail,UserNickname,PhoneUser,PassIdUser)values
('$username','$lastname','$email','$nickname','$phone', (select Id from LogPasUser where HeshPas='$password'));");

            if ($query1 and $query2) {
                mysqli_query($con,"COMMIT");
                $message = "Аккаунт успешно создан";
            } else {
                mysqli_query("ROLLBACK");
                $message = "Не удалось вставить данные!";
            }

        } else {
            $message = "Это имя пользователя уже существует! Пожалуйста, попробуйте другое!";
        }
    } else {
        $message = "Все поля должны быть обязательно заполнены!";
    }
}
?>

<?php
if (!empty($message))
{
    echo "<p class='error'>" . "СООБЩЕНИЕ :". $message . "</p>";
}
?>