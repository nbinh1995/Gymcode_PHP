<?php
include_once 'Stack/Stack.php';
$arr = array(10,12,5,2,9,40,99,50,68,20,35);
echo '<br> array khoi tao <br><pre>';
print_r($arr);
$stack = new Stack(count($arr));
foreach( $arr as $num){
    $stack->push($num);
}
echo '<br> stack: '.$stack->printStack();
$arr =[];
while(!$stack->isEmpty()){
    $arr[]=$stack->pop();
}
echo '<br> array da dao <br><pre>';
print_r($arr);
?>