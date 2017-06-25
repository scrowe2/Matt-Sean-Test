<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CPQ_Feature
 *
 * @author mseeger
 */
class CPQ_Feature {
    /**
     *
     * @var String 
     */
    public $Id;
    /**
     *
     * @var String 
     */
    public $Name;
    /**
     *
     * @var CPQ_ProductOption[]
     */
    public $options;
    /**
     *
     * @var Integer 
     */
    public $order;
    /**
     *
     * @var Integer 
     */
    public $MinOptions;
    /**
     *
     * @var Integer 
     */
    public $MaxOptions;
    
    /**
     * True if the option should be a radio button.
     * @var Boolean 
     */
    public $isRadio;
    
    public function __construct() {
        $this->isRadio = false;
        $this->options = array();
    }
}
