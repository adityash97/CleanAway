<?php
session_start();
include("connect.php");
// username and password sent from form  
$email=$_SESSION['email'];
$lat = $_GET['name'];
$lon = $_GET['name2'];

$s="SELECT *FROM `location` WHERE  email='$email'";
$result=mysql_query($s);
$count=mysql_num_rows($result);
if($count==1)
{
$_SESSION['lat'] = $lat;
$_SESSION['lng'] = $lon;
$sqll="UPDATE  `location` SET email='$email',`longitude`='$lon',`latitude`='$lat' WHERE email='$email'";
if ($conn->query($sqll) === TRUE) {
  
	echo "<script language=\"JavaScript\">\n";
    echo "alert('Location Updated!');\n";
    echo "window.location='../index.php'"; 
    echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 } 
}
if($count==0){
$sql="INSERT INTO `location`(`email`,`longitude`,`latitude`) VALUES('$email','$lon','$lat')";
if ($conn->query($sql) === TRUE) {
  	echo "<script language=\"JavaScript\">\n";
    echo "alert('Location Added!');\n";
    echo "window.location='../index.php'"; 
    echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 } 
$_SESSION['lat'] = $lat;
$_SESSION['lng'] = $lon;

}

 
 //  echo "$lat";  echo "$lon";


//header('Location:http://localhost:8080/BloodBank/loc/try3.php');

?>