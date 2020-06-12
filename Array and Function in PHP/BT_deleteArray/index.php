<?php

function deleteArray($array,$value){
    $index =[];
    for($i=0;$i<count($array);$i++){
        if($value == $array[$i]){
            array_push($index,$i);
        }
    }
    for($i=count($index)-1;$i>=0;$i--){
        for($j=$index[$i]; $j<count($array)-1;$j++){
            $array[$j]=$array[$j+1];
        }
        array_pop($array);
    }
    return $array;
}
$array = [10,20,8,10,5,30];
$value=null;
$result=null;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['value'])){ 
        $value = $_POST['value'];
        $result=deleteArray($array,$value);
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
            <legend>Delete Array</legend>
            Nhap value can xoa:
            <input type="text" name='value'>
            <input type="submit" value="Delete">
        </fieldset>
    </form>
    <h1>RESULT: <?php echo '<br><pre>'; print_r($result);?></h1>
</body>
</html>