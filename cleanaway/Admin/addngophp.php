<?php

session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wms"; // Database name 
#------------------------------------------------------------------------------------------------------------------------------
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect"); 


 if (isset($_POST['add_ngo'])) {
    
    $ngoName = $_POST['name'];
    $ngoregID = $_POST['registration'];
    $ngoDate = $_POST['date_'];
    $ngoEmail = $_POST['email'];
    $ngoRegion= $_POST['address'];
    $ngoMobile= $_POST['phone'];
    $ngoPass  = md5($_POST['pass']);
   

    $sql = "SELECT * FROM ngo WHERE ngoName='$ngoName' or ngoregID='$ngoregID' or ngoEmail='$ngoEmail' or  ngoMobile='$ngoMobile'";
    $run = mysqli_query($conn,$sql);
    if ($r = mysqli_num_rows($run)>0) {
      echo '<script>alert("NGO DETAIL ALREADY IN THE DATABASE.");window.location="addngo.php"</script>';
    }else{
      $sql = "INSERT INTO ngo VALUES(NULL,'$ngoName','NGO-$ngoregID','$ngoDate','$ngoEmail','$ngoRegion','$ngoMobile','$ngoPass')";
      $run = mysqli_query($conn,$sql);
      echo '<script>alert("'.$ngoName.' SUCCESSFULLY ADDED TO THE DATABASE.");window.location="addngo.php"</script>';
    }
  }else{
    header("Location: addngo.php");
  }

?>