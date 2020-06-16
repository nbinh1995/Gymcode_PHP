<?php
class StopWatch{
    private $startTime;
    private $stopTime;

    function __construct()
    {  }

    function __get($name)
    {
        return $this->$name;
    }

    function start(){
        return $this->startTime = microtime(true);
    }

    function stop(){
        return $this->stopTime =  microtime(true);
    }

    function getElapsedTime(){
        return $this->stopTime - $this->startTime;
    }
}
?>