<?php
session_start();
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_cust'])){
		$checkin = $_POST['date'];
		$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `tiket_id` = '$_REQUEST[tiket_id]' && `status` = 'Pending'") or die(mysqli_error());
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($tiket_id = $fetch['tiket_id']){
							$tiket_id = $_REQUEST['tiket_id'];
							$conn->query("INSERT INTO `transaction`(cust_id, tiket_id, status, checkin) VALUES('$_SESSION[cust_id]', '$tiket_id', 'Pending', '$checkin')") or die(mysqli_error());
							header("location:reply_pemesanan.php");
						}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}
		}
?>