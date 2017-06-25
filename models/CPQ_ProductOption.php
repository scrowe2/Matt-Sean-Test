<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CPQ_ProductOption
 *
 * @author mseeger
 */
class CPQ_ProductOption {
    /**
     *
     * @var String 
     */
    public $Id;
    /**
     *
     * @var CPQ_Product 
     */
    public $product;
    /**
     *
     * @var Integer 
     */
    public $quantity;
    /**
     *
     * @var Boolean 
     */
    public $selected;
    /**
     *
     * @var Boolean 
     */
    public $required;
    /**
     *
     * @var Integer 
     */
    public $order;
    /**
     *
     * @var Integer 
     */
    public $quantityEditable;
    /**
     *
     * @var Float 
     */
    public $unitPrice;
    
    /**
     * True if the field is a radion button
     * @var Boolean 
     */
    public $isRadio;
    
    /**
     *  Id of the Feature
     * @var String 
     */
    public $featureId;
    
    
    public function __construct() {
        $this->isRadio = false;
        $this->product = new CPQ_Product();
    }

}
