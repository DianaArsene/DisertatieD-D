<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Classes/PHPExcel.php';

//getting the xls file
$myFile = 'plan_inv.xls';
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
    echo $lastRow;
    echo "<br/>";
    echo "-------------------------------------------------------------------------------<br/>";
    echo "Parsing row number ".$i."......";
    echo "<br/>";
    $disciplineId = 0;
    //parsing the disciplines and insert into right tables
    $id_an_inv= 2;
    $an_studiu = "I";
    $id_facultate = 1;
    $cod = $myWorksheet->getCell('A'.$i)->getValue();
    $tip = $myWorksheet->getCell('B'.$i)->getValue();
    $disciplina = $myWorksheet->getCell('C'.$i)->getValue();
    $semestru = $myWorksheet->getCell('D'.$i)->getValue();
    $curs = $myWorksheet->getCell('E'.$i)->getValue();
    $seminar = $myWorksheet->getCell('F'.$i)->getValue();
    $laborator = $myWorksheet->getCell('G'.$i)->getValue();
    $proiect = $myWorksheet->getCell('H'.$i)->getValue();
    $puncte_credit = $myWorksheet->getCell('I'.$i)->getValue();
    $evaluare = $myWorksheet->getCell('J'.$i)->getValue();
    $nr_total_ore = $myWorksheet->getCell('K'.$i)->getValue();
    $ore_preg_indiv = $myWorksheet->getCell('L'.$i)->getValue();

    
    try{
			
        /**********
         * Operations in discipline table
         **********/
        // Search in a tabase to see if we already have this row
        $row = [ 0 => $cod,
                 1 => $tip,
                 2 => $disciplina,
                 3 => $semestru,
                 4 => $curs,
                 5 => $seminar,
                 6 => $laborator,
                 7 => $proiect,
                 8 => $puncte_credit,
                 9 => $evaluare,
                 10 => $nr_total_ore,
                 11 => $ore_preg_indiv
            ];

            if(!empty($row[2])){
                $id_disciplina = "SELECT Id from disciplina where Nume =  '".$row[2]."'";
                $result = $conn->query($id_disciplina);
                if ($result->num_rows > 0) {
                    echo "Discipline: ". $row[2] . " already into the database";
                    echo "<br/>";
                    $disciplineId = mysqli_fetch_assoc($result)["Id"];                 
                }
                else{
                    $sql = "INSERT INTO disciplina (Nume) VALUES ('".$row[2]."')";
                    if ($conn->query($sql) === TRUE) {
                        $disciplineId = mysqli_insert_id($conn);
                        echo "Added into the database - discipline: ". $row[2] ;
                        echo "<br/>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        echo "<br/>";
                    }
                    $id_disciplina = "SELECT Id from disciplina where Nume =  '".$row[2]."'";
                    $result = $conn->query($id_disciplina);
                    if ($result->num_rows > 0) {
                        echo "Discipline: ". $row[2] . " already into the database";
                        echo "<br/>";
                        $disciplineId = mysqli_fetch_assoc($result)["Id"];                 
                    }
                }
            }

            $sql = "INSERT INTO plan_invatamant (Id_an_invatamant,An_studiu,Id_facultate,Cod,Tip,Id_disciplina,Semestru,Curs,Seminar,Laborator,Proiect,Puncte_credit,Evaluare,Nr_total_ore,Ore_preg_indiv) VALUES ('".$id_an_inv."','".$an_studiu."','".$id_facultate."','".$cod."','".$tip."','".$disciplineId."','".$semestru."','".$curs."','".$seminar."','".$laborator."','".$proiect."','".$puncte_credit."','".$evaluare."','".$nr_total_ore."','".$ore_preg_indiv."')";
            if ($conn->query($sql) === TRUE) {
                echo "Added into the database - plan_inv: ". $sql ;
                echo "<br/>";
            }
    }catch(Exception $e){
        print_r($e->getMessage());
        $conn->close();
        break;
    }
}