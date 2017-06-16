<?php
require_once 'CPQ_Feature.php';
require_once 'CPQ_ProductOption.php';
require_once 'CPQ_Product.php';

/**
 * Represents a configuration in Salesforce CPQ
 *
 * @author mseeger
 */
class CPQ_Configuration {
    /**
     *
     * @var CPQ_Product Object 
     */
    public $product;
    
    /**
     *
     * @var CPQ_Feature[] Object 
     */
    public $features;
    
    /**
     *
     * @var JSON 
     */
    public $LoadFromIdJSON;
    
    public function __construct() {
        $this->product = new CPQ_Product();
        $this->features = array();
        
    }
    public function LoadFromId($configurableProductId){
        $sfdc = new SFDCConnector();
        $model_json = $sfdc->LoadProductByID($configurableProductId);
        $this->LoadFromIdJSON = $model_json;
        $model_object = json_decode($model_json);
        
        /*
         * Pull the Top Level Product Info From the Json Model to the PHP Model
         */
        $this->product->Id = $model_object->record->Id;
        $this->product->Name = $model_object->record->Name;
        $this->product->Description = $model_object->record->Description;
        $this->product->SKU = $model_object->record->ProductCode;
        //$this->product->AbsoluteImageURL = "https://mfgqtc.my.salesforce.com/servlet/servlet.ImageServer?id=" . $model_object->record->SBQQ__ProductPictureID__c . "&oid=00D460000000MPU";
        
        /*
         * Pull the Features from the JSON Model to the PHO Model
         */
        
        foreach($model_object->record->SBQQ__Features__r->records as $f ){
            $featureToAdd = new CPQ_Feature();
            $featureToAdd->Id = $f->Id;
            $featureToAdd->Name = $f->Name;
            $featureToAdd->MaxOptions = property_exists($f, 'SBQQ__MinOptionCount__c') ? $f->SBQQ__MinOptionCount__c : 0;
            $featureToAdd->MinOptions = property_exists($f, 'SBQQ__MaxOptionCount__c') ? $f->SBQQ__MaxOptionCount__c : -1;
            $featureToAdd->order = $f->SBQQ__Number__c;
            
            $this->features[] = $featureToAdd;
        }
        var_dump($model_object);
    }
}
