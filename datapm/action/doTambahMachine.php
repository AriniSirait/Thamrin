<?php
session_start();
include "../config/configuration.php";

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
$group =  check_input($_POST['group']);
$ceowner =  check_input($_POST['ceowner']);
$remarks2 =  check_input($_POST['remarks2']);
$status =  check_input($_POST['status']);
$coverage =  check_input($_POST['coverage']);
$start_date =  check_input($_POST['start_date']);
$end_date =  check_input($_POST['end_date']);
$pm_per_year =  check_input($_POST['pm_per_year']);

if($customer=="" OR $csn=="" OR $terminal_id=="" OR $msn=="" OR $tipe_mesin=="" OR $address==""
	OR $city=="" OR $service_area=="" OR $installation_date=="" OR $group=="" OR $ceowner=="" 
	OR $remarks2=="" OR $status=="" OR $coverage=="" OR $start_date=="" OR $end_date=="" OR $pm_per_year==""){
	header("Location:../tambah_machine.php?msg= Semua field harus diisi");
	
}
else{
	$data = mysql_query("INSERT INTO `data_atm`(`customer`, `csn`,  `terminal_id`, `msn`,  `tipe_mesin`,
						`address`,  `city`, `service_area`,  `installation_date`, `group`,  `ceowner`
						, `remarks2`,  `status`, `coverage`,  `start_date`, `end_date`,  `pm_per_year`) VALUES
										('$customer', '$csn', '$terminal_id', '$msn', '$tipe_mesin', '$address',
										'$city',  '$service_area',  '$installation_date',  '$group', '$ceowner',
										'$remarks2',  '$status',  '$coverage',  '$start_date',  '$end_date',  '$pm_per_year')");
		//echo "berhasil<br>";
		//echo mysql_error($dbConnect);			
	header("Location:../managed_machine.php?msg=Data Machine berhasil ditambahkan");

}
?>