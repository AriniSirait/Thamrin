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

	 $nik = check_input($_POST['nik']);
	 $username =  check_input($_POST['username']);
	 $nama_lengkap = check_input($_POST['nama_lengkap']);
	 $email =  check_input($_POST['email']);
	 $telp =  check_input($_POST['telp']);
	 $role = check_input($_POST['role']);
	 $jabatan = check_input($_POST['jabatan']);
	 $cabang = check_input($_POST['cabang']);


	if($username=="" OR $nama_lengkap=="" OR $email=="" OR $telp==""){
		header("Location:../update_user.php?msg= Semua field harus diisi&user_option=edit&nik=$nik");
		
	} else if (!preg_match("/^[a-zA-Z ]*$/",$nama_lengkap)) { //check if name only contains letters and whitespace
		header("Location:../update_user.php?nameErr= Only letters and white space allowed&user_option=edit&nik=$nik"); 
	} else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) { //check if e-mail address syntax is valid
		header("Location:../update_user.php?emailErr= $email is an invalid email format&user_option=edit&nik=$nik"); 
	// } else if (!preg_match("(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9,12}$|[0-9\-\s]{10,20}$)",$telp)) { //check if e-mail address syntax is valid
	// 	header("Location:../tambah_user.php?telErr= $telp is an invalid telephone format"); 
	}else {
		$data = mysql_query("UPDATE `user` SET `username`='".$username."',`nama_lengkap`='".$nama_lengkap."', `email`='".$email."',`telp`='".$telp."' WHERE `nik`='$nik'");
		//echo mysql_error($dbConnect);
		if($data){
			sendEmail('arinihasianna@gmail.com'/*isi dengan alamat email tujuan*/, 'arini hasianna'/*isi dengan nama penerima email tujuan*/, 'Data User telah diupdate');
			$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Update User');
		    $log->dbwrite('Melakukan Update User');
			header("Location:../managed_user.php?msg=Data User Berhasil Diupdate");
		}else{
			header("Location:../managed_user.php?msg=Data User Gagal Di Update");	
		}	
	}
} else if ($user_option=='delete') {
		$nik = $_GET["nik"];
		$data = mysql_query("DELETE FROM `user` WHERE `nik`='$nik'");
		if($data){
			sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data User telah dihapus');
			$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Delete User');
			$log->dbwrite('Melakukan Delete User');
			header("Location:../managed_user.php?msg=Data User Berhasil Dihapus");
		} else {			
			header("Location:../managed_user.php?msg=Data User Gagal Dihapus");	
		}

		
}

?>