<?php require_once 'class_lib.php';
$result=null;
if(!empty($_REQUEST['a']) && !empty($_REQUEST['b']) && !empty($_REQUEST['c'])){
    $calc = new QuadraticEquation($_REQUEST['a'],$_REQUEST['b'],$_REQUEST['c']);
    $detal = $calc->getDiscriminant();
    if($detal > 0) 
    {$result= 'The equation has 2 roots x1= '.
    $calc->getRoot1().' x2= '.$calc->getRoot2();} elseif($detal == 0){
        $result = 'The equation has 1 root x1=x2= '.$calc->getRoot1();
    }else {  $result= 'The equation has no roots';}
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
            <legend>QuadraticEquation</legend>
            a: <input type="text" name="a">
            b: <input type="text" name="b">
            c: <input type="text" name="c">
            <input type="submit" value="Calc">
        </fieldset>
        <h3><?= $result?></h3>
    </form>

</body>
</html>