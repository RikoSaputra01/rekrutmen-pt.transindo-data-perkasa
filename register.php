<?php 

include 'connect.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$address = $_POST['address'];
	$contactno = $_POST['contactno'];
	$password = ($_POST['password']);
	$cpassword = ($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM cust WHERE cust_id='$cust_id'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO cust (cust_id, username, address, contactno, password)
					VALUES ('$cust_id', '$username',  '$address',  '$contactno',  '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registrasi Berhasil')</script>";
				$cust_id = "";
				$username = "";
				$address = "";
				$contactno = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Password Salah')</script>";
			}
		} else {
			echo "<script>alert('Berhasil')</script>";
		}
		
	} else {
		echo "<script>alert('Password Tidak Cocok.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href = "Bootstrap/css/style.css">
		<link href="assets/img/logo.png" rel="icon">
		<link href="assets/img/logo.png" rel="apple-touch-icon">

	<title>Register</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="No Contact" name="contactno" value="<?php echo $contactno; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>