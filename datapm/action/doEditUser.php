<?php
session_start();
include "../config/configuration.php";

	$user_option = $_GET["user_option"];


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

	 $nik = check_input($_POST['nik']);
	 $username =  check_input($_POST['username']);
	 $nama_lengkap = check_input($_POST['nama_lengkap']);
	 $email =  check_input($_POST['email']);
	 $telp =  check_input($_POST['telp']);
	 $role = check_input($_POST['role']);
	 $jabatan = check_input($_POST['jabatan']);
	 $cabang = check_input($_POST['cabang']);


	if($username=="" OR $nama_lengkap=="" OR $email=="" OR $telp=="" OR $role=="" OR $jabatan=="" OR $cabang==""){
		header("Location:../update_user.php?msg= Semua field harus diisi&user_option=edit&nik=$nik");
		
	}
	else{
		echo $data = mysql_query("UPDATE `user` SET `username`='$username',`nama_lengkap`='$nama_lengkap',`jabatan`='$jabatan',`cabang`='$cabang',`email`='$email',`telp`='$telp',`role`='$role' WHERE `nik`='$nik'");
		echo mysql_error($dbConnect);
		if($data){
			header("Location:../managed_user.php?msg=Data User Berhasil Di Update");
		}else{
			header("Location:../managed_user.php?msg=Data User Gagal Di Update");	
		}	
	
	}
} else {
		
		$nik = $_GET["nik"];
		$data = mysql_query("DELETE FROM `user` WHERE `nik`='$nik'");
		header("Location:../managed_user.php?msg=Data User Berhasil Dihapus");
	}

?>