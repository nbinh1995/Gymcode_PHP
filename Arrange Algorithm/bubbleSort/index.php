<?php
$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
function bubbleSort(&$arr){
    for($i=0;$i<count($arr)-1;$i++){
        for($j=$i+1;$j<count($arr);$j++){
            if($arr[$i] > $arr[$j]){
                $tmp = $arr[$j];
                $arr[$j]=$arr[$i];
                $arr[$i]=$tmp;
            }
        }
    }
}
bubbleSort($arr);
echo '<br><pre>';
print_r($arr);
?>