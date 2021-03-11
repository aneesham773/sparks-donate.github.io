<html>
<?php
require_once'configDb.php';
require_once'razorpay-php/Razorpay.php';
use Razorpay\Api\Api;

$keyId='rzp_test_dArOWFvKzB2fNG';
$secretKey='XkF6UGaqN2yusidbpO5XiziN';
$api= new Api($keyId,$secretKey);

$CUSTOMER_NAME=$_POST['CUSTOMER_NAME'];
$CUSTOMER_EMAIL=$_POST['CUSTOMER_EMAIL'];
$CUSTOMER_MOBILE=$_POST['CUSTOMER_MOBILE'];
$PAY_AMT=$_POST['PAY_AMT'];
$order=$api->order->create(array(
'receipt'=>rand(1000,9999).'ORD',
'amount' =>$PAY_AMT,
'payment_capture'=>1,
'currency'=>'INR',
));
?>
<meta name="viewport" content="width=device-width">
<form action="success.php" method="POST">
	<script 

       src="https://checkout.razorpay.com/vi/checkout.js"
       data-key="<?php echo $keyId ?>"
       data-amount="<?php echo $order->amount ?>"
       data-currency="INR"
       data-order_id="<?php echo $order->id ?>"
       data-buttontext="Pay with Razorpay"
       data-name="Myinboxhub"
       data-description="For Donation"
       data-image="<?php echo 'https://myinboxhub.co.in/data/logo/logo.png';?>"
       data-prefill.name="<?php echo $CUSTOMER_NAME;?>"
       data-prefill.email="<?php echo $CUSTOMER_EMAIL;?>"
       data-prefill.contact="<?php echo $CUSTOMER_MOBILE;?>"
       data-theme.color="#f0a43c"
       ></script>
       <input type="hidden" name="hidden" custom="Hidden Element">
	></script>
</form>
</html>