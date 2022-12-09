<?php
$username_value=$_POST["username"];
$password_value=$_POST["password"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database 123";



$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "select password from registration_form where username='".$username_value."'";
$results = $conn->query($sql);

if ($results->num_rows>0){
	
	header('Location:physics.html');
}
else{
	
	header('Location:login.html');
}
?>