<?php 
namespace PayPal\Service;
use PayPal\Core\PPMessage;
use PayPal\Core\PPBaseService;
use PayPal\Core\PPUtils;
use PayPal\Types\AA\CreateAccountResponse;
use PayPal\Types\AA\GetUserAgreementResponse;
use PayPal\Types\AA\GetVerifiedStatusResponse;
use PayPal\Types\AA\AddBankAccountResponse;
use PayPal\Types\AA\AddPaymentCardResponse;
use PayPal\Types\AA\SetFundingSourceConfirmedResponse;
use PayPal\Types\AA\CheckComplianceStatusResponse;
use PayPal\Types\AA\AddPartnerFinancialProductResponse;
use PayPal\Types\AA\ActivateProductResponse;
use PayPal\Types\AA\UpdateComplianceStatusResponse;

/**
 * AUTO GENERATED code for AdaptiveAccounts
 */
class AdaptiveAccountsService extends PPBaseService {

	// Service Version
	private static $SERVICE_VERSION = "1.2.0";

	// Service Name
	private static $SERVICE_NAME = "AdaptiveAccounts";

    // SDK Name
	protected static $SDK_NAME = "adaptiveaccounts-php-sdk";
	
	// SDK Version
	protected static $SDK_VERSION = "3.6.106";

    /**
    * @param $config - Dynamic config map. This takes the higher precedence if config file is also present.
    *
    */
	public function __construct($config = null) {
		parent::__construct(self::$SERVICE_NAME, 'NV', array('PayPal\Handler\PPPlatformServiceHandler'), $config);
        parent::$SDK_NAME    = self::$SDK_NAME ;
        parent::$SDK_VERSION = self::$SDK_VERSION;
	}


	/**
	 * Service Call: CreateAccount
	 * @param CreateAccountRequest $createAccountRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\CreateAccountResponse
	 * @throws APIException
	 */
	public function CreateAccount($createAccountRequest, $apiCredential = NULL) {
		$ret = new CreateAccountResponse();
		$resp = $this->call('AdaptiveAccounts', 'CreateAccount', $createAccountRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetUserAgreement
	 * @param GetUserAgreementRequest $getUserAgreementRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\GetUserAgreementResponse
	 * @throws APIException
	 */
	public function GetUserAgreement($getUserAgreementRequest, $apiCredential = NULL) {
		$ret = new GetUserAgreementResponse();
		$resp = $this->call('AdaptiveAccounts', 'GetUserAgreement', $getUserAgreementRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: GetVerifiedStatus
	 * @param GetVerifiedStatusRequest $getVerifiedStatusRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\GetVerifiedStatusResponse
	 * @throws APIException
	 */
	public function GetVerifiedStatus($getVerifiedStatusRequest, $apiCredential = NULL) {
		$ret = new GetVerifiedStatusResponse();
		$resp = $this->call('AdaptiveAccounts', 'GetVerifiedStatus', $getVerifiedStatusRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddBankAccount
	 * @param AddBankAccountRequest $addBankAccountRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\AddBankAccountResponse
	 * @throws APIException
	 */
	public function AddBankAccount($addBankAccountRequest, $apiCredential = NULL) {
		$ret = new AddBankAccountResponse();
		$resp = $this->call('AdaptiveAccounts', 'AddBankAccount', $addBankAccountRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddPaymentCard
	 * @param AddPaymentCardRequest $addPaymentCardRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\AddPaymentCardResponse
	 * @throws APIException
	 */
	public function AddPaymentCard($addPaymentCardRequest, $apiCredential = NULL) {
		$ret = new AddPaymentCardResponse();
		$resp = $this->call('AdaptiveAccounts', 'AddPaymentCard', $addPaymentCardRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: SetFundingSourceConfirmed
	 * @param SetFundingSourceConfirmedRequest $setFundingSourceConfirmedRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\SetFundingSourceConfirmedResponse
	 * @throws APIException
	 */
	public function SetFundingSourceConfirmed($setFundingSourceConfirmedRequest, $apiCredential = NULL) {
		$ret = new SetFundingSourceConfirmedResponse();
		$resp = $this->call('AdaptiveAccounts', 'SetFundingSourceConfirmed', $setFundingSourceConfirmedRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: CheckComplianceStatus
	 * @param CheckComplianceStatusRequest $checkComplianceStatusRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\CheckComplianceStatusResponse
	 * @throws APIException
	 */
	public function CheckComplianceStatus($checkComplianceStatusRequest, $apiCredential = NULL) {
		$ret = new CheckComplianceStatusResponse();
		$resp = $this->call('AdaptiveAccounts', 'CheckComplianceStatus', $checkComplianceStatusRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: AddPartnerFinancialProduct
	 * @param AddPartnerFinancialProductRequest $addPartnerFinancialProductRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\AddPartnerFinancialProductResponse
	 * @throws APIException
	 */
	public function AddPartnerFinancialProduct($addPartnerFinancialProductRequest, $apiCredential = NULL) {
		$ret = new AddPartnerFinancialProductResponse();
		$resp = $this->call('AdaptiveAccounts', 'AddPartnerFinancialProduct', $addPartnerFinancialProductRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: ActivateProduct
	 * @param ActivateProductRequest $activateProductRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\ActivateProductResponse
	 * @throws APIException
	 */
	public function ActivateProduct($activateProductRequest, $apiCredential = NULL) {
		$ret = new ActivateProductResponse();
		$resp = $this->call('AdaptiveAccounts', 'ActivateProduct', $activateProductRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 

	/**
	 * Service Call: UpdateComplianceStatus
	 * @param UpdateComplianceStatusRequest $updateComplianceStatusRequest
	 * @param mixed $apiCredential - Optional API credential - can either be
	 * 		a username configured in sdk_config.ini or a ICredential object
	 *      created dynamically 		
	 * @return Types\AA\UpdateComplianceStatusResponse
	 * @throws APIException
	 */
	public function UpdateComplianceStatus($updateComplianceStatusRequest, $apiCredential = NULL) {
		$ret = new UpdateComplianceStatusResponse();
		$resp = $this->call('AdaptiveAccounts', 'UpdateComplianceStatus', $updateComplianceStatusRequest, $apiCredential);
		$ret->init(PPUtils::nvpToMap($resp));
		return $ret;
	}
	 
}