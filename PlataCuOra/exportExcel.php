<?php
require_once 'Classes/PHPExcel.php';
//getting the xls file
$filename = 'Tabel_Plata_Cu_Ora';

$formRow=[];
foreach ($_POST as $key=>$value)
{
    $keys= explode("_",$key);
    if(empty($formRow[$key[0]]))
    {
        $formRow[$key[0]]=[];
    }
    $formRow[$key[0]][$keys[1]]=$value;
}

$objPHPExcel = new PHPExcel();
$objPHPExcel->setActiveSheetIndex(0); 


/**
 * Setting the header
 */
$rowCount = 1; 
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, 'Facultate'); 
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, 'Tipdisc'); 
$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, 'Disciplina'); 
$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, 'Forma');
$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, 'Cod'); 
$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, 'An');
$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, 'Serie'); 
$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, 'Nr');
$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, 'Sg'); 
$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, 'C2');
$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, 'A2'); 
$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, 'Post');
$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, 'Grad');
$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, 'Pers');
$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, 'Tip');
$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, 'Angr');
$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, 'Zi');
$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, 'Ora');
$rowCount++;

foreach ($formRow as $row){ 
//    print_r($row);
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['facultate']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['tipdisc']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['disciplina']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['forma']);
    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['cod']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $row['an']);
    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['serie']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $row['nr']);
    $objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $row['sg']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $row['c2']);
    $objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $row['a2']); 
    $objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $row['post']);
    $objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, $row['grad']);
    $objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, $row['pers']);
    $objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, $row['tip']);
    $objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, $row['angr']);
    $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, $row['zi']);
    $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, $row['ora']);
    $rowCount++; 
} 

// We'll be outputting an excel file
header('Content-type: application/vnd.ms-excel');
// It will be called file.xls
header('Content-Disposition: attachment; filename="Plata_Cu_Ora.xls"');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');