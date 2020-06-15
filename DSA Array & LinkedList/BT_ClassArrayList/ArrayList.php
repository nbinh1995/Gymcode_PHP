<?php
class ArrayList{
    protected $arrayList;
    protected $size;
    function __construct($arr = '')
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
        $this->size = count($this->arrayList);
    }
    function isEmpty(){
        if($this->size == 0) return false;
        else return true;
    }
   
    function size(){
        return $this->size;
    }

    function addFirst($item){
        for($i=$this->size;$i>0;$i-- ){
            $this->arrayList[$i]=$this->arrayList[$i-1];  
        }
        $this->arrayList[0]=$item;
        $this->size++;
    }

    function addLast($item){
        $this->arrayList[$this->size]= $item;
        $this->size ++;
    }

    function addAll($arr){
        $this->arrayList=array_merge($this->arrayList,$arr);
        $this->size =count($this->arrayList);
    }

    function addToIndex($item,$index){
        if($index >= $this->size || $index < 0) return false;
        else{
        for($i=$this->size;$i>$index;$i-- ){
            $this->arrayList[$i]=$this->arrayList[$i-1];  
        }
        $this->arrayList[$index]=$item;
        $this->size++;
        return true;
    }}
        
    function removeByIndex($index){
        if($index >= $this->size || $index < 0) return false;
        else{
        for($i=$index;$i<$this->size-1;$i++){
            $this->arrayList[$i]=$this->arrayList[$i+1];
        }
        $this->size--;
        return true;
    }}

    function indexOf($item){
        for($i=0;$i<$this->size;$i++){
            if($item == $this->arrayList[$i]) return 'index: '.$i;
        }
        return 'No item';
    }
    
    function sort(){
        sort($this->arrayList);
        return $this->arrayList;
    }

    function display(){
        $text ='| ' ;
        for($i=0;$i<$this->size;$i++){
            $text .=$this->arrayList[$i]. ' | ';
        }
        return $text;
    }
    function reset(){
        $this->arrayList = [];
    }
}
?>