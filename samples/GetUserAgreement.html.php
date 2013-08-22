<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Accounts - Get User Agreement</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="sdk.css" />
<script type="text/javascript" src="sdk.js"></script>
</head>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>Get User Agreement</h3>
			<div id="apidetails"></div>
		</div>
		<form method="post" action="GetUserAgreement.php">
			<div id="request_form">
				<div class="note">If you specify CreateAccount key, do not pass a
					country code or language code. Doing so will result in an error.</div>
				<div class="params">
					<div class="param_name">
						CreateAccountKey (<a href="CreateAccount.php">Get CreateAccountKey</a>)
					</div>
					<div class="param_value">
						<input type="text" name="createAccountKey" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Country Code</div>
					<div class="param_value">
						<select name="countryCode">
							<option value="US">US - United States *</option>
							<option value="AU">AU - Australia</option>
							<option value="AT">AT - Austria</option>
							<option value="CA">CA - Canada</option>
							<option value="CZ">CZ - Czech Republic</option>
							<option value="EU">EU - European Union *</option>
							<option value="FR">FR - France</option>
							<option value="DE">DE - Germany</option>
							<option value="GB">GB - Great Britain</option>
							<option value="GR">GR - Greece</option>
							<option value="IE">IE - Ireland</option>
							<option value="IL">IL - Israel</option>
							<option value="IT">IT - Italy</option>
							<option value="JP">JP - Japan</option>
							<option value="NL">NL - Netherlands</option>
							<option value="NZ">NZ - New Zealand (Aotearoa)</option>
							<option value="PL">PL - Poland</option>
							<option value="PT">PT - Portugal</option>
							<option value="RU">RU - Russian Federation</option>
							<option value="SG">SG - Singapore</option>
							<option value="ZA">ZA - South Africa</option>
							<option value="ES">ES - Spain</option>
							<option value="CH">CH - Switzerland</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Language Code</div>
					<div class="param_value">
						<input type="text" name="languageCode" value="" />
					</div>
				</div>

				<div class="submit">
					<input type="submit" name="submit" value="Submit" /><br />
				</div>
				<a href="index.php">Home</a>
			</div>
		</form>
	</div>
</body>
</html>