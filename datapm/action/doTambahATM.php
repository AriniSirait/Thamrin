<?php
session_start();
include "../config/configuration.php";
//include "../email.php";
require('../email.php');

function check_input($value)
{/*
// Stripslashes
if (get_magic_quotes_gpc())
  {
  $value = stripslashes($value);
  }
// Quote if not a number
if (!is_numeric($value))
  {
  $value = "'" . mysql_real_escape_string($value) . "'";
  }*/
return addslashes($value);
}

$tipe_atm =  check_input($_POST['tipe_atm']);
$description =  check_input($_POST['description']);

if($tipe_atm=="" OR $description==""){
	header("Location:../tambah_atm.php?msg= Semua field harus diisi");
	
}
else{
	/*$data = mysql_query("INSERT INTO `atm_type`(`tipe_atm`,  `description`) VALUES
										('$tipe_atm', '$description')");*/
	$body = "hoi!";
	$mail->MsgHTML($body);
	if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
		//echo mysql_error($dbConnect);	*/		
	//header("Location:../managed_atm.php?msg=Data Tipe ATM berhasil ditambahkan");


}
?>