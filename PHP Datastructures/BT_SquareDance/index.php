<?php
include_once 'Dancer.php';
function arrDancer($arrName,$gender){
    $arrDancer=[];
    foreach($arrName as $name){
        $dancer = new Dancer($name,$gender);
        array_push($arrDancer,$dancer);
    }
    return $arrDancer;
}


function queueDancer($arr){
    $queue= new SplQueue;
    foreach($arr as $dancer){
        $queue->enqueue($dancer);
    }
    return $queue;
} 

$arrNameMale = ['Lan','Dat','Thang','Thanh'];
$arrNameFemale = ['Dung','Thuy','Lan'];

$arrDancerMale = arrDancer($arrNameMale,'Male');
$arrDancerFemale = arrDancer($arrNameFemale,'Female');

$queueMale = queueDancer($arrDancerMale);
$queueFemale= queueDancer($arrDancerFemale);

while(1){
    $male = $queueMale->dequeue();
    $female = $queueFemale->dequeue();
    echo "<br>$male->name($male->gender) VS $female->name($female->gender)"; 
    if($queueFemale->isEmpty() || $queueMale->isEmpty()) break;
}
echo '<br>So nguoi doi: <br>';
echo 'Nu: '.$queueFemale->count();
echo ' Nam: '.$queueMale->count();

$arrNameFemale = ['Linh','Thao','Thi'];
$arrDancerFemale = arrDancer($arrNameFemale,'Female');
$queueFemale= queueDancer($arrDancerFemale);

while(1){
    $male = $queueMale->dequeue();
    $female = $queueFemale->dequeue();
    echo "<br>$male->name($male->gender) VS $female->name($female->gender)"; 
    if($queueFemale->isEmpty() || $queueMale->isEmpty()) break;
}
echo '<br>So nguoi doi: <br>';
echo 'Nu: '.$queueFemale->count();
echo ' Nam: '.$queueMale->count();
?>