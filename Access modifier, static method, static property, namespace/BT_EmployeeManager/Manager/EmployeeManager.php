<?php
namespace PHP\class_lib\Manager\EmployeeManager;
class Manager{
    private $employees;
    public function __construct()
    {
        $this->employees = [];
    }
    
    public function displayList(){
        $text = '<table><caption><h3><a href="addEmployee.php">ADD</a></h3>Danh Sách Nhân Sự</caption>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Position</th>
                <th>Function</th>
            </tr>';
        for($i=0;$i<count($this->employees);$i++){
            $text.='<tr><td>'.$this->employees[$i]->__get('LastName').'</td>';
            $text.='<td>'.$this->employees[$i]->__get('FirstName').'</td>';
            $text.='<td>'.$this->employees[$i]->__get('Position').'</td>';
            $text .='<td><a href="/?name=detail&index='.$i.'">DETAIL</a>
                    <a href="/?name=edit&index='.$i.'">EDIT</a>
                    <a href="/?name=delete&index='.$i.'">DELETE</a></td></tr>';
        }
            $text .='</table>';
        return $text;
    }

    public function addEmployee($employees){
       $this->employees=$employees;
       
    }

    public function detailEmployee($index){
        return  $this->employees[$index];
            
    }

    public function deleteEmployee($index){
        array_splice( $this->employees,$index,1);
        return $this->employees;
    }

    public function editEmployee($index,$employee){ 
        array_splice( $this->employees,$index,1,$employee);
        return $this->employees;
    }
}
?>