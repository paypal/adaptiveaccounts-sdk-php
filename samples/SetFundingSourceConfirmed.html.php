<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Accounts - Set Funding Source Confirmed</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="sdk.css" />
<script type="text/javascript" src="sdk.js"></script>
</head>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>Set Funding Source Confirmed</h3>
			<div id="apidetails">Allows your application to mark a funding source
				as confirmed, after it is added successfully with AddPaymentCard or
				AddBankAccount.</div>
		</div>
		<form method="post" action="SetFundingSourceConfirmed.php">
			<div id="request_form">
				<div class="input_header">Account Id or email address of the account
					to which the funding source is to be added.</div>
				<table class="params">
					<tr>
						<th>Account ID</th>
						<th>Email Address</th>
					</tr>
					<tr>
						<td><input type="text" name="accountId" value="" /></td>
						<td><input type="text" name="emailAddress" value="" /></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">
						Funding Source Key * (Get FundingSourceKey via <a
							href='AddBankAccount.html.php'>AddBankAccount</a> or <a
							href='AddPaymentCard.html.php'>AddPaymentCard</a>)
					</div>
					<div class="param_value">
						<input type="text" name="fundingSourceKey" value="" />
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
