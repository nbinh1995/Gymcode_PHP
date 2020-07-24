<?php
function isClassName($str)
{   $regexp = '/^[CAP]{1}[0-9]{4}[GHIKLM]{1}$/';
    if (preg_match_all($regexp,$str)) {
        echo("<br>ClassName true format");
    } else {
        echo("<br>ClassName false format");
    }
}
$example=['CAP0318HIKLMG','M0318Ga','P0323M'];
foreach($example as $name){
    isClassName($name);
}
?>