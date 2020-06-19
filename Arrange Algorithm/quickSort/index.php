<?php
include_once 'JSON.php';
const FILE = 'arrayData.json';
function quick_sort($my_array)
 {
	$low = $high = array();
	if(count($my_array) < 2)
	{
		return $my_array;
	}
    $pivot = $my_array[0];
  
	foreach($my_array as $val)
	{
		if($val < $pivot)
		{
			$low[] = $val;
		}elseif ($val > $pivot)
		{
			$high[] = $val;
		}
	}
	return array_merge(quick_sort($low),[$pivot],quick_sort($high));
}
// creat array
function RandomString()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 7; $i++) {
            $randstring .= $characters[rand(0, strlen($characters))];
        }
        return $randstring;
}
function createString($num){
    $arr = [];
    for($i=0;$i<$num;$i++){
        $arr[]=RandomString();
    }
    return $arr;
}

function createNum($num){
    $arr = [];
    for($i=0;$i<$num;$i++){
        $arr[]=rand(1,100);
    }
    return $arr;
}
//--test------------------------
$data = new JSON(FILE);
// $arrString = createString(100);
// $arrNum = createNum(100);
// $data->saveDataJSON($arrNum);
// $data->saveDataJSON($arrString);
$array = $data->loadRegistrations();
print_r(quick_sort($array[0]));
print_r(quick_sort($array[1]));
?>
