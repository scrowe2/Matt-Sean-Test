<?php
/**
 * Description of Salesforce
 *
 * @author mseeger
 */
class Salesforce extends Model{
    public $sessionId;
    public $serverURL;
    
    public function __construct(){
        parent::__construct();
        $this->login();
    }
    
    private function login(){
        //echo "**ATTEMPTING TO LOGIN TO SALESFORCE\n";
	$reqXML = new DOMDocument();
	$s_Envelope = $reqXML->createElementNS ("http://schemas.xmlsoap.org/soap/envelope/" , "s:Envelope");
	$reqXML->appendChild($s_Envelope);

	$s_Body = $reqXML->createElementNS ("http://schemas.xmlsoap.org/soap/envelope/" , "s:Body");
	$s_Envelope->appendChild($s_Body);

	$sf_login = $reqXML->createElementNS ("urn:[artner.soap.sforce.com" , "sf:login");
	$s_Body->appendChild($sf_login);

	$sf_username = $reqXML->createElementNS ("urn:partner.soap.sforce.com" , "sf:username", SFDC_API_USER);
	$sf_login->appendChild($sf_username);

	$sf_password = $reqXML->createElementNS ("urn:partner.soap.sforce.com" , "sf:password", SFDC_API_PASSWORD . SFDC_API_TOKEN);
	$sf_login->appendChild($sf_password);

        
        
        
	$ch = curl_init("https://login.salesforce.com/services/Soap/u/30.0");
	//$ch = curl_init("https://login.salesforce.com/services/Soap/c/30.0");
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml', 'SOAPAction: ""'));
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $reqXML->saveXML());
	$result = curl_exec($ch);
	curl_close($ch);
        
        
	$resXML = new DOMDocument();
	$resXML->loadXML($result);
	$this->sessionId = $resXML->getElementsByTagName("sessionId")->item(0)->textContent;
	$this->serverURL = $resXML->getElementsByTagName("serverUrl")->item(0)->textContent;


    }
}
