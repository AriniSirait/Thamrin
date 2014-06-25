<?php
session_start();
include "../config/configuration.php";
include "../class/Logging.class.php";
require_once('../email.php');

$user_option = $_GET["user_option"];
$log = new Logging();

if ($user_option=='edit'){
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
	$tipe_atm = check_input($_POST['tipe_atm']);
	$description =  check_input($_POST['description']);

	if($tipe_atm=="" OR $description==""){
			header("Location:../update_atm.php?msg= Semua field harus diisi");
			//echo mysql_error($dbConnect);
			
		}
		else{
			//$data = mysql_query("UPDATE `atm_type` SET `tipe_atm`='$tipe_atm',`description`='$description' WHERE `id`='$id'");
			//echo mysql_error($dbConnect);
			$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Update tipe ATM');
		    $log->dbwrite('Melakukan Update tipe ATM');
			header("Location:../managed_atm.php?msg=Data ATM Type Berhasil Diupdate");			 
		   

		}
} else {
		$id = $_GET["id"];
		//$data = mysql_query("DELETE FROM `atm_type` WHERE `id`='$id'");
		$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Delete tipe ATM');
	    $log->dbwrite('Melakukan Delete tipe ATM');
		header("Location:../managed_atm.php?msg=Data ATM Type Berhasil Dihapus");
	}

?>