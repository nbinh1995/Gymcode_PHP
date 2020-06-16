<?php
include_once('QueuePriority.php');
$priority=[1,4,5,6];
$list = new QueuePriority($priority);
$list->enqueue(new Patient('Smith',5));
$list->enqueue(new Patient('Jones',4));
$list->enqueue(new Patient('Fehrenbach',6));
$list->enqueue(new Patient('Brown',1));
$list->enqueue(new Patient('Ingram',1));
$list->List();
echo '<br>'.$list->display();
$list->dequeue();
echo '<br>'.$list->display();
?>