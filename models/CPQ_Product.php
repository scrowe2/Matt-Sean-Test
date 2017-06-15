<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CPQ_Product
 *
 * @author mseeger
 */
class CPQ_Product {
    /**
     *
     * @var String 
     */
    public $Name;
    /**
     *
     * @var String 
     */
    public $Description;
    /**
     *
     * @var SKU 
     */
    public $SKU;
    /**
     *
     * @var URL 
     */
    public $AbsoluteImageURL;
    
    public function __construct($Name = NULL, $Description = NULL, $SKU = NULL, $AbsoluteImageURL = NULL) {
        $this->Name = $Name;
        $this->Description = $Description;
        $this->SKU = $SKU;
        $this->AbsoluteImageURL = $AbsoluteImageURL;
    }
    
}
