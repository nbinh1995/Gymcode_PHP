<?php require_once 'class_lib.php';
include_once('../LinkedList.php');
    $time = new StopWatch();
    $linkList = new LinkList();
for($i=0;$i<500000;$i++){
$linkList->addLast(rand(0,10));
}
$time->start();
$linkList->add(15,300000);
$time->stop();
echo '<br> addIndex300000: '.$time->getElapsedTime();
   
   
?>
