<?php
include_once 'layout/header.php';
?>
    <div class="content">
        <form action="<?php $param =array('fun'=>'edit'); echo $router-> createURL('categories/categories',$param);?>" method="post">
            <table>
                <caption>Edit Categories</caption>
                <tr>
                    <td>Name_Category</td>
                    <td><input type="text" name="id" value="<?= $_GET['id']?>" >
                    <input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>    
        </form>
    </div>
<?php
include_once 'layout/footer.php';
?>