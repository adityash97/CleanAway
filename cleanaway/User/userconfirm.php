  

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
    $userID=$_POST['id'];
    $userName = $_POST['name'];

    $userEmail = $_POST['email'];
    $userRegion= $_POST['address'];
    $userMobile= $_POST['phone'];
   

   
      /*$sql = "UPDATE user SET  userDate='$userDate' ,userEmail='$userEmail' ,userRegion='$userRegion' ,userMobile='$userMobile' WHERE userName='$userName'";*/

     $sql = "UPDATE user SET userName='$userName',userEmail='$userEmail' ,userRegion='$userRegion' ,userMobile='$userMobile' WHERE userID='$userID'";
      $run = mysqli_query($conn,$sql);
      if($run)
      {
     echo '<script>alert("user DATA SUCCESSFULLY UPDATED.");window.location="profile.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }
      
  
  }

?> 