<?php
require_once('phpmailer/PHPMailerAutoload.php');
function sendEmail($recipientEmail, $Body){
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
	$mail->Username   = "arinihasianna@gmail.com";  // GMAIL username
	$mail->Password   = "akucintaTuhanku93!";            // GMAIL password
	$mail->SetFrom('arinihasianna@gmail.com', 'Arini Hasianna');
	$mail->AddReplyTo('arinihasianna@gmail.com', 'Arini Hasianna');
	$mail->Subject = "[LATIHAN]";
	/*//email tambah data
	$mail->Body = 'Tipe ATM telah ditambahkan';
	$mail->Body = 'Data Bank telah ditambahkan';
	$mail->Body = 'Data Machine telah ditambahkan';
	$mail->Body = 'Data User telah ditambahkan';
	//email update data
	$mail->Body = 'Tipe ATM telah diupdate';
	$mail->Body = 'Data Bank telah diupdate';
	$mail->Body = 'Data Machine telah diupdate';
	$mail->Body = 'Data User telah diupdate';
	//email hapus data
	$mail->Body = 'Tipe ATM telah dihapus';
	$mail->Body = 'Data Bank telah dihapus';
	$mail->Body = 'Data Machine telah dihapus';
	$mail->Body = 'Data User telah dihapus';
	$mail->AddAddress('arinihasianna@gmail.com', 'Arini Hasianna');*/
	// $mail->AddAddress('vivisutoyo@hotmail.com', 'Bernadette Vina Sutoyo');
	// $mail->AddAddress('samuel.cahyawijaya@gmail.com', 'Samuel Cahyawijaya');
	//$mail->AddAddress('zzzzz_sami_zzzzz@hotmail.com', 'Samuel Cahyawijaya');
	//$mail->AddAddress('zzzsamuelzzz@yahoo.com', 'Samuel Cahyawijaya');

	if(!$mail->Send()) {
	echo "\nMailer Error: " . $mail->ErrorInfo;
	} else {
	echo "\nMessage sent!";
}
}
	
?>