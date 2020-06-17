<?php
function createArray($num)
{
    $arr = [];
    for ($i = 1; $i < $num; $i++) {
        $arr[] = rand(1, 10);
    }
    return $arr;
}

function countValue($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] === $value) $count++;
    }
    return $count;
}
$value =5;
$arr = createArray(100);
echo "So $value xuat hien: " . countValue($arr,$value);
?>