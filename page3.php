<?php
$conn = mysqli_connect('localhost','ars','1234','sajal');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
	#$name = $_POST['topic'];
	$time = $_POST['sabalgarh'];
	

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
	<h1 id="h11" align="center" style="background-color:powderblue"> Confirm Booking </h1>
	
	<form class="box" action="formdata.php" method="POST">
		<label>Your Good Name:&nbsp&nbsp </label>  
		<input type="text" name="name" placeholder="username"><br><br>
		<label>Create a Password:&nbsp &nbsp</label>
		<input type="password" name="pass" placeholder="password"><br><br>
		<label>Pickup Location:&nbsp&nbsp </label>
		<input type="text" name="pickup" value="Sabalgarh" readonly><br><br>
		<label>Drop Location: &nbsp&nbsp</label>
		<input type="text" name="final" value="Gwalior" readonly><br><br>
		Choose Date: &nbsp &nbsp<input type="date" name="date"><br><br>
		<label>Contact Number: &nbsp&nbsp</label>
		<input type="tel" name="mobile" placeholder="Enter your number"><br><br>
		<label>Select your Gender: &nbsp&nbsp</label><br><br>
		<input type="radio" name="gender" value="male"> Male<br>
		<input type="radio" name="gender" value="female"> Female<br>
		<input type="radio" name="gender" value="other"> Other<br><br>
		<label>Age: &nbsp&nbsp</label>
		<input type="number" name="age"  placeholder="Enter your age" min="10" ><br><br>
		<label>Travel Time:  &nbsp&nbsp </label>
		<input type="text" name="time" readonly value="<?php echo $time ?>" ><br><br>
		<label>Number of seats to be booked: </label> &nbsp &nbsp
		<input type="number" name="seats" placeholder="Number of seats" min="1"><br><br>
		<input type="submit" name="submit" value="Confirm">
		
	</form>

</body>
</html>

