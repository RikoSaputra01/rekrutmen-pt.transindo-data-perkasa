<?php
	if(ISSET($_POST['add_tiket'])){
		$tiket_type = $_POST['tiket_type'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `tiket` (tiket_type, price, photo) VALUES('$tiket_type', '$price', '$photo_name')") or die(mysqli_error());
		header("location:tiket.php");
	}
?>