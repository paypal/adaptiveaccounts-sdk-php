
# PayPal PHP Adaptive Accounts SDK

## Prerequisites

PayPal's PHP Adaptive Accounts SDK requires 

   * PHP 5.3 and above 
   * curl/openssl PHP extensions

## Running the sample

To run the bundled sample, first copy the samples folder to your web server root. You will then need to install the SDK as a dependency using composer (PHP V5.3+ only)

run `composer update` from the samples folder.

## Using the SDK


To use the SDK,

   * Create a composer.json file with the following contents.

```json
{
    "name": "me/shopping-cart-app",
    "require": {
        "paypal/adaptiveaccounts-sdk-php":"v3.6.106"
    }
}
```

   * Install the SDK as a dependency using composer.
   * Require `vendor/autoload.php` in your application.
   * Choose how you would like to configure the SDK - You can either
	  * Create a hashmap containing configuration parameters and pass it to the service object OR
      * Create a `sdk_config.ini` file and set the PP_CONFIG_PATH constant to point to the directory where this file exists.
   * Instantiate a service wrapper object and a request object as per your project's needs.
   * Invoke the appropriate method on the service object.

For example,

```php
	// Sets config file path(if config file is used) and registers the classloader
    require("PPBootStrap.php");
	
	// Array containing credentials and confiuration parameters. (not required if config file is used)
	$config = array(
       'mode' => 'sandbox',
       'acct1.UserName' => 'jb-us-seller_api1.paypal.com',
       'acct1.Password' => 'WX4WTU3S8MY44S7F'
       .....
    );

  	$createAccountRequest = new CreateAccountRequest($requestEnvelope, $name, $address, $preferredLanguageCode);
	$createAccountRequest->accountType = $accountType;
	......

	$service  = new AdaptiveAccountsService($config);
	$response = $service->CreateAccount($createAccountRequest);	 
	if($strtoupper($response->responseEnvelope->ack) == 'SUCCESS') {
		// Success
	}
```
  
## Authentication

The SDK provides multiple ways to authenticate your API call.

```php
	$service  = new AdaptiveAccountsService($config);
	
	// Use the default account (the first account) configured in sdk_config.ini
	$response = $service->CreateAccount($createAccountRequest);	

	// Use a specific account configured in sdk_config.inig
	$response = $service->CreateAccount($createAccountRequest, 'jb-us-seller_api1.paypal.com');	
	 
	// Pass in a dynamically created API credential object
    $cred = new PPCertificateCredential("username", "password", "path-to-pem-file");
    $cred->setThirdPartyAuthorization(new PPTokenAuthorization("accessToken", "tokenSecret"));
	$response = $service->CreateAccount($createAccountRequest, $cred);	
```

## SDK Configuration

The SDK allows you to configure the following parameters 

   * Integration mode (sandbox / live)
   * (Multiple) API account credentials.
   * HTTP connection parameters
   * Logging 
   
Dynamic configuration values can be set by passing a map of credential and config values (if config map is passed the config file is ignored)
```php
    $config = array(
       'mode' => 'sandbox',
       'acct1.UserName' => 'jb-us-seller_api1.paypal.com',
       'acct1.Password' => 'WX4WTU3S8MY44S7F'
       .....
    );
	$service  = new AdaptiveAccountsService($config);
```
Alternatively, you can configure the SDK via the sdk_config.ini file. 
  
```php
    define('PP_CONFIG_PATH', '/directory/that/contains/sdk_config.ini');
    $service  = new AdaptiveAccountsService();
```

You can refer full list of configuration parameters in [wiki](https://github.com/paypal/sdk-core-php/wiki/Configuring-the-SDK) page.

## Instant Payment Notification (IPN)

Please refer to the IPN-README in 'samples/IPN' directory

## Links

   * API Reference - https://developer.paypal.com/webapps/developer/docs/classic/api/#aa
   * If you need help using the SDK, a new feature that you need or have a issue to report, please visit https://github.com/paypal/adaptiveaccounts-sdk-php/issues 

