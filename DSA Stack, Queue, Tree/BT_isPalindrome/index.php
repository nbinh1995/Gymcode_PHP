<?php
include_once 'Queue/Queue.php';
include_once 'Stack/Stack.php';
function isPalindrome($string){
    $len = strlen($string);
    $queue =new Queue;
    $stack = new Stack($len);
    for($i =0; $i<$len;$i++){
        $queue->enqueue($string[$i]);
        $stack->push($string[$i]);
    }
    for($i =0; $i<$len;$i++){
      if(strtolower($queue->dequeue()) !== strtolower($stack->pop())) return false;
    }
    return true;
}
if(isPalindrome('GrammArg')) echo '<br>Palindrome'; else echo '<br>Not Palindrome';
if(isPalindrome('hello')) echo '<br>Palindrome'; else echo '<br>Not Palindrome';

?>