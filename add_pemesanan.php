<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Website Pemesanan Tiket Konser</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/styleku.css" />
		  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">
	</head>
<body>
	<nav style = "background-color:#323334;" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a href="index.php" class = "navbar-brand" >Pemesanan Tiket</a>
			</div>
		</div>
	</nav>	
	
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Pesan Tiket</h3></strong>
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `tiket` WHERE `tiket_id` = '$_REQUEST[tiket_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['tiket_type']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Rp. ".$fetch['price']."";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_cust"><i class = "glyphicon glyphicon-save"></i> Pesan</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_pemesanan.php'?>
			</div>
			<center><label>&copy; Copyright Riko Saputra </label>
		</div>

	</div>
	<br />
	<br />
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>