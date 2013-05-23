# CHANGELOG

## Version 2.4.102 - May 23, 2013
 
   - Updated stubs for 102 release.
   - Restructuring config file location. Updating installer script to reflect this.
   - Fix for dynamic configuration overwrite in previous release.
	
You can see source code of this release in github under https://github.com/paypal/adaptiveaccounts-sdk-php/tree/v2.4.102.

--------------------------------------------------------------------------------------------------
 
## Version 2.3.101 - April 30, 2013

	- Updated stubs for 101 release

You can see source code of this release in github under https://github.com/paypal/adaptiveaccounts-sdk-php/tree/v2.3.101
--------------------------------------------------------------------------------------------------

## Version v2.3.100 - March 25, 2013
 
	- Updated stubs for 100 release
	- Added dynamic configuration support by passing configuration parameters using hash map.
	
You can see source code of this release in github under https://github.com/paypal/adaptiveaccounts-sdk-php/tree/v2.3.100.
--------------------------------------------------------------------------------------------------

## Version 2.2.98 - February 05, 2013
 
	- Updated stubs for 98 release.
	- Added support for composer.
    - Added installation script that fetches the dependencies and installs sdk if composer not present, contributed by: https://github.com/rrehbeindoi.
    - Added loading the static configuration from a different source.
	
You can see source code of this release in github under https://github.com/paypal/adaptiveaccounts-sdk-php/tree/v2.2.98.
--------------------------------------------------------------------------------------------------

## Version 2.1.96 - December 14, 2012
 
	- Added support for Instant Payment Notification (Refer IPN-README.md for more details)
	- Added new feature for supporting multiple endpoints based on portname for using different sdks together.
	
You can see source code of this release in github under https://github.com/paypal/adaptiveaccounts-sdk-php/tree/v2.1.96.
--------------------------------------------------------------------------------------------------

## Version 2.0.96 - December 06, 2012
 
	- SDK refreshed to Release 96
	- Application ID is not mandatory now.
    - Added support for passing in credentials dynamically for Authentication, now the call 
      wrappers have an argument for passing credentials
    - New type ThirdPartyAuthorization has been added to support Subject and Token based Authorizations. The earlier
      setAccessToken and setTokenSecret have been deprecated. You can set an instance of ThirdPartyAuthorization to an 
      ICredntial and pass ICredential as a parameter to  API call
	- Fixes to deserialization issues.(https://github.com/paypal/SDKs/issues/37) 
	- Fixes to validating SSL Cert in curl requests.(https://github.com/paypal/SDKs/issues/35) 
------------------------------------------------------------------------------------------------------------------------


## Version 1.2.95 - September 28, 2012
 
	- Bug fixed for 'PPLoggingManager.php' to pickup configuration entries.(https://github.com/paypal/SDKs/issues/28)
	- Updated SDK sample
	
--------------------------------------------------------------------------------------------------


## Version 1.1.93 - August 13, 2012
 
	- SDK Core - Deserialization Logic Change
--------------------------------------------------------------------------------------------------


## Version 1.0.92 - July 30, 2012
 
	- Stable release
-------------------------------------------------------------------------------------------------
## Version 0.7.92 - July 17, 2012 

    - wsdl update version 92
------------------------------------------

## Version 0.7.88 - Apr 17, 2012
----------------------------------------
	- Fix for incorrect Permissions header (X-PP-AUTHORIZATION)
	- wsdl update version 88.0
	
## Version 0.6.86 - Feb 27, 2012
----------------------------------------
	- Initial release