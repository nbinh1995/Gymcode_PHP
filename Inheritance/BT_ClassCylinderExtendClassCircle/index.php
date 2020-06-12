<?php
require_once 'Cylinder.php';
use PHP\class_lib\Circle;
use PHP\class_lib\Cylinder;
$circle= new Circle(5,'blue');
$cylinder=new Cylinder(5,'yellow',10);
echo 'Hinh tron: -Radius: '.$circle->__get('radius').' Color: '.$circle->__get('color').'<br>';
echo 'Hinh tru: -Radius: '.$cylinder->__get('radius').
    ' Color: '.$cylinder->__get('color').
    ' Height: '.$cylinder->__get('height').'<br>';
echo 'Dien tich hinh tron: '.$circle->getArea().'<br>';
echo 'Dien tich day hinh tru: '.$cylinder->getArea().'<br>';
echo 'The tich hinh tru: '.$cylinder->getVolume().'<br>';
?>