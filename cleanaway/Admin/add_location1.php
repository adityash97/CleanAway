
<?php
session_start();
include("connect.php");
  if (isset($_POST['addloc'])) {
   // $ID = $_POST['ID'];
    $locality1 = $_POST['locality1'];

    $sql = "SELECT * FROM locality WHERE  locality1='$locality1'";
    $run = mysqli_query($conn,$sql);

    if ($r = mysqli_num_rows($run)>0) {
      echo '<script>alert("BRANCH LOCATION ALREADY IN THE DATABASE. ");window.location="index.php"</script>';
    }else{
      $sql = "INSERT INTO locality VALUES(NULL,'$locality1')";
      $run = mysqli_query($conn,$sql);
      //echo $run;
     echo '<script>alert("'.$locality1.' LOCATION SUCCESSFULLY ADDED TO THE DATABASE.");window.location="index.php"</script>';
    }
  }else{
    header("Location: index.php");
  }
  ?>