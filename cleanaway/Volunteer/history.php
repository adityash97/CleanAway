<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WMS - Histroy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="Img/two.png">
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}



th {
    background-color: #009900;
    color: white;
}
</style>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	
<?php

include("header.php");
?>
<!--End Header-->
		<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">View History</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		
	</div>

	<?php
#-----------------------------------------------
//
$dee="SELECT `volunteerID` FROM `volunteer` where volunteerEmail='$u_email'";	
$rmm=mysqli_query($conn,$dee);
$rrr=mysqli_fetch_array($rmm);
$employee_id=$rrr['volunteerID'];
//Finding Employee based on the location
$sde="SELECT * FROM `Compliant`,locality where  VolunteerID ='$employee_id' AND compliant.Location1=locality.LID";
//$sde="SELECT * FROM `compliant` WHERE volunteerID IS NOT NULL AND  	volunteerID='$employee_id'";
$resulte=mysqli_query($conn,$sde);
 $rrr = mysqli_num_rows($resulte);
        if($rrr>0){
#---------------------------------------------
	?>
	<div class="container">
		<div class="row">
		<table>
  <tr>
    <th>Compliant_Id</th>
    <th>Compliant_Type</th>
    <th>Description</th>
	<th>Location</th>
	<th>Status</th>
	
  </tr>
<?php 

while ($rrr=mysqli_fetch_assoc($resulte))
{
 echo '<tr>';
echo  '<td>'; echo $rrr['ID']; echo '</td>';
 echo  '<td>'; echo $rrr['Compliant_Type']; echo '</td>';
 echo  '<td>'; echo $rrr['Description']; echo '</td>';
 
 echo  '<td>'; echo $rrr['locality1'];echo '</td>';
 echo  '<td>'; echo "Done"; '</td>';

}
echo '</tr>';
}
else
                {
                  echo '<center>'; echo "NO RECORD FOUND"; echo '</center>';
                }
?>

</table>	
</div>
		</div>
	</div>
	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
 <?php include ("footer1.php"); ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>