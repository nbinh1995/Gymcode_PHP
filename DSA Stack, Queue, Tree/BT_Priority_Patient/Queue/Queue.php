<?php
include_once './Patient.php';
class Queue
{
    protected $front; 
    protected $back;
    function __construct()
    {
        $this->front =null;
        $this->back=null;
    }
    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($patient)
    {
        $oldBack = $this->back;
        $this->back = $patient;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }
   
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->data;
        $this->front = $this->front->next;
        return $removedValue;
    }

    public function display(){
        $text = '| ';
        $current = $this->front;
        while($current != null ){
            $text .= 'name: '.$current->data['name'].' - code: '.$current->data['code'].' | ';
            $current= $current->next;
        }
        return $text;
    }
}
?>