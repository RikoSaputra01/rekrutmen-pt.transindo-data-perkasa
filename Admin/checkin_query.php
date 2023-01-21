<?php
	require_once 'connect.php';
	$time = date("h:i:sa", strtotime("+8 HOURS"));

	
	$conn->query("UPDATE `transaction` SET `checkin_time` = '$time', `status` = 'Check In' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
	header("location:checkin.php");
?>