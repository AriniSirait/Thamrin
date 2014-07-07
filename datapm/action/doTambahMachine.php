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


$customer =  check_input($_POST['customer']);
$csn =  check_input($_POST['csn']);
$terminal_id =  check_input($_POST['terminal_id']);
$msn =  check_input($_POST['msn']);
$tipe_mesin =  check_input($_POST['tipe_mesin']);
$address =  check_input($_POST['address']);
$city =  check_input($_POST['city']);
$service_area =  check_input($_POST['service_area']);
$installation_date =  check_input($_POST['installation_date']);
$inst_date = date("Y-m-d", strtotime($installation_date));
$team =  check_input($_POST['team']);
$ceowner =  check_input($_POST['ceowner']);
$remarks2 =  check_input($_POST['remarks2']);
$status =  check_input($_POST['status']);
$coverage =  check_input($_POST['coverage']);
$start_date =  check_input($_POST['start_date']);
$s_date = date("Y-m-d", strtotime($start_date));
$end_date =  check_input($_POST['end_date']);
$e_date = date("Y-m-d", strtotime($end_date));
$pm_per_year =  check_input($_POST['pm_per_year']);

if($customer=="" OR $csn=="" OR $terminal_id=="" OR $msn=="" OR $tipe_mesin=="" OR $address==""
	OR $city=="" OR $service_area=="" OR $inst_date=="" OR $team=="" OR $ceowner=="" 
	OR $remarks2=="" OR $status=="" OR $coverage=="" OR $s_date=="" OR $e_date=="" OR $pm_per_year==""){
	header("Location:../tambah_machine.php?msg= Semua field harus diisi");
	
} else if (!preg_match("/^\d{6,10}$/",$csn)) { //check if csn format is valid (6-10 digits)
	header("Location:../tambah_machine.php?csnErr= CSN format is invalid"); 
} else if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$inst_date)) { //check if date format is valid
	header("Location:../tambah_machine.php?idErr= Date format is invalid"); 
} else if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$s_date)) { //check if date format is valid
	header("Location:../tambah_machine.php?sdErr= Date format is invalid"); 
} else if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$e_date)) { //check if PM per Year only contains numbers
	header("Location:../tambah_machine.php?edErr= Date format is invalid"); 
} else if (!preg_match("/^[1-9][0-9]*$/",$pm_per_year)) { //check if PM per Year only contains numbers
	header("Location:../tambah_machine.php?pmErr= Only numbers allowed"); 
} else{
	$data = mysql_query("INSERT INTO `data_atm`(`customer`, `csn`,  `terminal_id`, `msn`,  `tipe_mesin`,
						`address`,  `city`, `service_area`,  `installation_date`, `team`,  `ceowner`,
						`remarks2`,  `status`, `coverage`,  `start_date`, `end_date`,  `pm_per_year`) VALUES
						('".$customer."', '".$csn."', '".$terminal_id."', '".$msn."', '".$tipe_mesin."', '".$address."',
						'".$city."',  '".$service_area."',  '".$inst_date."',  '".$team."', '".$ceowner."',
						'".$remarks2."',  '".$status."',  '".$coverage."',  '".$s_date."',  '".$e_date."',  '".$pm_per_year."')");
	if($data){
		sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data machine telah ditambahkan');
		$log = new Logging(); 
	    $log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Tambah Machine');
	    $log->dbwrite('Melakukan Penambahan Machine');
		header("Location:../managed_machine.php?msg=Data Machine berhasil ditambahkan");
	} else {		
		header("Location:../managed_machine.php?msg=Data Machine Gagal ditambahkan");	
	}
				
}
?>