<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_tiket'])){
		$tiket_type = $_POST['tiket_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `tiket` SET `tiket_type` = '$tiket_type', `price` = '$price', `photo` = '$photo_name' WHERE `tiket_id` = '$_REQUEST[tiket_id]'") or die(mysqli_error());
		header("location:tiket.php");
	}
?>