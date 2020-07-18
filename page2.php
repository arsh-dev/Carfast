<?php
require_once('./config.php');
$conn = mysqli_connect('localhost','ars','1234','sajal');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
	#$name = $_POST['topic'];
	$time = $_POST['gwalior'];
	

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CarFast </title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
	<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
	
	
</head>
<body>
	<h1  align="center" style="background-color:powderblue"> Confirm Booking </h1>
	<div class="box">
	
	<form  action="check.php" method="POST">
		<label>Your Good Name: &nbsp &nbsp  </label>
		<input type="text" name="name" placeholder="username" required onclick="terms_changed(this)"><br><br>

		<label>Create a Password: &nbsp &nbsp</label>
		<input type="password" name="pass" placeholder="password" required onclick="terms_changed(this)"><br><br>

		
		Choose Date: &nbsp &nbsp<input id="date" type="date" name="date" required onclick="terms_changed(this)"><br><br>

		
		
		<label>Contact Number: &nbsp&nbsp</label>
		<input type="number" name="mobile" placeholder="Enter your number" required onclick="terms_changed(this)"><br><br>

		<label>Select your Gender: &nbsp&nbsp</label><br><br>
		<input type="radio" name="gender" value="male" checked> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other<br><br>

		<label>Age: &nbsp&nbsp</label>
		<input type="number" name="age"  placeholder="Enter your age" min="10" required onclick="terms_changed(this)"><br><br>

		<!--label>Pickup Location: &nbsp&nbsp </label-->
		<input type="hidden" name="pickup" value="Gwalior" readonly>
		<!--label>Drop Location: &nbsp&nbsp </label-->
		<input type="hidden" name="final" value="Sabalgarh" readonly>

		<!--label>Travel Time: &nbsp &nbsp</label-->
		<input type="hidden" name="time" readonly value="<?php echo $time ?>" >
		<!--label>Number of seats to be booked: &nbsp&nbsp</label-->
		<input type="hidden" name="seats" value="1" min="1" readonly><br>
		<input type="submit" name="submit" value="Confirm">
		<!--script src="https://checkout.razorpay.com/v1/checkout.js"    
			data-key="<!?php echo $api_key_id ?>"
			data-amount="15500" 
			data-currency="INR"
			data-buttontext="Confirm Pay"    
			data-name="Carfast Corp"    
			data-description="Confirm Booking"    
			data-image="https://images.unsplash.com/photo-1590362891991-f776e747a588?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60"    
			data-theme.color="#F37254">
					
	</script><input id="time" type="hidden" custom="Hidden Element" name="hidden"-->

	

		
	</form></div>

<script type="text/javascript">
	function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.SelectedValue=true){
        document.getElementById("time").disabled = false;
    } else{
        document.getElementById("time").disabled = true;
    }
}
</script>

<script>
	var today = new Date().toISOString().split('T')[0];
	document.getElementsByName("date")[0].setAttribute('min', today);
</script>

</body>
</html>

