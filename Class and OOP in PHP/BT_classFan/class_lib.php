<?php
class Fan{
 const SLOW= 1;
 const MEDIUM= 2;
 const FAST= 3;
 private $speed = self::SLOW;
 private $on = false;
 private $radius = 5;
 private $color = 'blue';
 function __construct()
 {
     
 }
 function __get($name)
 {
     return $this->$name;
 }
 function __set($name, $value)
 {
     $this->$name=$value;
 }
 function toString(){
     if($this->on) return 'fan is on. Speed: '.$this->speed.
                                    ' .Color: '.$this->color.
                                    ' .Radius: '.$this->radius;
    else return 'fan is off. Color: '.$this->color.
                        ' .Radius: '.$this->radius;
 }
}
?>