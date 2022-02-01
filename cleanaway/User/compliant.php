<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Compliant</title>
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
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color:#179AF2;
}



.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
#lname
{
width: 100%;
}
</style>

<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
<!--Include Header-->
  <?php include("header.php");?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Compliant</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		
	</div>
	<div class="container">
  <form action="compliantconfirm.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="fname">Complaint Type</label>
      </div>
      <div class="col-75">
        <select  name="type" required="required">
           <option value="" disabled selected>Waste Type</option>
          <option value="Home Waste">Dry Waste</option>
          <option value="Street Waste">Wet Waste</option>
          <option value="Mixed Waste">Mixed Waste</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" pattern="[a-z][0-9]{,50}" title="Maximum 50 character"  placeholder="Write Description.." style="height:110px" required="required"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Location Details</label>
      </div>

                 <select id="region" name="locationone" class="input100" required="required">
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
     <br>
	 <br>
	 <input type="text" name="locationtwo" pattern="[a-z][0-9]{,50}" title="Maximum 100 character" placeholder="address" required>
    </div>
	 <div class="row">
      <div class="col-20">
        <label for="subject">Image</label>
      </div>
      <div class="col-75">
        <input type="file" name="image"  placeholder="Image.." required="required">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
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