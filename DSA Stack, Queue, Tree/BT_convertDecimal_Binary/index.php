<?php
include_once 'Stack/Stack.php';
$stack = new Stack(30);
$dec = 67;
while(1){
    if($dec > 1){
        $stack->push($dec%2);
        $dec = floor($dec/2); 
    }else {$stack->push($dec); break;}
}
echo '<br>stack: '.$stack->printStack().'<br>';
while(!$stack->isEmpty()){
    $bin[]= $stack->pop();
}
echo '<pre>';
print_r($bin);
echo '<br>Bin = '.implode('',$bin);
?>