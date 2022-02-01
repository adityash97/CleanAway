<?php
session_start();
include("connect.php");
$u_email=$_SESSION['useremail'];
 $password1=md5($_POST['password1']); 
 $password2=md5($_POST['password2']); 
 if($password1==$password2){ 

        $sqlp1="SELECT * FROM user WHERE Useremail='$u_email'";
        
           $resultp1=mysqli_query($conn,$sqlp1);
              $count1=mysqli_num_rows($resultp1);
              if($count1>0)
              {
                  $reset_query= "UPDATE `user` SET userPassword`='".$password2."' WHERE userEmail='".$u_email."'";
 	$result=mysqli_query($conn,$reset_query);
 	if($result) {
      echo '<script>alert("PASSWORD RESET SUCCESSFULLY UPDATED.");window.location="login.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }
}
     else
                 {
          
                   /*echo "<script language=\"JavaScript\">\n";
                   echo "alert('PASSWORD DO NOT MATCH');\n";
                   echo "window.location='resetpass.php.'";
                   echo "</script>"; */
                 }
              }



/*    $reset_query1= "UPDATE `ngo` SET ngoPassword`='".$password2."' WHERE ngoEmail='".$u_email."'";
 	$result=mysqli_query($conn,$reset_query1);
 	if($result) {
      echo '<script>alert("PASSWORD RESET SUCCESSFULLY UPDATED.");window.location="login.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }

    $reset_query2= "UPDATE `volunteer` SET volunteerPassword`='".$password2."' WHERE volunteerEmail='".$u_email."'";
 	$result=mysqli_query($conn,$reset_query2);
 	if($result) {
      echo '<script>alert("PASSWORD RESET SUCCESSFULLY UPDATED.");window.location="login.php"</script>';
    }
    else
    {
      echo "error".mysqli_error($conn);
    }*/


      
 
 


?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<title>WMS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	 
<!-- Favicon-->
		<link rel="shortcut icon" href="images/two.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<a href="../Intro/index.php">
					 <img src="images/img-01.png" alt="IMG"></a>
				</div>

				<form class="login100-form validate-form"  method="POST">
					<span class="login100-form-title">
						WMS Member Login
					</span>

					<div class="wrap-input100 validate-input"  >
						<input class="input100" type="text" name="password1" placeholder="New Password" required="Please enter password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="password2" placeholder="Confirm Password" required="Please enter password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<!--<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>-->


				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>