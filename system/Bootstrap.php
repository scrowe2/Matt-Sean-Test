<?php
require_once 'Error.php';
/**
 * Parses out the URL
 * Calls the Correct Controller / Method / and adds the Params String
 *
 * @author mseeger
 */
class Bootstrap {
    private $_url = null;
    private $_controller = null;
    
    private $_controllerPath = 'controllers/';
    
    /**
     *
     * @var Error[] 
     */
    private $_errors;

    
    public function __construct(){
        // Set the _url property
        $this->_getURL();
        $this->_errors = array();
        var_dump($this);
        if(empty($this->_url[0])){
            $this->_loadDefaultController();
            return;
        }
        
        // Load the called controler
        $this->_loadController();
        $this->_callControllerMethod();
                
    }
    
    private function _getURL(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }
    
    private function _loadController(){
        $file = $this->_controllerPath . $this->_url[0] . '.php';
        if(file_exists($file)){ 
            require_once $file;
             $this->_controller = new $this->_url[0];
        }
        else{
            echo "Error";
        }
    }
    
    /**
     * 
     */
    private function _loadDefaultController(){
        $file = $this->_controllerPath . DEFAULT_CONTROLLER . '.php';
        
        if(file_exists($file)){
            require_once $file;
            $d = DEFAULT_CONTROLLER;
            $this->_controller = new $d();
            $this->_controller->{DEFAULT_METHOD}();
        }
    }
    
    private function _callControllerMethod(){
        
        $argCount = count($this->_url);
        if($argCount >= 1){
            switch ($argCount) {
                case 4:
                case 3:
                case 2:
                    if(!method_exists($this->_controller, $this->_url[1])){
                        $this->_addError(new Error('No Method '. $this->_url[1] . ' in ' . $this->_url[0]));
                        return;
                    }
                    $this->_controller->{$this->_url[1]}();
                    break;
                default:
                    $this->_controller->{DEFAULT_METHOD}();
            }
        }
    }
    /**
     * 
     * @param Error $e
     */
    private function _addError($e){
        $this->_errors[] = $e;
    }
    
    public function _getErrors(){
        return $this->_errors;
    }
    
    
}

?>
