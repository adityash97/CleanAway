
<!DOCTYPE html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="fiesta";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql1="SELECT * FROM location"; 
$result1 = mysqli_query($conn,$sql1);
?>


<html lang="en">

<head>
	<meta charset="utf-8">
	<title>FIESTA</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	
</head>

<body>
	<div class="container">
		
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Venue</h2>
			</div>
	

<form method="post" action="new3.php">

 


<br/>
<B>
Venue:<select name="dynamic_data1" required   placeholder="Department:"><br>
<?php
		$i=0;
			while($row = mysqli_fetch_array($result1)) {
		?>
		<li><option value="<?=$row[1];?>"><?=$row[1];?></option></li>
      <?php
      $i++;
      }
     ?>
</select>
<BR><BR>
	<button type="submit" id="login-button">Search</button>
	</form>		<br/>
	<br/>
			
 


<body>







</font>
</body>
</html>