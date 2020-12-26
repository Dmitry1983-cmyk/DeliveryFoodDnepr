<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Delivery Food Dnepr -доставка еды на дом</title>
    <link rel="stylesheet" href="http://fonts.google.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="index.php">

    <div class="container">
        <header class="header">
            <a href="index.php" class="logo wow animate__animated animate__rubberBand">
                <img src="img/logo.svg" alt="Logo"></img>
            </a>
            <!-- поле поиска -->
            <input type="text" class="input input-adress" placeholder="Адрес доставки" />
            <!----------------------------------------------------------------->
            <!----------------------------------------------------------------->
            <div class="buttons">
                <!--------------------------Modal------------------------------------------>
                <!--------------------------Modal------------------------------------------>

                <div class="main_div">
                    <input type="checkbox" id="callback">
                    <label id="lab_btn" for="callback">
                        <img class="button-icon" src="img/user.svg" alt="user">Войти
                    </label>

                    <div action="" class="popup">
                        <span>Введите данные</span>
                        <input type="text" name="login" placeholder="Логин">
                        <input type="text" name="psw" placeholder="Пароль">
                        <input id="submit" name="enter" type="submit" value="Войти">
                        <input id="reg" name="register" type="submit" value="Регистрация">
                        <label class="close_modal" for="callback">+</label>
                    </div>
                </div>

                <!--------------------------Modal------------------------------------------>

                <!--------------------------Modal------------------------------------------>
                <button class="button">
                    <img class="buttn-icon" src="img/shopping-cart.svg" alt="shopping cart">
                    <span class="button-text">Корзина</span>
                </button>

            </div>
        </header>
        <!-- /container -->
    </div>

    <main class="main">
        <div class="container">
            <section class="promo">
                <h1 class="promo-title">Онлайн-сервис<br />доставки еды на дом</h1>
                <p class="promo-text">Блюда из любимого ресторана привезет курьер в перчатках, маске и с антисептиком</p>
            </section>


            <section class="restaraunts">
                <div class="section-heading">
                    <h2 class="section-title">Рестораны</h2>
                    <input  type="submit" name="submit" style="width: 100px; height: 42px;border-radius: 2px;border: 1px solid #D9D9D9" class="sub" value="Поиск">
                    <input type="search" name="search_text" class="input input-search" placeholder="Поиск блюд и ресторанов">
                </div>
                <div class="cards">

                    <?php
                    include_once 'RestaurantController.php';
                    include_once 'RestaurantView.php';
                    $res=new RestaurantController();
                    $data=new RestaurantView($res);
                    $data->getRestaurant();
                    ?>
                </div>
</form>
</section>
</div>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-block">
            <a href="index.php" class="logo wow animate__animated animate__rubberBand">
                <img src="img/logo.svg" alt="logotype" class="logo footer-log0"></img>
            </a>
            <nav class="footer-nav">
                <a href="restourant.html" class="footer-link">Ресторанам</a>
                <a href="restourant.html" class="footer-link">Курьерам</a>
                <a href="restourant.html" class="footer-link">Пресс-центр</a>
                <a href="restourant.html" class="footer-link">Контакты</a>
            </nav>
            <div class="social-links">
                <a href="https://www.instagram.com/" class="social-links"><img src="img/insta.svg" alt="instagram"></a>
                <a href="https://www.facebook.com/" class="social-links"><img src="img/face.svg" alt="facebook"></a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<script src="js/wow.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
