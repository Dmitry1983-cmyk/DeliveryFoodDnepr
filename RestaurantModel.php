<?php


class RestaurantModel
{
    public $name;
    public $rating;
    public $duration;
    public $interior;


    function __construct($name,$interior,$rating,$duration)
    {
        $this->name=$name;
        $this->interior=$interior;
        $this->rating=$rating;
        $this->duration=$duration;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getInterior()
    {
        return $this->interior;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
?>