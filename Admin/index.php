<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang = "en">
	<head>
		<title>Website Pemesanan Tiket Konser</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href = "../Bootstrap/css/style.css">
	 <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">
	</head>
<body>
<div class="container">
		<form action="ceklogin.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
						<div class = "input-group">
							<input type = "text" placeholder="Username" name = "username" class = "form-control" required = "required" />
						</div>
						<div class = "input-group">
							<input type = "password" placeholder="Password" name = "password" class = "form-control" required = "required" />
						</div>
						<div class="input-group">
						<button name="login" class="btn">Login</button>
						</div>
						<p class="login-text" style="font-size: 0.7rem; font-weight: 800;">&copy; Copyright Riko Saputra</p>
						</form>
</div>
</body>	
</html>