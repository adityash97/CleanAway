<?php
session_start();
include("connect.php");
#------------------------------------------------------------------------------------------------------------------------------
//$u_email=$_SESSION['email'];// session Email
//$u_email=$_SESSION['email'];// session Email

if(!isset($_SESSION['email'])) 
   header("Location: ../Intro/index.php"); 
else{
  $u_email=$_SESSION['email'];
}
#-----------------------------------------------------------------------------------------------------------------------

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
     <link rel="shortcut icon" href="Img/letter-v.png">

    <title>Area Report</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
    <style type="text/css">
.form-style-10{
    width:450px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}

</style>
   <style type="text/css">
     #myInput {
  background-image: url(../Admin/img/icons/search-line-icon.png); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

   </style>
  </head>

   <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <?php include ("headers.php"); ?>
      <!--header end-->

      <!--sidebar start-->
     <?php include ("sidebar.php"); ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="rec">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i>Area Report</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-search"></i>Search Area Report</li>
          </ol>
        </div>
      </div>
              <!-- page start -->

             
              <div class="rec">

                  <div class="col-lg-12">

                      <section class="panel">
                         
                      <div class="table-responsive">
                        <table class="table">
                              <thead>
                                <tr>
                                  <th><form action="hotspot_area.php" method="post">
                                    <input type="text" id="myInput" name="locality1"  placeholder="Search by location.."">
                                    <input type="submit"  name="search" style="display: none;"></form></th>
                                  </tr>
                 
                        <?php

                         if (isset($_POST['search'])) 
                          {
    $volunteerName = $_POST['locality1'];

 $sql="SELECT * FROM locality WHERE locality1='$volunteerName' ";
  $record=mysqli_query($conn,$sql);
  $rec=mysqli_fetch_assoc($record);
  if($rec>0)
 {

 $sqlv="SELECT COUNT(volunteerID) as vid FROM volunteer,locality WHERE locality1='$volunteerName' and volunteer.volunteerRegion=locality.LID ";
  $recordv=mysqli_query($conn,$sqlv);
  $recv=mysqli_fetch_assoc($recordv);
  $vol=$recv['vid'];

   $sqln="SELECT COUNT(ngoID) as nid FROM ngo,locality WHERE locality1='$volunteerName' and ngo.ngoRegion=locality.LID ";
  $recordn=mysqli_query($conn,$sqln);
  $recn=mysqli_fetch_assoc($recordn);
  $ngo=$recn['nid'];

  $sqlu="SELECT COUNT(userID) as uid FROM user,locality WHERE locality1='$volunteerName' and user.userRegion=locality.LID ";
  $recordu=mysqli_query($conn,$sqlu);
  $recu=mysqli_fetch_assoc($recordu);
  $usr=$recu['uid'];

  

  $sql1="SELECT COUNT(ID) as pending FROM compliant,locality WHERE locality1='$volunteerName' and compliant.Location1=locality.LID AND ((ngoID is NULL) && (volunteerID is NULL))";
  /*ngoID is NULL and volunteerID is null  */
  $record1=mysqli_query($conn,$sql1);
  $rec1=mysqli_fetch_assoc($record1);
  $pen=$rec1['pending'];

    $sql2="SELECT COUNT(ID) as completed FROM compliant,locality WHERE locality1='$volunteerName' and compliant.Location1=locality.LID AND ((ngoID is not NULL) || (volunteerID is not NULL))";
    /* ngoID is not NULL or volunteerID is not null */
  $record2=mysqli_query($conn,$sql2);
  $rec2=mysqli_fetch_assoc($record2);
  $com=$rec2['completed'];

      $sql3="SELECT COUNT(ID) as tot FROM compliant,locality WHERE locality1='$volunteerName' and compliant.Location1=locality.LID ";
    /* ngoID is not NULL or volunteerID is not null */
  $record3=mysqli_query($conn,$sql3);
  $rec3=mysqli_fetch_assoc($record3);
  $totl=$rec3['tot'];




   $sqlvc="SELECT COUNT(volunteerID) as vid FROM compliant,locality WHERE locality1='$volunteerName' and compliant.Location1=locality.LID ";
  $recordvc=mysqli_query($conn,$sqlvc);
  $recvc=mysqli_fetch_assoc($recordvc);
  $cvol=$recvc['vid'];

   $sqlc="SELECT COUNT(ngoID) as nid FROM compliant,locality WHERE locality1='$volunteerName' and compliant.Location1=locality.LID ";
  $recordc=mysqli_query($conn,$sqlc);
  $recc=mysqli_fetch_assoc($recordc);
  $cngo=$recc['nid'];




?>                          
                                </tr>
                              </thead> 
                              <tbody>


                              </tbody>
                            </table> 


                          </div>



                      </section>
                  </div>
              </div>

     <div class="rec">
                  <div class="col-lg-12">
                      <section class="panel" >
                          
                          <div class="table-responsive">
                            <div class="container" id="divToPrint">
    <div class="rec">
  <div class="form-style-10" >
<h1>Area Report!</h1>
<form action="" method="post">
   <div class="section"><span>1</span>Area</div>
    <div class="inner-wrap">
        <label>Area Name<input type="text" name="id" value="<?php echo $volunteerName; ?>" readonly /> </label>
          </div>
      
    <div class="section"><span>2</span>Total user</div>
    <div class="inner-wrap">
        <label>No. of User <input type="text" name="name" value="<?php echo $usr; ?>" readonly /></label>

        </label>
    </div>

    <div class="section"><span>3</span>Total Workforce</div>
    <div class="inner-wrap">
        <label>Volunteer<input type="text" value="<?php echo $vol; ?>" readonly/></label>
        <label>NGO<input type="text" name="phone" value="<?php echo $ngo; ?>" readonly/></label>
    </div>

    <div class="section"><span>4</span>Total Complaint </div>
        <div class="inner-wrap">
          
           <label>Total Request<input type="text" value="<?php echo $totl; ?>" readonly/></label>
       
        <label>On Progress<input type="text" value="<?php echo $pen; ?>" readonly/></label>
        <label>Completed<input type="text" name="phone" value="<?php echo $com; ?>" readonly/></label>
    </div>

        <div class="section"><span>5</span>Complaint Completed</div>
        <div class="inner-wrap">
        <label>Volunteer<input type="text" value="<?php echo $cvol; ?>" readonly/></label>
        <label>NGO<input type="text" name="phone" value="<?php echo $cngo; ?>" readonly/></label>
    </div>
    <input type="button" value="Print" onclick="PrintDiv();" />
 


           <?php
     }
else{
  echo '<script>alert("'.$volunteerName.' NOT FOUND IN THE DATABASE.");window.location="hotspot_area.php"</script>';
}
}?>
        
