<?php
/**
 * Description of SFDCConnector
 *
 * @author mseeger
 */
class SFDCConnector {
    /**
     *
     * @var SoapClient 
     */
    public $soap;
    
    /**
     *
     * @var String 
     */
    public $serverURL;
    
    /**
     *
     * @var String 
     */
    public $sessionId;
    
    /**
     *
     * @var SOAPClient 
     */
    public $cpqSoap;
    public function __construct() {
        $this->soap = new SoapClient('lib/sfdc_enterprise_v40.wsdl', array('trace' => 1));
        $this->cpqSoap = new SoapClient('lib/SalesforceCPQAPI.wsdl', array('trace' => 1));
        $this->login();
    }
    
    public function login(){
        $soap_data = new stdClass();
        $soap_data->username = SFDC_API_USER;
        $soap_data->password = SFDC_API_PASSWORD.SFDC_API_TOKEN;
        try{
            $login_response = $this->soap->login($soap_data);
        }
        catch(Exception $e){
            var_dump($this->soap->__getLastRequestHeaders());
            var_dump($this->soap->__getLastRequest());
            
            var_dump($this->soap->__getLastResponseHeaders());
            var_dump($this->soap->__getLastResponse());
        }
        $this->ServerURL = $login_response->result->serverUrl;
        $this->sessionId = $login_response->result->sessionId;
        $this->soap->__setLocation($this->serverURL);
        
        $sessionData = new stdClass();
        $sessionData->sessionId = $this->sessionId;
        $sessionHeader = new SoapHeader("urn:enterprise.soap.sforce.com", "SessionHeader", $sessionData);
        
        $packageVersions = new stdClass();
        $packageVersions->PackageVersion = new stdClass();
        $packageVersions->PackageVersion->majorNumber = 28;
        $packageVersions->PackageVersion->minorNumber = 0;
        $packageVersions->PackageVersion->namespace = "SBQQ";
        $packageVersionsHeader = new SoapHeader("urn:enterprise.soap.sforce.com","PackageVersions", $packageVersions);
        
        $headers = array($sessionHeader/*, $packageVersionsHeader*/);
        $this->cpqSoap->__setSoapHeaders($headers);
        $this->soap->__setSoapHeaders($headers);
   
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
    
    /**
     * 
     * @param String $productID
     * @return JSON ProductModel
     */
    public function LoadProductByID($productID){
        $LoadProductByIDResponse = NULL;
        $soap_data = new stdClass();
        $soap_data->productId = $productID;
        
        try{
            $LoadProductByIDResponse = $this->cpqSoap->LoadProductByID($soap_data);
        } 
        
        catch (Exception $ex) {
            //var_dump($ex);
        }
        
        return $LoadProductByIDResponse->result;
    }
}
