<?php
use PayPal\Service\AdaptiveAccountsService;
use PayPal\Types\AA\AccountIdentifierType;
use PayPal\Types\AA\GetVerifiedStatusRequest;
require_once('PPBootStrap.php');
/********************************************
 # GetVerifiedStatus API
The GetVerifiedStatus API operation lets you determine whether the specified PayPal account's status is verified or unverified.
This sample code uses AdaptiveAccounts PHP SDK to make API call.

GetVerifiedStatus.php
Calls GetVerifiedStatus API of AdaptiveAccounts webservices.
Called by GetVerifiedStatus.html.php
********************************************/
$getVerifiedStatus = new GetVerifiedStatusRequest();

// (Optional - must be present if the emailAddress field above
// is not) The identifier of the PayPal account holder. If
// present, must be one (and only one) of these account
// identifier types: 1. emailAddress 2. mobilePhoneNumber 3.
// accountId
$accountIdentifier=new AccountIdentifierType();

// (Required)Email address associated with the PayPal account:
// one of the unique identifiers of the account.
$accountIdentifier->emailAddress = $_REQUEST['emailAddress'];
$getVerifiedStatus->accountIdentifier=$accountIdentifier;
// (Required) The first name of the PayPal account holder.
// Required if matchCriteria is NAME. 
$getVerifiedStatus->firstName = $_REQUEST['firstName'];
				 
// (Required) The last name of the PayPal account holder.
// Required if matchCriteria is NAME.
$getVerifiedStatus->lastName = $_REQUEST['lastName'];
$getVerifiedStatus->matchCriteria = $_REQUEST['matchCriteria'];

// ## Creating service wrapper object
// Creating service wrapper object to make API call
//Configuration::getAcctAndConfig() returns array that contains credential and config parameters
$service  = new AdaptiveAccountsService(Configuration::getAcctAndConfig());
try {
	// ## Making API call
	// invoke the appropriate method corresponding to API in service
	// wrapper object
	$response = $service->GetVerifiedStatus($getVerifiedStatus);
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