<?php
session_start();
//connecton code
include('header.php');
// data from the contact form
$name=$_POST['name']; 
$email=$_POST['email']; 
$subject=$_POST['subject']; 
$message=$_POST['message']; 
//data to the table
date_default_timezone_set('Asia/Kolkata');//for time
                    $date=date("Y-m-d");
$sql="INSERT INTO contact VALUES (NULL,'$name','$email','$subject','$message','$date')";

if ($conn->query($sql)=== TRUE) {
    echo "<script language=\"JavaScript\">\n";

echo "window.location='index.php.'";
echo "</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 





?>