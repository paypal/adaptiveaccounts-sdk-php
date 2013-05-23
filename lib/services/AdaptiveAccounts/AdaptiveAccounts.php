<?php
 /**
  * Stub objects for AdaptiveAccounts 
  * Auto generated code 
  * 
  */
/**
 * This type contains the detailed error information resulting
 * from the service operation. 
 */
if(!class_exists('ErrorData', false)) {
class ErrorData  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $errorId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $domain;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $subdomain;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $severity;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $category;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $message;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $exceptionId;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorParameter 	 
	 */ 
	public $parameter;


}
}



/**
 * @hasAttribute
 * 
 */
if(!class_exists('ErrorParameter', false)) {
class ErrorParameter  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 
	 * @attribute 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 
	 * @value
	 	 	 	 
	 * @var string 	 
	 */ 
	public $value;


}
}



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
if(!class_exists('RequestEnvelope', false)) {
class RequestEnvelope  
  extends PPMessage   {

	/**
	 * This specifies the required detail level that is needed by a
	 * client application pertaining to a particular data component
	 * (e.g., Item, Transaction, etc.). The detail level is
	 * specified in the DetailLevelCodeType which has all the
	 * enumerated values of the detail level for each component. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $detailLevel;

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $errorLanguage;


}
}



/**
 * This specifies a list of parameters with every response from
 * a service. 
 */
if(!class_exists('ResponseEnvelope', false)) {
class ResponseEnvelope  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var dateTime 	 
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgement code. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ack;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $correlationId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $build;


}
}



/**
 * This elements in this type refers to the end user of the
 * application invoking this service. 
 */
if(!class_exists('ClientDetailsType', false)) {
class ClientDetailsType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ipAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $deviceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $applicationId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $model;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $geoLocation;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customerType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $partnerName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customerId;


}
}



/**
 * This specifies a fault, encapsulating error data, with
 * specific error codes. 
 */
if(!class_exists('FaultMessage', false)) {
class FaultMessage  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
}



/**
 * Identifies a PayPal account to which this request is
 * targeted. Caller of this API has to provide ONLY one of
 * these inputs: emailAddress, accountId or phoneNumber. 
 */
