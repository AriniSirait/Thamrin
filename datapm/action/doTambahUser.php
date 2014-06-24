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

$nik = check_input($_POST['nik']);
$username =  check_input($_POST['username']);
$nama_lengkap =  check_input($_POST['nama_lengkap']);
$email =  check_input($_POST['email']);
$telp =  check_input($_POST['telp']);
$password = check_input($_POST['password']);
$cPassword = check_input($_POST['cPassword']);
$role = check_input($_POST['role']);
$jabatan = check_input($_POST['jabatan']);
$cabang = check_input($_POST['cabang']);


if($nik=="" OR $username=="" OR $nama_lengkap=="" OR $email=="" OR $telp=="" OR $password=="" OR $cPassword=="" OR $role=="" OR $jabatan=="" OR $cabang==""){
	header("Location:../tambah_user.php?msg= Semua field harus diisi");
	
}
else{
	if ($password == $cPassword){
		$md5Password = md5($password);
		$data = mysql_query("INSERT INTO `user`(`nik`, `username`,  `nama_lengkap`, `password`, `email`, `jabatan`, `cabang`, `telp`, `role`) VALUES
												('$nik', '$username', '$nama_lengkap','$md5Password', '$email', '$jabatan', '$cabang', '$telp', '$role')");
		echo "berhasil<br>";
		echo mysql_error($dbConnect);
		
	}else{
		header("Location:../tambah_user.php?msg= Password dan cPassword Harus Sama");
		
	}
	
	header("Location:../managed_user.php?msg=User berhasil ditambahkan");

}
?>