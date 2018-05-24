<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Classes/PHPExcel.php';

//getting the xls file
$myFile = 'nota.xls';
$excelReader = PHPExcel_IOFactory::createReaderForFile($myFile);
$excelObject = $excelReader->load($myFile);
$myWorksheet = $excelObject->getActiveSheet();
$lastRow = $myWorksheet->getHighestRow();

//db connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";
echo "<br/>";

for ($i=3; $i<=$lastRow-1; $i++)
{
    echo "<br/>";
    echo "-------------------------------------------------------------------------------<br/>";
    echo "Parsing row number ".$i."......";
    echo "<br/>";
    $disciplineId = 0;
    //parsing the disciplines and insert into right tables
    $myCell = $myWorksheet->getCell('A'.$i)->getValue();
    $facultyCell = $myWorksheet->getCell('B'.$i)->getValue();
    $formsCell = $myWorksheet->getCell('C'.$i)->getValue();
    $serieCell = $myWorksheet->getCell('E'.$i)->getValue();
    $explodedSerie = explode('+',$serieCell);

    
    try{
		
		/**********
         * Operations in nota_cmd table
         **********/
        // Search in a tabase to see if we already have this row
		
     /*   $sql = "SELECT Id FROM nota_comanda where disciplina = '".$myCell."'";
        $result = $conn->query($sql);

        // If we found it into the database, skip it else insert it
        if ($result->num_rows > 0) {
            echo "Nota de comanda : ". $myCell . " already into the database";
            echo "<br/>";
            $notaCmdId = mysqli_fetch_assoc($result)["Id"];
        }else{
            $sql = "INSERT INTO nota_comanda (Disciplina,Facultate,Id_forma,Id_plan_invatamant) VALUES ('".$myCell."')";
            if ($conn->query($sql) === TRUE) {
                $disciplineId = mysqli_insert_id($conn);
                echo "Added into the database - discipline: ". $myCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "<br/>";
            }
        }*/
		
        /**********
         * Operations in discipline table
         **********/
        // Search in a tabase to see if we already have this row
		
        $sql = "SELECT Id FROM disciplina where nume = '".$myCell."'";
        $result = $conn->query($sql);

        // If we found it into the database, skip it else insert it
        if ($result->num_rows > 0) {
            echo "Discipline: ". $myCell . " already into the database";
            echo "<br/>";
            $disciplineId = mysqli_fetch_assoc($result)["Id"];
        }else{
            $sql = "INSERT INTO disciplina (Nume) VALUES ('".$myCell."')";
            if ($conn->query($sql) === TRUE) {
                $disciplineId = mysqli_insert_id($conn);
                echo "Added into the database - discipline: ". $myCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "<br/>";
            }
        }
    
        /**********
         * Operations in facultate table
         **********/
        
        //parsing the faculty and insert into right tables

        // Search in a tabase to see if we already have this row
        $facultysql = "SELECT Id FROM facultate where Nume = '".$facultyCell."'";
        $facultyresult = $conn->query($facultysql);
        // If we found it into the database, skip it else insert it
        if ($facultyresult->num_rows > 0) {
            echo "Faculty: ". $facultyCell . " already into the database";
            echo "<br/>";
        }else{
            $facultysql = "INSERT INTO facultate (Nume) VALUES ('".$facultyCell."')";
            if ($conn->query($facultysql) === TRUE) {
                echo "Added into the database - faculty: ". $facultyCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $facultysql . "<br>" . $conn->error;
                echo "<br/>";
            }   
        }
        
         /**********
         * Operations in forme_invatamant table
         **********/
        
        //parsing the forme_invatamant and insert into right tables

        // Search in a tabase to see if we already have this row
        $formssql = "SELECT Id FROM forme_invatamant where Nume = '".$formsCell."'";
        $formsresult = $conn->query($formssql);
        
        // If we found it into the database, skip it else insert it
        if ($formsresult->num_rows > 0) {
            echo "Forme de invatamant: ". $formsCell . " already into the database";
            echo "<br/>";
        }else{
            $formssql = "INSERT INTO forme_invatamant (Nume) VALUES ('".$formsCell."')";
            if ($conn->query($formssql) === TRUE) {
                echo "Added into the database - forme_invatamant: ". $formsCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $formssql . "<br>" . $conn->error;
                echo "<br/>";
            }   
        }
        
        /**********
         * Operations in serie table
         **********/
        
        //parsing the serie and insert into right tables

        // Search in a tabase to see if we already have this row
        if(count($explodedSerie)>0)
        {
            foreach($explodedSerie as $item)
            {

                $seriesql = "SELECT Id FROM serie where Nume = '".$item."'";
                $serieresult = $conn->query($seriesql);

                // If we found it into the database, skip it else insert it
                if ($serieresult->num_rows > 0) {
                    echo "Serie: ". $item . " already into the database";
                    echo "<br/>";
                }else{
                    $seriesql = "INSERT INTO serie (Nume) VALUES ('".$item."')";
                    if ($conn->query($seriesql) === TRUE) {
                        echo "Added into the database - serie: ". $item ;
                        echo "<br/>";
                    } else {
                        echo "Error: " . $seriesql . "<br>" . $conn->error;
                        echo "<br/>";
                    }   
                }
            }
        }
        else{
            echo "Empty series";
                echo "<br/>";
        }
    }catch(Exception $e){
        print_r($e->getMessage());
        $conn->close();
        break;
    }
}