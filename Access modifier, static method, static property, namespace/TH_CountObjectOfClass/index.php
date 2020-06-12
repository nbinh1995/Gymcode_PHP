<?php
require_once 'class_lib.php';
use php\class_lib\Application;
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
    echo "Total objects count: ". Application::$count ."<br/>";
    $app1 = new Application('App One');
    echo "Total objects count: ". Application::$count ."<br/>";
    $app2 = new Application('App Two');
    echo "Total objects count: ". Application::$count ."<br/>";
    echo $app1 .'<br/>';
    echo $app2 .'<br/>';
    ?></h4>
</body>
</html>