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
echo "<br>";echo "<br>";


$id=$_POST["dynamic_data1"];


$sql1="SELECT * FROM location where Venue= '$id'"; 
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);
$lat1=$row1[2];
$long=$row1[3];
echo "Selected location Venue";echo "<br>";
echo $lat1;echo "<br>";echo "<br>";
echo $long;
echo "<br>";echo "<br>";
echo "";  echo "$id"; 
echo "<br>";echo "<br>";
echo "Your location";

echo "<br>";echo "<br>";
$uid=$_SESSION['lat'];

	$tid=$_SESSION['lng'];
 

  echo "$uid";
echo "<br>";echo "<br>";
  echo "$tid";
 echo "<br>";echo "<br>";


  
$_SESSION['vlat'] = $lat1;
$_SESSION['vlog'] = $long;
  
  
$_SESSION['ulat'] = $uid;
$_SESSION['ulog'] = $tid;

  
  
  
  
 	header('Location:http://localhost:81/map/mymap.php')
?>