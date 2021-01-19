<?php

function getBasketUser()
{
    $con = mysqli_connect("localhost", "root", "", "testConnectionDelivery") or die("Ошибка " . mysqli_error($con));

    $nickname=$_SESSION['session_username'];
    $q = mysqli_query($con,"select UserName,LastNameUser,PhoneUser,UserNickname,DishName,DishCost,DishCount,(DishCost*DishCount) as Totalsum 
from Orders left join DataUser on Orders.DataUserId=DataUser.Id where UserNickname='$nickname'");

    $numrows=mysqli_num_rows($q);

    if($numrows!=0)
    {

        while ($row = mysqli_fetch_array($q)) {
            echo '
<!-- /.foods-row -->
<div class="food-row">
                <span class="food-name">'.$row[ 'DishName'].'</span>
                <strong class="food-price">'.$row[ 'DishCost'].' грн</strong>
                <div class="food-counter">
               <!-- <button class="counter-button">-</button> 
                    <input type="submit" name="minus" class="counter-button" value="-"></input> -->
                     <input type="submit" name="minus" value="-"></input>
                    <span class="counter">'.$row[ 'DishCount'].'</span>
                    <input type="submit" name="plus" value="+"></input>
                  <!--  <button class="counter-button">+</button> -->
                </div>
 </div>
<!-- /.foods-row --> 
';
        }

    }
    else {
        echo '<span class="food-name">Корзина пуста</span>';
        echo '</div>
<div class="modal-footer" xmlns="http://www.w3.org/1999/html">
            <span class="modal-pricetag">0 грн</span>
            <div class="footer-buttons">
            <form method="post">
                <button class="button button-primary" style="display: none;">Оформить заказ</button>
                <button type="submit" name="cancel" class="button" onclick="Cancel()">Отмена</button>
            </form>
            </div>
        </div>
';
    }
}

function totalSum()
{
    $con = mysqli_connect("localhost", "root", "", "testConnectionDelivery") or die("Ошибка " . mysqli_error($con));
    $nickname=$_SESSION['session_username'];
    $q = mysqli_query($con,"select UserNickname,sum(DishCost*DishCount) as Totalsum
from Orders left join DataUser on Orders.DataUserId=DataUser.Id where UserNickname='$nickname' GROUP BY UserNickname");

    $numrows=mysqli_num_rows($q);

    if($numrows!=0)
    {

        while ($row = mysqli_fetch_array($q)) {
            echo '
            <span class="modal-pricetag">'.$row[ 'Totalsum'].' грн</span>
';
        }
        echo '<form method="post">
            <div class="footer-buttons">
                <input type="submit" name="checkout" class="button button-primary" value="Оформить заказ"></input>
                <button type="submit" name="cancel" class="button" onclick="Cancel()">Отмена</button>
            </div>
            </form>
            ';
    }
}

function Cancel()
{
    echo '<div class="modal" style="display: none;"></div>';
}

//---------------bucket--------------------------
if(isset($_POST['bucket']))
{
    $con = mysqli_connect("localhost", "root", "", "testConnectionDelivery") or die("Ошибка " . mysqli_error($con));

    $nickname=$_SESSION['session_username'];
    $tmp_dish=$_GET['dish'];
    $q = mysqli_query($con,"insert into Orders(DishName,DishCost,DishCount,DataUserId)values
('$tmp_dish',(select Cost from Menu where Dish='$tmp_dish'),1,(select Id from DataUser where UserNickname='$nickname')) ");

}
//----------------end bucket----------------------------------
?>

