<?php
include("connection.php");
session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$mobile = $_POST['mobile'];

        $sql = "SELECT * FROM user WHERE name = '$name' and password = '$pass' and mobile = '$mobile'";
        $result = mysqli_query($db,$sql);
   	    $rs = mysqli_fetch_assoc($result);
	    $date = $rs['date'];
	    $time = $rs['time'];
	    $pickup = $rs['pickup'];
	    $final = $rs['final'];
	    $gender = $rs['gender'];
	    $age = $rs['age'];
	    $seats = $rs['seats'];

	    switch ($time) {
	    	case '6 AM':
	    		$time1 = '06:00:00';
	    		break;
	    	case '9 AM':
	    		$time1 = '09:00:00';
	    		break;
	    	case '12 PM':
	    		$time1 = '12:00:00';
	    		break;
	    	case '3 PM':
	    		$time1 = '15:00:00';
	    		break;
	    	case '6 PM':
	    		$time1 = '18:00:00';
	    		break;
	    	case '9 PM':
	    		$time1 = '21:00:00';
	    		break;
	   
	    }
	    
	    date_default_timezone_set('Asia/Kolkata');
	    $dd = date($date.' '.$time1);
		$date1 = strtotime($dd); 
		date_default_timezone_set('Asia/Kolkata');
		$date2 = date('Y-m-d'.' H:i:s'); 
		$date3 = strtotime($date2);
		$diff = ($date1 - $date3); 
		$hours = floor(($diff) / (60*60));

		if ($hours > 24) {
			
			$sql = "INSERT INTO cancel(name, password, pickup, final, mobile, gender, age, date, time, seats) values('$name', '$pass', '$pickup', '$final','$mobile','$gender', '$age', '$date', '$time', '$seats')";
			if (mysqli_query($db, $sql)) {



				$sql = "DELETE FROM user WHERE name = '$name' and password = '$pass' and mobile = '$mobile'";

				if (mysqli_query($db, $sql)) {
					
					echo "
					<html>
					<head>
						<meta charset='utf-8'>
					  	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
						<title>Ars-CarFast</title>
						
					  <link rel='stylesheet' type='text/css' href='refundstyle.css'>
						<link href='https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap' rel='stylesheet'>
						<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css'/>
					</head>
					<body>
					<div>
					<h1 class='animate__lightSpeedInLeft'><center>Your ticket deleted successfully!</center></h1></div>

					<form class='box' name='myForm' action='refundcomplete.php' method='POST'>
					<p> *Please do not refresh this page otherwise you will not get any refund.
					  <h2 style='background-color: lightgreen; border-radius: 15%;'><center>Proceed for Refund</center></h2>
					    <label>Your Registered number: &nbsp&nbsp</label>
					    <input type='number' name='num' value='$mobile' readonly><br><br>

					    <label>Enter Account Holder Name: &nbsp &nbsp</label>
					    <input type='text' name='name' placeholder='Enter your name' required><br><br>
					    

					    <label>IFSC Code: &nbsp&nbsp</label>
					    <input type='text' name='ifsc' placeholder='Enter IFSC Code' required><br><br>

					    <label>Account Number: &nbsp&nbsp</label>
					    <input type='number' name='acc' placeholder='Enter Account Number' required><br><br>


					    <input type='submit' name='submit' value='Confirm'>

					  </form>

					</body>

					</html>
					";
				} 
			} else {
			  echo "Error deleting record: " . mysqli_error($db);
			}

		}
		elseif ($hours < 24 AND $hours > 0) {
			echo "<br>";
			echo "<center><h1>Sorry! You cannot cancel your ticket within 24 hours of travel.</h1></center>";
		}
		else {
			echo "<br>";
			echo "<center><h1>Invalid Response!</h1></center>";
		}
 
	}
echo "<br><center><a href='index.html'>Back to home</a><center>";
mysqli_close($db);
        
?>
