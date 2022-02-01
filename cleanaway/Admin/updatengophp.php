  

<?php
session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wms"; // Database name 
#------------------------------------------------------------------------------------------------------------------------------
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password" , "$db_name")or die("cannot connect"); 
if (isset($_POST['Update'])) {
    $ngoID=$_POST['id'];
    $ngoName = $_POST['name'];
    $ngoregID = $_POST['registration'];
    $ngoDate = $_POST['date_'];
    $ngoEmail = $_POST['email'];
    $ngoRegion= $_POST['address'];
    $ngoMobile= $_POST['phone'];
   

   
      /*$sql = "UPDATE ngo SET  ngoDate='$ngoDate' ,ngoEmail='$ngoEmail' ,ngoRegion='$ngoRegion' ,ngoMobile='$ngoMobile' WHERE ngoName='$ngoName'";*/

     $sql = "UPDATE ngo SET ngoName='$ngoName',ngoregID='$ngoregID', ngoDate='$ngoDate' ,ngoEmail='$ngoEmail' ,ngoRegion='$ngoRegion' ,ngoMobile='$ngoMobile' WHERE ngoID='$ngoID'";
      $run = mysqli_query($conn,$sql);
      if($run)
      {
     echo '<script>alert("NGO DATA SUCCESSFULLY UPDATED.");window.location="ngo_list.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }
      
  
  }

?> 