<!--     </div>
    <div class="button-section">
     <input type="submit" name="Update" value="Update" />
    <span class="privacy-policy">
       </span>
    </div>  -->

</form>




<?php
/*}
else{
  //echo '<script>alert("DATA NOT FOUND IN THE DATABASE.");window.location="branch_list.php"</script>';
}
}*/
                        ?>  
                        
                       
</div>

<!-- <button onclick="printDiv('printMe')">Print only the above div</button>
 -->
                          </div>

                        </div>
                 <!-- <a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a> -->
                        </div>
                          </div>
<!-- <button onclick="myFunction()">Print this page</button>
 -->                     
                      </section>
                  </div>
              </div>




              <!-- page end-->

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                         <!--<header class="panel-heading">
                              Advanced Table
                          </header> -->
                          
               <?php
        $sql = "SELECT * FROM locality";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row>0){
          ?>

                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                <th>ID</th>
                                 <th><i class="icon_profile"></i>Location</th>
                                <!--  <th><i class="icon_calendar"></i> Date</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_pin_alt"></i> Region</th>
                                 <th><i class="icon_mobile"></i> Mobile</th> -->
                                 <!--<th><i class="icon_cogs"></i> Action</th>-->
                              </tr>
                  <?php
          while($row = mysqli_fetch_assoc($result))
          {
            
        ?>
              <tr>
                <td><?php echo $row['LID']; ?></td>
                <td><?php echo $row['locality1']; ?></td>
               
               
              </tr>
                      <?php 
                    }
                }
                  ?>
                          
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
     <script type="text/javascript">
      document.getElementById('dt').max = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
    </script>

<!--     <script>
function myFunction() {
  window.print();
}
</script> -->

  <script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>




  </body>
</html>