class AccountIdentifierType  
  extends PPMessage   {

	/**
	 * Identifies the PayPal account based on the emailAddress. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailAddress;

	/**
	 * Identifies the PayPal account based on the phoneNumber. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $mobilePhoneNumber;

	/**
	 * Identifies the PayPal account based on the accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($emailAddress = NULL, $mobilePhoneNumber = NULL, $accountId = NULL) {
		$this->emailAddress = $emailAddress;
		$this->mobilePhoneNumber = $mobilePhoneNumber;
		$this->accountId = $accountId;
	}


}



/**
 * Valid values are: Personal, Premier, and Business. Flag="2"
 * corresponds to java.util.regex.Pattern.CASE_INSENSITIVE,
 * meaning the strings are not case-sensitive 
 */
class CreateAccountRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ClientDetailsType 	 
	 */ 
	public $clientDetails;

	/**
	 * Valid values are: Personal, Premier, and Business. Flag="2"
	 * corresponds to java.util.regex.Pattern.CASE_INSENSITIVE,
	 * meaning the strings are not case-sensitive 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var NameType 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $dateOfBirth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $address;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $contactPhoneNumber;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $homePhoneNumber;

	/**
	 * Must provide at least one of contactPhoneNumber,
	 * homePhoneNumber, or mobilePhoneNumber 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $mobilePhoneNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $citizenshipCountryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preferredLanguageCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $notificationURL;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailAddress;

	/**
	 * Valid values are: Mobile and Web. Mobile: Returns a key to
	 * complete the registration. Web: Returns a URL to complete
	 * the registration. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $registrationType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CreateAccountWebOptionsType 	 
	 */ 
	public $createAccountWebOptions;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $suppressWelcomeEmail;

	/**
	 * Set to true if you want this account to undergo extra
	 * vetting by PayPal before becoming usable. 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $performExtraVettingOnThisAccount;

	/**
	 * tax id, ssn, itin, pan, cpf, acn, abn, etc. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $taxId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $partnerField1;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $partnerField2;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $partnerField3;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $partnerField4;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $partnerField5;

	/**
	 * Required for business account creation 
	 * @access public
	 
	 	 	 	 
	 * @var BusinessInfoType 	 
	 */ 
	public $businessInfo;

	/**
	 * An ID representing a unique value, such as SSN, TIN, SIN,
	 * TaxID, etc. generally issued by a Government. Currently
	 * supports only SIN for Canada. 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var GovernmentIDPair 	 
	 */ 
	public $governmentId;

	/**
	 * Account Holder's profession, values such as: Accountant,
	 * Actuary, Advocate, Architect, Business Owner, Doctor,
	 * Dentist, Engineer, Financial Analyst, Lawyer, Librarian,
	 * Nurse, Pilot, Pharmacist, Physician, Physicial Therapist,
	 * Professor, Psychologist, Scientist, Teacher, Webmaster,
	 * Writer, Student, Other 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $profession;

	/**
	 * Account Holder's occupation. For business accounts only.
	 * Values: Executive, President, Vice President, Director,
	 * Manager, Staff, Other. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $occupation;

	/**
	 * Account Holder's functional area. For business accounts
	 * only. Values: Finance, Operations, Technology, Sales,
	 * Marketing, Other 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $functionalArea;

	/**
	 * Boolean value, indicates whether user has agreed for a
	 * particular agreement or not. 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var LegalAgreementType 	 
	 */ 
	public $legalAgreement;

	/**
	 * Expected Value: 0|1|2|3|4|5 according to the description
	 * below: 0 - "Send payments for goods and/or services to
	 * domestic merchants" 1 - "Send payments for goods and/or
	 * services to cross-border merchants" 2 - "Send payments for
	 * goods and/or services to domestic and cross-border
	 * merchants" 3 - "Receive payments for goods and/or services
	 * from domestic buyers" 4 - "Receive payments for goods and/or
	 * services from cross-border buyers" 5 - "Receive payments for
	 * goods and/or service from domestic/cross-border buyers" 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $purposeOfAccount;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $name = NULL, $address = NULL, $preferredLanguageCode = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->name = $name;
		$this->address = $address;
		$this->preferredLanguageCode = $preferredLanguageCode;
	}


}



/**
 * Valid values are: COMPLETED 
 */
class CreateAccountResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $createAccountKey;

	/**
	 * Valid values are: COMPLETED 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $execStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $redirectURL;

	/**
	 * Identifies a PayPal account. Only premier and business
	 * accounts have an accountId 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * 
 */
class GetUserAgreementRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $createAccountKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $languageCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL) {
		$this->requestEnvelope = $requestEnvelope;
	}


}



/**
 * 
 */
class GetUserAgreementResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $agreement;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * Deprecated, use accountIdentifier.emailAddress instead 
 */
class GetVerifiedStatusRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * Deprecated, use accountIdentifier.emailAddress instead 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailAddress;

	/**
	 * Identifies a PayPal account to which this request is
	 * targeted. Caller of this API has to provide ONLY one of
	 * these inputs: emailAddress, accountId or mobilePhoneNumber. 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifierType 	 
	 */ 
	public $accountIdentifier;

	/**
	 * matchCriteria determines which field(s) in addition to
	 * emailAddress is used to locate the account. Currently, we
	 * support matchCriteria of 'NAME' and 'NONE'. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $matchCriteria;

	/**
	 * Required if matchCriteria is NAME Optional if matchCriteria
	 * is NONE 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $firstName;

	/**
	 * Required if matchCriteria is NAME Optional if matchCriteria
	 * is NONE 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $lastName;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $matchCriteria = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->matchCriteria = $matchCriteria;
	}


}



/**
 * Returned values are: VERIFIED|UNVERIFIED. 
 */
class GetVerifiedStatusResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * Returned values are: VERIFIED|UNVERIFIED. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountStatus;

	/**
	 * Returns countryCode belonging to PayPal account. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * Info about PayPal user such as emailAddress, accountId,
	 * firstName, lastName etc. 
	 * @access public
	 
	 	 	 	 
	 * @var UserInfoType 	 
	 */ 
	public $userInfo;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * Identifying the PayPal account to which this request is
 * targetted to. Caller of this API has to either provided an
 * emailAddress or an accountId. 
 */
class AddBankAccountRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $createAccountKey;

	/**
	 * Country code for the bank 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $bankCountryCode;

	/**
	 * The defualt value is UNKNOWN. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $bankName;

	/**
	 * Bank routing or transit number 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $routingNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $bankAccountType;

	/**
	 * Basic Bank Account Number (BBAN) 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $bankAccountNumber;

	/**
	 * International Bank Account Number (IBAN) 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $iban;

	/**
	 * CLABE represents the bank information for countries like
	 * Mexico 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $clabe;

	/**
	 * Bank/State/Branch number 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $bsbNumber;

	/**
	 * Branch location 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $branchLocation;

	/**
	 * Branch sort code. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $sortCode;

	/**
	 * Bank transit number 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $bankTransitNumber;

	/**
	 * Institution number 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $institutionNumber;

	/**
	 * Branch code 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $branchCode;

	/**
	 * For Brazil Agency Number 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $agencyNumber;

	/**
	 * Bank code 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $bankCode;

	/**
	 * RIB key 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $ribKey;

	/**
	 * control digits 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $controlDigit;

	/**
	 * Tax id type of CNPJ or CPF, only supported for Brazil. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $taxIdType;

	/**
	 * Tax id number for Brazil. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $taxIdNumber;

	/**
	 * Date of birth of the account holder 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $accountHolderDateOfBirth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $confirmationType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var WebOptionsType 	 
	 */ 
	public $webOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $bankCountryCode = NULL, $confirmationType = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->bankCountryCode = $bankCountryCode;
		$this->confirmationType = $confirmationType;
	}


}



/**
 * Valid values are: FUNDING_SOURCE_ADDED,
 * WEB_URL_VERIFICATION_NEEDED 
 */
class AddBankAccountResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: FUNDING_SOURCE_ADDED,
	 * WEB_URL_VERIFICATION_NEEDED 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $execStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $redirectURL;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingSourceKey;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * Identifying the PayPal account to which this request is
 * targetted to. Caller of this API has to either provided an
 * emailAddress or an accountId. 
 */
class AddPaymentCardRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $createAccountKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var NameType 	 
	 */ 
	public $nameOnCard;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $billingAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $cardOwnerDateOfBirth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cardNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cardType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CardDateType 	 
	 */ 
	public $expirationDate;

	/**
	 * CVV2: Proivde only for requests where confirmationType is
	 * None (Direct request) 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cardVerificationNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CardDateType 	 
	 */ 
	public $startDate;

	/**
	 * Up to 2 digit for Switch/Maestro cards. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $issueNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $confirmationType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var WebOptionsType 	 
	 */ 
	public $webOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $nameOnCard = NULL, $billingAddress = NULL, $cardNumber = NULL, $cardType = NULL, $confirmationType = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->nameOnCard = $nameOnCard;
		$this->billingAddress = $billingAddress;
		$this->cardNumber = $cardNumber;
		$this->cardType = $cardType;
		$this->confirmationType = $confirmationType;
	}


}



/**
 * Valid values are: FUNDING_SOURCE_ADDED,
 * WEB_URL_VERIFICATION_NEEDED 
 */
class AddPaymentCardResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: FUNDING_SOURCE_ADDED,
	 * WEB_URL_VERIFICATION_NEEDED 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $execStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $redirectURL;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingSourceKey;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * This not considered when
 * financialProductCategory=PRE_PAID_CARD 
 */
class AddPartnerFinancialProductRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifierType 	 
	 */ 
	public $accountIdentifier;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 
	 	 	 	 
	 * @var NameType 	 
	 */ 
	public $nameOnCard;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $billingAddress;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $cardOwnerDateOfBirth;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cardNumber;

	/**
	 * Identify the kind of PayPal financial product. Possible
	 * value is : PRE_PAID_CARD 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $financialProductCategory;

	/**
	 * expirationDate is mandatory when financialProductCategoy =
	 * PRE_PAID_CARD 
	 * @access public
	 
	 	 	 	 
	 * @var CardDateType 	 
	 */ 
	public $expirationDate;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cardVerificationNumber;

	/**
	 * This not considered when
	 * financialProductCategory=PRE_PAID_CARD 
	 * @access public
	 
	 	 	 	 
	 * @var CardDateType 	 
	 */ 
	public $startDate;

	/**
	 * Up to 2 digit for Switch/Maestro cards. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $issueNumber;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $accountIdentifier = NULL, $cardNumber = NULL, $financialProductCategory = NULL, $expirationDate = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->accountIdentifier = $accountIdentifier;
		$this->cardNumber = $cardNumber;
		$this->financialProductCategory = $financialProductCategory;
		$this->expirationDate = $expirationDate;
	}


}



/**
 * Valid values are: CARD_ADDED 
 */
class AddPartnerFinancialProductResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: CARD_ADDED 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $execStatus;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * Identifying the PayPal account to which this request is
 * targetted to. Caller of this API has to either provided an
 * emailAddress or an accountId. 
 */
class SetFundingSourceConfirmedRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailAddress;

	/**
	 * Identifying the PayPal account to which this request is
	 * targetted to. Caller of this API has to either provided an
	 * emailAddress or an accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingSourceKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $fundingSourceKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->fundingSourceKey = $fundingSourceKey;
	}


}



/**
 * 
 */
class SetFundingSourceConfirmedResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * Identifies a PayPal account to which this request is
 * targeted. Caller of this API has to provide ONLY one of
 * these inputs: emailAddress, accountId or mobilePhoneNumber. 
 */
class CheckComplianceStatusRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * Identifies a PayPal account to which this request is
	 * targeted. Caller of this API has to provide ONLY one of
	 * these inputs: emailAddress, accountId or mobilePhoneNumber. 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifierType 	 
	 */ 
	public $accountIdentifier;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $accountIdentifier = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->accountIdentifier = $accountIdentifier;
	}


}



/**
 * Returned values are: ALLOW|DENY 
 */
class CheckComplianceStatusResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * Returned values are: ALLOW|DENY 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $execStatus;

	/**
	 * Returned values are: CLIENT_NOT_SUPPORTED,
	 * COUNTRY_NOT_SUPPORTED, VERIFICATION_NOT_COMPLETED,
	 * DOCUMENTS_UNDER_REVIEW, DENIED 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $denialReason;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * This operation is for internal purposes developed for a POC.
 * 
 */
class ActivateProductRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * Identifies a PayPal account to which this request is
	 * targeted. Caller of this API has to provide ONLY one of
	 * these inputs: emailAddress or accountId. 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifierType 	 
	 */ 
	public $accountIdentifier;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $accountIdentifier = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->accountIdentifier = $accountIdentifier;
	}


}



/**
 * Valid values are: SUCCESS, FAILED 
 */
class ActivateProductResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * Valid values are: SUCCESS, FAILED 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $execStatus;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $productActivationErrors;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * 
 */
class UpdateComplianceStatusRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AuditeeInfoType 	 
	 */ 
	public $auditeeInfo;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AuditorList 	 
	 */ 
	public $auditorList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AuditDetailsType 	 
	 */ 
	public $auditDetails;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $auditeeInfo = NULL, $auditDetails = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->auditeeInfo = $auditeeInfo;
		$this->auditDetails = $auditDetails;
	}


}



/**
 * 
 */
class UpdateComplianceStatusResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $execStatus;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}



/**
 * 
 */
class NameType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $salutation;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $firstName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $middleName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $lastName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $suffix;

	/**
	 * Constructor with arguments
	 */
	public function __construct($firstName = NULL, $lastName = NULL) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}


}



/**
 * 
 */
class AddressType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $line1;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $line2;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $city;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $state;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $postalCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($line1 = NULL, $countryCode = NULL) {
		$this->line1 = $line1;
		$this->countryCode = $countryCode;
	}


}



/**
 * Ask end-user to also initiate confirmation of their mobile
 * phone. This number must be supplied by the API caller (using
 * mobilePhoneNumber) Default=false. 
 */
class CreateAccountWebOptionsType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $showAddCreditCard;

	/**
	 * Ask end-user to also initiate confirmation of their mobile
	 * phone. This number must be supplied by the API caller (using
	 * mobilePhoneNumber) Default=false. 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $showMobileConfirm;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrlDescription;

	/**
	 * If provided, end user will go through a single page sign-up
	 * flow on a Mini Browser. If not provided, flow defaults to
	 * the Multi-page flow that is full size. 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $useMiniBrowser;

	/**
	 * Indicates the frequency of the reminder emails sent to the
	 * PayPal user after CreateAccount. Used only when
	 * registrationType is Web. Valid values: DEFAULT: All reminder
	 * emails will be sent (same behaviour as when this paramter is
	 * not present) NONE: No reminder emails will be sent (More
	 * values to be added in future) 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $reminderEmailFrequency;

	/**
	 * Indicates if the Return URL is used to confirm email. On
	 * accessing the Return URL successfully, confirm the email if
	 * this parameter is true, otherwise, do not confirm the email.
	 * Used only when registrationType is Web. Valid values (mixed
	 * case): true: Append the Email Confirmation Code to the
	 * Return URL. false: Do not append the Email Confirmation Code
	 * to the Return URL. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $confirmEmail;


}



/**
 * PayPal Business Category. i.e., baby - 1004 
 */
