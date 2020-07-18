<!DOCTYPE html>
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
  <h2 style="background-color: lightgreen; border-radius: 15%;"><center>Proceed for Refund</center></h2>
    <label>Your Registered number: &nbsp&nbsp</label>
    <input type='number' name='num' value='$number' readonly><br><br>
    
    <label>Your UPI ID: &nbsp &nbsp  </label>
    <input type='text' name='upi' placeholder='Enter UPI ID' required><br>
    <h3><center>------------ OR ------------</center></h3>

    <label>Enter Account Holder Name: &nbsp &nbsp</label>
    <input type='text' name='name' placeholder='Enter your name' ><br><br>
    

    <label>IFSC Code: &nbsp&nbsp</label>
    <input type='text' name='ifsc' placeholder='Enter IFSC Code' ><br><br>

    <label>Account Number: &nbsp&nbsp</label>
    <input type='number' name='acc' placeholder='Enter Account Number' ><br><br>

    <label>Re-Enter Account Number: &nbsp&nbsp</label>
    <input type='number' name='acc1' placeholder='Account Number again' ><br>

    

    <input type='submit' name='submit' value='Confirm'>

  </form>

</body>

</html>





















<!--?php
$servername = "localhost";
$username = "ars";
$password = "1234";
$dbname = "sajal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


// sql to delete a record
$sql = "DELETE FROM user WHERE name = 'raaj' and password = 'raaj'";


if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
 
?-->