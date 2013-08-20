<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Accounts - Get Verified Status</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="sdk.css" />
<script type="text/javascript" src="sdk.js"></script>
</head>

<body>
	<div id="wrapper">
		<img src="https://devtools-paypal.com/image/bdg_payments_by_pp_2line.png"/>
		<div id="header">
			<h3>Get Verified Status</h3>
			<div id="apidetails">Check if a PayPal account status is verified. A
				PayPal account gains verified status under a variety of
				circumstances, such as when an account is linked to a verified
				funding source. Verified status serves to indicate a trust
				relationship.</div>
		</div>
		<form method="post" action="GetVerifiedStatus.php">
			<div id="request_form">
				<div class="submit">
					<div class="params">
						<div class="param_name">Email Address of the account holder *</div>
						<div class="param_value">
							<input type="text" name="emailAddress" value="platfo@paypal.com" />
						</div>
					</div>

					<div class="params">
						<div class="param_name">Match Criteria</div>
						<div class="param_value">
							<select name="matchCriteria">
								<option value="">--Select--</option>
								<option value="NAME" selected="selected">Name</option>
								<option value="NONE">None</option>
							</select>
						</div>
						<span class="note">NOTE: To use Match criteria NONE you must
							request and be granted advanced permission levels.</span>
					</div>
					<div class="params">
						<div class="param_name">First Name (Required if matchCriteria is
							NAME)</div>
						<div class="param_value">
							<input type="text" name="firstName" value="Bonzop" />
						</div>
					</div>
					<div class="params">
						<div class="param_name">Last Name (Required if matchCriteria is
							NAME)</div>
						<div class="param_value">
							<input type="text" name="lastName" value="Zaius" />
						</div>
					</div>

					<input type="submit" name="submit" value="Submit" /><br />
				</div>
				<a href="index.php">Home</a>
			</div>
		</form>
	</div>
</body>
</html>
