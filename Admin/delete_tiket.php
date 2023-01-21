<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `tiket` WHERE `tiket_id` = '$_REQUEST[tiket_id]'") or die(mysql_error());
	header("location:tiket.php");
?>