<?php
use PayPal\Service\AdaptiveAccountsService;
use PayPal\Types\AA\AddBankAccountRequest;
use PayPal\Types\AA\WebOptionsType;
require_once('PPBootStrap.php');
/********************************************
 # AddBankAccount API
The AddBankAccount API operation lets your application set up bank accounts as funding sources for PayPal accounts.
This sample code uses AdaptiveAccounts PHP SDK to make API call.

AddBankAccount.php
Calls AddBankAccount API of AdaptiveAccounts webservices.
Called by AddBankAccount.html.php
********************************************/
$addBankAccount = new AddBankAccountRequest();

// (Optional) The identification number of the PayPal account
// for which a bank account is added. You must specify either
// the accountId or emailAddress for this request.
$addBankAccount->accountId = $_REQUEST['accountID'];

// (Optional) The identification number of the PayPal account
// for which a bank account is added. You must specify either
// the accountId or emailAddress for this request.
$addBankAccount->emailAddress = $_REQUEST['emailAddress'];
$addBankAccount->createAccountKey  = $_REQUEST['createAccountKey'];
$addBankAccount->bankCountryCode  = $_REQUEST['bankCountryCode'];

// (Optional) The default value is UNKNOWN.
$addBankAccount->bankName  = $_REQUEST['bankName'];

// (Optional) The bank's routing number.
$addBankAccount->routingNumber  = $_REQUEST['routingNumber'];

// (Optional) The type of bank account to be added. Allowable
// values are: CHECKING SAVINGS BUSINESS_SAVINGS
// BUSINESS_CHECKINGS NORMAL UNKNOWN
$addBankAccount->bankAccountType  = $_REQUEST['bankAccountType'];

// (Optional) The account number (BBAN) of the bank account to
// be added.
$addBankAccount->bankAccountNumber = $_REQUEST['bankAccountNumber'];

// (Optional) The IBAN for the bank.
$addBankAccount->iban = $_REQUEST['iban'];

// CLABE represents the bank information for countries like
// Mexico.
$addBankAccount->clabe  = $_REQUEST['clabe'];

// (Optional) The Bank/State/Branch number for the bank.
$addBankAccount->bsbNumber  = $_REQUEST['bsbNumber'];

// (Optional) The branch location.
$addBankAccount->branchLocation = $_REQUEST['branchLocation'];

// (Optional) The branch sort code.
$addBankAccount->sortCode  = $_REQUEST['sortCode'];

// (Optional) The transit number of the bank.
$addBankAccount->bankTransitNumber = $_REQUEST['bankTransitNumber'];

// (Optional) The institution number for the bank.
$addBankAccount->institutionNumber = $_REQUEST['institutionNumber'];

// (Optional) The branch code for the bank.
$addBankAccount->branchCode = $_REQUEST['branchCode'];
$addBankAccount->agencyNumber = $_REQUEST['agencyNumber'];

// (Optional) The code that identifies the bank where the
// account is held.
$addBankAccount->bankCode = $_REQUEST['bankCode'];

// (Optional) The RIB key for the bank.
$addBankAccount->ribKey = $_REQUEST['ribKey'];

// (Optional) The control digits for the bank.
$addBankAccount->controlDigit = $_REQUEST['controlDigit'];

// (Optional) The date of birth of the account holder in
// YYYY-MM-DDZ format, for example 1970-01-01Z.
$addBankAccount->accountHolderDateOfBirth = $_REQUEST['accountHolderDateOfBirth'];

// (Optional) Additional structure to define the URLs for the
// cancellation and return web flows.
$addBankAccount->confirmationType = $_REQUEST['confirmationType'];

if($addBankAccount->confirmationType == 'WEB') {
	$serverName = $_SERVER['SERVER_NAME'];
	$serverPort = $_SERVER['SERVER_PORT'];
	$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
	
	// (Optional) The URL to which bank account/payment card holders
	// return after they add the account or payment card.
	if($_REQUEST['returnURL'] != null) {
		$returnURL = $_REQUEST['returnURL'];
	} else {
		$returnURL = $url."/Common/WebflowReturnPage.php";
	}
	
	// (Optional) The URL to which bank account/payment card holders
	// return when they cancel the bank account addition flow.
	if($_REQUEST['cancelURL'] != null) {
		$cancelURL = $_REQUEST['cancelURL'];
	} else {
		$cancelURL = $url. "/AddBankAccount.html.php" ;
	}

	$webOption = new WebOptionsType();
	$webOption->cancelUrl = $cancelURL;
	$webOption->cancelUrlDescription = $_REQUEST['cancelURLDescription'];
	$webOption->returnUrl = $returnURL;
	$webOption->returnUrlDescription = $_REQUEST['returnURLDescription'];
	$addBankAccount->webOptions = $webOption;
}

// ## Creating service wrapper object
// Creating service wrapper object to make API call 
//Configuration::getAcctAndConfig() returns array that contains credential and config parameters
$service  = new AdaptiveAccountsService(Configuration::getAcctAndConfig());

try {
	// ## Making API call
	// invoke the appropriate method corresponding to API in service
	// wrapper object
	$response = $service->AddBankAccount($addBankAccount);
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
	//echo" <a href=$payPalURL><b>* Redirect URL to Add Bank Account </b></a><br>";
}
require_once 'Common/Response.php';