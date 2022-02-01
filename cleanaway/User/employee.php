<?php
session_start();
include("connect.php");
$u_email=$_SESSION['email'];// session Email
$nemail=$_POST['email'];
#-----------------------------------------------------------------------------------------------------------------------------
/*if($u_email == $nemail)
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Add alternative email!');\n";
    echo "window.location='beanemployee.php'"; 
    echo "</script>";   
}*/
#-----------------------------------------------------------------------------------------------------------------------------
$sd="SELECT volunteerEmail FROM volunteer WHERE volunteerEmail='$nemail'";
$result=mysqli_query($conn,$sd);
$no=mysqli_num_rows($result);
if($no>0)
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Volunteer Exists!');\n";
    echo "window.location='beanemployee.php'"; 
    echo "</script>"; 
   // echo $sd;
}

#-----------------------------------------------------------------------------------------------------------------------------



    /* echo "<script language=\"JavaScript\">\n";
   echo "alert('Login with user Email & password!');\n";
    echo "window.location='../Login/index.php'"; 
    echo "</script>";*/ 
$sd="SELECT * FROM user WHERE userEmail='$u_email'";
$result=mysqli_query($conn,$sd);
$r=mysqli_fetch_array($result);
$name=$r['userName'];
$date=$r['userDate'];
$email=$r['userEmail'];
$region=$r['userRegion'];
$mobile=$r['userMobile'];
$password=$r['userPassword'];

$sqll="INSERT INTO volunteer (volunteerID, volunteerName, volunteerDate, volunteerEmail, volunteerRegion,volunteerMobile,volunteerPassword) VALUES(NULL,'$name','$date','$email','$region','$mobile','$password')";



if ($conn->query($sqll) === TRUE) 
{

$sd1="DELETE FROM user WHERE userEmail='$nemail'";
$result1=mysqli_query($conn,$sd1);
echo "<script language=\"JavaScript\">\n";
    echo "alert('Login with same email And password!');\n";
    echo "window.location='../Intro/index.php'"; 
    echo "</script>";
/*$no1=mysqli_num_rows($result1);
if($no1<=0)
{*/
   /* echo "<script language=\"JavaScript\">\n";
    echo "alert('Login as employee-Use Same password!');\n";
    echo "window.location='../Intro/index.php'"; 
    echo "</script>";*/

/*else
{
    echo "Error: " . $sqll . "<br>" . $conn->error;
}*/
   /* $sql2="DELETE FROM user WHERE userEmail='$nemail'";
    if ($conn->query($sqll) === TRUE)*/
 

/* echo "<script language=\"JavaScript\">\n";
    echo "alert('Login as employee-Use Same password!');\n";
    echo "window.location='../Intro/index.php'"; 
    echo "</script>"; */

} 
else
{
    echo "Error: " . $sqll . "<br>" . $conn->error;
}

    
     

?>














