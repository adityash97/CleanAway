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
				<?php
				if(!empty($_POST["forgot-password"])){
					$conn = mysqli_connect("localhost", "root", "", "wms");
					
					$condition = "";
					
					// USER PASSWORD RECOVERY	
					if(!empty($_POST["user-login-name"])) 
						$condition = " userName = '" . $_POST["user-login-name"] . "'";
					if(!empty($_POST["user-email"])) {
						if(!empty($condition)) {
							$condition = " and ";
						}
						$condition = "userEmail = '" . $_POST["user-email"] . "'";
					}
					//NGO PASSWORD RECOVERY	
					// if(!empty($_POST["user-login-name"])) 
					// 	$condition = " ngoName = '" . $_POST["user-login-name"] . "'";
					// if(!empty($_POST["user-email"])) {
					// 	if(!empty($condition)) {
					// 		$condition = " and ";
					// 	}
					// 	$condition = "ngoEmail = '" . $_POST["user-email"] . "'";
					// }

					//VOLUNTEER PASS RECOVERY
					// if(!empty($_POST["user-login-name"])) 
					// 	$condition = " volunteerName = '" . $_POST["user-login-name"] . "'";
					// if(!empty($_POST["user-email"])) {
					// 	if(!empty($condition)) {
					// 		$condition = " and ";
					// 	}
					// 	$condition = "volunteerEmail = '" . $_POST["user-email"] . "'";
					// }
					
					if(!empty($condition)) {
					 	$condition = " where " . $condition;
					 }

					$sql = "Select * from user,ngo,volunteer " . $condition;
					$result = mysqli_query($conn,$sql);
					$user = mysqli_fetch_array($result);
					
					if(!empty($user)) {
						require_once("forgot-password-recovery-mail.php");
					} else {
						$error_message = 'No User Found';
					}
				}
			?>
<link href="demo-style.css" rel="stylesheet" type="text/css">


<script>
function validate_forgot() {
	if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
		return false;
	}
	return true
}
</script>


<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
<h1>Forgot Password?</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message">
		<?php 
			echo $success_message;?>
		</div>
	<?php } ?>

	<div id="validation-message">
	<?php if(!empty($error_message)) { ?>
		<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<!-- <div class="field-group">
		<div><label for="username">Username</label></div>
		<div><input type="text" name="user-login-name" id="user-login-name" class="input-field"> Or</div>
	</div> -->
	
	<div class="field-group">
		<div><hr><label for="email">Enter Your Email</label></div>
		<!-- <div><input type="text" name="user-email" id="user-email" class="input-field"></div>
	</div> -->

	<input class="input100" type="text" name="user-email" id = "user-email" placeholder="Useremail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
	<div><p>
		<hr>
	</p></div>
	<div class="field-group">
		<div><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button"></div>
	</div>
	<div class="text-center  p-t-136"><p>
		

		If you got password, Reset Password
		<a class="txt2" href="reset_password.php">
			HERE.
			<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
		</a></p>
	</div>
</form>

	
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