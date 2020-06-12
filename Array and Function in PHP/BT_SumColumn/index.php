<?php
function sumColumn($matrix,$select){
    $sum=0;
    for($i=0;$i<count($matrix);$i++){
            $sum += $matrix[$i][$select-1];
    }
    return $sum;
}
$row=null;
$col=null;
$select=null;
$matrix=[];
$result =null;
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['row'])&&!empty($_POST['col'])&&!empty($_POST['select'])){
        $row=$_POST['row'];
        $col=$_POST['col'];
        $select=$_POST['select'];
        for($i=0;$i<$row;$i++){
            $matrix[$i]=[];
            for($j=0;$j<$col;$j++){
            $matrix[$i][$j]=$_POST["matrix$i-$j"];
            }}
        $result=sumColumn($matrix,$select);
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
        kich thuoc row:
        <input type="text"  id="js-row" >
        Kich thuoc col: 
        <input type="text"  id="js-col" >
        Chon cot ma tran can tinh tong:
        <input type="text"  id="js-select" >
        <input type="button" value="Create" onclick="displayMatrix()">
        </fieldset>
        <div id="js-display"></div>
    </form>
    <h1>Result: <?= $result?></h1>
    <script>
        let display= document.getElementById('js-display');
        let row = document.getElementById('js-row'); 
        let col =  document.getElementById('js-col');
        let select =  document.getElementById('js-select');
        function displayMatrix(){
        let text=`<input type="text" name="row" value="${row.value}" hidden>
                    <input type="text" name="col" value="${col.value}" hidden>
                    <input type="text" name="select" value="${select.value}" hidden>
                    <table><caption>MATRIX ${row.value}x${col.value}</caption>`;
            for(let i=0;i<row.value;i++){
                text+='<tr>'
                for(let j=0;j<col.value;j++){
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