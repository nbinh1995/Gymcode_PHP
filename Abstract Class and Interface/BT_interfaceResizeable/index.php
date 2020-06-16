<?php
require_once('resizeCircle.php');
require_once('resizeSquare.php');
require_once('resizeRectangle.php');
$arrShape = [new resizeCircle('Circle1',10),
            new resizeSquare('Square1',15),
            new resizeRectangle('Rectangle1',10,15)];

foreach ($arrShape as $shape){
   echo '<br>'.$shape->name.'co dien tich truoc resize la: '.$shape->calculateArea();
}
foreach ($arrShape as $shape){
$scale = rand(1,100);
echo '<br>'.$shape->name.'co dien tich sau resize la: '.$shape->resize($scale);
}
function searchShape($arrShape,$search){
if(empty($search)) return $arrShape;
$filter=array_filter($arrShape,function($shape) use($search){
   return $shape->name === $search; 
});
return $filter;
}
function maxArea($arrShape){
   $max=$arrShape[0]->calculateArea();
   $index = 0;
   for($i=1;$i<count($arrShape);$i++){
      if($arrShape[$i]->calculateArea() > $max) 
      {$max = $arrShape[$i]->calculateArea();
      $index =$i;}
   }
   return $index;
}
function minPerimeter($arrShape){
   $min=$arrShape[0]->calculatePerimeter();
   $index = 0;
   for($i=1;$i<count($arrShape);$i++){
      if($arrShape[$i]->calculatePerimeter() < $min) 
      {$min = $arrShape[$i]->calculatePerimeter();
      $index =$i;}
   }
   return $index;
}
?>