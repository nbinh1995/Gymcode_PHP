<?php
require_once 'Employees/employee.php';
require_once 'Manager/EmployeeManager.php';
use PHP\class_lib\Employees\employee\Employee;
use PHP\class_lib\Manager\EmployeeManager\Manager;
session_start(); 

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
    <form action="index.php" method="post">
    <legend> EDIT </legend>
        <fieldset>
        <input type="text" name="E_index"value="<?=$_SESSION['index']?>"  hidden>
        LastName:
        <input type="text" name="E_LastName" value="<?=$_SESSION['detail']->__get('LastName')?>">
        FirstName:
        <input type="text" name="E_FirstName"value="<?=$_SESSION['detail']->__get('FirstName')?>">
        BirthDay:
        <input type="text" name="E_BirthDay"value="<?=$_SESSION['detail']->__get('BirthDay')?>">
        Address:
        <input type="text" name="E_Address"value="<?=$_SESSION['detail']->__get('Address')?>">
        Position:
        <input type="text" name="E_Position"value="<?=$_SESSION['detail']->__get('Position')?>">
        <input type="submit" value="OKE">
        </fieldset>   
    </form>
</body>
</html>