<?php
$conn = new apps_libs_Config();
$con= $conn->getCon();
$sql = 'SELECT * FROM catagorys';
$table = $con->query($sql);
unset($conn);
?>
<?php
include_once 'layout/header.php';
?>
    <div class="content">
        <table>
            <caption>Categories List</caption>
            <tr>
                <td>ID_Category</td>
                <td>Name_Category</td>
                <td>&nbsp</td>
            </tr>
            <?php foreach($table as $row):?>
            <tr>
                <td><?= $row['id_catagory']?></td>
                <td><?= $row['name_catogory']?></td>
                <td><a href="<?php $param =array('id'=>$row['id_catagory']); echo $router-> createURL('categories/editCategory',$param);?>">EDIT</a> 
                <a href="<?php $param =array('fun'=>'delete','id'=>$row['id_catagory']); echo $router-> createURL('categories/categories',$param);?>">DELETE</a></td>
            </tr>
            <?php endforeach ?>
        </table>
        <h3><a href="<?php $param =array('id'=>$row['id_catagory']); echo $router-> createURL('categories/addCategory',$param);?>">Add New category</a></h3> 
    </div>
<?php
include_once 'layout/footer.php';
?>