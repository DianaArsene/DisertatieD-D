<?php
require_once 'Classes/PHPExcel.php';
//getting the xls file
$myFile = 'utils/FIAP.xls';
$objPHPExcel = new PHPExcel();
$excelReader = PHPExcel_IOFactory::createReaderForFile($myFile,'Excel2007');
$objPHPExcel  = $excelReader->load($myFile);
$myWorksheet = $objPHPExcel ->getActiveSheet();
$lastRow = $myWorksheet->getHighestRow();
$myWorksheet->setCellValue('C1',$_POST['facultate']);
$myWorksheet->setCellValue('C2',$_POST['departament']);
$myWorksheet->setCellValue('C5',$_POST['grad']);
$myWorksheet->setCellValue('C6',$_POST['nume']);
$myWorksheet->setCellValue('E12',$_POST['rez_1720']);
$myWorksheet->setCellValue('D14',$_POST['d14']);
$myWorksheet->setCellValue('F24',$_POST['f24']);
$myWorksheet->setCellValue('F31',$_POST['f31']);
$myWorksheet->setCellValue('F38',$_POST['f38']);
$myWorksheet->setCellValue('F55',$_POST['f55']);
$myWorksheet->setCellValue('F59',$_POST['f59']);
$myWorksheet->setCellValue('F64',$_POST['f64']);
$myWorksheet->setCellValue('F70',$_POST['f70']);
$myWorksheet->setCellValue('B80',$_POST['data']);
$myWorksheet->setCellValue('C80',$_POST['nume_prenume']);
$myWorksheet->setCellValue('D80',$_POST['semnatura']);

for($i=15;$i<=76;$i++){
	if(!empty($_POST['d'.$i])){
		$myWorksheet->setCellValue('D'.$i,$_POST['d'.$i]);
	}
	if(!empty($_POST['e'.$i])){
	$myWorksheet->setCellValue('E'.$i,$_POST['e'.$i]);
	}
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="FormularFIAP.xls"');
header('Cache-Control: max-age=0');
ob_end_clean();
$objWriter->save('php://output');
?>