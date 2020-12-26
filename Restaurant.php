<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Delivery Food -доставка еды на дом</title>
    <link rel="stylesheet" href="https://fonts.google.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header class="header">
        <a href="index.php" class="logo wow animate__animated animate__rubberBand">
            <img src="img/logo.svg" alt="Logo"></img>
        </a>
        <!-- поле поиска -->
        <input type="text" class="input input-adress" placeholder="Адрес доставки" />
        <div class="buttons">
            <button class="button button-primary">
                <img class="button-icon" src="img/user.svg" alt="user">
                <span class="button-text">Войти</span>
            </button>
            <button class="button" id="cart-button">
                <img class="buttn-icon" src="img/shopping-cart.svg" alt="shopping cart">
                <span class="button-text">Корзина</span>
            </button>
        </div>
    </header>
    <!-- /container -->
</div>
<main class="main">
    <div class="container">
        <section class="restaraunts">
            <div class="cards">
<?php
include_once 'RestaurantController.php';
include_once 'RestaurantView.php';
$res=new RestaurantController();
$data=new RestaurantView($res);
$data->getRestaurantMenu();
?>
            </div>
            <!-- /.cards -->
        </section>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-block">
            <a href="index.php" class="logo wow animate__animated animate__rubberBand">
                <img src="img/logo.svg" alt="Logo"></img>
            </a>
            <nav class="footer-nav">
                <a href="#" class="footer-link">Ресторанам</a>
                <a href="#" class="footer-link">Курьерам</a>
                <a href="#" class="footer-link">Пресс-центр</a>
                <a href="#" class="footer-link">Контакты</a>
            </nav>
            <div class="social-links">
                <a href="#" class="social-links"><img src="img/insta.svg" alt="instagram"></a>
                <a href="#" class="social-links"><img src="img/face.svg" alt="facebook"></a>
            </div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<!-- modal -->
<div class="modal">
    <div class="modal-dialog">
        <div class="modal-header">
            <h3 class="modal-title">Корзина</h3>
            <buton class="close">&times;</buton>
        </div>
        <!-- /.modal-header -->
        <div class="modal-body">
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
            <div class="food-row">
                <span class="food-name">Ролл угорь стандарт</span>
                <strong class="food-price">250 usd</strong>
                <div class="food-counter">
                    <button class="counter-button">-</button>
                    <span class="counter">1</span>
                    <button class="counter-button">+</button>
                </div>
            </div>
            <!-- /.foods-row -->
        </div>
        <!-- /.modal-body -->
        <div class="modal-footer">
            <span class="modal-pricetag">1250 usd</span>
            <div class="footer-buttons">
                <button class="button button-primary">Оформить заказ</button>
                <button class="button">Отмена</button>
            </div>
        </div>
        <!-- /.modal-footer -->
    </div>
</div>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>