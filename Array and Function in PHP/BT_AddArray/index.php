<?php
$array1=null;
$array2=null;
$array = null;
function addArray($arr1,$arr2){
    $arr = $arr1;
    $len2 = count($arr2);
    for($i=0;$i<$len2;$i++){
        array_push($arr,$arr2[$i]);
    }
    return $arr;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['array1']) && !empty($_POST['array2'])){
        $array1= explode(',',$_POST['array1']);
        $array2= explode(',',$_POST['array2']);
        $array = addArray($array1,$array2);
    }
}

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
    h3{
        text-align: left;
        color: blue;
    }
</style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Input Array</legend>
            Array 1: <input type="text" name="array1" placeholder="vd: 1,2,3,...">
            Array 2: <input type="text" name="array2" placeholder="vd: 1,2,3,...">
            <input type="submit" value="ADD">
        </fieldset>
        <h3>RESULT: <?php echo'<br><pre>'; print_r($array);?></h3>
    </form>
    
</body>
</html>