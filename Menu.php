<?php


class Menu
{
    public $dish;
    public $img_dish;
    public $cost;

    function __construct($dish,$img_dish,$cost)
    {
        $this->dish=$dish;
        $this->img_dish=$img_dish;
        $this->cost=$cost;
    }

    /**
     * @return mixed
     */
    public function getDish()
    {
        return $this->dish;
    }

    /**
     * @return mixed
     */
    public function getImgDish()
    {
        return $this->img_dish;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }
}