<?php
session_start();
include("connect.php");
// username and password sent from form 
              $name=$_POST['name']; 
              $password=md5($_POST['password']); 
			  $email=$_POST['email']; 
			  $phone=$_POST['phone']; 
			  $region=$_POST['region']; 
			  $user_type=$_POST['radio']; 
              //$_SESSION['username']=$username;
			  
			  //User login
			  if($user_type==1)		
			  {
				    $sqll="SELECT * FROM  user  WHERE userEmail='$email' or userMobile='$phone'";
				    $result=mysqli_query($conn,$sqll);
					$rec=mysqli_fetch_row($result);
                    $count=mysqli_num_rows($result);
						if( $count > 0)
						{
						echo "<script language=\"JavaScript\">\n";
						 echo "alert('Email Already Registred');\n";
						echo "window.location='signup.html'";
						echo "</script>";
						}
						else
						{
							$sql="INSERT INTO user VALUES (NULL,'$name',NOW(),'$email','$region','$phone','$password')";
							if ($conn->query($sql)=== TRUE) {
								echo "<script language=\"JavaScript\">\n";
							   echo "alert('Registred!!!Login To Continue');\n";
								echo "window.location='index.php'";
								echo "</script>";
							}
							else
							{
								echo "Error: " . $sql . "<br>" . $conn->error;
								//echo "window.location='index.php'";
							}
							
						}			
						
			  }
			  
			  
			  			  
			  
			  
			  else
			  { 
			  	$sqll="SELECT * FROM  volunteer  WHERE volunteerEmail='$email' or volunteerMobile='$phone'";
				    $result=mysqli_query($conn,$sqll);
					$rec=mysqli_fetch_row($result);
                    $count=mysqli_num_rows($result);
						if( $count > 0)
						{
						echo "<script language=\"JavaScript\">\n";
						 echo "alert('Email Already Registred');\n";
						echo "window.location='signup.html'";
						echo "</script>";
						}
						else
						{
							$sql="INSERT INTO `volunteer` VALUES (NULL,'$name',NOW(),'$email','$region','$phone','$password')";
							if ($conn->query($sql)=== TRUE) {
								echo "<script language=\"JavaScript\">\n";
							   echo "alert('Registred!!!Login To Continue');\n";
								echo "window.location='index.php'";
								echo "</script>";
							}
							else
							{
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
							
						}			
			  }
			  
              
?>