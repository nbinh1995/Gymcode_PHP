<?php
namespace PHP\class_lib;
class Point{
    protected $x;
    protected $y;
    function __construct($x=null,$y=null)
    {
        $this->x=(float)$x;
        $this->y=(float)$y;
    }
    function __get($name)
    {
        return $this->$name;
    }
    function __set($name, $value)
    {
        $this->$name = (float)$value;
    }
    function getXY(){
       return [ $this->x, $this->y];
    }
    function setXY($x,$y){
        $this->x=(float)$x;
        $this->y=(float)$y;
    }
    function __toString()
    {
        return "($this->x,$this->y)";
    }
}
?>