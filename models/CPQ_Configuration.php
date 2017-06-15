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
    
    public function __construct() {
        ;
    }
}
