<?php
session_start();
include "../config/configuration.php";
include "../class/Logging.class.php";
require_once('../email.php');

$user_option = $_GET["user_option"];
$id = $_GET["id"];
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
	$customer =  check_input($_POST['customer']);
	$csn =  check_input($_POST['csn']);
	$terminal_id =  check_input($_POST['terminal_id']);
	$msn =  check_input($_POST['msn']);
	$tipe_mesin =  check_input($_POST['tipe_mesin']);
	$address =  check_input($_POST['address']);
	$city =  check_input($_POST['city']);
	$service_area =  check_input($_POST['service_area']);
	$installation_date =  check_input($_POST['installation_date']);
	$team =  check_input($_POST['team']);
	$ceowner =  check_input($_POST['ceowner']);
	$remarks2 =  check_input($_POST['remarks2']);
	$status =  check_input($_POST['status']);
	$coverage =  check_input($_POST['coverage']);
	$start_date =  check_input($_POST['start_date']);
	$end_date =  check_input($_POST['end_date']);
	$pm_per_year =  check_input($_POST['pm_per_year']);

	if($id=="" OR $customer=="" OR $csn=="" OR $terminal_id=="" OR $msn=="" OR $tipe_mesin=="" OR $address==""
	OR $city=="" OR $service_area=="" OR $installation_date=="" OR $team=="" OR $ceowner=="" 
	OR $remarks2=="" OR $status=="" OR $coverage=="" OR $start_date=="" OR $end_date=="" OR $pm_per_year==""){
			header("Location:../update_machine.php?msg= Semua field harus diisi&user_option=edit&id=$id");
			//echo mysql_error($dbConnect);
	} else {
			$data = mysql_query("UPDATE `data_atm` SET `customer`='".$customer."',`csn`='".$csn."',`terminal_id`='".$terminal_id."'
								,`msn`='".$msn."',`tipe_mesin`='".$tipe_mesin."',`address`='".$address."',`city`='".$city."',`service_area`='".$service_area."'
								,`installation_date`='".$installation_date."',`team`='".$team."',`ceowner`='".$ceowner."',`remarks2`='".$remarks2."'
								,`status`='".$status."',`coverage`='".$coverage."',`start_date`='".$start_date."',`end_date`='".$end_date."',`pm_per_year`='".$pm_per_year."' WHERE `id`='$id'");
			if($data){
				sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data machine telah diupdate');
				$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Update Machine');
			    $log->dbwrite('Melakukan Update Machine');
				//echo mysql_error($dbConnect);
				header("Location:../managed_machine.php?msg=Data Machine Berhasil Diupdate");
			} else {			
				header("Location:../managed_machine.php?msg=Data Machine Gagal Diupdate");	
			}



	}
} else {
		$id = $_GET["id"];
		$data = mysql_query("DELETE FROM `data_atm` WHERE `id`='$id'");
		if($data){
			sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data machine telah dihapus');
			$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Delete Machine');
		    $log->dbwrite('Melakukan Delete Machine');
			header("Location:../managed_machine.php?msg=Data Machine Berhasil Dihapus");
		} else {			
			header("Location:../managed_machine.php?msg=Data Machine Gagal Dihapus");	
		}

		
	}

?>