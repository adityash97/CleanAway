  

<?php
session_start();
$host="localhost"; // Host name 
$volunteername="root"; // Mysql volunteername 
$password=""; // Mysql password 
$db_name="wms"; // Database name 
#------------------------------------------------------------------------------------------------------------------------------
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$volunteername", "$password" , "$db_name")or die("cannot connect"); 
if (isset($_POST['Update'])) {
    $volunteerID=$_POST['id'];
    $volunteerName = $_POST['name'];

    $volunteerEmail = $_POST['email'];
    $volunteerRegion= $_POST['address'];
    $volunteerMobile= $_POST['phone'];
   

   
      /*$sql = "UPDATE volunteer SET  volunteerDate='$volunteerDate' ,volunteerEmail='$volunteerEmail' ,volunteerRegion='$volunteerRegion' ,volunteerMobile='$volunteerMobile' WHERE volunteerName='$volunteerName'";*/

     $sql = "UPDATE volunteer SET volunteerName='$volunteerName',volunteerEmail='$volunteerEmail' ,volunteerRegion='$volunteerRegion' ,volunteerMobile='$volunteerMobile' WHERE volunteerID='$volunteerID'";
      $run = mysqli_query($conn,$sql);
      if($run)
      {
     echo '<script>alert("Volunteer -'.$volunteerName.' DATA SUCCESSFULLY UPDATED.");window.location="profile.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }
      
  
  }

?> 