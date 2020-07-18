<?php

$name=$_POST['name'];
$pass=$_POST['pass'];

if ($name==("sajal") & $pass==("ayush")) {

	header("location:admin1.php");
}
else{
	echo "<script>alert('You are not an admin!'); window.location.href='index.html';</script>";

	

}

?>