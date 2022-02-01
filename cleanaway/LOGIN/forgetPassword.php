<?php
session_start();
if(isset($_POST['sendcode']))
{
	$u_email=$_POST['email'];
	$randomCode=mt_rand(0,999999);
	$_SESSION['random']=$randomCode;
	$message="Your reset code is ".$randomCode;
	$subject="Reset Code";
	$to=$u_email;
	//ini_set("smtp_port", 465);
	$result=mail($to, $subject, $message);

	 echo '<script>alert(" Code has been sent to '.$to.'");</script>';

}

if(isset($_POST['verify'])){
	$code=$_POST['verifycode'];
	if($code==$_SESSION['random'])
	{
		header('location:resetpass.php');
	}
	else{
			echo "<script language=\"JavaScript\">\n";
                   echo "alert('Invalid Code');\n";
                   echo "window.location='forgetPassword.php.'";
                   echo "</script>"; 
	} 
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WMS- Forget Password</title>
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

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Forgot Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Username is required">
						<input class="input100" type="email" name="email" placeholder="Useremail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="sendcode" value="Send"> 
					</div>

					<div class="wrap-input100 " ">
						<input class="input100" type="text" name="verifycode" placeholder="enter six digit code">
						<!-- <span class="focus-input100"></span>
						 --><span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" name="verify" value="verify Code"> 
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