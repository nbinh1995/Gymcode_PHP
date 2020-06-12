<?php
class QuadraticEquation{
    private  $a;
    private  $b;
    private  $c;

    function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }

    function __get($name)
    {
        return $this->$name;
    }
    
    function getDiscriminant(){
        $detal = $this->b*$this->b-4*$this->a*$this->c;
        return $detal;
    }

    function getRoot1(){
        $detal = $this->getDiscriminant();
        if($detal<0) return 0; 
        else return (-$this->b + sqrt($detal))/(2*$this->a);
    }
    function getRoot2(){
        $detal = $this->getDiscriminant();
        if($detal<0) return 0; 
        else return (-$this->b - sqrt($detal))/(2*$this->a);
    }
}
?>