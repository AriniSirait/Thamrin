<?php
include "../config/configuration.php";
session_start();

$oldPassword				=$_REQUEST['oldPassword'];
$newPassword	  			=$_REQUEST['newPassword'];
$confirmPassword           	=$_REQUEST['confirmPassword'];   
$md5Pass                    = md5($newPassword);


if(isset($_SESSION['nik']))
	$nik = $_SESSION['nik'];

if($newPassword != $confirmPassword){
	 header("Location:../changePassword.php?msg=Confirm Password tidak sesuai");

}else{
	 if(mysql_query("UPDATE `user` set password='$md5Pass', isChange=1 where nik='$nik' ")  ){
			 	$log = new Logging(); 
				$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Merubah Password Sendiri');	
         		 header("Location:../changePassword.php?msg=Password Berhasil Di Update");

     }else{
      			 header("Location:../changePassword.php?msg=Password Gagal Di Update");
     }


}




?>