<?php
include_once('Stack.php');
$stack = new Stack();
$stack->push(5);
$stack->push(7);
$stack->push(20);
$stack->push(3);
$stack->push(15);
echo '<br>'.$stack->printStack();
$stack->pop();
echo '<br>'.$stack->printStack();
$stack->pop();
$stack->pop();
echo '<br>'.$stack->printStack();
$stack->push(33);
$stack->push(99);
echo '<br>'.$stack->printStack();
if($stack->isEmpty()) echo '<br> Empty'; else echo '<br> Not Empty';
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
if($stack->isEmpty()) echo '<br> Empty'; else echo '<br> Not Empty';
?>