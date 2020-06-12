<?php require_once 'class_lib.php'  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo '<br> Width: '.$rectangle->width; // 0utput: 10
echo '<br> Height: '.$rectangle->height; // 0utput: 20

$rectangle->height = 30;
$rectangle->width = 20;

echo '<br> Height new: '.$rectangle->height; // 0utput: 30
echo '<br> Width new: '.$rectangle->width; // 0utput: 20
echo '<br> Perimeter: '.$rectangle->getPerimeter(); // 0utput: 100
echo '<br> Area: '.$rectangle->getArea(); // Output: 600
echo ("<br>Your Rectangle". $rectangle->display());
?>
</body>
</html>