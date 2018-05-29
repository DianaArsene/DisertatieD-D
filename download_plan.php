<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$db = "erp";


$connect = mysqli_connect($host, $user, $pass, $db);

$output = '';
if(isset($_POST['export']))
{
 $result = mysqli_query($connect, "SELECT * FROM plan_invatamant");
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
						<th>An Universitar</th>
						<th>An Studiu</th>
						<th>Facultate</th>
						<th>Cod</th>
						<th>Tip</th>
						<th>Disciplina</th>
						<th>Semestru</th>
						<th>Curs</th>
						<th>Seminar</th>
						<th>Laborator</th>
						<th>Proiect</th>
						<th>Puncte Credit</th>
						<th>Evaluare</th>
						<th>Nr total ore</th>
						<th>Nr ore pregatire individuala</th>  
                    </tr>
  ';
  while($rows = mysqli_fetch_row($result))
  { //An universitar
  	$anUniv = $rows[1];
  	$result3 = mysqli_query($connect, "SELECT Nume FROM an_invatamant WHERE Id = '$anUniv' ");
  	$rows3 = mysqli_fetch_row($result3);

  	//Facultate
  	$idFacultate = $rows[3];
  	$result2 = mysqli_query($connect, "SELECT Nume FROM facultate WHERE Id = '$idFacultate' ");
  	$rows2 = mysqli_fetch_row($result2);

  	//Disciplina
  	$idDisciplina = $rows[6];
  	$result4 = mysqli_query($connect, "SELECT Nume FROM disciplina WHERE Id = '$idDisciplina' ");
  	$rows4 = mysqli_fetch_row($result4);

   $output .= '
    <tr>  
		<td>'.$rows3[0].'</td>  
		<td>'.$rows[2].'</td>  
		<td>'.$rows2[0].'</td>  
		<td>'.$rows[4].'</td>  
		<td>'.$rows[5].'</td>
		<td>'.$rows4[0].'</td>
		<td>'.$rows[7].'</td>
		<td>'.$rows[8].'</td>
		<td>'.$rows[9].'</td>
		<td>'.$rows[10].'</td>
		<td>'.$rows[11].'</td>
		<td>'.$rows[12].'</td>
		<td>'.$rows[13].'</td>
		<td>'.$rows[14].'</td>
		<td>'.$rows[15].'</td>
    </tr>
   ';
  }

  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Plan_inv.xls');
  echo $output;
 }
}
?>
