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
</head>
<body>
    <table>
     <tr>
        <th>Last Name</th>
        <th>First Name</th>
        <th>BirthDay</th>
        <th>Address</th>
        <th>Position</th>
     </tr>
     <tr>
         <td><?= $_SESSION['detail']->__get('LastName')?></td>
         <td><?= $_SESSION['detail']->__get('FirstName')?></td>
         <td><?= $_SESSION['detail']->__get('BirthDay')?></td>
         <td><?= $_SESSION['detail']->__get('Address')?></td>
         <td><?= $_SESSION['detail']->__get('Position')?></td>
     </tr>   
    </table>
    <a href="index.php">BACK</a>
</body>
</html>