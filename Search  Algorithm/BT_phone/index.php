<?php
function arrayNetwork($arrNet,$arrPhone){
    $result=[];
    foreach($arrNet as $key => $value){
        $network=[];
        foreach($arrPhone as $phone){
            if($value === substr($phone,0,3)) $network[]=$phone; 
        }
     $result[]=[$key => $network];
    }
    return $result;
}
$result = null;
$arrNet = ['viettel'=>'086','mobi'=>'093','vina'=>'088'];
if(isset($_POST['data'])){
    $arrPhone = explode(',',$_POST['data']);
    $result = arrayNetwork($arrNet,$arrPhone);
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
        text-align: left;
    }
    form{
        text-align: center;
    }
    </style>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>PHONE</legend>
    DATA:
    <textarea name="data" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="SUBMIT">
    </fieldset>
    </form>
    <?php echo '<br><pre>';
        print_r($result);
    ?>
</body>
</html>