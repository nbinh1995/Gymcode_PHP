<?php
include_once ('Node.php');
class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if($this->lastNode == NULL)
            $this->lastNode = $link;
        $this->count++;
    }

    public function addLast($data)
    {
        if($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        }else {
            $this->addFirst($data);
        }
    }

    public function add($data,$index){
        if($index > $this->count || $index < 0) return false;
        elseif($index == 0) {$this->addFirst($data); return true;}
        elseif($index == $this->count) {$this->addLast($data); return true;}
        else{   $link = new Node($data);
            $count = 0;
            $previous = null;
            $current = $this->firstNode;
        while($current != NULL) 
        {   if($index == $count){
                $previous->next = $link;
                $link->next = $current;
                $this->count++;
                return true;
            }
            else{
                $previous = $current;
                $current = $current->next;
                $count++;
                }
        }
        }
        
    }

    public function remove($index){
        if($index > $this->count || $index < 0) return false;
        else{  
            $count = 0;
            $previous = null;
            $current = $this->firstNode;
        while($current != NULL) 
        {   if($index == $count){
                $previous->next = $current->next;
                unset($current);
                $this->count--;
                return true;
            }
            else{
                $previous = $current;
                $current = $current->next;
                $count++;
                }
        }
        }
        
    }

    public function removeObj($node){
            $previous = null;
            $current = $this->firstNode;
        while($current != NULL) 
        {   if($current->data == $node->data)
            {
                $previous->next = $current->next;
                unset($current);
                $this->count--;
                return true;
            }else{
                $previous = $current;
                $current = $current->next;
                }
        }
        return false;
    }

    public function get($index){
        if($index > $this->count || $index < 0) return false;
        else{  
            $count = 0;
            $current = $this->firstNode;
        while($current != NULL) 
        {   if($index == $count){
                return $current;
            }
            else{
                $current = $current->next;
                $count++;
                }
        }
        }
        
    }

    public function indexOf($node){
        $count=0;
        $current = $this->firstNode;
    while($current != NULL) 
    {   if($current->data == $node->data)
        {   
            return $count;
        }else{
            $current = $current->next;
            $count++;
            }
    }
    return false;
    }

    public function size()
    {
        return $this->count;
    }

    public function printList()
    {
        $current = $this->firstNode;
        $text='|';
        while($current != NULL)
        {
            $text .= $current->readNode().'|'; 
            $current = $current->next;
        }
        return $text;
    }
} 
?>