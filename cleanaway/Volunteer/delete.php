<?php
session_start();
include("connect.php");
$email=$_SESSION["email"];
$id=$_GET['a'];
#------------------------------------------------------------------------------------------------------------------------------
$sql="select volunteerID from volunteer where 	volunteerEmail='$email'";
$q=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($q);
//echo $data;
#----------------------------------------------------------------------------------------------------------------------------- 

$sqll= "DELETE FROM compliant where ID=$id";


//echo $sql;
if($conn->query($sqll) === TRUE) {
  
	echo "<script language=\"JavaScript\">\n";
    echo "alert(' deleted!');\n";
   echo "window.location='index.php'"; 
   echo "</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 } 
?>