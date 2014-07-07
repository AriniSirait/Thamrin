<?php
require_once('phpmailer/PHPMailerAutoload.php');
		function sendEmail($recipientEmail, $recipientName, $body){
			$mail = new PHPMailer();
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "mail.yourdomain.com"; // SMTP server
			$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
			// 0 = ngapain ngedebug
			// 1 = errors and messages
			// 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "";  // GMAIL username
			$mail->Password   = "";            // GMAIL password
			$mail->SetFrom('', ' ');
			$mail->AddReplyTo('', ' ');
			$mail->Subject = "[LATIHAN]";			
			$mail->Body = $body;			
			//$mail->AddAddress('arinihasianna@gmail.com', 'Arini Hasianna');
			$mail->AddAddress($recipientEmail, $recipientName);
			// $mail->AddAddress('vivisutoyo@hotmail.com', 'Bernadette Vina Sutoyo');
			// $mail->AddAddress('samuel.cahyawijaya@gmail.com', 'Samuel Cahyawijaya');
			//$mail->AddAddress('zzzzz_sami_zzzzz@hotmail.com', 'Samuel Cahyawijaya');
			//$mail->AddAddress('zzzsamuelzzz@yahoo.com', 'Samuel Cahyawijaya');

			if(!$mail->Send()) {
				$mail->Send();
			} else {}
		}
	
		
	
?>