class BusinessInfoType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $businessName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $businessAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $workPhone;

	/**
	 * PayPal Business Category. i.e., baby - 1004 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $category;

	/**
	 * Paypal Business subcategory. i.e., baby-clothing - 2027 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $subCategory;

	/**
	 * If Category and Subcategory is specified, then this is
	 * optional. PayPal uses the industry standard Merchant
	 * Category Codes. Please refer to your Association Merchant
	 * Category Code documentation for a list of codes 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $merchantCategoryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $doingBusinessAs;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customerServicePhone;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customerServiceEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $disputeEmail;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $webSite;

	/**
	 * Company Id: tax id, acn, abn, etc. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $companyId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $dateOfEstablishment;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $businessType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $businessSubtype;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $incorporationId;

	/**
	 * Average transaction value. 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $averagePrice;

	/**
	 * Average monthly transaction value. 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $averageMonthlyVolume;

	/**
	 * Percentage of the revenue that is from online sales
	 * (0%-100%). 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $percentageRevenueFromOnline;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $salesVenue;

	/**
	 * Description of store front or place for sales. Only required
	 * when "OTHER" is specified for salesVenue. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $salesVenueDesc;

	/**
	 * Value Added Tax (VAT) ID number 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $vatId;

	/**
	 * Country code for country on the vat id. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $vatCountryCode;

	/**
	 * Official commercial registration location. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $commercialRegistrationLocation;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $principalPlaceOfBusinessAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $registeredOfficeAddress;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $establishmentCountryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $establishmentState;

	/**
	 * All the stakeholders of the company. 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var BusinessStakeholderType 	 
	 */ 
	public $businessStakeholder;

	/**
	 * Business entity acting on behalf of Third Party. 
	 * @access public
	 
	 	 	 	 
	 * @var BusinessEntityForThirdPartyType 	 
	 */ 
	public $businessEntityForThirdParty;

	/**
	 * Values: Yes or No 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $hasDirectors;

	/**
	 * Values: Yes or No 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $hasBeneficialOwners;

	/**
	 * Values: Yes or No 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $hasThirdPartyAssociates;

	/**
	 * Constructor with arguments
	 */
	public function __construct($businessName = NULL, $businessAddress = NULL, $workPhone = NULL) {
		$this->businessName = $businessName;
		$this->businessAddress = $businessAddress;
		$this->workPhone = $workPhone;
	}


}



/**
 * Info about Stakeholders such as partner, beneficial, owner,
 * director etc. 
 */
class BusinessStakeholderType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $role;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var NameType 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fullLegalName;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $address;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $dateOfBirth;

	/**
	 * Occupation of the business stakeholder. Values such as:
	 * Accountant, Actuary, Advocate, Architect, Business Owner,
	 * Doctor, Dentist, Engineer, Financial Analyst, Lawyer,
	 * Librarian, Nurse, Pilot, Pharmacist, Physician, Physicial
	 * Therapist, Professor, Psychologist, Scientist, Teacher,
	 * Webmaster, Writer, Student, Other 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $occupation;

	/**
	 * Constructor with arguments
	 */
	public function __construct($role = NULL) {
		$this->role = $role;
	}


}



/**
 * Info about PayPal user such as emailAddress, accountId,
 * firstName, lastName etc. 
 */
class UserInfoType  
  extends PPMessage   {

	/**
	 * Returns emailAddress belonging to PayPal account. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $emailAddress;

	/**
	 * Valid values are: Personal, Premier, and Business (not
	 * case-sensitive). 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountType;

	/**
	 * Identifies a PayPal account. Only premier and business
	 * accounts have an accountId 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * Identifies a PayPal user, like firstName, lastName. 
	 * @access public
	 
	 	 	 	 
	 * @var NameType 	 
	 */ 
	public $name;

	/**
	 * Business Name of the PayPal account holder. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $businessName;


}



/**
 * 
 */
class WebOptionsType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cancelUrl;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $returnUrlDescription;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $cancelUrlDescription;


}



