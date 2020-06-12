<?php
function randomArray(){
    $array =[];
    for($i=0;$i<100;$i++){
        array_push($array,rand(0,99));
    }
    return $array;
}
$array = randomArray();
$index=null;
$error=null;
$result=null;
try{
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['index'])){
        if($_POST['index']<0 || $_POST['index']>=100)
        throw new Exception('index over limit !!');
        $index = $_POST['index'];
        $result = "Value of index $index : $array[$index]";
    }
}}
catch(Exception $err){
    $error = '<br>ERROR: '.$err->getMessage();
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
    </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
        <legend>Diplay Index</legend> 
        Nhap index:
        <input type="text" name='index'>
        <input type="submit" value="Display">
        </fieldset>
        <?= $error?>
        <h3><?= $result ?></h3>
    </form>
    <?php echo '<pre>'; print_r($array);?>
</body>
</html>