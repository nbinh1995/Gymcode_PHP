<?php
namespace PHP\class_lib\Employees\employee;
class Employee{
private $LastName;
private $FirstName;
private $BirthDay;
private $Address;
private $Position;
public function __construct($LastName=null,$FirstName=null,$BirthDay=null,$Address=null,$Position=null)
{
    $this->LastName=$LastName;
    $this->FirstName=$FirstName;
    $this->BirthDay=$BirthDay;
    $this->Address=$Address;
    $this->Position=$Position;
}

public function __get($name)
{   
    return  $this->$name;;
}

public function __set($name, $value)
{
    $this->$name = $value;
}

}



?>