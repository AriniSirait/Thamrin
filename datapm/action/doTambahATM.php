//------------------------doTambahATM.php-------------------
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

$tipe_atm =  check_input($_POST['tipe_atm']);
$description =  check_input($_POST['description']);

if($tipe_atm=="" OR $description==""){
    header("Location:../tambah_atm.php?msg= Semua field harus diisi");
    
}
else{
    $data = mysql_query("INSERT INTO `atm_type`(`tipe_atm`,  `description`) VALUES
                                       ('$tipe_atm', '$description')");
    sendEmail(''/*isi dengan alamat email tujuan*/, ''/*isi dengan nama penerima email tujuan*/, 'Tipe ATM telah ditambahkan');
    $log = new Logging(); 
    $log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Tambah tipe ATM');
    $log->dbwrite('Melakukan Penambahan tipe ATM');
        //echo mysql_error($dbConnect);      
    header("Location:../managed_atm.php?msg=Data Tipe ATM berhasil ditambahkan");


}
?>