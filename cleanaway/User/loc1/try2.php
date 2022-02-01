




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Location</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	
</head>

<body>
	<div class="container">
		
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Current Location</h2>
			</div>


			
 
 
			
<button onclick="getLocation()">Click here to find Your current Location</button>
<font color="BLACK">
<p id="demo"></p>



<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
	 var latitude = position.coords.latitude;
var longitude = position.coords.longitude;
  setTimeout(function(){ window.location.href = "new2.php? name=" + latitude +"&name2=" + longitude;
  //window.location.href = "new.php? name2=" + longitude; 




            
        }, 3000);	
}


</script>
<body>







</font>
</body>
</html>