
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form fieldset input{ width: 100%;}
        input[type=submit]{
            padding: 5px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
    <form action="display_discount.php" method="get" style="display: inline-block;text-align: left;">
        <fieldset>
            <legend>Product Discount Calculator</legend>
            <label for="">Product Description</label>
            <input type="text" name="Product_Description"> <br><br>
            <label for="">List Price</label>
            <input type="text" name="List_Price"> <br><br>
            <label for="">Discount Percent</label>
            <input type="text" name="Discount_Percent"> <br><br>
            <input type="submit" value="Calculate Discount">
        </fieldset>
    </form>
    </div>
</body>
</html>