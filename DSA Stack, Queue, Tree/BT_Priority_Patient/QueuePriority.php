<?php
include_once('Queue/Queue.php');
class QueuePriority extends Queue{
    public $arrPriority;
    public $Priority;
    function __construct($Priority)
    {   
        $this->Priority =$Priority;
        foreach($this->Priority as $code){
        $this->arrPriority["$code"] = new Queue;}
        parent::__construct();
    }

    function enqueue($patient)
    {  
        foreach($this->Priority as $code){
            if($patient->data['code'] == $code) $this->arrPriority["$code"]->enqueue($patient);
        }
    }

    function List(){
        foreach($this->arrPriority as $queue){
            while(!$queue->isEmpty()){
                $patient= $queue->dequeue();
                $oldBack = $this->back;
                $this->back = new Patient($patient['name'],$patient['code']);
                if ($this->isEmpty()) {
                $this->front = $this->back;
                } else {
                $oldBack->next = $this->back;
                }
        }   
        }
    }
    
}
?>