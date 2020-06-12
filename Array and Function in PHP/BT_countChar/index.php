<?php
function countChar($string,$char){
    $count=0;
    for($i=0;$i<strlen($string);$i++){
        if($char === $string[$i]) $count++;
    }
    return $count;
}
$string =null;
$char=null;
$result=null;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['string'])&& !empty($_POST['char'])){
        $string=$_POST['string'];
        $char = $_POST['char'];
        $result = countChar($string,$char);
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
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Count Char</legend>
            Nhap chuoi: <input type="text" name="string">
            Nhap ky can dem: <input type="text" name="char">
            <input type="submit" value="Result">
        </fieldset>
    </form>
    <h3>Result: <?php echo $result ?></h3>
</body>
</html>