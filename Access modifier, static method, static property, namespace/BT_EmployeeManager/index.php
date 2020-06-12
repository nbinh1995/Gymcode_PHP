<?php
 
require_once 'Employees/employee.php';
require_once 'Manager/EmployeeManager.php';
use PHP\class_lib\Employees\employee\Employee;
use PHP\class_lib\Manager\EmployeeManager\Manager;
session_start();
$manager = new Manager();

if(!isset($_SESSION['manager']))$_SESSION['manager']=[];


if(!empty($_POST['LastName']) &&
!empty($_POST['FirstName']) &&
!empty($_POST['BirthDay']) &&
!empty($_POST['Address']) &&
!empty($_POST['Position'])){
    $employee =new Employee($_POST['LastName'],$_POST['FirstName'],
    $_POST['BirthDay'],$_POST['Address'],$_POST['Position']); 
    array_push($_SESSION['manager'],$employee);
}
if(isset($_SESSION['manager'])) $manager->addEmployee($_SESSION['manager']);
// unset($_SESSION['manager']);
//edit
if(!empty($_POST['E_index'])&&
!empty($_POST['E_LastName']) &&
!empty($_POST['E_FirstName']) &&
!empty($_POST['E_BirthDay']) &&
!empty($_POST['E_Address']) &&
!empty($_POST['E_Position'])){
    $employee =new Employee($_POST['E_LastName'],$_POST['E_FirstName'],
    $_POST['E_BirthDay'],$_POST['E_Address'],$_POST['E_Position']);
    $manager->editEmployee($_POST['E_index'],$employee);
}

//menu
if(isset($_GET['index'])&& isset($_GET['name'])){
    switch($_GET['name']){
        case 'detail':
            $_SESSION['detail']=$manager->detailEmployee($_GET['index']);
            header('Location: /detailEmployee.php');
        break;
        case 'edit':
            $_SESSION['index']=$_GET['index'];
            $_SESSION['detail']=$manager->detailEmployee($_GET['index']);
            header('Location: /editEmployee.php');   
        break;
        case 'delete':
            $_SESSION['manager']=$manager->deleteEmployee($_GET['index']);
        break;
        }
}

var_dump($_SESSION['manager']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: flex;
            align-items: center;
        }
        table{
            border-collapse: collapse;
        }
        tr, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div> 
    
    <div><?= $manager->displayList()?></div>
    </div>
</body>
</html>
