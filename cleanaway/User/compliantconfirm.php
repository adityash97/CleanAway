<?php
session_start();
include("connect.php");
$u_email=$_SESSION['email'];
$type=$_POST['type']; 
$description=$_POST['subject']; 
$locationone=$_POST['locationone']; 
$locationtwo=$_POST['locationtwo']; 
$image=$_POST['image']; 

date_default_timezone_set('Asia/Kolkata');
$date=date("Y-m-d");
$sql="INSERT INTO `compliant`(`User_Email`, `Compliant_Type`, `Description`, `Image`, `Location1`, `Location2`, `Date`) VALUES('$u_email','$type','$description','$image','$locationone','$locationtwo','$date')";
if ($conn->query($sql) === TRUE) 
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Details Updated!');\n";
    echo "window.location='index.php'"; 
    echo "</script>"; 	
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>