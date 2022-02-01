  

<?php
session_start();
$host="localhost"; // Host name 
$ngoname="root"; // Mysql ngoname 
$password=""; // Mysql password 
$db_name="wms"; // Database name 
#------------------------------------------------------------------------------------------------------------------------------
// Connect to server and select databse.
$conn = mysqli_connect("$host", "$ngoname", "$password" , "$db_name")or die("cannot connect"); 
if (isset($_POST['Update'])) {
    $ngoID=$_POST['id'];
    $ngoName = $_POST['name'];

    $ngoEmail = $_POST['email'];
    $ngoRegion= $_POST['address'];
    $ngoMobile= $_POST['phone'];
   

   
      /*$sql = "UPDATE ngo SET  ngoDate='$ngoDate' ,ngoEmail='$ngoEmail' ,ngoRegion='$ngoRegion' ,ngoMobile='$ngoMobile' WHERE ngoName='$ngoName'";*/

     $sql = "UPDATE ngo SET ngoName='$ngoName',ngoEmail='$ngoEmail' ,ngoRegion='$ngoRegion' ,ngoMobile='$ngoMobile' WHERE ngoID='$ngoID'";
      $run = mysqli_query($conn,$sql);
      if($run)
      {
     echo '<script>alert("NGO -'.$ngoName.' DATA SUCCESSFULLY UPDATED.");window.location="profile.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }
      
  
  }

?> 