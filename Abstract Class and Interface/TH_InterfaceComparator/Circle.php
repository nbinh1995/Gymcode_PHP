<?php
include_once('Shape.php');
class Circle extends Shape{
    private $radius;
    function __construct($name,$radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name,$value)
    {
        $this->$name = $value;
    }
}
?>