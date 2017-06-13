<?php
/**
 * Default Controller
 *
 * @author mseeger
 */
class test extends Controller{
    /**
     *
     * @var Salesforce 
     */
    public $Salesforce;
    public function __construct() {
        parent::__construct();
        //$this->loadModel('Salesforce');
    }
    
    public function Index(){
        
        $this->view->renderHeader();
        $s = new SFDCConnector();
       
        $this->view->renderFooter();
    }
}

?>