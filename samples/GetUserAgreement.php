<?php
use PayPal\Service\AdaptiveAccountsService;
use PayPal\Types\AA\GetUserAgreementRequest;
require_once('PPBootStrap.php');
/********************************************
 #GetUserAgreement API
The GetUserAgreement API operation lets you retrieve the user agreement for the customer to approve the new PayPal account.
This sample code uses AdaptiveAccounts PHP SDK to make API call.

GetUserAgreement.php
Calls GetUserAgreement API of AdaptiveAccounts webservices.
Called by GetUserAgreement.html.php
********************************************/
$getUserAgreement = new GetUserAgreementRequest();

// (Optional) The code for the country in which the user account
// is located. You do not need to provide this country code if
// you are passing the createAccount key. Allowable values are:
$getUserAgreement->countryCode  = $_REQUEST['countryCode'];

// (Optional) The key returned for this account in the
// CreateAccountResponse message in the createAccountKey field.
// If you specify this key, do not pass a country code or
// language code. Doing so will result in an error.
$getUserAgreement->createAccountKey = $_REQUEST['createAccountKey'];

// (Optional) The code indicating the language to be used for
// the agreement.
$getUserAgreement->languageCode = $_REQUEST['languageCode'];

// ## Creating service wrapper object
// Creating service wrapper object to make API call 
//Configuration::getAcctAndConfig() returns array that contains credential and config parameters
$service  = new AdaptiveAccountsService(Configuration::getAcctAndConfig());
try {
	
	// ## Making API call
	// invoke the appropriate method corresponding to API in service
	// wrapper object
	$response = $service->GetUserAgreement($getUserAgreement);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;
}

// ## Accessing response parameters
// You can access the response parameters as shown below
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
} else {
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "</table>";
}
require_once 'Common/Response.php';