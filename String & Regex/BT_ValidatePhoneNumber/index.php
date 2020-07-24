<?php
function isPhoneNumber($str)
{   $regexp = '/^\([0-9]{2}\)-\(0[0-9]{9}\)$/';
    if (preg_match_all($regexp,$str)) {
        echo("<br>PhoneNumber true format");
    } else {
        echo("<br>PhoneNumber false format");
    }
}
$example=['(84)-(0978489648)','(a8)-(22222222)'];
foreach($example as $phone){
    isPhoneNumber($phone);
}
?>