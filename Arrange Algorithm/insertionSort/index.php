<?php
$arr= [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
function insertionSort(&$arr){
for ($i=0;$i<count($arr);$i++){
    $val = $arr[$i];
    $j = $i-1;
    while($j>=0 && $arr[$j] > $val){
        $arr[$j+1] = $arr[$j];
        $j--;
    }
    $arr[$j+1]= $val;
}
}
insertionSort($arr);
echo '<br><pre>';
print_r($arr);
?>