<?php
include 'apps/autoload.php';
$router = new apps_libs_Router();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="layout/style.css">
</head>
<body>
    <div class="box">
    <div class="header">
        <h1>Library Manager</h1>
        <div class="nav">
        <div class="menu">
            <h3><a href="<?= $router-> createURL('home') ?>">Home</a></h3>
            <h3><a href="">Book</a></h3>
            <h3><a href="">Read</a></h3>
            <h3><a href="">BorrowBook</a></h3>
            <h3><a href="">Author</a></h3>
            <h3><a href="<?= $router-> createURL('categories/categories'); ?>">Categories</a></h3>
        </div>
        </div>
    </div>