/**
 * Month in integer format, between 1 and 12 
 */
class CardDateType  
  extends PPMessage   {

	/**
	 * Month in integer format, between 1 and 12 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $month;

	/**
	 * Year in four digit format- YYYY 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $year;

	/**
	 * Constructor with arguments
	 */
	public function __construct($month = NULL, $year = NULL) {
		$this->month = $month;
		$this->year = $year;
	}


}



/**
 * Third party type: Individual or Business. 
 */
class BusinessEntityForThirdPartyType  
  extends PPMessage   {

	/**
	 * Third party type: Individual or Business. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $thirdPartyType;

	/**
	 * If third party is individual, name of the individual. 
	 * @access public
	 
	 	 	 	 
	 * @var NameType 	 
	 */ 
	public $name;

	/**
	 * If third party is individual, date of birth of the
	 * individual. 
	 * @access public
	 
	 	 	 	 
	 * @var date 	 
	 */ 
	public $dateOfBirth;

	/**
	 * Address of third party collecting the data. 
	 * @access public
	 
	 	 	 	 
	 * @var AddressType 	 
	 */ 
	public $address;

	/**
	 * If third party is individual, profession of the individual
	 * representing third party. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $profession;

	/**
	 * Relationship with third party, of the individual or the
	 * business. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $relationshipWithThirdParty;

	/**
	 * Nature of Business, if third party is a business. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $natureOfBusiness;

	/**
	 * Name of Business, if third party is a business. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $nameOfBusiness;

	/**
	 * If third party is a business, collect the businessType.
	 * Values: Corporation, Private Company, Public Company,
	 * Partnership, Government Entity, Non-Profit Organization 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $businessType;

	/**
	 * If third party is a business, collect Incorporation ID. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $incorporationId;

	/**
	 * If third party is business, collect place of issue of
	 * Incorporation. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $incorporationCountry;

	/**
	 * If third party is business, collect place of issue of
	 * Incorporation. 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $incorporationState;


}



/**
 * 
 */
class GovernmentIDPair  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $value;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $type;


}



/**
 * 
 */
class LegalAgreementType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accepted;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $type;


}



/**
 * 
 */
class Auditor  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $id;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $action;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $notes;

	/**
	 * Constructor with arguments
	 */
	public function __construct($id = NULL, $name = NULL, $action = NULL) {
		$this->id = $id;
		$this->name = $name;
		$this->action = $action;
	}


}



/**
 * 
 */
class TupleType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $name;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $value;

	/**
	 * Constructor with arguments
	 */
	public function __construct($name = NULL, $value = NULL) {
		$this->name = $name;
		$this->value = $value;
	}


}



/**
 * 
 */
class DocumentType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $type;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $filename;

	/**
	 * Constructor with arguments
	 */
	public function __construct($type = NULL, $filename = NULL) {
		$this->type = $type;
		$this->filename = $filename;
	}


}



/**
 * 
 */
class AuditorList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var Auditor 	 
	 */ 
	public $auditor;

	/**
	 * Constructor with arguments
	 */
	public function __construct($auditor = NULL) {
		$this->auditor = $auditor;
	}


}



/**
 * 
 */
class AuditeeInfoType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var AccountIdentifierType 	 
	 */ 
	public $accountIdentifier;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var DocumentType 	 
	 */ 
	public $document;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var TupleType 	 
	 */ 
	public $data;

	/**
	 * Constructor with arguments
	 */
	public function __construct($accountIdentifier = NULL) {
		$this->accountIdentifier = $accountIdentifier;
	}


}



/**
 * 
 */
class AuditDetailsType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $status;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $level;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $method;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $reason;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var TupleType 	 
	 */ 
	public $data;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $policyVersion;

	/**
	 * Constructor with arguments
	 */
	public function __construct($status = NULL, $level = NULL, $method = NULL, $reason = NULL) {
		$this->status = $status;
		$this->level = $level;
		$this->method = $method;
		$this->reason = $reason;
	}


}



