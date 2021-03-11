<?php

require_once'configDb.php';
echo'<pre>';print_r($_POST);
$sql="INSERT INTO payment_raser(payment_id,order_id,signature_hash)VALUES ('".$_POST['razorpay_payment_id']."','".$_POST['razorpay_order_id']."','".$_POST['razorpay_signature']."')";
if($db->query($sql)===TRUE){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
die;
?>