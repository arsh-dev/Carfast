<?php

		$name = "ayush";
		$pass = "AYush";
		$pickup = "ayush";
		$final = "ayush";
		$mobile = 12345;
		$gender = "male";
		$age = 89;
		$time = "6 AM";
		$seats = 8;

		$con = mysqli_connect('localhost','ars','1234','sajal');
		$sql = "SELECT count(*) AS total FROM `user` WHERE `time`='9 AM' AND `date`='2020-07-23'";
		$result=mysqli_query($con,$sql);
		$values=mysqli_fetch_assoc($result);
		$num_rows=$values['total'];
		echo $num_rows;

		if ($num_rows < 9 ) {

			
			$sql = "INSERT INTO user(name, password, pickup, final, mobile, gender, age, time, seats) values('$name', '$pass', '$pickup', '$final','$mobile','$gender', '$age', '$time', '$seats')";
			
			if ($con->query($sql)=== True) {
				echo "Your data is added to our database";
				

			} else {
				echo "Error:" . $sql . "<br>" . $conn->error;
			}
	
		} else {

			echo "Your data cannot be added to database";
			
		}
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirm Booking</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>
<body>
<form class="box" action="formdata.php" method="POST">
	<script src="https://checkout.razorpay.com/v1/checkout.js"    
			data-key="<?php echo $api_key_id ?>"
			data-amount="15500" 
			data-currency="INR"
			data-buttontext="Confirm Pay"    
			data-name="Carfast Corp"    
			data-description="Confirm Booking"    
			data-image="https://images.unsplash.com/photo-1590362891991-f776e747a588?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60"    
			data-theme.color="#F37254">
					
	</script><input id="time" type="hidden" custom="Hidden Element" name="hidden">
		
</form>
</body>
</html>
