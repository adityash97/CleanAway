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
<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "wms");
		$sql = "UPDATE `user` SET `userPassword` = '" . $_POST["newpassword"]. "' WHERE `userPassword` = `" .$_POST["oldpassword"] . "AND `userName` = '" . $_POST["user-email"]."'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.";
		
	}
?>
<link href="demo-style.css" rel="stylesheet" type="text/css">

<script>
function validate_password_reset() {
	if((document.getElementById("newpassword").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	else if(document.getElementById("newpassword").value  != document.getElementById("confirmpassword").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}
	
	return true;
}
</script>

<body>
	<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_password_reset();"> <!-- action="index.php"> -->
<h1>Reset Password</h1>
	<?php if(!empty($success_message)) { ?>
	<div class="success_message">
		<?php echo $success_message; ?></div>
	<?php } ?>

	<div id="validation-message">
	<?php if(!empty($error_message)) { ?>
		<?php echo $error_message; ?>
	<?php } ?>
	</div>

	<div class="field-group">
		<div><label for="username">Username</label></div>
		<div><input type="text" name="user-email" id="user-email" class="input-field"></div>
	</div>
	<div class="field-group">
		<div><label for="email">Old Password</label></div>
		<div><input type="text" name="oldpassword" id="oldpassword" class="input-field"></div>
	</div>
	<div class="field-group">
		<div><label for="email">New Password</label></div>
		<div><input type="text" name="newpassword" id="newpassword" class="input-field"></div>
	</div>
	<div class="field-group">
		<div><label for="email">Confirm Password</label></div>
		<div><input type="text" name="confirmpassword" id="confirmpassword" class="input-field"></div>
	</div>
	<div class="field-group">
		<div><input type="submit" name="reset-password" id="reset-password" value="Submit" class="form-submit-button"></div>
	</div>	
</form>