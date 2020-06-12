<?php
require_once 'class_lib.php';
use PHP\class_lib\Application;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4><?php
    $app1 = Application::getInstance();
    $app2 = Application::getInstance();
    //$app3 = new Application(); //Error
    ?></h4>
</body>
</html>