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
        echo"<script>console.debug(";var_dump($sfdc);echo ");</script>";
    }
}

?>