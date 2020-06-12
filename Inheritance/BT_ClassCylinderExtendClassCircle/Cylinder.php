<?php
namespace PHP\class_lib;
require_once 'Circle.php';
use PHP\class_lib\Circle;
class Cylinder extends Circle{
    private $height;
    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height=$height;
    }

    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function getVolume()
    {
        return $this->getArea()*$this->height;        
    }
}
?>