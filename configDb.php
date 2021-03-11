<?php 
$db = mysqli_connect('localhost:3307', 'root', '', 'razorpay'); 
if(mysqli_connect_errno()){
	echo "Failed to connect to MYSQL:".mysqli_connect_error();
	exit();
}
 

?>