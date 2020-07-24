<?php
class apps_libs_Router{
    /** PARAM control page */
    const PARAM_NAME = 'r';

    /** PAGE DEFAULT */
    const ADMIN_PAGE = 'home';

    /** INDEX PAGE DEFAULT */
    const INDEX_PAGE = 'index';

    /** Source Path file */
    public static $sourcePATH;
    
    public function __construct($sourcePATH='')
    {   if($sourcePATH)
        self::$sourcePATH = $sourcePATH; 
    }
    /**
     * DESC: read $_GET
     * @param string name
     * @return GET[name]
     */
    public function getGET($name=null){  
        if($name!=null){
            return isset($_GET[$name]) ? $_GET[$name]:null;
        }
        return $_GET;
    } 
    /**
     * DESC: read $_POST
     * @param string name
     * @return POST[name]
     */
    public function getPOST($name=null){
        if($name!=null){
            return isset($_POST[$name]) ? $_POST[$name]:null;
        }
        return $_POST;
    } 
    /**
     * DESC: direct control
     * @return page url
     */
    public function router(){
        $url = $this->getGET(self::PARAM_NAME);
        if(!is_string($url) || !$url || $url == self::INDEX_PAGE){
            $url = self::ADMIN_PAGE; 
        }
        $path = self::$sourcePATH.'/'.$url.'.php';
        if(file_exists($path)){
            return require_once $path;
        }else{
            return $this->pageNotFound(); 
        }

    }
    /**
     * DESC: page NOt Found
     * @return  page not found
     */
    public function pageNotFound(){
        echo '404 Page Not Found';
        die();
    }
    /**
     * DESC: create URL
     * @param string url: value PARAM_NAME
     * @param string param: array name key_value...
     * @return url
     */
    public function createURL($url,$param=[]){
        if($url){
            $param[self::PARAM_NAME] = $url;
            return $_SERVER['PHP_SELF'].'?'.http_build_query($param);
        }
    }
    /**
     * DESC: go to url page 
     */
    public function redirect($url){
        $u = $this->createURL($url);
        header("Location: $u");
    }

}
?>
