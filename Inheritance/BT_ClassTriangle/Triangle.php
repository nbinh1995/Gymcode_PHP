<?php
namespace PHP\class_lib;
require_once 'Shape.php';
use PHP\class_lib\Shape;
class Triangle extends Shape{
    private $side1;
    private $side2;
    private $side3;
    function __construct($side1=1.0,$side2=1.0,$side3=1.0)
    {  
        if($side1+$side2 > $side3 &&
        $side1+$side3 > $side2 &&
        $side3+$side2 > $side1){
        parent::__construct('Triangle');
        $this->side1 = (float)$side1;
        $this->side2 = (float)$side2;
        $this->side3 = (float)$side3;}
        else echo ' ERROR: Not Side Of Triangle !!';
    } 
    function __get($name)
    {
        return $this->$name;
    }
    function __set($name, $value)
    {
        $this->$name=$value;
    }
    function getArea(){
        $temp=($this->side1+ $this->side2+ $this->side3)*
                ($this->side1+ $this->side2 - $this->side3)*
                (-$this->side1+ $this->side2+ $this->side3)*
                ($this->side1- $this->side2+ $this->side3);
        return round(sqrt($temp)/4,2);
    }
    function getPerimeter(){
        return   $this->side1+  $this->side2+  $this->side3; 
    }
    function __toString()
    {
        return $this->name.' co canh '.$this->side1.' , '.$this->side2.' , '.$this->side3.
        '<br>Dien tich: '.$this->getArea().'<br>Chu vi: '.$this->getPerimeter(); 
    }
}
?>