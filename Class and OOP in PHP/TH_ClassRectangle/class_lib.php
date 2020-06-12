<?php
class Rectangle{
    public $width;
    public $height;
    function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    function getArea(){
        return $this->width * $this->height;
    }
    function getPerimeter(){
        return (($this->width + $this->height) * 2);
    }
    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }    
}
?>