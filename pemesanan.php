<?php
session_start();
?>
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
		<!-- Template Main CSS File -->
		<link href="assets/css/style.css" rel="stylesheet">
	</head>

<body>

	<div class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><a href="index.php"><h1>Pemesanan Tiket</h1></a></strong>
				<br>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `tiket` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['tiket_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: Rp. ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_pemesanan.php?tiket_id=<?php echo $fetch['tiket_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Pesan</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:center; margin-right:10px;">
		<label>&copy; Copyright Riko Saputra </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	

<script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>