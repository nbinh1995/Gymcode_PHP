<?php
class Contact{
    private $id;
    private $email;
    private $phone;
    public function __construct($id,$email,$phone)
    {
      $this->id=$id;
      $this->email=$email;
      $this->phone=$phone;  
    }
    public function __get($key)
    {
        return $this->$key;
    } 
    public function __set($key,$value){
        $this->$key=$value;
    }
}
function loadRegistrations($fileName){
    $jsonData = file_get_contents($fileName);
    $arrData = json_decode($jsonData, true);
    return $arrData;
}

function saveDataJSON($fileName, $person)
{
    try {
        $contact = array(
            'name' => $person->__get('id'),
            'email' =>$person->__get('email'),
            'phone' => $person->__get('phone'),
        );
        $arrData = loadRegistrations($fileName);
        array_push($arrData, $contact);
        $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);
        file_put_contents($fileName, $jsonData);
        echo "Lưu dữ liệu thành công!";
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage(), "\n";
    }
}
$errorid=null;
$erroremail=null;
$errorphone=null;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      
        $status=false;
        if(empty($_POST['id'])){ $errorid = 'ID empty !!';$status=true;}
        if(empty($_POST['email'])){ $erroremail = 'Email empty !!';$status=true;}
        else { if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){$erroremail = 'Email not form !!';$status=true;}}
        if(empty($_POST['phone'])){ $errorphone = 'Phone empty !!';$status=true;}  
        if($status===false){
            $person = new Contact($_POST['id'],$_POST['email'],$_POST['phone']);
            saveDataJSON("info.json", $person);
            $person->__set('id',null);
            $person->__set('email',null);
            $person->__set('phone',null);
        }
    }
    $registrations = loadRegistrations('info.json');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            text-align: center;
        }
        fieldset{
            text-align: left;
            display: inline-flex;
        }
        input{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Register</legend>
            <label for="">ID</label><input type="text" name="id">
            <span><?php echo $errorid; ?></span>
            <label for="">Email</label><input type="text" name="email">
            <span><?php echo $erroremail; ?></span>
            <label for="">Phone</label><input type="text" name="phone">
            <span><?php echo $errorphone; ?></span>
            <input type="submit" value="Register">
            
        </fieldset>
    </form>
        <h2>Registration list</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php foreach ($registrations as $registration): ?>
                <tr>
                    <td><?= $registration['name']; ?></td>
                    <td><?= $registration['email']; ?></td>
                    <td><?= $registration['phone']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>