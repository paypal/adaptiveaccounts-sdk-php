IPN Overview :
------------

* PayPal Instant Payment Notification is call back system that initiated once a transaction is completed  
  (eg: When CreateAccount completed successfully).
* You will receive the transaction related IPN variables on your call back url that you have specified in your request.
* You have to send this IPN variable back to PayPal system for verification, Upon verification PayPal will send  
  a response string "VERIFIED" or "INVALID".
* PayPal will continuously resend this IPN, if a wrong IPN is sent.

IPN How to use
--------------
* Include 'ipn/PPIPNMessage.php' in your IPN callback URL  
* Initialize IPNMessage constructor with a map containing configuration parameters, as shown below.

		// Array containing configuration parameters. (not required if config file is used)
		$config = array(
		    // values: 'sandbox' for testing
			//		   'live' for production
			"mode" => "sandbox"
			
			// These values are defaulted in SDK. If you want to override default values, uncomment it and add your value.
			// "http.ConnectionTimeOut" => "5000",
			// "http.Retry" => "2"
		);
		$ipnMessage = new PPIPNMessage(null, $config);   
* 'validate()' method validates the IPN message and returns true if 'VERIFIED' or returns false if 'INVALID'  
Ex:
		$result = $ipnMessage->validate();

		  
Intiating IPN:
--------------
* Make a PayPal API call (eg: CreateAccount request), setting the IpnNotificationUrl field of API request   
  class to the url of deployed IPNListener sample(eg:https://example.com/adaptiveaccounts-sdk-php/IPN/IPNListener.php)  
* The IpnNotificationUrl field is in 'CreateAccountRequestDetailsType' class under API request class  
 (Ex: 'CreateAccountRequestDetailsType->IpnNotificationUrl')  
* You will receive IPN call back from PayPal , which will be logged in to log file in case of IPN sample.
* See the included sample for more details.
* To access the IPN received use 'getRawData()' which give an array of received IPN variables  
Ex:
		
		$ipnMessage->getRawData(); 
			       
IPN variables :
--------------
[Transaction]
-------------
* notify_version
* verify_sign
* charset
* confirmation_code
* event_type
* account_key

[BuyerInfo]
-----------
* first_name
* last_name
	 
*   For a full list of IPN variables you need to check log file, that IPN Listener is logging into.    

IPN Reference :
--------------
*   You can refer IPN getting started guide at [https://www.x.com/developers/paypal/documentation-tools/ipn/gs_IPN]
