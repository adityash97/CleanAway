<?php
session_start(); //to ensure you are using same session
 unset($_SESSION['email']);  
      session_destroy(); 
//unset($_SESSION["email"]);
//unset($_SESSION["astatus"]);
header("Location: ../Intro/index.php?logout=success");
//exit();
?>