<?php
$vn;
define('rate',23000,true);
if(isset($_GET['USD'])) {$money = $_GET['USD'];$vn = $money*rate;}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
    <form action="index.php" method="get">
        <fieldset style="display: inline-block;">
            <legend>Convert USD->VN</legend>
            <label for="">USD</label><input type="text" name='USD'>
            <label for="">VN</label><input type="text" value="<?php if(isset($vn)) echo $vn.' VND'?>" name='VN' disabled>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    </div>
</body>
</html>