<?php
function isAccount($str)
{   $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match_all($regexp,$str)) {
        echo("<br>Account true format");
    } else {
        echo("<br>Account false format");
    }
}
$example=['123abc_','_abc123','______','123456','abcdefg','.@','12345','1234_','abcde'];
foreach($example as $account){
    isAccount($account);
}
?>