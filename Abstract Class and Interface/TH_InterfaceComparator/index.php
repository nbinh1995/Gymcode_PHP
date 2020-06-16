<?php
include_once('Circle.php');
include_once('CircleComparator.php');
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 7);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));
?>