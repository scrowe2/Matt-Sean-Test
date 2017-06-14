<?php
/**
 * Default Controller
 *
 * @author mseeger
 */
class debug extends Controller{

    public function __construct() {
        parent::__construct();
        
    }
    
    public function Index(){
        
        $sfdc = new SFDCConnector();
        var_dump($sfdc);
    }
}

?>