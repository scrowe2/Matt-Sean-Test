<?php
/**
 * Default Controller
 *
 * @author mseeger
 */
class products extends Controller{
    /**
     *
     * @var Salesforce 
     */
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function Index(){
        $sfdc = new SFDCConnector();
        $products = $sfdc->query("SELECT Name, SBQQ__ProductPictureID__c, Id, ProductCode, Description, Image__c FROM Product2 WHERE Name != '' AND Description != '' AND ProductCode != '' ORDER BY Name ASC LIMIT 10");
        $this->view->renderHeader();
        
        $this->view->render("productListing", $products);
       
        $this->view->renderFooter();
    }
}

?>