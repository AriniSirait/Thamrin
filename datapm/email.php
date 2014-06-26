<?php
require_once('phpmailer/PHPMailerAutoload.php');
function sendEmail($recipientEmail, $recipientName, $Body){
	$mail = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "mail.yourdomain.com"; // SMTP server
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	// 0 = ngapain ngedebug
	// 1 = errors and messages
	// 2 = messages only
	$mail->SMTPAuth   = true;               // enable SMTP authentication
	$mail->SMTPSecure = "tls";              // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";   // sets GMAIL as the SMTP server
	$mail->Port       = 587;                // set the SMTP port for the GMAIL server
	$mail->Username   = "";  		// GMAIL username
	$mail->Password   = "";            	// GMAIL password
	$mail->SetFrom(''/*alamat email*/, '' /*nama penerima*/);
	$mail->AddReplyTo(''/*alamat email*/, '' /*nama penerima*/);
	$mail->Subject = "[DataPM]";		//untuk tambah subjek
	$mail->Body = $body;
	$mail->AddAddress($recipientEmail, $recipientName);
	if(!$mail->Send()) {
		
	} else {}
	
}
	
?>
