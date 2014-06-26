<?php
session_start();
include "../config/configuration.php";
include "../class/Logging.class.php";
require_once('../email.php');

$update_option = $_GET["update_option"];
$log = new Logging();

if ($update_option=='edit'){
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

	$id = check_input($_POST['id']);
	$csn = check_input($_POST['csn']);
	$nama_bank =  check_input($_POST['nama_bank']);
	$ma_agreement =  check_input($_POST['ma_agreement']);
	$pm_per_year =  check_input($_POST['pm_per_year']);


	if($csn=="" OR $nama_bank=="" OR $ma_agreement=="" OR $pm_per_year==""){
			header("Location:../update_bank.php?msg= Semua field harus diisi");
			
	} else {
			$data = mysql_query("UPDATE `data_bank` SET `csn`='$csn', `nama_bank`='$nama_bank', `ma_agreement`='$ma_agreement',`pm_per_year`='$pm_per_year' WHERE `id`='$id'");
			//echo mysql_error($dbConnect);
			sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data bank telah diupdate');
			$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Update Bank');
		    $log->dbwrite('Melakukan Update Bank');
			header("Location:../managed_bank.php?msg=Data Bank Berhasil Diupdate");

		}
} else {
		$id = $_GET["id"];
		$data = mysql_query("DELETE FROM `data_bank` WHERE `id`='$id'");
		sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data bank telah dihapus');
		$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Delete Bank');
	    $log->dbwrite('Melakukan Delete Bank');
		header("Location:../managed_bank.php?msg=Data Bank Berhasil Dihapus");
	}

?>