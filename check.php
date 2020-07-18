<?php
require_once('./config.php');
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
	

	$sql = "SELECT count(*) AS total FROM `user` WHERE time='$time' AND date='$date' AND pickup='$pickup'";
		$result=mysqli_query($conn,$sql);
		$values=mysqli_fetch_assoc($result);
		$num_rows=$values['total'];

		if ($num_rows>6) {

				echo "Seats are Full";
				echo '<script>alert("Seats are Full")</script>';
				sleep(4);
				header("location:seatfull.html");

		
		} else {

			echo "<html>
					<head>
					<title>CarFast</title>
					<link rel='stylesheet' type='text/css' href='formstyle.css'>
					<link href='https://fonts.googleapis.com/css2?family=Piedra&display=swap' rel='stylesheet'>
					<link href='https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap' rel='stylesheet'>
					

					</head>
					<body>
						<h1 id='h11' align='center' style='background-color:powderblue'> Confirm Booking </h1>
						
						<form class='box' action='formdata.php' method='POST'>
							<label>Your Good Name: &nbsp &nbsp  </label>
							<input type='text' name='name' placeholder='$name' value='$name' readonly><br><br>

							<label>Create a Password: &nbsp &nbsp</label>
							<input type='password' name='pass' placeholder='$pass' value='$pass' readonly><br><br>

							<label>Pickup Location: &nbsp&nbsp </label>
							<input type='text' name='pickup' value='$pickup' readonly><br><br>
							<label>Drop Location: &nbsp&nbsp </label>
							<input type='text' name='final' value='$final' readonly><br><br>

							Travel Date: &nbsp &nbsp<input type='date' name='date' value='$date' readonly><br><br>
							
							<label>Contact Number: &nbsp&nbsp</label>
							<input type='number' name='mobile' placeholder='$mobile' value='$mobile' readonly><br><br>

							<label>Select your Gender: &nbsp&nbsp</label><br><br>
							<input type='radio' name='gender' value='$gender' checked> $gender<br>
							<br>

							<label>Age: &nbsp&nbsp</label>
							<input type='number' name='age'  placeholder='Enter your age' value='$age' min='10' readonly><br><br>

							<label>Travel Time: &nbsp &nbsp</label>
							<input type='text' name='time' readonly value='$time' ><br><br>
							<label>Number of seats to be booked: &nbsp&nbsp</label>
							<input type='number' name='seats' value='1' min='1' readonly><br><br>
							<input type='submit' name='submit' value='Confirm'>
							<!--script src='https://checkout.razorpay.com/v1/checkout.js'    
								data-key='$api_key_id'
								data-amount='100' 
								data-currency='INR'
								data-buttontext='Confirm Pay'    
								data-name='Carfast Corp'    
								data-description='Confirm Booking'    
								data-image='https://images.unsplash.com/photo-1590362891991-f776e747a588?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60'    
								data-theme.color='#F37254'>
										
						</script><input id='time' type='hidden' custom='Hidden Element' name='hidden'-->
							
						</form>

					</body>
					</html>";
		
			
}

//header("location:https://rzp.io/l/GlSoNcZ");
//header("location:payment.php");
	#echo " on ";
	#echo date("l jS \of F Y ");
$conn->close();
?>

	
		
