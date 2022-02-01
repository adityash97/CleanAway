<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clean Away</title>
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
<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 45px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #009900;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<a href="../Intro/index.php">
					 <img src="images/img-01.png" alt="IMG"></a>
				</div>

				<form class="login100-form validate-form" action="signup.php" method="POST">
					<span class="login100-form-title">
						 SignUp
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Username is required">
						<input class="input100" type="text" name="name" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid Email is required">
						<input class="input100" type="Email" name="email" placeholder="User Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid Address is required">

							 <select id="region" name="region" class="input100">
          <option value="" disabled selected>Locality</option>
          <?php
          session_start();
			include("connect.php");
            $sql = "SELECT * FROM locality";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
          ?>
            <option value="<?php echo($row['LID']);?>" ><?php echo($row['locality1']);?></option>

            <?php 
          } 
          ?> 
        </select> 


						
				       <!--  <select id="region" name="region" class="input100">
				          <option value="SG PALYA">SG PALYA</option>
				          <option value="JAYANAGAR">JAYANAGAR</option>
				          <option value="JP NAGAR">JP NAGAR</option>
				        </select> -->
				    
				      <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card" aria-hidden="true"></i>
						</span>
					</div>

							<div class="wrap-input100 validate-input" data-validate = "Valid Phone Number is required">
						<input class="input100"type="text" name="phone" pattern="[789][0-9]{9}" maxlength="10" placeholder="Phone Number" required data-validation-required-message="Please enter your Phone Number.">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
				
				
					<label class="container">Navie User
  <input type="radio" checked="checked" value="1" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Volunteer
  <input type="radio" value="2"name="radio">
  <span class="checkmark"></span>
</label>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							signup
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Have An Account?Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
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