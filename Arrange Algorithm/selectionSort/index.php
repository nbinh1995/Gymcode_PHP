<?php
$arr=[1, 9, 4.5, 6.6, 5.7, -4.5];
function selectionSort(&$arr){
    for($i=0;$i<count($arr);$i++){
        $min = $i;
        for($j=$i+1;$j<count($arr);$j++){
            if($arr[$j] < $arr[$min]) $min = $j;
        }
        if($min != $i){
            $tmp = $arr[$i];
            $arr[$i]=$arr[$min];
            $arr[$min]=$tmp;
        }
    }
}
selectionSort($arr);
echo '<br><pre>';
print_r($arr);
?>