<?php
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
        <legend> INPUT </legend>
        <fieldset>
        LastName:
        <input type="text" name="LastName">
        FirstName:
        <input type="text" name="FirstName">
        BirthDay:
        <input type="text" name="BirthDay">
        Address:
        <input type="text" name="Address">
        Position:
        <input type="text" name="Position">
        <input type="submit" value="OKE">
        </fieldset>   
    </form>
</body>
</html>