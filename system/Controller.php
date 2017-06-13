<?php
/**
 * Base controller ot be extended to make controller building and calling views super easy.
 *
 * @author mseeger
 */
class Controller {
    /**
     *
     * @var View 
     */
    public $view;
    
    
    public function __construct(){
        $this->view = new View();
        
    }
    
    public function loadModel($modelName, $alias=null){
        
        $file = 'models/' . $modelName . '.php';
        if (file_exists($file)) {
            require 'models/' . $modelName . '.php';
            if($alias != null){
                $this->$alias = new $modelName();
            }
            else{
                $this->$modelName = new $modelName();
            }
            
        }   
    }
    public function Index(){
        echo __METHOD__;
    }
            
    
}

?>