<?php require_once 'class_lib.php';
    include_once('../ArrayList.php');
    $time = new StopWatch();
    
function createArray(){
    $arr=[];
    for($i=0;$i<500000;$i++){
    array_push($arr,rand(0,10));
    }
    return $arr;
}
$arr = createArray();
$arrList = new ArrayList($arr);
$time->start();
$arrList->addFirst('new');
$time->stop();
echo '<br>addFirst: '.$time->getElapsedTime();// 0.45702719688416
$time->start();
$arrList->addLast('new');
$time->stop();
echo '<br>addLast: '.$time->getElapsedTime();// 0.22601294517517
$time->start();
$arrList->addToIndex('new',250000);
$time->stop();
echo '<br>addIndex250000: '.$time->getElapsedTime();// 0.22601294517517

$time->start();
$arrList->removeByIndex(100000);
$time->stop();
echo '<br>removeIndex100000: '.$time->getElapsedTime();//0.41402292251587 micro giay
?>
