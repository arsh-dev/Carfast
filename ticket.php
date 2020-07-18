<?php
include("connection.php");
session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$mobile = $_POST['mobile'];

      
      $sql = "SELECT * FROM user WHERE name = '$name' and password = '$pass' and mobile = '$mobile'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >= 1) {

      	echo "
      		<html>
			<head>
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<link rel='stylesheet' type='text/css' href='dashboardstyle.css'>
			<title>CarFast</title>

			</head>
			<body>
			<h1><CENTER>Your Ticket</CENTER></h1>
			<br><br>
			<table>
			<tr>
			<th>Name</th>
			<th>Pickup location</th>
			<th>Drop location</th>
			<th>Date</th>
			<th>Time</th>

			</tr>
			<?php";

			
			for ($i=0; $i < $count ; $i++) { 
				
			
			echo "<tr><td>" . $row["name"]. "</td><td>" . $row["pickup"]. "</td><td>" . $row["final"]. "</td><td>" . $row["date"]. "</td><td>". $row["time"]. "</td></tr>";
			}
			echo "</table>"; 
			
			
			echo "
			</table><br><br><br>
			<footer id='footerr'>
			  <form action='delet.php' method='POST' style='float: right;'>
			  <input type='hidden' name='name' value='$name' readonly>
			  <input type='hidden' name='pass' value='$pass' readonly>
			  <input type='hidden' name='mobile' value='$mobile' readonly>
			    <input type='submit' name='Cancel' value='Cancel Your Ticket'>
			  </form>
			  <form action='index.html' style='float: right;'>
			    <input type='submit' name='logout' value='Logout'>
			  </form>
			</footer>
			</body>
			</html>";
         
      }else {
         //$error = "Your Login Name or Password is invalid";
         echo '<script>alert("Your Login Credentials are invalid")</script>';

         header("location: wrong.html");

      }
   }
?>

