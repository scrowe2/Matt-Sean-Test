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
        $prods = $sfdc->query("SELECT Id, sbqq__ProductPictureID__c, Name, ProductCode FROM Product2 LIMIT 30");
        foreach ($prods->result->records as $prod){
            var_dump($prod);
        }
    }
}

?>