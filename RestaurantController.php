<?php
include_once "RestaurantModel.php";
include_once 'DB_model.php';

class RestaurantController
{
    public $restaurant_model;

    public function __construct()
    {
        $this->restaurant_model=new DB_model();
    }
}