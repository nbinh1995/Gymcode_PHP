<?php
function minArray($array){
    $min = $array[0];
    for($i=1;$i<count($array);$i++){
        if($min>$array[$i]){
            $min = $array[$i];
        }
    }
    return $min;
}
$array =null;
$result = null;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['array'])){ 
        $array = explode(',',$_POST['array']);
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
            display: inline-flex;
        }
        form{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>Min Value Array</legend>
    Array:<input type="text" name="array" placeholder="vd: 1,2,3,...">
    <input type="submit" value="SearchMin">
    </fieldset>
    </form>
    <h1>RESULT: <?= $result?></h1>
   
</body>
</html>