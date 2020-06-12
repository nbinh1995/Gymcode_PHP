<?php
    class Calculator{
        public $First;
        public $Second;
        public $Operand;
        function __construct($first,$second,$operand)
        {$this->First=  $first;
         $this->Second = $second;
         $this->Operand = $operand;
        }
        function calculato(){
            
            switch($this->Operand){
                case '+':
                    $Result = $this->First + $this->Second;
                break;
                case '-':
                    $Result = $this->First - $this->Second;
                break;
                case '*':
                    $Result = $this->First * $this->Second;
                break;
                case '/':
                    if($this->Second === '0') {
                        throw new Exception("Second = 0 ERROR");
                        }
                    $Result = $this->First / $this->Second;
                break;
            }
            return $Result;
        }   
    }
    $cal = null;
    $Result =null;
    
    try {
        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['First'])){
            // if
            $cal = new Calculator($_GET['First'],$_GET['Second'],$_GET['Operand']);
            $result = $cal->calculato();
            $Result= "$cal->First $cal->Operand $cal->Second = $result";
        }}
        catch(Exception $error){
            echo "Message $error";
        }
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
    <form action="index.php" method="GET" style="display: inline-block; text-align: left;">
        <fieldset>
        <legend>Calculator</legend>
            <label for=""style="display: inline-block;  padding-right:18px">First Operand</label>
            <input type="text" name="First"> <br><br>
            <label for="" style="display: inline-block;  padding-right:50px">Operand</label>
            <select name="Operand" id=""> 
                <option value="+">Add</option>
                <option value="-">Sub</option>
                <option value="*">Mul</option>
                <option value="/">Div</option>
            </select> <br> <br>
            <label for="">Second Operand</label>
            <input type="text" name="Second"> <br> <br>
            <input type="submit" value="Calculator">
        </fieldset>
    </form>
    <h1>Result: <?php if(isset($Result)) echo $Result;?> </h1> 
    </div>
</body>
</html>