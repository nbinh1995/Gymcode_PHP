<?php
function checkBracket($string){
    $stack = new SplStack;
    for($i=0;$i<strlen($string);$i++){
        if($string[$i] === '(') $stack->push('(');
        if($string[$i] === ')') 
        {if($stack->isEmpty()) return false;
            $stack->pop();}
    }
    if($stack->isEmpty()) return true;
    else return false;
}

$str1='s * (s – a) * (s – b) * (s – c)';
$str2='(– b + (b2 – 4*a*c)^0.5) / 2*a';
$str3='s * (s – a) * (s – b * (s – c)';
$str4='s * (s – a) * s – b) * (s – c)';
$str5 = '(– b + (b^2 – 4*a*c)^(0.5/ 2*a))';
if(checkBracket($str1)) echo '<br>Brackect Well'; 
else echo '<br>Bracket Not Well';

if(checkBracket($str2)) echo '<br>Brackect Well'; 
else echo '<br>Bracket Not Well';

if(checkBracket($str3)) echo '<br>Brackect Well'; 
else echo '<br>Bracket Not Well';

if(checkBracket($str4)) echo '<br>Brackect Well'; 
else echo '<br>Bracket Not Well';

if(checkBracket($str5)) echo '<br>Brackect Well'; 
else echo '<br>Bracket Not Well';
?>