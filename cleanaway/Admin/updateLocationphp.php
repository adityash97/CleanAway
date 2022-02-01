  

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
    
    $LocationName = $_POST['name'];
  $LocationID= $_POST['id'];
   
   

   
      /*$sql = "UPDATE Location SET  LocationDate='$LocationDate' ,LocationEmail='$LocationEmail' ,LocationRegion='$LocationRegion' ,LocationMobile='$LocationMobile' WHERE LocationName='$LocationName'";*/

     $sql = "UPDATE locality SET  locality1='$LocationName' WHERE LID='$LocationID'";
      $run = mysqli_query($conn,$sql);
      if($run)
      {
      echo '<script>alert("Location DATA SUCCESSFULLY UPDATED.");window.location="branch_list.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }
      
  
  }

?> 