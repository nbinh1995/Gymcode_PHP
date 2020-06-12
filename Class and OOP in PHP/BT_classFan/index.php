<?php require_once 'class_lib.php';
$fan1 = new Fan();
$fan1->__set('radius',10);
$fan1->__set('color','yellow');
$fan1->__set('on',true);
$fan1->__set('speed',Fan::FAST);

$fan2 = new Fan();
$fan2->__set('speed',Fan::MEDIUM);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= 'Fan1: '.$fan1->toString();?> </h3>
    <h3><?= 'Fan2:  '.$fan2->toString();?></h3>
</body>
</html>