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
	
	if ($conn->query($sql)=== True)
	{
		echo "Your data is added to our database";
	} else {
		echo "Error:" . $sql . "<br>" . $conn->error;
	}

header("location:payment.html");
	 
	#echo " on ";
	#echo date("l jS \of F Y ");


$conn->close();
?>
