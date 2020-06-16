<?php
include_once('Queue.php');
$queue = new Queue;
$queue->enqueue(10);
$queue->enqueue(90);
$queue->enqueue(15);
echo '<br>3enqueue: '.$queue->display();
echo '<br>'.$queue->dequeue();
echo '<br>'.$queue->dequeue();
echo '<br>2dequeue: '.$queue->display();
$queue->enqueue(50);
$queue->enqueue(45);
echo '<br>2enqueue: '.$queue->display();
echo '<br>'.$queue->dequeue();
echo '<br>'.$queue->dequeue();
echo '<br>'.$queue->dequeue();
if($queue->isEmpty()) echo '<br>Empty'; else echo '<br>Not Empty';

?>