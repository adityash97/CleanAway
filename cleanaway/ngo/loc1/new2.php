<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "shine";
$db_name ="hunger";
#-----------------------------------------------------------------------------------------------------------------------------
@mysql_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = new mysqli($host, $username, $password, $db_name);
#------------------------------------------------------------------------------------------------------------------------------
$email=$_SESSION['email'];
$lat = $_GET['name'];
$lon = $_GET['name2'];
#------------------------------------------------------------------------------------------------------------------------------
$s="SELECT *FROM `location` WHERE  email='$email'";
$result=mysql_query($s);
$count=mysql_num_rows($result);
if($count==1)
{
$_SESSION['lat'] = $lat;
$_SESSION['lat'] = $lat;
$_SESSION['lng'] = $lon;
$sqll="UPDATE  `location` SET email='$email',`longitude`='$lon',`latitude`='$lat' WHERE email='$email'";
if ($conn->query($sqll) === TRUE) {
  
	echo "<script language=\"JavaScript\">\n";
    echo "alert('Location Updated!');\n";
    echo "window.location='../index.php'"; 
    echo "</script>";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
 } 
}
else{
$sql="INSERT INTO `location`(`email`,`longitude`,`latitude`) VALUES('$email','$lon','$lat')";
if ($conn->query($sql) === TRUE) {
  	echo "<script language=\"JavaScript\">\n";
    echo "alert('Location Added!');\n";
    echo "window.location='../index.php'"; 
    echo "</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
 } 
$_SESSION['lat'] = $lat;
$_SESSION['lng'] = $lon;

}



#---------------------------------------------------------------------------------------------------------------------------
?>