<?php
namespace PHP\class_lib;
class Application {
    private static $instance;
    
    private function __construct()
    {
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Application();
            echo 'alo';
        }
        return self::$instance;
    }
}
?>
