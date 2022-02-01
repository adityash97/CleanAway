<?php
if(!class_exists('PHPMailer')) {
    require('C:/xampp/htdocs/VS_Code/PHPMailer_5.2.0/class.phpmailer.php');
	require('C:/xampp/htdocs/VS_Code/PHPMailer_5.2.0/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<div> Hello" . $user["userName"] . ",Greetings from WMS.<br><br><p>Your password is<br>". $user["userPassword"] . "<br><br>Do no share this password with anyone.<br></p>Regards,<br> Admin.</div>";

$mail->IsSMTP();
//$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;

$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["userEmail"]);
$mail->Subject = "Forgot Password - Recovery Email";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) {
	//$error_message = 'Problem in Sending Password Recovery Email';
	echo "<script>alert('Problem in Sending Password Recovery Email');</script>\n";
} else {
	//echo "alert('Please check your email, a password recovery mail has been sent to you!');"
	//$success_message = 'Please check your email, a password recovery mail has been sent to you!';
	echo "<script>alert('Please check your email, a password recovery mail has been sent to you!');</script>\n";
}

?>
