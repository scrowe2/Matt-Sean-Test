<?php
/**
 * Description of SFDCConnector
 *
 * @author mseeger
 */
class SFDCConnector {
    public $soap;
    
    public function __construct() {
        $this->soap = new SoapClient("sfdc_partner_v40.wsdl");
    }
    
    public function login($username, $password){
        $soap_data = new stdClass();
        $soap_data->username = SFDC_API_USER;
        $soap_data->password = SFDC_API_PASSWORD . SFDC_API_TOKEN;
        $login_response = $soap_data->login($soap_data);
        var_dump($login_response);
    }
}
