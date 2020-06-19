<?php
class JSON{
    public $fileName;
    function __construct($fileName)
    {
        $this->fileName =$fileName;
    }
    function loadRegistrations(){
        // doc file 
        $jsonData = file_get_contents($this->fileName);
        // chuyen data tu dang json-> array
        $arrData = json_decode($jsonData, true);
        return $arrData;
    }
    function saveDataJSON($contact)
    {//$contact: array du lieu them vao
        try {
            // $contact = array(
            //     'name' => 'valueName',
            //     'email' =>'valueEmail',
            //     'phone' => 'valuePhone'
            // );
            $arrData = $this->loadRegistrations($this->fileName);
            array_push($arrData, $contact);
            // chuyen data tu dang array-> json
            $jsonData = json_encode($arrData, JSON_PRETTY_PRINT);
            //save vao file 
            file_put_contents($this->fileName, $jsonData);
            echo "Lưu dữ liệu thành công!";
        } catch (Exception $e) {
            echo 'Lỗi: ', $e->getMessage(), "\n";
        }
    }
}

?>