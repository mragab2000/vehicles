<?php
include "cars.php";
include "bikes.php";
include "planes.php";
abstract class common{
    private $name;
    private $model;
    private $price;
    private $color;
    private $maxSpeed;
    private $extraSpecs;

    function moving(){}
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getExtraSpecs()
    {
        return $this->extraSpecs;
    }

    public function setExtraSpecs($extraSpecs)
    {
        $this->extraSpecs = $extraSpecs;
    }
}
