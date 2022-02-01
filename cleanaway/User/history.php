<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>History - WMS</title>
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div id="wrapper">
	<!--Include Header-->
	<?php include("header.php");
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
	
$zx="SELECT * FROM `Compliant`,locality where User_Email='$u_email' and ((VolunteerID IS NOT NULL) or (ngoID is not NuLL)) AND compliant.Location1=locality.LID";
$result=mysqli_query($conn,$zx);
 $re = mysqli_num_rows($result);
        if($re>0){
?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">History</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		
	</div>
	<div class="container">
		<div class="row">
		<table>
    <tr>
    <th>Compliant Id</th>
    <th>Type</th>
    <th>Description</th>
	<th>Location Details</th>
	<th>Date</th>
    
  </tr>
 <?php
  while($re= mysqli_fetch_array($result))
  {
  echo '<tr>';
    echo '<td>'; echo $re['ID']; echo '</td>';
    echo '<td>'; echo $re['Compliant_Type']; echo '</td>';
    echo '<td>';echo $re['Description']; echo '</td>';
	echo '<td>';echo $re['locality1']; echo '</td>';
	echo '<td>';echo $re['Date']; echo '</td>';
	
/* #------------------------------------------------------------------------------------------------------------------------------
	$sa="SELECT `name` FROM `employee` WHERE  emp_id='$re[6]'";
    $resultta=mysql_query($sa);
    $r=mysql_fetch_array($resultta);
#------------------------------------------------------------------------------------------------------------------------------
	echo '<td>';echo "<a href ='empview.php?b=$re[6]'>"; echo $r[0];   echo '</td>';
#------------------------------------------------------------------------------------------------------------------------------
    $sa="SELECT `*` FROM `location` WHERE  email='u_email'";
    $resultta=mysql_query($sa);
	$no1=mysql_num_rows($resultt);
	
$sqll="select email from employee where emp_id='$re[6]'";
$qo=mysql_query($sqll);
$dat=mysql_fetch_array($qo);
$sqllk="select * from location where email='$dat[0]'";
$qok=mysql_query($sqllk);
$no12=mysql_num_rows($qok);	
#-------------------------------------------------------------------------------------------------------------------------------	
	if($no1==1 and $no12==1)
	{
	echo "<td  style=' padding-left:60px'><a href ='loc1\mymap.php?b=$re[6]'>Locate</td>";
	}
	else
	{
		echo '<td>';echo "Oops!Location Not Avaliable"; echo '</td>';
	}
  echo '<td>'; echo "<a href='orderupdate.php?a=$re[0]'>" ;
echo '<img src="img/done.jpg" alt="accept"  border="0">
</a>' ; echo '</td>';
    echo '</tr>';
  }
#------------------------------------------------------------------------------------------------------------------------------ */
 
} 
}
else
                {
                 echo '<center>'; echo "NO COMPLAINT RAISED"; echo '</center>';
                }?>
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
 <?php include ("footer.php"); ?>
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