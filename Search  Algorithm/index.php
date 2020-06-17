<!-- tao mang 20 phan tu kiem tra so 5 co trong mang ko. tra lai index -->
<!-- tao mang 100 phan tu kiem tra so 5 xuat hien trong mang -->
<?php
// $arr1 = [10,5,30,60,44,22,33,12,64,32,77,88,9,15,30,11,5,8,2,4,31,6];
// $arr2 = [10,11,30,60,44,22,33,12,64,32,77,88,9,15,30,11,0,8,2,4,31,6];
// function indexOf($arr,$search){
//     for($i=0;$i<count($arr);$i++){
//         if($arr[$i] === $search) return $i;
//     }
//     return -1;
// }

// echo $temp = indexOf($arr1,5)!=-1 ? '<br>So 5 co index= '.$temp: '<br>Ko ton tai';
// echo $temp = indexOf($arr2,5)!=-1 ? '<br>So 5 co index= '.$temp : '<br>Ko ton tai';
//-----------------------------------------
// function createArray($num)
// {
//     $arr = [];
//     for ($i = 1; $i < $num; $i++) {
//         $arr[] = rand(1, 10);
//     }
//     return $arr;
// }

// function countValue($arr, $value)
// {
//     $count = 0;
//     for ($i = 0; $i < count($arr); $i++) {
//         if ($arr[$i] === $value) $count++;
//     }
//     return $count;
// }
// $arr = createArray(100);
// echo 'so phan tu 5  xuat hien: ' . countValue($arr, 5);
$arr =[1,2,3,4,6,7,8,9,10,11,12,13,14,15,16,17,18,19];
$right = count($arr)-1;

function searchBinary($arr,$value,$left,$right){
    
    if($left >$right) return -1;
    $middle = floor(($right+$left)/2);
    if($value == $arr[$middle]) return $middle;
    elseif($value < $arr[$middle]) return searchBinary($arr,$value,$left,$middle-1);
    elseif($value > $arr[$middle]) return searchBinary($arr,$value,$middle+1,$right);   
}
$temp =searchBinary($arr,5,0,$right);
    echo 'index '.$temp;
?>