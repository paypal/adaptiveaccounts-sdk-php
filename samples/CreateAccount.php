<?php
use PayPal\Service\AdaptiveAccountsService;
use PayPal\Types\AA\AddressType;
use PayPal\Types\AA\BusinessInfoType;
use PayPal\Types\AA\BusinessStakeholderType;
use PayPal\Types\AA\CreateAccountRequest;
use PayPal\Types\AA\CreateAccountWebOptionsType;
use PayPal\Types\AA\NameType;
use PayPal\Types\Common\ClientDetailsType;
use PayPal\Types\Common\RequestEnvelope;
/********************************************
#CreateAccount API
The CreateAccount API operation enables you to create a PayPal account on behalf of a third party.
This sample code uses AdaptiveAccounts PHP SDK to make API call. 

CreateAccount.php
Calls CreateAccount API of CreateAccounts webservices.
Called by CreateAccount.html.php
********************************************/
require_once('PPBootStrap.php');
session_start();

/*
 * construct the base URL, return URL, cancel URL
 */
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
if($_REQUEST['returnUrl']!=null) {
	$returnURL = $_REQUEST['returnUrl'];
} else {
	$returnURL = $url."/Common/WebflowReturnPage.php";
}

/*
 * preferredLanguageCode - For Example: United States (US)– en_US
 * registrationType - web or mobile
 */
$preferredLanguageCode = $_REQUEST['preferredLanguageCode'];
$registrationType = $_REQUEST['registrationType'];

/*
 * name of the  The name of the person for whom the PayPal account is created
 */
$name = new NameType();
$name->salutation = $_REQUEST['salutation'];
$name->firstName = $_REQUEST['firstName'];
$name->middleName = $_REQUEST['middleName'];
$name->lastName = $_REQUEST['lastName'];

/*
 *  Address of the person for whom the PayPal account is created
 */
$address = new AddressType();
$address->line1 =  $_REQUEST['line1'];
$address->line2 =$_REQUEST['line2'];
$address->city = $_REQUEST['city'];
$address->state =  $_REQUEST['state'];
$address->postalCode= $_REQUEST['postalCode'];
$address->countryCode =  $_REQUEST['countryCode'];

/*
 * The type of account to create. Allowed values:

    Personal – Personal account
    Premier – Premier account
    Business – Business account

 */
