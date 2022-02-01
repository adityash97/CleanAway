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

    <title>Update Location</title>

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
          <h3 class="page-header"><i class="fa fa-table"></i>Search Location</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-th-list"></i><a href="branch_list.php">Location List</a></li>
            <li><i class="fa fa-search"></i>Search Location</li>
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
                                  <th><form action="update_location.php" method="post"><input type="text" id="myInput" name="id"  placeholder="Search by ID.."">
                                    <input type="submit"  name="search" style="display: none;"></form></th>
                 
                        <?php

                         if (isset($_POST['search'])) 
                          {
    $LocationName = $_POST['id'];

 $sql = "SELECT * FROM locality WHERE LID='$LocationName'";

 //'". $_GET['ngoName']."' ";

    $record = mysqli_query($conn,$sql);
  $rec = mysqli_fetch_assoc($record);
 if($rec>0)
  {
    ?>                               
                                </tr>
                              </thead> 
                              <tbody>


                              </tbody>
                            </table> 

<?php

?>                         </div>



                      </section>
                  </div>
              </div>

     <div class="rec">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          <div class="table-responsive">
                            <div class="container">
    <div class="rec">
  <div class="form-style-10">
<h1>Update Location!</h1>
<form action="updateLocationphp.php" method="post">
   <div class="section"><span>1</span>Location ID</div>
    <div class="inner-wrap">
        <label>ID <input type="text" name="id" value="<?php echo $rec['LID']; ?>" readonly /> </label>
          </div>
    <div class="section"><span>2</span>Branch</div>
    <div class="inner-wrap">
        <label>Branch <input type="text" name="name" value="<?php echo $rec['locality1']; ?>"  required data-validation-required-message="Please enter location." /></label>
        

        
    </div>
    <div class="button-section">
     <input type="submit" name="Update" value="Update" />
   <!--  <span class="privacy-policy">
       </span> -->
    </div>
</form>

<?php
}
else{
  echo '<script>alert("'.$LocationName.' NOT FOUND IN THE DATABASE.");window.location="branch_list.php"</script>';
}
}
                        ?>  

</div>  
</div>
    </div>
                          </div>

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

  </body>
</html>