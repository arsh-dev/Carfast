<?php 
	require_once('./config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>


	<form action="paymentconfirm.php" method="POST"> 
		<script src="https://checkout.razorpay.com/v1/checkout.js"    
				data-key="<?php echo $api_key_id ?>"
				data-amount="15000" 
				data-currency="INR"
				
				data-buttontext="Confirm Pay"    
				data-name="Carfast Corp"    
				data-description="Test transaction"    
				data-image="logo.jpeg"    
				data-prefill.name="Sajal Bansal"    
				data-prefill.email="sajalbansal2104@gmail.com"    
				data-prefill.contact="9587131503"    
				data-theme.color="#F37254">
					
		</script><input type="hidden" custom="Hidden Element" name="hidden"></form>


</body>
</html>