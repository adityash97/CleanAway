<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="fiesta";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "fdg";
    $lat = $_GET['name'];

	 $lon = $_GET['name2'];

	
 
   echo "$lat";  echo "$lon";

?>