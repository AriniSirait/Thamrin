<?php
/*
	Configuration Database of ATM Portal
*/

$host = "localhost";
$username = "root";
$password = "";

$dbConnect = mysql_connect($host,$username,$password);
$link = mysql_select_db("datapm",$dbConnect);

class Logging{   
  // define log file   
  private $log_file = '../log/logfile.txt';   
  // define file pointer   
  private $fp = null;   
  // write message to the log file   
  public function lwrite($message){   
    // if file pointer doesn't exist, then open log file   
    if (!$this->fp) $this->lopen();   
    // define script name   
    $script_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);   
    // define current time   
    $time = date('H:i:s');   
    // write current time, script name and message to the log file   
    fwrite($this->fp, "$time ($script_name) $message\n");   
  }   
  
  public function dbwrite($activity){   
  $nik = $_SESSION['nik'];
  $user = $_SESSION['user'];
  $ip = $_SERVER["REMOTE_ADDR"]; 
    // if file pointer doesn't exist, then open log file   
    $query = "insert into log (`id`, `nik`, `nama_lengkap`,`ip`, `activity`, `created`) values ('', '$nik', '$user', '$ip', '$activity', NOW())";
  	mysql_query($query);
  }   
  // open log file   
  private function lopen(){   
    // define log file path and name   
    $lfile = $this->log_file;   
    // define the current date (it will be appended to the log file name)   
    $today = date('Y-m-d');   
    // open log file for writing only; place the file pointer at the end of the file   
    // if the file does not exist, attempt to create it   
    $this->fp = fopen($lfile . '_' . $today, 'a') or exit("Can't open $lfile!");   
  }   
}

?>