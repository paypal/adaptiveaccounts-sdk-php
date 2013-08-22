<?php
/********************************************
 * CreateAccount.php
* Calls  CreateAccountReceipt.php,and APIError.php.
********************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Accounts - Create Account</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="sdk.css" />
<script type="text/javascript" src="sdk.js"></script>
</head>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>Create Account</h3>
			<div id="apidetails"></div>
		</div>
		<form method="post" action="CreateAccount.php">
			<div id="request_form">
				<div class="params">
					<div class="param_name">Account Type</div>
					<div class="param_value">
						<select name="accountType">
							<option>- Select a value -</option>
							<option selected="selected">Personal</option>
							<option>Premier</option>
							<option>Business</option>
						</select>
					</div>
				</div>
				<div class="input_header">Name</div>
				<table class="params">
					<tr>
						<th>Salutation</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Middle Name</th>
					</tr>
					<tr>
						<td><input type="text" name="salutation" value="Mr." /></td>
						<td><input type="text" name="firstName" value="Bonzop" /></td>
						<td><input type="text" name="middleName" value="Zaius" /></td>
						<td><input type="text" name="lastName" value="Simore" /></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Date of birth</div>
					<div class="param_value">
						<input type="text" name="dateOfBirth" value="1968-01-01Z" />
					</div>
				</div>
				<div class="section_header">Address Details</div>
				<table class="params">
					<tr>
						<th>Line 1 *</th>
						<th>Line 2</th>
						<th>City</th>
						<th>State</th>
						<th>Postal code</th>
						<th>Country code *</th>
					</tr>
					<tr>
						<td><input type="text" name="line1" value="1968 Ape Way" /></td>
						<td><input type="text" name="line2" value="" /></td>
						<td><input type="text" name="city" value="Austin" /></td>
						<td><input type="text" name="state" value="TX" /></td>
						<td><input type="text" name="postalCode" value="78750" /></td>
						<td><input type="text" name="countryCode" value="US" /></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Contact phone number</div>
					<div class="param_value">
						<input type="text" name="contactPhoneNumber" value="5126914160" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Home phone number</div>
					<div class="param_value">
						<input type="text" name="homePhoneNumber" value="5126914160" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Mobile phone number</div>
					<div class="param_value">
						<input type="text" name="mobilePhoneNumber" value="5126914160" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Currency Code</div>
					<div class="param_value">
						<input type="text" name="currencyCode" value="USD" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Citizenship country code</div>
					<div class="param_value">
						<input type="text" name="citizenshipCountryCode" value="US" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Preferred language code *</div>
					<div class="param_value">
						<input type="text" name="preferredLanguageCode" value="en_US" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Notification URL</div>
					<div class="param_value">
						<input type="text" name="notificationUrl" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Registration type (Mobile: Returns a key to
						complete the registration. Web: Returns a URL to complete the
						registration)</div>
					<div class="param_value">
						<select name="registrationType">
							<option>Web</option>
							<option>Mobile</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Email Address *</div>
					<div class="param_value">
						<input type="text" name="emailAddress"
							value="newEmailAddress@paypal.com" />
					</div>
				</div>
				<div class="section_header">Web options</div>
				<div class="params">
					<div class="param_name">Return URL</div>
					<div class="param_value">
						<input type="text" name="returnUrl" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Notification URL</div>
					<div class="param_value">
						<input type="text" name="notificationURL" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Show "Add CreditCard"</div>
					<div class="param_value">
						<input type="text" name="showAddCreditCard" value="true" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Show mobile confirmation option</div>
					<div class="param_value">
						<input type="text" name="showMobileConfirm" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Return URL Description</div>
					<div class="param_value">
						<input type="text" name="returnUrlDescription" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Use mini browser flow</div>
					<div class="param_value">
						<input type="text" name="useMiniBrowser" value="false" />
					</div>
				</div>
				<div class="section_header"></div>
				<div class="params">
					<div class="param_name">Suppress Welcome email</div>
					<div class="param_value">
						<input type="text" name="suppressWelcomeEmail" value="false" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Perform extra vetting on this account</div>
					<div class="param_value">
						<input type="text" name="performExtraVettingOnThisAccount"
							value="false" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Tax Id (tax id, ssn, itin, pan, cpf, acn,
						abn, etc)</div>
					<div class="param_value">
						<input type="text" name="taxId" value="" />
					</div>
				</div>
				<div class="section_header">Partner Info fields</div>
				<table class="params">
					<tr>
						<th>Partner Field 1</th>
						<th>Partner Field 2</th>
						<th>Partner Field 3</th>
						<th>Partner Field 4</th>
						<th>Partner Field 5</th>
					</tr>
					<tr>
						<td><input type="text" name="partnerField1" /></td>
						<td><input type="text" name="partnerField2" /></td>
						<td><input type="text" name="partnerField3" /></td>
						<td><input type="text" name="partnerField4" /></td>
						<td><input type="text" name="partnerField5" /></td>
					</tr>
				</table>
				<div class="section_header">Business info (for business accounts
					only)</div>
				<div class="params">
					<div class="param_name">Business Name</div>
					<div class="param_value">
						<input type="text" name="businessName" value="My business" />
					</div>
				</div>
				<div class="section_header">Business address</div>
				<table class="params">
					<tr>
						<th>Line 1 *</th>
						<th>Line 2</th>
						<th>City</th>
						<th>State</th>
						<th>Postal code</th>
						<th>Country code *</th>
					</tr>
					<tr>
						<td><input type="text" name="businessAddressLine1"
							value="1968 Ape Way" /></td>
						<td><input type="text" name="businessAddressLine2" value="" /></td>
						<td><input type="text" name="businessAddressCity" value="Austin" />
						</td>
						<td><input type="text" name="businessAddressState" value="TX" /></td>
						<td><input type="text" name="businessAddressPostalCode"
							value="78750" /></td>
						<td><input type="text" name="businessAddressCountryCode"
							value="US" /></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Work Phone *</div>
					<div class="param_value">
						<input type="text" name="workPhone" value="5126914160" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Category describing the business. (Refer to
						the business’ Association Merchant Category Code documentation)</div>
					<div class="param_value">
						<input type="text" name="category" value="1001" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Sub-category describing the business.
						(Refer to the business’ Association Merchant Category Code
						documentation)</div>
					<div class="param_value">
						<input type="text" name="subCategory" value="2001" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Merchant category code. (Category code for
						the business. state in which the business was established)</div>
					<div class="param_value">
						<input type="text" name="merchantCategoryCode" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Doing business as. (The business name being
						used if it is not the actual name of the business)</div>
					<div class="param_value">
						<input type="text" name="doingBusinessAs" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Customer Service phone</div>
					<div class="param_value">
						<input type="text" name="customerServicePhone" value="5126914160" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Customer Service email</div>
					<div class="param_value">
						<input type="text" name="customerServiceEmail"
							value="platfo_1255076101_per@gmail.com" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Dispute email</div>
					<div class="param_value">
						<input type="text" name="disputeEmail" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Website</div>
					<div class="param_value">
						<input type="text" name="webSite" value="https://www.x.com" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Company Id</div>
					<div class="param_value">
						<input type="text" name="companyId" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Date of establishment</div>
					<div class="param_value">
						<input type="text" name="dateOfEstablishment" value="1968-01-01Z" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Business type</div>
					<div class="param_value">
						<select name="businessType">
							<option selected="selected">ASSOCIATION</option>
							<option>CORPORATION</option>
							<option>GENERAL_PARTNERSHIP</option>
							<option>GOVERNMENT</option>
							<option>INDIVIDUAL</option>
							<option>LIMITED_LIABILITY_PARTNERSHIP</option>
							<option>LIMITED_LIABILITY_PRIVATE_CORPORATION</option>
							<option>LIMITED_LIABILITY_PROPRIETORS</option>
							<option>LIMITED_PARTNERSHIP</option>
							<option>LIMITED_PARTNERSHIP_PRIVATE_CORPORATION</option>
							<option>NONPROFIT</option>
							<option>OTHER_CORPORATE_BODY</option>
							<option>PARTNERSHIP</option>
							<option>PRIVATE_CORPORATION</option>
							<option>PRIVATE_PARTNERSHIP</option>
							<option>PROPRIETORSHIP</option>
							<option>PROPRIETORSHIP_CRAFTSMAN</option>
							<option>PROPRIETARY_COMPANY</option>
							<option>PUBLIC_COMPANY</option>
							<option>PUBLIC_CORPORATION</option>
							<option>PUBLIC_PARTNERSHIP</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Business subtype (required only for
						Business Type GOVERNMENT and ASSOCIATION_GOVERNMENT)</div>
					<div class="param_value">
						<select name="businessSubtype">
							<option>- Select a value -</option>
							<option>ENTITY</option>
							<option>EMANATION</option>
							<option>ESTD_COMMONWEALTH</option>
							<option>ESTD_UNDER_STATE_TERRITORY</option>
							<option>ESTD_UNDER_FOREIGN_COUNTRY</option>
							<option>INCORPORATED</option>
							<option>NON_INCORPORATED</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Incorporation Id</div>
					<div class="param_value">
						<input type="text" name="incorporationId" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Average price</div>
					<div class="param_value">
						<input type="text" name="averagePrice" value="1.00" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Average monthly volume</div>
					<div class="param_value">
						<input type="text" name="averageMonthlyVolume" value="100" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Percentage Revenue from online sales</div>
					<div class="param_value">
						<input type="text" name="percentageRevenueFromOnline" value="100" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Sales Venue</div>
					<div class="param_value">
						<select name="salesVenue">
							<option>WEB</option>
							<option>EBAY</option>
							<option>OTHER_MARKETPLACES</option>
							<option>OTHER</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Sales Venue description</div>
					<div class="param_value">
						<input type="text" name="salesVenueDesc" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">VAT Id</div>
					<div class="param_value">
						<input type="text" name="vatId" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">VAT Country code</div>
					<div class="param_value">
						<input type="text" name="vatCountryCode" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Commercial registration location</div>
					<div class="param_value">
						<input type="text" name="commercialRegistrationLocation" value="" />
					</div>
				</div>



				<div class="section_header">Business stakeholder</div>
				<div class="params">
					<div class="param_name">Stakeholder role *</div>
					<div class="param_value">
						<select name="role">
							<option>- Select a value -</option>
							<option>CHAIRMAN</option>
							<option>SECRETARY</option>
							<option>TREASURER</option>
							<option>BENEFICIAL_OWNER</option>
							<option>PRIMARY_CONTACT</option>
							<option>INDIVIDUAL_PARTNER</option>
							<option>NON_INDIVIDUAL_PARTNER</option>
							<option>PRIMARY_INDIVIDUAL_PARTNER</option>
							<option>DIRECTOR</option>
							<option>NO_BENEFICIAL_OWNER</option>
						</select>
					</div>
				</div>
				<div class="input_header">Stakeholder name</div>
				<table class="params">
					<tr>
						<th>Salutation</th>
						<th>First Name</th>						
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Suffix</th>
					</tr>
					<tr>
						<td><input type="text" name="stakeholderSalutation" value="Mr." />
						</td>
						<td><input type="text" name="stakeholderFirstName" value="Krakkel" />
						</td>						
						<td><input type="text" name="stakeholderMiddleName" value="" />
						</td>
						<td><input type="text" name="stakeholderLastName" value="Simore" /></td>
						<td><input type="text" name="stakeholderSuffix" value="" /></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Full legal name</div>
					<div class="param_value">
						<input type="text" name="fullLegalName" value="" />
					</div>
				</div>
				<div class="input_header">Address</div>
				<table class="params">
					<tr>
						<th>Line 1 *</th>
						<th>Line 2</th>
						<th>City</th>
						<th>State</th>
						<th>Postal code</th>
						<th>Country code *</th>
					</tr>
					<tr>
						<td><input type="text" name="stakeholderLine1"
							value="1968 Ape Way" /></td>
						<td><input type="text" name="stakeholderLine2" value="" /></td>
						<td><input type="text" name="stakeholderCity" value="Austin" /></td>
						<td><input type="text" name="stakeholderState" value="TX" /></td>
						<td><input type="text" name="stakeholderPostalCode" value="78750" />
						</td>
						<td><input type="text" name="stakeholderCountryCode" value="US" />
						</td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Date of birth</div>
					<div class="param_value">
						<input type="text" name="stakeholderDateOfBirth"
							value="1968-01-01Z" />
					</div>
				</div>
				<div class="submit">
					<input type="submit" value="Submit" />
				</div>
				<a href="index.php">Home</a>
			</div>
		</form>		
	</div>
</body>
</html>
