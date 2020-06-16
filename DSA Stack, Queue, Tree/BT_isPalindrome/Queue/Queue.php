<?php
include_once('Node.php');
class Queue
{
    private $front; 
    private $back;
    function __construct()
    {
        $this->front =null;
        $this->back=null;
    }
    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node($value);
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
            $text .= $current->data.' | ';
            $current= $current->next;
        }
        return $text;
    }
}
?>