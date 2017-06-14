<?php
/**
 * Default Controller
 *
 * @author mseeger
 */
class debug extends Controller{
    /**
     *
     * @var Salesforce 
     */
            
    public function __construct() {
        parent::__construct();
        
    }
    
    public function Index(){
        $sfdc = new SFDCConnector();
        $prods = $sfdc->query("SELECT Id, sbqq__ProductPictureID__c, Name, ProductCode FROM Product2 LIMIT 30");
        echo "<pre>";
        var_dump($products);
        echo "</pre>";
    }
}

?>