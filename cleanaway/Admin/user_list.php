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
    <meta name="keyword" content="Table">
    <link rel="shortcut icon" href="Img/letter-v.png">

    <title> User List</title>

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

  </head>
 


   <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
     
        <!--header start-->
      <?php include ("headers.php"); ?>
      <!--header end-->

      <!--sidebar start-->
     <?php include ("sidebar.php"); ?>
      
     <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i>User List</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            
            <li><i class="fa fa-th-list"></i>User Table</li>
          
  
          </ol>
        </div>
      </div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                         <!--<header class="panel-heading">
                              Advanced Table
                          </header> -->

                          
               <?php
        $sql = "SELECT * FROM user,locality WHERE user.userRegion=locality.LID";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($result);
        if($row>0){
          ?>

                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                <th>ID</th>
                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_calendar"></i> Date</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_pin_alt"></i> Region</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <!--<th><i class="icon_cogs"></i> Action</th>-->
                              </tr>
                  <?php
          while($row = mysqli_fetch_assoc($result))
          {
            
        ?>
              <tr>
                <td><?php echo $row['userID']; ?></td>
                <td><?php echo $row['userName']; ?></td>
                <td><?php echo $row['userDate']; ?></td>
                <td><?php echo $row['userEmail']; ?></td>
                <td><?php echo $row['locality1']; ?></td>
                <td><?php echo $row['userMobile']; ?></td>
               
              </tr>
                      <?php 
                    }
                }

                else
                {
                  echo "NO DATA AVAILABLE IN THE DATABASE.";
                }
                  ?>
                          
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
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


  </body>
</html>