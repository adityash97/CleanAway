  

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
    
    $volunteerName = $_POST['name'];
  $volunteerID= $_POST['id'];
    $volunteerDate = $_POST['date_'];
    $volunteerEmail = $_POST['email'];
    $volunteerRegion= $_POST['address'];
    $volunteerMobile= $_POST['phone'];
   

   
      /*$sql = "UPDATE volunteer SET  volunteerDate='$volunteerDate' ,volunteerEmail='$volunteerEmail' ,volunteerRegion='$volunteerRegion' ,volunteerMobile='$volunteerMobile' WHERE volunteerName='$volunteerName'";*/

     $sql = "UPDATE volunteer SET  volunteerName='$volunteerName',volunteerDate='$volunteerDate' ,volunteerEmail='$volunteerEmail' ,volunteerRegion='$volunteerRegion' ,volunteerMobile='$volunteerMobile' WHERE volunteerID='$volunteerID'";
      $run = mysqli_query($conn,$sql);
      if($run)
      {
      echo '<script>alert("VOLUNTEER DATA SUCCESSFULLY UPDATED.");window.location="volunter_list.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }
      
  
  }

?> 