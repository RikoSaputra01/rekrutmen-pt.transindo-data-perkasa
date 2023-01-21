<?php
	if(ISSET ($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = $conn->query("SELECT * FROM `cust` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['cust_id'] = $fetch['cust_id'];
			header('location:pemesanan.php');
		}else{
			echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>