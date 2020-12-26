<?php
include_once 'RestaurantController.php';

class RestaurantView
{
    public $rest_controller;

    public function __construct(RestaurantController $rest_controller)
    {
        $this->rest_controller=$rest_controller;
    }

    public function getRestaurant()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));
//-------------пагинация-------------------------
        $per_page=6;// количество записей, выводимых на странице
// получаем номер страницы
        if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;
// вычисляем первый оператор для LIMIT
        $start=abs($page*$per_page);

// переменную $start используем, как нумератор записей.
        $q="SELECT * FROM Restaurant LIMIT $start,$per_page";
        $res=mysqli_query($link,$q);
        // echo '<div class="cards">';

//вывод данных из бд
        while($row=mysqli_fetch_array($res)) {
            //--------------------------
            echo '
                    <a href="Restaurant.php?id='.$row['RestaurantName'].'" class="card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s"> 
            <img src="'.$row['ImgRest'].'" alt="image" class="card-omage" />
                    <div class="card-text">
                        <div class="card-heading">
                            <h3 class="card-title">'.$row['RestaurantName'].'</h3>
                            <span class="card-tag tag">'.$row['Duration'].' минут</span> 
                        </div>
                        <div class="card-info">
                            <div class="rating">
                                <img src="img/star.svg" alt="rating">
              '.$row['Rating'].' </div> 
                            
                            <div class="category"></div>
                        </div>
                    </div>
                   </a>
           ';
            //-------------------------
        }
        echo '</div>';

//выводим ссылки на страницы:
        $q="SELECT count(*) FROM Restaurant";
        $res=mysqli_query($link,$q);
        $row=mysqli_fetch_row($res);
        $total_rows=$row[0];

        $num_pages=ceil($total_rows/$per_page);
        echo '
    <div class="btn-div-class" style="">

    ';
        for($i=1;$i<=$num_pages;$i++) {
            if ($i-1 == $page) {
                echo '<a class="btn">'.$i.'</a>';
            } else {
                echo '<a class="btn" href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i."</a> ";
            }
        }
        echo '
</div>
';
        mysqli_close($link);
    }

    public function getRestaurantMenu()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));
        $per_page=6;
        if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;

        $start=abs($page*$per_page);
        $tmp_id=$_GET['id'];
        $q="SELECT Img,Dish,Cost FROM Menu left join Restaurant on Menu.RestaurantId=Restaurant.Id where RestaurantName='$tmp_id' LIMIT $start,$per_page";
        $res=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($res)) {
            //--------------------------
            echo '
                                        <!-- /.cards -->
                
                <div class="card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <img src="'. $row[ 'Img'].'" alt="image" class="card-omage" />
                    <div class="card-text">
                        <div class="card-heading">
                            <h3 class="card-title card-title-reg">'. $row['Dish'] .'</h3>
                        </div>
                        <!-- /.card-heading -->
                        <div class="card-info">
                            <div class="ingridients">'. $row['Cost'] .' грн.</div>
                        </div>
                        <!-- /.card-info -->
                        <div class="card-buttons">
                            <button class="button button-primary">
                                <span class="button-card-text">В корзину</span>
                                <img src="img/basket_shop.svg" alt="shpping-cart" class="button-card-image">
                            </button>
                        </div>
                    </div>
                </div>
                
            <!-- /.cards -->
           ';
            //-------------------------
        }
        echo '</div>';

        $q="SELECT Img,Dish,Cost FROM Menu left join Restaurant on Menu.RestaurantId=Restaurant.Id where RestaurantName='$tmp_id'";
        $res=mysqli_query($link,$q);
        $row=mysqli_fetch_row($res);
        //$total_rows=$row[0];
        $total_rows=mysqli_num_rows($res);

        $num_pages=ceil($total_rows/$per_page);
        echo '
    <div class="btn-div-class" style="">

    ';
        for($i=1;$i<=$num_pages;$i++) {
            if ($i-1 == $page) {
                echo '<a class="btn">'.$i.'</a>';
            } else {
                echo '<a class="btn" href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i."</a> ";
            }
        }
        echo '
</div>
';
        mysqli_close($link);
    }

}
?>