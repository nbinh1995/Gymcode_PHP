<?php
function maxArray($array){
    $max = $array[0][0];
    $X =0;
    $Y=0;
    for($x=0;$x<count($array);$x++){
        for($y=0;$y<count($array[$x]);$y++){
            if($x===0 && $y===0) continue;
            if($max < $array[$x][$y]) {
                $max =$array[$x][$y];
                $X =$x;
                $Y =$y;
            }
        }
    }
    return "MaxArray[$X][$Y] = $max";
}
function convertStr($str){
    $array = explode('],[', $str);
    $array[0]=substr($array[0],1);
    $len = count($array);
    $array[$len-1]=substr($array[$len-1],0,-1);
    for($i=0;$i<$len;$i++){
        $array[$i]=explode(',',$array[$i]);
    }
    return $array;
}
$strArray=null;
$array = null;
$result =null;
if($_SERVER['REQUEST_METHOD']==='POST'){
    if(!empty($_POST['array'])) {
        $strArray = $_POST['array'];
        $array=convertStr($strArray);
        $result= maxArray($array);
}}
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
<form action="" method="POST">
    <fieldset>
        <legend>MAX TWO DIMENSIONAL ARRAY</legend>
        <label for="array">Nhap mang 2 chieu can tim max: </label>
        <textarea name="array" id="array" cols="50" rows="5" placeholder="[a,b,c..],[m,n,j,..]"></textarea>
        <input type="submit" value="SearchMax">
    </fieldset>
</form>
<h1>RESULT: <?php echo $result?></h1>
<?php echo "<pre>"; print_r($array);?>  

</body>
</html>