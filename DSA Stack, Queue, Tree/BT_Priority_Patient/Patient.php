<?php
include('Queue/Node.php');
class Patient extends Node{

    function __construct($name,$code)
    {  
        parent::__construct(array('name'=>$name,'code'=>$code));
    }
    
}
?>