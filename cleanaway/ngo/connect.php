<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wms"; // Database name 
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
//$conn = new mysqli($host, $username, $password, $db_name);
?>