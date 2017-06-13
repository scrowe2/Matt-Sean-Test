<?php
/**
 * Description of SFDCConnector
 *
 * @author mseeger
 */
class SFDCConnector {
    public $soap;
    
    public function __construct() {
        $this->soap = new SoapClient('lib/sfdc_enterprise_v40.wsdl', array('trace' => 1));
        $this->login();
    }
    
    public function login(){
        $soap_data = new stdClass();
        $soap_data->username = SFDC_API_USERNAME;
        $soap_data->password = SFDC_API_PASSWORD;
        try{
            $login_response = $this->soap->login($soap_data);
        }
        catch(Exception $e){
            var_dump($this->soap->__getLastRequestHeaders());
            var_dump($this->soap->__getLastRequest());
            
            var_dump($this->soap->__getLastResponseHeaders());
            var_dump($this->soap->__getLastResponse());
        }
        $this->serverURL = $login_response->result->serverUrl;
        $this->sessionId = $login_response->result->sessionId;
        $this->soap->__setLocation($this->serverURL);
        
        $sessionData = new stdClass();
        $sessionData->sessionId = $this->sessionId;
        $sessionHeader = new SoapHeader("urn:partner.soap.sforce.com", "SessionHeader", $sessionData);
        
        $this->soap->__setSoapHeaders($sessionHeader);
   
    }
    public function query($queryString){
        $soap_data = new stdClass();
        $soap_data->queryString = $queryString;
        try{
            $query_response = $this->soap->query($soap_data);
        }
        catch(SoapFault $e){
            echo $e->getMessage();
        }
        return $query_response;
    }
}
