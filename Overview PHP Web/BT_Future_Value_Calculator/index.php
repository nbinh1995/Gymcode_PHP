<?php
    $inventmentAmount = null;
    $yearlyInterestRate=null;
    $numberOfYears =null;
    $futureValue=null;
    if($_SERVER["REQUEST_METHOD"] === 'GET') {
        $inventmentAmount= $_GET['inventmentAmount']; 
        $yearlyInterestRate = $_GET['yearlyInterestRate'];
        $numberOfYears = $_GET['numberOfYears'];   
    }
    $futureValue = $inventmentAmount;
    for($i = 0; $i <(int)$numberOfYears ; $i++){
        $futureValue +=($yearlyInterestRate * $futureValue);
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
    <div style="text-align: center;" >
    <form action="index.php" method="get" style="display:inline-block; text-align: right;">
        <fieldset>
            <legend>Future Value Calculator</legend>
        <label for="inventment-amount">Inventment Amount</label>
        <input type="text" name="inventmentAmount" id="inventment-amount" > <br> <br>
        <label for="yearly-interest-rate">Yearly Interest Rate</label>
        <input type="text" name="yearlyInterestRate" id="yearly-interest-rate"> <br> <br>
        <label for="number-of-years">Number of Years</label>
        <input type="text" name="numberOfYears" id="number-of-years"> <br> <br>
        <input type="submit" value="Calculator">
        </fieldset> 
    </form>
    <p><?php
        echo "Future Value: $futureValue";
    ?></p> </div>
</body>
</html>