<?php
require_once('resizeCircle.php');
require_once('resizeSquare.php');
require_once('resizeRectangle.php');
$arrShape = [new resizeCircle('Circle1',10),
            new resizeSquare('Square1',15),
            new resizeRectangle('Rectangle1',10,15),
            new resizeCircle('Circle2',20),
            new resizeSquare('Square2',7),
            new resizeRectangle('Rectangle2',19,13),
            new resizeCircle('Circle3',35),
            new resizeSquare('Square3',23),
            new resizeRectangle('Rectangle3',18,9),
            new resizeCircle('Circle4',4),
            new resizeSquare('Square4',26),
            new resizeRectangle('Rectangle4',18,15),
            new resizeCircle('Circle5',30),
            new resizeSquare('Square5',21),
            new resizeRectangle('Rectangle5',17,5),
            new resizeCircle('Circle6',12),
            new resizeSquare('Square6',16),
            new resizeRectangle('Rectangle6',30,15),
            new resizeCircle('Circle7',11),
            new resizeSquare('Square7',10)];



function searchShape($arrShape,$search){
if(empty($search)) return $arrShape;
$filter=array_filter($arrShape,function($shape) use($search){
   return $shape->name === $search; 
});
return $filter;
}
function maxArea($arrShape){
   $max=$arrShape[0]->calculateArea();
   $index = $arrShape[0];
   for($i=1;$i<count($arrShape);$i++){
      if($arrShape[$i]->calculateArea() > $max) 
      {$max = $arrShape[$i]->calculateArea();
      $index =$arrShape[$i];}
   }
   return $index;
}

function arrayMaxAreaShape($arrShape){
   $arrCircle =[];
   $arrSquare =[];
   $arrRec=[];
   for($i=1;$i<count($arrShape);$i++){
      if($arrShape[$i] instanceof resizeCircle)  $arrCircle[]=$arrShape[$i];
      if($arrShape[$i] instanceof resizeRectangle)  $arrSquare[]=$arrShape[$i];
      if($arrShape[$i] instanceof resizeSquare)  $arrRec[]=$arrShape[$i];
   }
   return [maxArea($arrCircle), maxArea($arrSquare),maxArea($arrRec)];
}

function arrayMinPerimeterShape($arrShape){
   $arrCircle =[];
   $arrSquare =[];
   $arrRec=[];
   for($i=1;$i<count($arrShape);$i++){
      if($arrShape[$i] instanceof resizeCircle)  $arrCircle[]=$arrShape[$i];
      if($arrShape[$i] instanceof resizeRectangle)  $arrSquare[]=$arrShape[$i];
      if($arrShape[$i] instanceof resizeSquare)  $arrRec[]=$arrShape[$i];
   }
   return [minPerimeter($arrCircle), minPerimeter($arrSquare),minPerimeter($arrRec)];
}
function minPerimeter($arrShape){
   $min=$arrShape[0]->calculatePerimeter();
   $index = $arrShape[0];
   for($i=1;$i<count($arrShape);$i++){
      if($arrShape[$i]->calculatePerimeter() < $min) 
      {$min = $arrShape[$i]->calculatePerimeter();
      $index =$arrShape[$i];}
   }
   return $index;
}
$arrArea =  arrayMaxAreaShape($arrShape);
foreach ($arrArea as $shape){
   echo '<br>'.$shape->name.'co dien tich truoc resize la: '.$shape->calculateArea();
}
$arrPerimeter =  arrayMinPerimeterShape($arrShape);
foreach ($arrPerimeter as $shape){
   echo '<br>'.$shape->name.'co dien tich truoc resize la: '.$shape->calculateArea();
}

?>