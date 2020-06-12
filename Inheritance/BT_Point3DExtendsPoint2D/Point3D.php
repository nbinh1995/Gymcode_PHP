<?php
namespace PHP\class_lib;
require_once 'Point2D.php';
use PHP\class_lib\Point2D;
class Point3D extends Point2D{
    private $z;
    function __construct($x=null,$y=null,$z=null)
    {
        parent::__construct($x,$y);
        $this->z =(float)$z;
    }
    function __get($name)
    {
        return $this->$name;
    }
    function __set($name, $value)
    {
        $this->$name = (float)$value;
    }
    function getXYZ(){
        return [$this->x,$this->y,$this->z];
    }
    function setXYZ($x,$y,$z){
        $this->x=(float)$x;
        $this->y=(float)$y;
        $this->z =(float)$z;
    }
    function __toString()
    {
        return "($this->x,$this->y,$this->z)";
    }
}
?>