<?php


class DB_model
{
    public function AddRestaurant()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));

        $q="insert into Restaurant(RestaurantName,ImgRest,Rating,Duration) values() ";
    }
    public function AddDish()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));
        $q="insert into Menu(Dish,Img,Cost,RestaurantId)values() ";
    }
    public function UpdateRestaurant()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));
        $q="UPDATE Restaurant SET column1 = value1, column2 = value2 WHERE condition;";
    }
    public function UpdateDish()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));
        $q="UPDATE Menu SET column1 = value1, column2 = value2 WHERE condition;";
    }
    public function DeleteRestaurant()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));
        $q="DELETE FROM Restaurant WHERE condition;";
    }
    public function DeleteDish()
    {
        $link = mysqli_connect("localhost", "root", "", "deliveryfooddnepr")  or die("Ошибка " . mysqli_error($link));
        $q="DELETE FROM Menu WHERE condition;";
    }

}