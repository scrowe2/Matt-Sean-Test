<?php
/**
 * Description of SFDCConnector
 *
 * @author mseeger
 */
class SFDCConnector {
    public $soap;
    
    public function __construct() {
        $this->soap = new SoapClient('lib/sfdc_partner_v40.wsdl', array('trace' => 1));
        $this->login();
    }
    
    public function login(){
        $soap_data = new stdClass();
        $soap_data->username = SFDC_API_USER;
        $soap_data->password = SFDC_API_PASSWORD . SFDC_API_TOKEN;
        try{
            $login_response = $this->soap->login($soap_data);
        }
        catch(Exception $e){
            var_dump($this->soap->__getLastRequest());
        }
        
    }
}
