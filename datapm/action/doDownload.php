<?php
session_start();
include "../config/configuration.php";
require_once ('../phpexcel/Classes/PHPExcel.php');

$user_option = $_GET["user_option"];
$log = new Logging();

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("GTS Tools Family");

if ($user_option=='bank'){
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0);
	$sheet = $objPHPExcel->getActiveSheet();
	$sheet->SetCellValue('A1', 'ID');
	$sheet->SetCellValue('B1', 'Nama Bank');
	$sheet->SetCellValue('C1', 'Customer Serial Number');
	$sheet->SetCellValue('D1', 'PM per Year');
	$sheet->SetCellValue('E1', 'MA Agreement');
	$rowcount = 1;
	$data = mysql_query("select * from data_bank");
	while ($row = mysql_fetch_array($data)){
		$rowcount++;
		$sheet->SetCellValue('A'.$rowcount, $row['id']);
		$sheet->SetCellValue('B'.$rowcount, $row['nama_bank']);
		$sheet->SetCellValue('C'.$rowcount, $row['csn']);
		$sheet->SetCellValue('D'.$rowcount, $row['pm_per_year']);
		$sheet->SetCellValue('E'.$rowcount, $row['ma_agreement']);
	}

	for($col = 'A'; $col !== 'F'; $col++) {
	    $objPHPExcel->getActiveSheet()
	        ->getColumnDimension($col)
	        ->setAutoSize(true);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
	header('Content-type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename="data_bank.xlsx"');
	$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Download Data Bank');
	$log->dbwrite('Melakukan Download Data Bank');
	
}
else if($user_option=='user') {
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0);
	$sheet = $objPHPExcel->getActiveSheet();
	
	$sheet->SetCellValue('A1', 'NIK');
	$sheet->SetCellValue('B1', 'Username');	
	$sheet->SetCellValue('C1', 'Nama Lengkap');
	$sheet->SetCellValue('D1', 'Jabatan');
	$sheet->SetCellValue('E1', 'Cabang');
	$sheet->SetCellValue('F1', 'Email');
	$sheet->SetCellValue('G1', 'Telepon');
	$sheet->SetCellValue('H1', 'Role');
	$rowcount = 1;
	$data = mysql_query("select * from user");
	while ($row = mysql_fetch_array($data)){
		$rowcount++;
		
		$sheet->SetCellValue('A'.$rowcount, $row['nik']);
		$sheet->SetCellValue('B'.$rowcount, $row['username']);		
		$sheet->SetCellValue('C'.$rowcount, $row['nama_lengkap']);
		$sheet->SetCellValue('D'.$rowcount, $row['jabatan']);
		$sheet->SetCellValue('E'.$rowcount, $row['cabang']);
		$sheet->SetCellValue('F'.$rowcount, $row['email']);
		$sheet->SetCellValue('G'.$rowcount, $row['telp']);
		$sheet->SetCellValue('H'.$rowcount, $row['role']);		
	}

	for($col = 'A'; $col !== 'I'; $col++) {
	    $objPHPExcel->getActiveSheet()
	        ->getColumnDimension($col)
	        ->setAutoSize(true);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
	header('Content-type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename="user.xlsx"');
	$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Download Data User');
	$log->dbwrite('Melakukan Download Data User');
}
else if ($user_option=='atm') {
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0);
	$sheet = $objPHPExcel->getActiveSheet();
	$sheet->SetCellValue('A1', 'ID');
	$sheet->SetCellValue('B1', 'Tipe ATM');
	$sheet->SetCellValue('C1', 'Description');
	$rowcount = 1;
	$data = mysql_query("select * from atm_type");
	while ($row = mysql_fetch_array($data)){
		$rowcount++;
		$sheet->SetCellValue('A'.$rowcount, $row['id']);
		$sheet->SetCellValue('B'.$rowcount, $row['tipe_atm']);
		$sheet->SetCellValue('C'.$rowcount, $row['description']);		
	}

	for($col = 'A'; $col !== 'D'; $col++) {
	    $objPHPExcel->getActiveSheet()
	        ->getColumnDimension($col)
	        ->setAutoSize(true);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
	header('Content-type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename="tipe_atm.xlsx"');
	$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Download Tipe ATM');
	$log->dbwrite('Melakukan Download Tipe ATM');
}
else {
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0);
	$sheet = $objPHPExcel->getActiveSheet();
	$sheet->SetCellValue('A1', 'ID');
	$sheet->SetCellValue('B1', 'Customer');
	$sheet->SetCellValue('C1', 'Terminal ID');
	$sheet->SetCellValue('D1', 'Machine Serial Number');
	$sheet->SetCellValue('E1', 'Tipe Mesin');
	$sheet->SetCellValue('F1', 'Address');
	$sheet->SetCellValue('G1', 'City');
	$sheet->SetCellValue('H1', 'Service Area');
	$sheet->SetCellValue('I1', 'Installation Date');
	$sheet->SetCellValue('J1', 'Group');
	$sheet->SetCellValue('K1', 'CEowner');
	$sheet->SetCellValue('L1', 'Remarks2');
	$sheet->SetCellValue('M1', 'Customer Serial Number');
	$sheet->SetCellValue('N1', 'Status');
	$sheet->SetCellValue('O1', 'Coverage');
	$sheet->SetCellValue('P1', 'Start Date');
	$sheet->SetCellValue('Q1', 'End Date');
	$sheet->SetCellValue('R1', 'PM per Year');
	$rowcount = 1;
	$data = mysql_query("select * from data_atm");
	while ($row = mysql_fetch_array($data)){
		$rowcount++;
		$sheet->SetCellValue('A'.$rowcount, $row['id']);
		$sheet->SetCellValue('B'.$rowcount, $row['customer']);
		$sheet->SetCellValue('C'.$rowcount, $row['terminal_id']);
		$sheet->SetCellValue('D'.$rowcount, $row['msn']);
		$sheet->SetCellValue('E'.$rowcount, $row['tipe_mesin']);
		$sheet->SetCellValue('F'.$rowcount, $row['address']);
		$sheet->SetCellValue('G'.$rowcount, $row['city']);
		$sheet->SetCellValue('H'.$rowcount, $row['service_area']);
		$sheet->SetCellValue('I'.$rowcount, $row['installation_date']);
		$sheet->SetCellValue('J'.$rowcount, $row['group']);
		$sheet->SetCellValue('K'.$rowcount, $row['ceowner']);
		$sheet->SetCellValue('L'.$rowcount, $row['remarks2']);		
		$sheet->SetCellValue('M'.$rowcount, $row['csn']);
		$sheet->SetCellValue('N'.$rowcount, $row['status']);
		$sheet->SetCellValue('O'.$rowcount, $row['coverage']);
		$sheet->SetCellValue('P'.$rowcount, $row['start_date']);
		$sheet->SetCellValue('Q'.$rowcount, $row['end_date']);
		$sheet->SetCellValue('R'.$rowcount, $row['pm_per_year']);
	}

	for($col = 'A'; $col !== 'S'; $col++) {
	    $objPHPExcel->getActiveSheet()
	        ->getColumnDimension($col)
	        ->setAutoSize(true);
	}

	$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
	header('Content-type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename="data_machine.xlsx"');
	$log->lwrite($_SESSION['nik'].' - '.$_SESSION['user'].' -> Download Data Machine');
	$log->dbwrite('Melakukan Download Data Machine');
}

$objWriter->save('php://output');
exit;
//Status API Training Shop Blog About © 2014 GitHub, Inc. Terms Privacy Security Contact 
?>