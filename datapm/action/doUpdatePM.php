<?php
session_start();
include "../config/configuration.php";
include "../class/Logging.class.php";
require_once('../email.php');

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

$log = new Logging();
$customer = check_input($_POST['customer']);
$terminal_id = check_input($_POST['terminal_id']);
$msn = check_input($_POST['msn']);
$date = check_input($_POST['date']);
$your_date = date("Y-m-d", strtotime($date));
$eng = check_input($_POST['eng']);

if ($customer=="" OR $terminal_id=="" OR $msn=="" OR $date=="" OR $eng=="") {
	header("Location:../updatepm.php?msg= Semua field harus diisi&msn=$msn");
}
else{
	$data = mysql_query("INSERT INTO `historypm`(`terminal_id`, `date`,  `eng`, `msn`) VALUES
											('".$terminal_id."', '".$your_date."', '".$eng."', '".$msn."')");
	if($data){
		sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data PM telah diupdate');
		$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Update PM');
		$log->dbwrite('Melakukan Update PM');
		header("Location:../details.php?msg=Data PM Berhasil Diupdate");
	} else {			
		header("Location:../details.php?msg=Data PM Gagal Diupdate");	
	}

}

?>