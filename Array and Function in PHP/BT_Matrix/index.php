<?php
function sumCrossLine($matrix){
    $sum=0;
    for($i=0;$i<count($matrix);$i++){
            $sum += $matrix[$i][$i];
    }
    return $sum;
}
$nums=null;
$matrix=[];
$result =null;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['nums'])){
        $nums=$_POST['nums'];
        for($i=0;$i<$nums;$i++){
            $matrix[$i]=[];
            for($j=0;$j<$nums;$j++){
            $matrix[$i][$j]=$_POST["matrix$i-$j"];
            }}
        $result=sumCrossLine($matrix);
        }
  
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
            display: inline-block;
        }
        form{
        display: flex;
        flex-direction: column;
        align-items: center;}
        table input{
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <legend> Create Matrix</legend>

        Kich thuoc ma tran: 
        <input type="text"  id="js-nums" >
        <input type="button" value="Create" onclick="displayMatrix(document.getElementById('js-nums').value)">
     
        </fieldset>
       
        <div id="js-display"></div>
    </form>
    <h1>Result: <?= $result?></h1>
    <script>
        let display= document.getElementById('js-display');
           
        function displayMatrix(nums){
        let text=`<input type="text" name="nums" value="${nums}" hidden>
                    <table><caption>MATRIX ${nums}x${nums}</caption>`;
            for(let i=0;i<nums;i++){
                text+='<tr>'
                for(let j=0;j<nums;j++){
                    text+=`<td><input type='text' name='matrix${i}-${j}'></td>`;
                }
                text+='</tr>';
        }
            text+='</table><input type="submit" value="Submit">'; 
            display.innerHTML=text;
        }
    </script>
</body>
</html>