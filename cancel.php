<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="databasestyle.css">
<title>CarFast-Database</title>

</head>
<body>
	<h1><CENTER>Cancelled Bookings</CENTER></h1>
	<br><br>
<table>
<tr>
<th>Name</th>
<th>Password</th>
<th>Pickup location</th>
<th>Drop location</th>
<th>Date</th>
<th>Mobile</th>
<th>Gender</th>
<th>Age</th>
<th>Time</th>

</tr>
<?php
$conn = mysqli_connect('localhost','ars','1234','sajal');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cancel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	$total_words+=$row["words"];

echo "<tr><td>" . $row["name"]. "</td><td>" . $row["password"]. "</td><td>" . $row["pickup"]. "</td><td>" . $row["final"]. "</td><td>" . $row["date"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["age"]. "</td><td>" . $row["time"]. "</td><tr>";
}
echo "</table>"; 
}
?>
</table><br><br><br>
<footer>
  <form class="box" action="index.html" style="float: right;">
    <a href="admin1.php">Show Bookings</a>
    <a href="refund.php">Refund Requests</a>
    <input type="submit" name="logout" value="Logout">
  </form>
</footer>
</body>
</html>