<?php
$Product_Description = null;
$List_Price = null;
$Discount_Percent = null;
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $Product_Description = $_GET['Product_Description'];
    $List_Price =  $_GET['List_Price'];
    $Discount_Percent =$_GET['Discount_Percent'];
}
$Discount_Amount= $List_Price * $Discount_Percent * 0.1;
$Discount_Price = $List_Price - $Discount_Amount;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        tr, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
    <table style="display: inline-block; border: 1px black solid">
        <tr>
            <th colspan="2"><?php echo $Product_Description;?></th>
        </tr>
        <tr>
            <td>Discount Amount</td>
            <td>Discount Price</td>
        </tr>
        <tr>
            <td><?php echo $Discount_Amount;?></td>
            <td><?php echo $Discount_Price;?></td>
        </tr>
    </table>
    </div>
</body>
</html>