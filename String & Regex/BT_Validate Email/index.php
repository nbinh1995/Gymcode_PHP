<?php

function isEmail($str)
{   $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match_all($regexp,$str)) {
        echo("<br>Email true format");
    } else {
        echo("<br>Email false format");
    }
}
$example=['a@gmail.com','ab@yahoo.com','abc@hotmail.com','@gmail.com','ab@gmail.','@#abc@gmail.com'];
foreach($example as $email){
    isEmail($email);
}

?>