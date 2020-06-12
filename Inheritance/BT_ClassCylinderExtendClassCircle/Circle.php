<?php
namespace PHP\class_lib;
class Circle{
    protected $radius;
    protected $color;
    const PI = 3.14;
    public function __construct($radius,$color){
        $this->radius=$radius;
        $this->color=$color;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function getArea(){
        return $this->radius*$this->radius*self::PI;
    }
}
?>