<?php
$conn = mysqli_connect('localhost','ars','1234','sajal');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$mobile = $_POST['num'];
$name = $_POST['name'];

$ifsc = $_POST['ifsc'];
$acc = $_POST['acc'];


  $sql = "INSERT INTO refund(name, IFSC, account, mobile) values('$name', '$ifsc', '$acc','$mobile')";
    
      if ($conn->query($sql)=== True) {
        echo "<br><br><br><br><br><br><center><h1>Congrats! Your refund request is successfully submitted.</h1></center>";
        echo "<br><br><br><br><br><center><h1>Wish to serve you again</h1></center>";

      }
echo "<br><center><a href='index.html'>Back to home</a><center>";
echo "<script>alert('Congrats! Your refund request is successfully submitted.')</script>";
echo "<script>alert('Wish to serve you again.')</script>";
echo "<script>window.location.replace('index.html');</script>";
$conn->close();
?>