if($_REQUEST['accountType'] == "Business") {

	/*
	 * business adress
	 */
	$bizAddress = new AddressType();
	$bizAddress->line1 = $_REQUEST['businessAddressLine1'];
	$bizAddress->line2 = $_REQUEST['businessAddressLine2'];
	$bizAddress->city = $_REQUEST['businessAddressCity'];
	$bizAddress->state = $_REQUEST['businessAddressState'];
	$bizAddress->postalCode = $_REQUEST['businessAddressPostalCode'];
	$bizAddress->countryCode = $_REQUEST['businessAddressCountryCode'];

	/*
	 * stakeholder Name
	 */
	$stkName = new NameType();
	$stkName->firstName =  $_REQUEST['stakeholderFirstName'];
	$stkName->lastName = $_REQUEST['stakeholderLastName'];
	$stkName->middleName = $_REQUEST['stakeholderMiddleName'];
	$stkName->salutation = $_REQUEST['stakeholderSalutation'];
	$stkName->suffix = $_REQUEST['stakeholderSuffix'];

	/*
	 * stakeholder Adress
	 */
	$stkHolderAddress = new AddressType();
	$stkHolderAddress->line1 = $_REQUEST['stakeholderLine1'];
	$stkHolderAddress->line2 = $_REQUEST['stakeholderLine2'];
	$stkHolderAddress->city = $_REQUEST['stakeholderCity'];
	$stkHolderAddress->state = $_REQUEST['stakeholderState'];
	$stkHolderAddress->postalCode = $_REQUEST['stakeholderPostalCode'];
	$stkHolderAddress->countryCode = $_REQUEST['stakeholderCountryCode'];
	
	/*
	 *  Details of The stakeholders in the business
	 */
	$businessStakeholder = new BusinessStakeholderType();
	$businessStakeholder->address = $stkHolderAddress;
	$businessStakeholder->dateOfBirth = $_REQUEST['stakeholderDateOfBirth'];
	$businessStakeholder->name = $stkName;
	$businessStakeholder->role =  $_REQUEST['role'];
	$businessStakeholder->fullLegalName = $_REQUEST['fullLegalName'];

	/*
	 * info related to business
	 */
	$businessInfo = new BusinessInfoType();
	$businessInfo->businessAddress = $bizAddress;
	$businessInfo->businessName = $_REQUEST['businessName'];
	$businessInfo->workPhone = $_REQUEST['workPhone'];
	// The category describing the business for which the PayPal account is created, for example; 1004 for Baby. Required unless you specify merchantCategoryCode. PayPal uses the industry standard Merchant Category Codes. Refer to the business’s Association Merchant Category Code documentation for a list of codes.
	$businessInfo->category = $_REQUEST['category'];
	$businessInfo->subCategory = $_REQUEST['subCategory'];
	//The category code for the business. state in which the business was established. Required unless you specify both category and subcategory.
	$businessInfo->merchantCategoryCode = $_REQUEST['merchantCategoryCode'];
	//The business name being used if it is not the actual name of the business
	$businessInfo->doingBusinessAs = $_REQUEST['doingBusinessAs'];
	$businessInfo->customerServicePhone = $_REQUEST['customerServicePhone'];
	$businessInfo->customerServiceEmail = $_REQUEST['customerServiceEmail'];
	$businessInfo->disputeEmail = $_REQUEST['disputeEmail'];
	$businessInfo->webSite = $_REQUEST['webSite'];
	//The identification number, equivalent to the tax ID in the United States, of the business for which the PayPal account is created
	$businessInfo->companyId = $_REQUEST['companyId'];
	$businessInfo->dateOfEstablishment = $_REQUEST['dateOfEstablishment'];
	/*
	 * The type of the business for which the PayPal account is created. Allowable values are:
	    CORPORATION
	    GOVERNMENT
	    INDIVIDUAL
	    NONPROFIT
	    PARTNERSHIP
	    PROPRIETORSHIP
	 */
	$businessInfo->businessType = $_REQUEST['businessType'];
	if($businessInfo->businessType == 'ASSOCIATION_GOVERNMENT' || $businessInfo->businessType == "GOVERNMENT") {
		$businessInfo->businessSubtype = $_REQUEST['businessSubtype'];
	}
	$businessInfo->incorporationId = $_REQUEST['incorporationId'];
	$businessInfo->averagePrice = $_REQUEST['averagePrice'];
	$businessInfo->averageMonthlyVolume = $_REQUEST['averageMonthlyVolume'];
	$businessInfo->percentageRevenueFromOnline = $_REQUEST['percentageRevenueFromOnline'];
	$businessInfo->salesVenue = array($_REQUEST['salesVenue']);
	$businessInfo->salesVenueDesc = $_REQUEST['salesVenueDesc'];
	$businessInfo->vatId = $_REQUEST['vatId'];
	$businessInfo->vatCountryCode = $_REQUEST['vatCountryCode'];
	$businessInfo->commercialRegistrationLocation  = $_REQUEST['commercialRegistrationLocation'];
// 	$businessInfo->businessStakeholder = array($businessStakeholder);
}

/*
 * The code for the language in which errors are returned, which must be en_US.
 */
$requestEnvelope = new RequestEnvelope("en_US");

/*
 *  A structure containing web options that pertain to account creation
 */
$createAccountWebOptions = new CreateAccountWebOptionsType();
$createAccountWebOptions->returnUrl = $returnURL;
$createAccountWebOptions->returnUrlDescription = $_POST['returnUrlDescription'];
/*
 * Defines whether the "add credit card" option is included in the PayPal account registration flow.

    true - Show the option (default)
    false - Do not show the option

 */
