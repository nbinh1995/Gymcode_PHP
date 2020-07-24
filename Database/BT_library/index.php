<?php
include 'apps/autoload.php';
if(!empty($_GET['fun'])){
    manageCategory($_GET['fun']);
}

$router = new apps_libs_Router(__DIR__);
$router->router();
function manageCategory($func){
    switch($func){
        case 'delete':
            $conn = new apps_libs_Config();
            $con= $conn->getCon();
            $sql = "DELETE FROM catagorys WHERE id_catagory = :id";
            $stmt = $con->prepare($sql);
            $id = (int)$_GET['id'];
            $stmt->execute([':id'=>$id]);
            unset($conn);
        break;
        case 'add':
            $conn = new apps_libs_Config();
            $con= $conn->getCon();
            $sql = 'INSERT INTO catagorys (name_catogory) VALUES (:name)';
            $data = [':name'=> $_POST['name']];
            $stmt = $con->prepare($sql);
            $stmt->execute($data);
            unset($conn);
        break;
        case 'edit':
            $conn = new apps_libs_Config();
            $con= $conn->getCon();
            $sql = "UPDATE `catagorys` SET `name_catogory` = ? WHERE `id_catagory` = ?;";
            $stmt = $con->prepare($sql);
            $id = (int)$_POST['id'];
            $stmt->bindParam(1,$_POST['name']);
            $stmt->bindParam(2,$id); 
            $stmt->execute(); 
            unset($conn);
        break;
    }
}

?>
