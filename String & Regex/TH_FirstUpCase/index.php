<?php
$regexp = '/^[A-Z]/';
function isFirstLetterUpperCase($str)
{
        $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("<br>String's first character is uppercase");
    } else {
        echo("<br>String's first character is not uppercase");
    }
}
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('cdegym');
$string1= 'Nguyen van Nam';
isFirstLetterUpperCase($string1);
$string2= 'NGUYEN VAN NAM';
isFirstLetterUpperCase($string2);
$string3= 'nguyen van Nam';
isFirstLetterUpperCase($string3);
?>