$createAccountWebOptions->showAddCreditCard = $_POST['showAddCreditCard'];
$createAccountWebOptions->showMobileConfirm = $_POST['showMobileConfirm'];
$createAccountWebOptions->useMiniBrowser = $_POST['useMiniBrowser'];

/*
 * Instantiating createAccountRequest with mandatory arguments:
		
		 * requestenvelope
		 * name
		 * address
		 * preferredlanguagecode
 */

$createAccountRequest = new CreateAccountRequest($requestEnvelope, $name, $address, $preferredLanguageCode);
$createAccountRequest->accountType = $_REQUEST['accountType'];
$createAccountRequest->dateOfBirth =  $_REQUEST['dateOfBirth'];
$createAccountRequest->notificationURL = $_REQUEST['notificationUrl'];
$createAccountRequest->citizenshipCountryCode = $_REQUEST['citizenshipCountryCode'];
$createAccountRequest->contactPhoneNumber = $_REQUEST['contactPhoneNumber'];
$createAccountRequest->registrationType = $registrationType;
$createAccountRequest->currencyCode = $_REQUEST['currencyCode'];;
$createAccountRequest->emailAddress = $_REQUEST['emailAddress'];
$createAccountRequest->createAccountWebOptions =  $createAccountWebOptions;
$createAccountRequest->homePhoneNumber = $_REQUEST['homePhoneNumber'];
$createAccountRequest->mobilePhoneNumber =  $_REQUEST['mobilePhoneNumber'];

$createAccountRequest->partnerField1 = $_REQUEST['partnerField1'];
$createAccountRequest->partnerField2 = $_REQUEST['partnerField2'];
$createAccountRequest->partnerField3 = $_REQUEST['partnerField3'];
$createAccountRequest->partnerField4 = $_REQUEST['partnerField4'];
$createAccountRequest->partnerField5 = $_REQUEST['partnerField5'];
/*
 * Defines whether the PayPal welcome email is suppressed or sent.

    true – Suppress the PayPal welcome email
    false – Send the PayPal welcome email
 */
$createAccountRequest->suppressWelcomeEmail = $_POST['suppressWelcomeEmail'];
$createAccountRequest->performExtraVettingOnThisAccount = $_POST['performExtraVettingOnThisAccount'];
$createAccountRequest->taxId = $_POST['taxId'];

$clientDetails = new ClientDetailsType();
$clientDetails->ipAddress = '127.0.0.1';
$createAccountRequest->clientDetails = $clientDetails;

if(isset($_REQUEST['notificationURL']))
{
$createAccountRequest->notificationURL = $_REQUEST['notificationURL'];
}

if($_REQUEST['accountType'] == "Business") {
	$createAccountRequest->businessInfo = $businessInfo;
}

/*
 * ## Creating service wrapper object
	  Creating service wrapper object to make API call 
	  Configuration::getAcctAndConfig() returns array that contains credential and config parameters
 */
$service  = new AdaptiveAccountsService(Configuration::getAcctAndConfig());
try {
	/*
	 *  ## Making API call
		   invoke the appropriate method corresponding to API in service
		   wrapper object
	 */
	$response = $service->CreateAccount($createAccountRequest);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;
}	
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
	$createAccountKey = strtoupper($response->createAccountKey);
	
	/*
	 *  ### Redirection to PayPal
			 Once you get the success response, user needs to redirect to
			 PayPal to enter password for the created account. For that,
			 you have to use the redirect URL from the response, like
			 createAccountResponse.getRedirectURL();
			 Using this url,
			 redirects the user to PayPal.
	 */
	$payPalURL = $response->redirectURL;

	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "<tr><td>CreateAccountKey :</td><td> <div id='createAccountKey'>$createAccountKey</div></td></tr>";
	echo "<tr><td>Redirect URL :</td><td> <div id='Redirect URL'><a href=$payPalURL><b>Redirect To PayPal</b></a><br></div></td></tr>";
	echo "</table>";
	//echo "<a href=$payPalURL><b>* Redirect URL to Complete Account Creation </b></a><br>";
}
require_once 'Common/Response.php';
