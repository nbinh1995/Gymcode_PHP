<?php
namespace PHP\class_lib;
require_once 'Point.php';
use PHP\class_lib\Point2D;
class MoveablePoint extends Point{
    private $xSpeed;
    private $ySpeed;
    function __construct($x=null,$y=null,$xSpeed=null,$ySpeed=null)
    {
        parent::__construct($x,$y);
        $this->xSpeed = (float)$xSpeed;
        $this->ySpeed = (float)$ySpeed;
    }
    function __get($name)
    {
        return $this->$name;
    }
    function __set($name, $value)
    {
        $this->$name = (float)$value;
    }
    function getSpeed(){
        return [$this->xSpeed,$this->ySpeed];
    }
    function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed = (float)$xSpeed;
        $this->ySpeed = (float)$ySpeed;
    }
    function __toString()
    {
        return "($this->x,$this->y), speed=($this->xSpeed,$this->ySpeed)";
    }
    function move(){
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
        return $this;
    }

}

?>