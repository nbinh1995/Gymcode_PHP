<?php
function minArray($array){
    $min = $array[0];
    $index = 0;
    for($i=1;$i<count($array);$i++){
        if($min>$array[$i]){
            $min = $array[$i];
            $index = $i;
        }
    }
    return $index;
}
$stArray = null;
$array =null;
$result = null;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['array'])){ 
        $stArray = $_POST['array'];
        $array = explode(',',$stArray);
        $result=minArray($array);
    }}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            display: inline-block;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>Min Index Array</legend>
    <label for="">Nhap mang can tim min(vd: 1,2,3,4,5,6): </label>
    <input type="text" name="array">
    <input type="submit" value="SearchMin">
    </fieldset>
    </form>
    <h1>RESULT: <?= $result?></h1>
</body>
</html>