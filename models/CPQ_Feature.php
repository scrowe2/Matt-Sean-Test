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
    
    public function __construct() {
        ;
    }
}
