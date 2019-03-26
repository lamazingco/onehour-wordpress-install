<!DOCTYPE html>
<html lang="en">
<head>
	<title>DigitalOcean WordPress Install</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action = "php/install.php" method = "POST">
					<span class="login100-form-title p-b-53">
						Install WordPress
					</span>

					<span>
						<p>1. Go here: <a href="https://cloud.digitalocean.com/account/api/tokens" target="_blank">https://cloud.digitalocean.com/account/api/tokens</a></p>
						<p>2. Click <b>Generate New Token</b></p>
						<p>3. Give it a name and click <b>Generate Token</b></p>
						<p>4. Copy key and paste it below</p>
						<br>
						<p>Hint: Key should be similar to: eeb4f01466ee8d7137aa1f6c982db4b690203f6905d5bacbbcfcdd5dee379738</p>
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Digital Ocean API key
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "API key is required">
						<input class="input100" type="text" name="api_key" id="api_key">
						<span class="focus-input100"></span>
					</div>
				
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Install WordPress
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>