<?php
use PayPal\Service\AdaptiveAccountsService;
use PayPal\Types\AA\AddPaymentCardRequest;
use PayPal\Types\AA\AddressType;
use PayPal\Types\AA\CardDateType;
use PayPal\Types\AA\NameType;
use PayPal\Types\AA\WebOptionsType;
require_once('PPBootStrap.php');

/********************************************
 #AddPaymentCard API
The AddPaymentCard API operation lets your application set up payment cards as funding sources for PayPal accounts.
This sample code uses AdaptiveAccounts PHP SDK to make API call.

AddPaymentCard.php
Calls AddPaymentCard API of AdaptiveAccounts webservices.
Called by AddPaymentCard.html.php
********************************************/
$nameOnCard = new NameType();

// (Required) First name of the account or payment card holder.
$nameOnCard->firstName  = $_REQUEST['firstName'];

// (Required) Last name of the account or payment card holder.
$nameOnCard->lastName = $_REQUEST['lastName'];

// (Optional) Middle name of the account or payment card holder.
$nameOnCard->middleName = $_REQUEST['middleName'];

// (Optional) A salutation for the account or payment card holder.
$nameOnCard->salutation = $_REQUEST['saluation'];

// (Optional) A suffix for the account or payment card holder.
$nameOnCard->suffix = $_REQUEST['suffix'];

$startDate = new CardDateType($_REQUEST['startMonth'], $_REQUEST['startYear']);
$expDate = new CardDateType($_REQUEST['expirationMonth'], $_REQUEST['expirationYear']);

// (Optional) Billing address of the payment card holder. See
// AddressType Fields for details.
$billingAddress = new AddressType();
$billingAddress->line1 = $_REQUEST['billingStreet'];

// (Optional) The second line of the address. Note: This field
// is required for Brazilian addresses.
$billingAddress->line2 = $_REQUEST['billingLine2'];

// (Required) The city.
$billingAddress->city = $_REQUEST['billingCity'];

// (Optional) The state code.
$billingAddress->state = $_REQUEST['billingState'];

// (Optional) The zip or postal code.
$billingAddress->postalCode = $_REQUEST['billingPostalCode'];
$billingAddress->countryCode = $_REQUEST['billingCountryCode'];

$addPaymentCard = new AddPaymentCardRequest();

// Optional) Unique identification number of the PayPal account
// to which to add the payment card. You must pass either an
// accountId or an emailAddress in this request. You can't leave
// both fields out of the message.
$addPaymentCard->accountId = $_REQUEST['accountID'];

// (Optional) Email address that uniquely identifies the PayPal
// account to which to add the payment card.
$addPaymentCard->emailAddress = $_REQUEST['emailAddress'];

// (Required if confirmationType is NONE) Unique identifier of
//  the account to which to add a payment card. Use in cases
//  where the payment card is being added without the account
//  holder's explicit confirmation. The value to pass is returned
//  in the createAccountKey field of a CreateAccount response. A
//  create account key response expires after 60 minutes. If you
//  pass an expired key to an Adaptive Accounts API, an error is
//  returned
$addPaymentCard->createAccountKey  = $_REQUEST['createAccountKey'];

// (Required) Name (as it appears on the card) of the payment card holder. 
$addPaymentCard->nameOnCard = $nameOnCard;

// (Required) The payment card number.
$addPaymentCard->cardNumber  = $_REQUEST['cardNumber'];

// (Required) The type of payment card to add. 
$addPaymentCard->cardType  = $_REQUEST['cardType'];

// (Optional) Date of birth of the payment card holder.
$addPaymentCard->cardOwnerDateOfBirth  = $_REQUEST['cardOwnerDateOfBirth'];

// The verification code of the payment card. This parameter is
// generally required for calls in which confirmationType is
// NONE. With the appropriate account review, this parameter can
// be optional.
$addPaymentCard->cardVerificationNumber = $_REQUEST['cardVerificationNumber'];

// (Optional) 2-digit issue number of the payment card (for
// Maestro cards only).
$addPaymentCard->issueNumber = $_REQUEST['issueNumber'];

// (Optional) Start date of the payment card. 
$addPaymentCard->startDate  = $startDate;

// (Optional) Expiration date of the payment card. 
$addPaymentCard->expirationDate  = $expDate;
$addPaymentCard->billingAddress = $billingAddress;


$addPaymentCard->confirmationType = $_REQUEST['confirmationType'];

// (Optional) Structure in which to pass the URLs for the return
// and cancelation web flows
if($addPaymentCard->confirmationType == 'WEB') {
	$serverName = $_SERVER['SERVER_NAME'];
	$serverPort = $_SERVER['SERVER_PORT'];
	$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
	
	// (Optional) The URL to which PayPal returns the account holder
	// once he or she completes confirmation of the payment card
	// addition
	if(isset($_REQUEST['returnURL'])) {
		$returnURL = $_REQUEST['returnURL'];
	} else {
		$returnURL = $url."/Common/WebflowReturnPage.php";
	}
	
	// (Optional) The URL to which PayPal returns the account holder
	// if he or she cancels confirmation of the payment card
	// addition.
	if(isset($_REQUEST['cancelURL'])) {
		$cancelURL = $_REQUEST['cancelURL'];
	} else {
		$cancelURL = $url. "/CreateAccount.html.php" ;
	}
	$webOption = new WebOptionsType();
	$webOption->cancelUrl = $cancelURL;
	$webOption->cancelUrlDescription = $_REQUEST['cancelURLDescription'];
	$webOption->returnUrl = $returnURL;
	$webOption->returnUrlDescription = $_REQUEST['returnURLDescription'];
	$addPaymentCard->webOptions = $webOption;
}

// ## Creating service wrapper object
// Creating service wrapper object to make API call 
//Configuration::getAcctAndConfig() returns array that contains credential and config parameters
$service  = new AdaptiveAccountsService(Configuration::getAcctAndConfig());
try {
	
	// ## Making API call
	// invoke the appropriate method corresponding to API in service
	// wrapper object
	$response = $service->AddPaymentCard($addPaymentCard);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;
}

// ## Accessing response parameters
// You can access the response parameters as shown below
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	Echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";	
} else {
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	$fundingSrcKey = $response->fundingSourceKey;
	$payPalURL = $response->redirectURL;

	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "<tr><td>FundingSrcKey :</td><td><div id='FundingSrcKey'>$fundingSrcKey</div> </td></tr>";
	echo "<tr><td>Redirect URL :</td><td> <div id='Redirect URL'><a href=$payPalURL><b>Redirect To PayPal</b></a><br></div></td></tr>";
	echo "</table>";
}
require_once 'Common/Response.php';
