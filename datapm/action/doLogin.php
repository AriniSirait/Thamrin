<?php
session_start();
include "../config/configuration.php";
include "..class/Logging.class.php";

$username = $_POST['j_plain_username'];
$password = $_POST['j_plain_password'];
$md5Password = md5($password);

// Logging class initialization   
$log = new Logging();   
// write message to the log file   
 

if($username=="" OR $password==""){
	header("Location:../login.php?error=Username dan Password harus diisi");

}else{
	$data = mysql_query("select * from user where nik='$username' AND password='$md5Password' ");
	$hasil = mysql_fetch_array($data);
	if($hasil){
				$_SESSION['user']=$hasil['nama_lengkap'];
				$_SESSION['nik']=$hasil['nik'];
				
				$lkUser = mysql_query("select * from lookup_user_role where kode_lookup ='".$hasil['role']."' ");
				$resLkUser = mysql_fetch_array($lkUser);
				$_SESSION['eManualHome']=$resLkUser['user'];

				//for first login, we will forced to change password, so please prepare the changepassword pages.
				if($hasil['isChange']==0 ){
					mysql_query("update user set last_login=NOW(),counter=counter+1 where username='$username'");
					$_SESSION['last_login']=$hasil['last_login'];
					$_SESSION['counter']=$hasil['counter'];
					header("Location:../changepassword.php");
				}else
					mysql_query("update user set last_login=NOW(),counter=counter+1 where username='$username'");
					$_SESSION['last_login']=$hasil['last_login'];
					$_SESSION['counter']=$hasil['counter'];
					$log->lwrite($hasil["nik"].' - '.$hasil["nama_lengkap"].' -> Login Ke System');
					$log->dbwrite('Melakukan Loggin Ke System'); 
					header("Location:../bank_option.php");


	}else{
		header("Location:../login.php?error=Username Atau Password Anda tidak sesuai");

	}
}

?>
