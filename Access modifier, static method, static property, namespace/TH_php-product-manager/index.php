<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";
use Services\ProductManager;
use Models\Product;
$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>
<?php
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}?></h4>
</body>
</html>