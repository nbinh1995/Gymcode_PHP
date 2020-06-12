<?php
require_once 'MoveablePoint.php';
use PHP\class_lib\MoveablePoint;
use PHP\class_lib\Point;
$car = new MoveablePoint(5,5,10,5.5);
echo $car;
$car->move();
echo '<br>'.$car;
?>