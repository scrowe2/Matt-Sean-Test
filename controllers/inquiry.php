<?php
/**
 * Description of inquiry
 *
 * @author mseeger
 */
class inquiry extends Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        
    }
    public function thankYou(){
        $this->view->renderHeader();
        $this->view->render("thanks");
        $this->view->renderFooter();
    }
}
