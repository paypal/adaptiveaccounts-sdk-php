<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Accounts - Add Bank Account</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="sdk.css" />
<script type="text/javascript" src="sdk.js"></script>
</head>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>Add Bank Account</h3>
			<div id="apidetails">Set up bank accounts as funding sources for
				PayPal accounts.</div>
		</div>
		<form method="post" action="AddBankAccount.php">
			<div id="request_form">
					<div class="input_header">Account ID or email Address of your paypal
					account *</div>
				<table class="params">
					<tr>
						<th>Account ID</th>
						<th>Email address</th>
					</tr>
					<tr>
						<td><input type="text" name="accountID" value="" /></td>
						<td><input type="text" name="emailAddress" value="" /></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">
						Create Account Key ( <a href='CreateAccount.html.php'>Get
							CreateAccountKey</a>)
					</div>
					<div class="param_value">
						<input type="text" name="createAccountKey" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Bank country code *</div>
					<div class="param_value">
						<input type="text" name="bankCountryCode" value="US" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Bank name *</div>
					<div class="param_value">
						<input type="text" name="bankName" value="Huntington Bank" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Bank routing number *</div>
					<div class="param_value">
						<input type="text" name="routingNumber" value="021473030" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Bank account type</div>
					<div class="param_name">
						<select name="bankAccountType">
							<option value="CHECKING">CHECKING</option>
							<option value="SAVINGS" selected="selected">SAVINGS</option>
							<option value="BUSINESS_CHECKING">BUSINESS_CHECKING</option>
							<option value="BUSINESS_SAVINGS">BUSINESS_SAVINGS</option>
							<option value="NORMAL">NORMAL</option>
							<option value="UNKNOWN">UNKNOWN</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Bank account number (BBAN)</div>
					<div class="param_value">
						<input type="text" name="bankAccountNumber" value="162951" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">International Bank Account Number (IBAN)</div>
					<div class="param_value">
						<input type="text" name="iban" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">CLABE (Bank information for countries like
						Mexico)</div>
					<div class="param_value">
						<input type="text" name="clabe" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">BSB Number (Bank State Branch number)</div>
					<div class="param_value">
						<input type="text" name="bsbNumber" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Branch location</div>
					<div class="param_value">
						<input type="text" name="branchLocation" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Branch sort code</div>
					<div class="param_value">
						<input type="text" name="sortCode" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Branch transit number</div>
					<div class="param_value">
						<input type="text" name="bankTransitNumber" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Institution number</div>
					<div class="param_value">
						<input type="text" name="institutionNumber" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Branch code</div>
					<div class="param_value">
						<input type="text" name="branchCode" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Agency number (Brazil only)</div>
					<div class="param_value">
						<input type="text" name="agencyNumber" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Bank code</div>
					<div class="param_value">
						<input type="text" name="bankCode" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">RIB Key</div>
					<div class="param_value">
						<input type="text" name="ribKey" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Control digit</div>
					<div class="param_value">
						<input type="text" name="controlDigit" value="" />
					</div>
				</div>
				<!--<div class="params">
					<div class="param_name">Tax id type of CNPJ or CPF (Brazil only)</div>
					<div class="param_value">
						<input type="text" name="taxIdType" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Tax id number for Brazil</div>
					<div class="param_value">
						<input type="text" name="taxIdNumber" value="" />
					</div>
				</div>
			-->
				<div class="params">
					<div class="param_name">Account holder date of birth</div>
					<div class="param_value">
						<input type="text" name="accountHolderDateOfBirth" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Confirmation type * (ConfirmationType NONE
						requires advanced permission levels. You must pass the
						createAccount key.)</div>
					<div class="param_value">
						<select name="confirmationType">
							<option value="WEB">WEB</option>
							<option value="MOBILE">MOBILE</option>
							<option value="NONE">NONE</option>
						</select>
					</div>
				</div>
				<div class="section_header">Web options (For Confirmation Type WEB
					only)</div>
				<table class="params">
					<tr>
						<th class="param_name">Return URL</th>
						<th class="param_name">Return URL description</th>
						<th class="param_name">Cancel URL</th>
						<th class="param_name">Cancel URL description</th>
					</tr>
					<tr>
						<td class="param_value"><input type="text" name="returnURL"
							value="" /></td>
						<td class="param_value"><input type="text"
							name="returnURLDescription" value="" /></td>
						<td class="param_value"><input type="text" name="cancelURL"
							value="" /></td>
						<td class="param_value"><input type="text"
							name="cancelURLDescription" value="" /></td>
					</tr>
				</table>
				<div class="submit">
					<input type="submit" name="submit" value="Submit" /><br />
				</div>
				<a href="index.php">Home</a>
			</div>
		</form>
	</div>
</body>
</html>
