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

for ($i=2; $i<=$lastRow-1; $i++)
{
    echo "<br/>";
    echo "-------------------------------------------------------------------------------<br/>";
    echo "Parsing row number ".$i."......";
    echo "<br/>";
    $disciplineId = 0;
    //parsing the disciplines and insert into right tables
    $disciplinaCell = $myWorksheet->getCell('A'.$i)->getValue();
    $facultyCell = $myWorksheet->getCell('B'.$i)->getValue();
    $formsCell = $myWorksheet->getCell('C'.$i)->getValue();
    $anCell = $myWorksheet->getCell('D'.$i)->getValue();
    $serieCell = $myWorksheet->getCell('E'.$i)->getValue();
    $nr_stCell = $myWorksheet->getCell('F'.$i)->getValue();
    $nr_grCell = $myWorksheet->getCell('G'.$i)->getValue();
    $nr_sgrCell = $myWorksheet->getCell('H'.$i)->getValue();
    $semestruCell = $myWorksheet->getCell('I'.$i)->getValue();
    $cursCell = $myWorksheet->getCell('J'.$i)->getValue();
    $seminarCell = $myWorksheet->getCell('K'.$i)->getValue();
    $laboratorCell = $myWorksheet->getCell('L'.$i)->getValue();
    $proiectCell = $myWorksheet->getCell('M'.$i)->getValue();
    $evaluareCell = $myWorksheet->getCell('N'.$i)->getValue();
    $nr_oreCell = $myWorksheet->getCell('O'.$i)->getValue();
    $explodedSerie = explode('+',$serieCell);
   
    try{
		
		/**********
         * Operations in nota_comanda table
         **********/
        // Search in a tabase to see if we already have this row
        
        $sql = "SELECT Id from disciplina where Nume =  '".$disciplinaCell."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Discipline: ". $disciplinaCell . " already into the database";
            echo "<br/>";
            $sqldiscip = mysqli_fetch_assoc($result)["Id"];     
        }
        else{
            $sqldisciplina = "INSERT INTO disciplina (Nume) VALUES ('".$disciplinaCell."')";
            if ($conn->query($sqldisciplina) === TRUE) {
                $sql = mysqli_insert_id($conn);
                echo "Added into the database - discipline: ". $disciplinaCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $sqldisciplina . "<br>" . $conn->error;
                echo "<br/>";
            }
            $sql = "SELECT Id from disciplina where Nume =  '".$disciplinaCell."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "Discipline: ". $disciplinaCell . " already into the database";
                echo "<br/>";
                $sqldiscip = mysqli_fetch_assoc($result)["Id"];                 
            }
        }


        $sql = "SELECT Id from facultate where Nume =  '".$facultyCell."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Facultate: ". $facultyCell . " already into the database";
            echo "<br/>";
            $sqlfaculty = mysqli_fetch_assoc($result)["Id"];     
        }
        else{
            $sqlfacultate = "INSERT INTO facultate (Nume) VALUES ('".$facultyCell."')";
            if ($conn->query($sqlfacultate) === TRUE) {
                $sql = mysqli_insert_id($conn);
                echo "Added into the database - facultate: ". $facultyCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $sqlfacultate . "<br>" . $conn->error;
                echo "<br/>";
            }
            $sql = "SELECT Id from facultate where Nume =  '".$facultyCell."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "Facultate: ". $facultyCell . " already into the database";
                echo "<br/>";
                $sqlfaculty = mysqli_fetch_assoc($result)["Id"];                 
            }
        }

        $sql = "SELECT Id from forme_invatamant where Nume =  '".$formsCell."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Forme_inv: ". $formsCell . " already into the database";
            echo "<br/>";
            $sqlforms = mysqli_fetch_assoc($result)["Id"];     
        }
        else{
            $sqlforme = "INSERT INTO forme_invatamant (Nume) VALUES ('".$formsCell."')";
            if ($conn->query($sqlforme) === TRUE) {
                $sql = mysqli_insert_id($conn);
                echo "Added into the database - facultate: ". $formsCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $sqlformee . "<br>" . $conn->error;
                echo "<br/>";
            }
            $sql = "SELECT Id from forme_invatamant where Nume =  '".$formsCell."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "Forme_inv: ". $formsCell . " already into the database";
                echo "<br/>";
                $sqlforms = mysqli_fetch_assoc($result)["Id"];                 
            }
        }

        $sql = "SELECT Id from serie where Nume =  '".$serieCell."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Serie: ". $serieCell . " already into the database";
            echo "<br/>";
            $sqlseries = mysqli_fetch_assoc($result)["Id"];     
        }
        else{
            $sqlserie = "INSERT INTO serie (Nume) VALUES ('".$serieCell."')";
            if ($conn->query($sqlserie) === TRUE) {
                $sql = mysqli_insert_id($conn);
                echo "Added into the database - serie: ". $serieCell ;
                echo "<br/>";
            } else {
                echo "Error: " . $sqlserie . "<br>" . $conn->error;
                echo "<br/>";
            }
            $sql = "SELECT Id from serie where Nume =  '".$serieCell."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "Serie: ". $serieCell . " already into the database";
                echo "<br/>";
                $sqlseries = mysqli_fetch_assoc($result)["Id"];                 
            }
        }


        
        $sql = "INSERT INTO nota_comanda (Id_disciplina, Id_facultate, Id_forma, an_studiu,Id_serie,Nr_st, Nr_gr, Nr_sgr, Semestru, Curs, Seminar, Laborator, Proiect, Evaluare, Nr_ore) VALUES ('".$sqldiscip."','".$sqlfaculty."','".$sqlforms."','".$anCell."','".$sqlseries."','".$nr_stCell."','".$nr_grCell."','".$nr_sgrCell."','".$semestruCell."','".$cursCell."','".$seminarCell."','".$laboratorCell."','".$proiectCell."','".$evaluareCell."','".$nr_oreCell."')";
        if ($conn->query($sql) === TRUE) {
            echo "Added into the database - nota_cmd: ". $sql ;
            echo "<br/>";
        }
      
        
      
    }catch(Exception $e){
        print_r($e->getMessage());
        $conn->close();
        break;
    }
}