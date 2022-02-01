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
    <!-- start header -->
     <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span><img src="img/two.png"></span>Clean Away</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                       <li class="dropdown">
                     <!--  <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Complaint<b class=" icon-angle-down"></b></a> -->
                     <li><a href="compliant.php">Complaint</a></li>
                     <!--  <ul class="dropdown-menu">
                                <li><a href="compliant.php">Make Complaint</a></li>
                                <li><a href="loc1/try2.php">Update Location</a></li>
                                <li><a href="beanemployee.php">Be A Volunteer</a></li>
                            </ul> -->
                        </li>
                        <!-- <li><a href="beanemployee.php">Be A Volunteer</a></li> -->
                        <li><a href="history.php">History</a></li>
                        <li><a href="notification.php">Notification<span class="w3-badge w3-red"></span></a></li>
                         <li><a href="profile.php">profile<span class="w3-badge w3-red"></span></a></li>
                        <li><a href="../Logout/logout.php">Logout </a><br></li>
                        WELCOME User, <?php echo $u_email;?>

                      
                    </ul>

                </div>
            </div>
        </div>

    </header>
    <!-- end header -->
