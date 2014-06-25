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

$csn = check_input($_POST['csn']);
$nama_bank =  check_input($_POST['nama_bank']);
$ma_agreement =  check_input($_POST['ma_agreement']);
$pm_per_year =  check_input($_POST['pm_per_year']);

if($csn=="" OR $nama_bank=="" OR $ma_agreement=="" OR $pm_per_year==""){
	header("Location:../tambah_bank.php?msg= Semua field harus diisi");
	
}
else{
	//$data = mysql_query("INSERT INTO `data_bank`(`csn`, `nama_bank`,  `ma_agreement`, `pm_per_year`) VALUES
	//									('$csn', '$nama_bank', '$ma_agreement','$pm_per_year')");
	//sendEmail('arinihasianna@gmail.com', 'Data Bank telah ditambahkan');
	$log = new Logging(); 
    $log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Tambah Bank');
    $log->dbwrite('Melakukan Penambahan Bank');		
	header("Location:../managed_bank.php?msg=Data Bank berhasil ditambahkan");
	
}
?>