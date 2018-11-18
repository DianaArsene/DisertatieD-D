<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Classes/PHPExcel.php';
$inputFileType = 'Excel5';
$inputFileName = 'fiap.xls';


/**  Define a Read Filter class implementing PHPExcel_Reader_IReadFilter  */
class myReadFilter implements PHPExcel_Reader_IReadFilter
{
    private $sstartRow = 0;

    private $eendRow = 0;

    /**  Set the list of rows that we want to read  */
    public function setRows($startRow, $chunksize) {
        $this->sstartRow    = $startRow;
        $this->eendRow      = $startRow + $chunkSize;
    }
	echo "aici";

    public function readCell($column, $row, $worksheetName = '') {
        //  Only read the heading row, and the rows that are configured in $this->_startRow and $this->_endRow
        if (($row >= $this->sstartRow && $row < $this->eendRow)) {
            return true;
        }
        return false;
    }
}


/**  Create a new Reader of the type defined in $inputFileType  **/
$objReader = PHPExcel_IOFactory::createReader($inputFileType);


/**  Define how many rows we want to read for each "chunk"  **/
$chunkSize = 500;
/**  Create a new Instance of our Read Filter  **/
$chunkFilter = new myReadFilter();

/**  Tell the Reader that we want to use the Read Filter that we've Instantiated  **/
$objReader->setReadFilter($chunkFilter);

/**  Tell the Read Filter, the limits on which rows we want to read this iteration  **/
$chunkFilter->setRows(1,500);
/**  Load only the rows that match our filter from $inputFileName to a PHPExcel Object  **/
$objPHPExcel = $objReader->load($inputFileName);