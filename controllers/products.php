<?php
/**
 * Default Controller
 *
 * @author mseeger
 */
class products extends Controller{
    /**
     *
     * @var CPQ_Configuration 
     */
    public $Config;
    public function __construct() {
        parent::__construct();
        
    }
    
    public function Index(){
        //try{
            $sfdc = new SFDCConnector();
        //}
        //catch(Exceptions $e){
        //    var_dump($e);
        //}
        $products = $sfdc->query("SELECT Name, SBQQ__ProductPictureID__c, Id, ProductCode, Description, WebConfigurable__c FROM Product2 WHERE AvailableOnWeb__c = TRUE AND Name != '' AND Description != '' AND ProductCode != '' ORDER BY WebConfigurable__c DESC, Name ASC LIMIT 30");
        $this->view->renderHeader();
        //var_dump($products);
        $this->view->render("productListing", $products);
        //var_dump($sfdc);
        $this->view->renderFooter();
    }
    
    public function configure(){
        $this->loadModel("CPQ_Configuration", "Config");
        $this->Config->LoadFromId($_GET['pid']);
        
        $this->view->renderHeader();
        
        
       
        $this->view->render('configuration',$this->Config);
        
        
        $this->view->renderFooter();
    }
    
}

?>
