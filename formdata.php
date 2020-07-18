<?php
$conn = mysqli_connect('localhost','ars','1234','sajal');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$pickup = $_POST['pickup'];
	$final = $_POST['final'];
	$mobile = $_POST['mobile'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$seats = $_POST['seats'];
	

	$sql = "INSERT INTO user(name, password, pickup, final, mobile, gender, age, date, time, seats) values('$name', '$pass', '$pickup', '$final','$mobile','$gender', '$age', '$date', '$time', '$seats')";
		
			if ($conn->query($sql)=== True) {
					
					echo "<br>";
					echo "<center><h1>Your Ticket is CONFIRMED!</center></h1>";
					echo "<center><h2>Enjoy your ride!</center></h2>";
					echo "<center><h1><a href='index.html'>Back To Home</a></h1></center>";
				} else {
					//echo "Error:" . $sql . "<br>" . $conn->error;
					//echo "-----";
					echo "<center><h1>You input is not correct.<br>
					Booking denied.<br>
					Please input correctly</center>";
					echo "<center><h1><a href='index.html'>Try Again</a></h1></center>";
				}
		
		
				
			
//header("location:https://rzp.io/l/GlSoNcZ");
//header("location:payment.php");
	#echo " on ";
	#echo date("l jS \of F Y ");
$conn->close();
?>

	
		
