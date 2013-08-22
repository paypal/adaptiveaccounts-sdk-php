<?php
use PayPal\Service\AdaptiveAccountsService;
use PayPal\Types\AA\SetFundingSourceConfirmedRequest;
require_once('PPBootStrap.php');
/********************************************
 # SetFundingSourceConfirmed API
The SetFundingSourceConfirmed API operation lets your application set up bank accounts as funding sources for PayPal accounts.
This sample code uses AdaptiveAccounts PHP SDK to make API call.

SetFundingSourceConfirmed.php
Calls SetFundingSourceConfirmed API of AdaptiveAccounts webservices.
Called by SetFundingSourceConfirmed.html.php
********************************************/
$setFundingSourceConfirmed = new SetFundingSourceConfirmedRequest();

/*
 * (Optional) The merchant account Id of the PayPal account to
 * which the funding source was added in the AddPaymentCard or
 * AddBankAccount request. You must specify either the accountId
 * or mailAddress when making this request, but never both in
 * the same request.
 */
$setFundingSourceConfirmed->accountId = $_REQUEST['accountId'];

/*
 * (Optional) The email address of the PayPal account to which
 * the funding source was added in the AddPaymentCard or
 * AddBankAccount request. You must specify either the accountId
 * or mailAddress when making this request, but never both in
 * the same request.
 */
$setFundingSourceConfirmed->emailAddress = $_REQUEST['emailAddress'];

/*
 * (Required) The funding source key returned in the AddBankAccount or AddPaymentCard response.
 */
$setFundingSourceConfirmed->fundingSourceKey = $_REQUEST['fundingSourceKey'];

// ## Creating service wrapper object
// Creating service wrapper object to make API call
//Configuration::getAcctAndConfig() returns array that contains credential and config parameters
$service  = new AdaptiveAccountsService(Configuration::getAcctAndConfig());
try {
	// ## Making API call
	// invoke the appropriate method corresponding to API in service
	// wrapper object
	$response = $service->SetFundingSourceConfirmed($setFundingSourceConfirmed);
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
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";	
}
require_once 'Common/Response.php';
