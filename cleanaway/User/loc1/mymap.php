<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="hunger";
#-----------------------------------------------------------------------------------------------------------------------------
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
#-----------------------------------------------------------------------------------------------------------------------------
$email=$_SESSION["email"];
$eid=$_REQUEST['b'];
#-----------------------------------------------------------------------------------------------------------------------------
$sql="select * from location where email='$email'";
$q=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($q);
$tt= $data[3];
//echo $data[3];
$rr= $data[2];
//echo $data[2];
#-----------------------------------------------------------------------------------------------------------------------------
$sqll="select email from employee where emp_id='$eid'";
$qo=mysqli_query($conn,$sqll);
$dat=mysqli_fetch_array($qo);
$sqllk="select * from location where email='$dat[0]'";
$qok=mysqli_query($conn,$sqllk);
$datk=mysqli_fetch_array($qok);

$ee=$datk[3];
//echo $datk[3];
$ss=$datk[2];
//echo $datk[2];
#-----------------------------------------------------------------------------------------------------------------------------



?>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying text directions with <code>setPanel()</code></title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      #right-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }
      #map {
        margin-right: 400px;
      }
      #floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }
      @media print {
        #map {
          height: 500px;
          margin: 0;
        }
        #right-panel {
          float: none;
          width: auto;
        }
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
      <strong>Start:</strong>
      <select id="start">
      
        
		<option value="<?php echo $tt; ?>, <?php echo $rr; ?>">Your Location</option>
		<option value="<?php echo $ee; ?>, <?php echo $ss; ?>">Selected Venue</option>
       
      </select>
      <br>
      <strong>End:</strong>
      <select id="end">
          
		<option value="<?php echo $tt; ?>, <?php echo $rr; ?>">Your Location</option>
		<option value="<?php echo $ee; ?>, <?php echo $ss; ?>">Selected Venue</option>
		
       
      </select>
    </div>
    <div id="right-panel"></div>
    <div id="map"></div>
    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
        center: {lat: 12.933151, lng: 77.606438}
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));

        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: 'WALKING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeO13ertqtlXDBgIKary1j5QWMuQNn-lQ&callback=initMap">
    </script>
  </body>
</html>m