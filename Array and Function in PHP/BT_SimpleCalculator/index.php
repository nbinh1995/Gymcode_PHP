<?php
function calc($x,$y){
return  "<br> Tổng $x + $y = ".($x+$y).
        "<br> Hiệu $x - $y = ".($x-$y).
        "<br> Tích $x x $y = ".($x*$y).
        "<br> Thương $x / $y = ".round($x/$y,1);
}
$error =null;
$result = null;
try{
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['num_1']) || 
            empty($_POST['num_2'])){
            if($_POST['num_2'] == '0')
            throw new Exception('/ by zero');else
            throw new Exception('DATA empty !!!');
        }else{
            $num_1 =$_POST['num_1'];
            $num_2 =$_POST['num_2'];
            $result = calc($num_1,$num_2);
        }
    }
}catch( Exception $err){
    $error = "ERROR: ".$err->getMessage();
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
            display: inline-block;
        }
        form{text-align: center;}
        h3{
            color: red;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Calculator</legend>
            <input type="text" name='num_1' placeholder="x">
            <input type="text" name="num_2" placeholder="y">
            <input type="submit" value="Calculator">
            <h3><?= $error?></h3> 
        </fieldset>
    </form>
    
    <h1>RESULT: <?= $result ?></h1>
</body>
</html>