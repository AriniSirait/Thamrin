<?php
session_start();
include "../config/configuration.php";
include "../class/Logging.class.php";

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

$oldPassword				=check_input($_POST['oldPassword']);
$newPassword	  			=check_input($_POST['newPassword']);
$confirmPassword           	=check_input($_POST['confirmPassword']);   
$md5Pass                    = md5($newPassword);


if(isset($_SESSION['nik']))
	$nik = $_SESSION['nik'];
if ($oldPassword=="" OR $newPassword=="" OR $confirmPassword=="") {
	header("Location:../changepassword.php?msg=Semua field harus diisi");
}else{
	if($newPassword !== $confirmPassword){
		header("Location:../changepassword.php?msg=Confirm Password tidak sesuai");
	} else {
		$data = mysql_query("UPDATE `user` set password='$md5Pass', isChange=1 where nik='$nik' ");
		if ($data){
			$log = new Logging(); 
			$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Merubah Password Sendiri');	
	 		$log->dbwrite('Merubah Password Sendiri');
	 		header("Location:../login.php?msg=Password Berhasil Diganti. Silahkan Log In ulang dengan Password Baru");
		}else{
	      	header("Location:../changepassword.php?msg=Password Gagal Diganti");
	    }
	}
} 
?>