<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Accounts - Add Payment Card</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="sdk.css" />
<script type="text/javascript" src="sdk.js"></script>
</head>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>Add Payment Card</h3>
			<div id="apidetails">Set up credit cards as funding sources for
				PayPal accounts.</div>
		</div>
		<form method="post" action="AddPaymentCard.php">
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
						Create Account Key ( <a href='CreateAccount.php'>Get
							CreateAccountKey</a>)
					</div>
					<div class="param_value">
						<input type="text" name="createAccountKey" value="" />
					</div>
				</div>
				<div class="section_header">Name on card</div>
				<table class="params">
					<tr>
						<th>Salutation</th>
						<th>First Name *</th>
						<th>Middle Name</th>
						<th>Last Name *</th>
						<th>Suffix</th>
					</tr>
					<tr>
						<td><input type="text" name="saluation" value="Mr." /></td>
						<td><input type="text" name="firstName" value="Bonzop" /></td>
						<td><input type="text" name="middleName" value="Zaius" /></td>
						<td><input type="text" name="lastName" value="Simore" /></td>
						<td><input type="text" name="suffix" value="" /></td>
					</tr>
				</table>
				<div class="section_header">Card Details</div>
				<table class="params">
					<tr>
						<th>Card number</th>
						<th>Card type</th>
						<th>CardOwner DateOfBirth</th>
						<th>Card verification number (CVV2)</th>
						<th>Issue number</th>
					</tr>
					<tr>
						<td class="param_value"><input type="text" name="cardNumber"
							value="" /></td>
						<td class="param_value"><select name="cardType">
								<option value="">- Select a value -</option>
								<option value="Visa" selected="selected">Visa</option>
								<option value="MasterCard">MasterCard</option>
								<option value="AmericanExpress">AmericanExpress</option>
								<option value="Discover">Discover</option>
								<option value="SwitchMaestro">SwitchMaestro</option>
								<option value="Solo">Solo</option>
								<option value="CarteAurore">CarteAurore</option>
								<option value="CarteBleue">CarteBleue</option>
								<option value="Cofinoga">Cofinoga</option>
								<option value="4etoiles">4etoiles</option>
								<option value="CartaAura">CartaAura</option>
								<option value="TarjetaAurora">TarjetaAurora</option>
								<option value="JCB">JCB</option>
						</select>
						</td>
						<td class="param_value"><input type="text"
							name="cardOwnerDateOfBirth" value="" /></td>
						<td class="param_value"><input type="text"
							name="cardVerificationNumber" value="" /></td>
						<td class="param_value"><input type="text" name="issueNumber"
							value="" /></td>
					</tr>
				</table>
				<div class="section_header">Start Date</div>
				<table class="params">
					<tr>
						<th class="param_name">Start Month</th>
						<th class="param_name">Start Year</th>
					</tr>
					<tr>
						<td class="param_value"><select name="startMonth">
								<option value="">--Select--</option>
								<option value="01" selected="selected">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
						</select></td>
						<td class="param_value"><input type="text" name="startYear"
							value="2012" /></td>
					</tr>
				</table>
				<div class="section_header">Expiration Date</div>
				<table class="params">
					<tr>
						<th class="param_name">Expiration Month</th>
						<th class="param_name">Expiration Year</th>
					</tr>
					<tr>
						<td class="param_value"><select name="expirationMonth">
								<option value="">--Select--</option>
								<option value="01" selected="selected">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
						</select></td>
						<td class="param_value"><input type="text" name="expirationYear"
							value="2022" /></td>
					</tr>
				</table>
				<div class="section_header">Address Details</div>
				<table class="params">
					<tr>
						<th class="param_name">Address Line1*</th>
						<th class="param_name">Address Line2</th>
						<th class="param_name">City*</th>
						<th class="param_name">State*</th>
						<th class="param_name">PostalCode*</th>
						<th class="param_name">CountryCode*</th>
					</tr>
					<tr>
						<td class="param_value"><input type="text" name="billingStreet"
							value="1,Main St" /></td>
						<td class="param_value"><input type="text" name="billingLine2"
							value="" /></td>
						<td class="param_value"><input type="text" name="billingCity"
							value="Austin" /></td>
						<td class="param_value"><input type="text" name="billingState"
							value="TX" />
						</td>
						<td class="param_value"><input type="text"
							name="billingPostalCode" value="78750" /></td>
						<td class="param_value"><input type="text"
							name="billingCountryCode" value="US" /></td>
					</tr>
				</table>

				<div class="params">
					<div class="param_name">ConfirmationType * (ConfirmationType NONE
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
