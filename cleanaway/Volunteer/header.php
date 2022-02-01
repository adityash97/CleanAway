<?php
session_start();
include("connect.php");
#------------------------------------------------------------------------------------------------------------------------------
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
                        <li><a href="view_ compliants.php">View Compliants</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="../Logout/logout.php">Logout</a></li>
                          WELCOME Volunteer, <?php echo $u_email;?>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->