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
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function Index(){
        $sfdc = new SFDCConnector();
        $products = $sfdc->query("SELECT Name, Id, ProductCode, Description FROM Product2 LIMIT 30");
        $this->view->renderHeader();
        
        $this->view->render("productListing", $products);
       
        $this->view->renderFooter();
    }
}

?>