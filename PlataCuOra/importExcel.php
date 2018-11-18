<?php
require_once 'Classes/PHPExcel.php';
//getting the xls file
$myFile = realpath($_FILES["numefisier"]["tmp_name"]);
$excelReader = PHPExcel_IOFactory::createReaderForFile($myFile);
$objPHPExcel  = $excelReader->load($myFile);
$myWorksheet = $objPHPExcel ->getActiveSheet();
$lastRow = $myWorksheet->getHighestRow();

$values=[];
for($i=15;$i<=76;$i++){
	if(!empty($myWorksheet->getCell('D'.$i))){
		$values['d'.$i] = $myWorksheet->getCell('D'.$i)->getValue();
	}
}
if(!empty($myWorksheet->getCell('C1'))){
		$values['facultate'] = $myWorksheet->getCell('C1')->getValue();
	}
if(!empty($myWorksheet->getCell('C2'))){
		$values['departament'] = $myWorksheet->getCell('C2')->getValue();
	}
if(!empty($myWorksheet->getCell('C5'))){
		$values['grad'] = $myWorksheet->getCell('C5')->getValue();
	}
if(!empty($myWorksheet->getCell('C76'))){
		$values['alte_activ'] = $myWorksheet->getCell('C76')->getValue();
	}
if(!empty($myWorksheet->getCell('B80'))){
		$values['data'] = $myWorksheet->getCell('B80')->getValue();
	}
if(!empty($myWorksheet->getCell('C80'))){
		$values['nume_prenume'] = $myWorksheet->getCell('C80')->getValue();
	}
if(!empty($myWorksheet->getCell('C6'))){
		$values['nume'] = $myWorksheet->getCell('C6')->getValue();
	}
include "formular.php";
?>