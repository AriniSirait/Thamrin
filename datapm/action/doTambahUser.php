<?php
session_start();
include "../config/configuration.php";
include "../class/Logging.class.php";
include "../email.php";

function check_input($value)
{
	// Stripslashes
	//if (get_magic_quotes_gpc())
	//   {
	//   $value = stripslashes($value);
	//   }
	// // Quote if not a number
	// if (!is_numeric($value))
	//   {
	//   $value = "'" . mysql_real_escape_string($value) . "'";
	//   }
	return addslashes($value);
}

$nik = check_input($_POST['nik']);
$username =  check_input($_POST['username']);
$nama_lengkap =  check_input($_POST['nama_lengkap']);
$email = check_input($_POST['email']);
$telp =  check_input($_POST['telp']);
$password = check_input($_POST['password']);
$cPassword = check_input($_POST['cPassword']);


if($nik=="" OR $username=="" OR $nama_lengkap=="" OR $email=="" OR $telp=="" OR $password=="" OR $cPassword==""){
	header("Location:../tambah_user.php?msg= Semua field harus diisi");
	
} else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$nik)) { //check if e-mail address syntax is valid
	header("Location:../tambah_user.php?nikErr= $nik is an invalid NIK format"); 
} else if (!preg_match("/^[a-zA-Z ]*$/",$nama_lengkap)) { //check if name only contains letters and whitespace
	header("Location:../tambah_user.php?nameErr= Only letters and white space allowed"); 
} else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) { //check if e-mail address syntax is valid
	header("Location:../tambah_user.php?emailErr= $email is an invalid email format"); 
// } else if (!preg_match("(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9,12}$|[0-9\-\s]{10,20}$)",$telp)) { //check if e-mail address syntax is valid
// 	header("Location:../tambah_user.php?telErr= $telp is an invalid telephone format"); 
}else if ($password !== $cPassword){
		header("Location:../tambah_user.php?msg= Password dan cPassword Harus Sama");
} else if ($password == $cPassword){
		$md5Password = md5($password);
		$data = mysql_query("INSERT INTO `user`(`nik`, `username`,  `nama_lengkap`, `password`, `email`, `telp`) VALUES
		 										('".$nik."', '".$username."', '".$nama_lengkap."','".$md5Password."', '".$email."', '".$telp."')");		
		if($data){
			sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Data user telah ditambahkan');
			$log = new Logging(); 
		    $log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Tambah User');
		    $log->dbwrite('Melakukan Penambahan User');
			header("Location:../managed_user.php?msg=Data User Berhasil Ditambahkan");
		} else {			
			header("Location:../managed_user.php?msg=Data User Gagal Ditambahkan");	
		}
		
}
?>