<?php require_once 'class_lib.php';
    $time = new StopWatch();
function createArray(){
    $arr=[];
    for($i=0;$i<3000;$i++){
    array_push($arr,rand(1,10));
    }
    return $arr;
}
   
    function selectionSort($values){
        $size = count($values);

        for($i=0;$i<$size;$i++)
        {
	        for($j=$i+1;$j<$size;$j++)
            {
                if($values[$j] < $values[$i])
                {
                    $min = $values[$j];
                    $values[$j] = $values[$i];
                    $values[$i] = $min;
                }    
            }
        }
        return $values;
}

$time->start();
var_dump($time->start());
$arr=createArray();
selectionSort($arr);
$time->stop();
var_dump($time->stop());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $time->getElapsedTime()?>
</body>
</html>