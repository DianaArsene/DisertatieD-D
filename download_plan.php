<?php

error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$db = "erp";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

$output = '';
if(isset($_POST['export']))
{
 $result = mysql_query("SELECT * FROM plan_invatamant");
 if(mysql_num_rows($result) > 0)
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
  while($rows = mysql_fetch_array($result))
  { //An universitar
  	$anUniv = $rows["Id_an_invatamant"];
  	$result3 = mysql_query("SELECT Nume FROM an_invatamant WHERE Id = '$anUniv' ");
  	$rows3 = mysql_fetch_array($result3);

  	//Facultate
  	$idFacultate = $rows["Id_facultate"];
  	$result2 = mysql_query("SELECT Nume FROM facultate WHERE Id = '$idFacultate' ");
  	$rows2 = mysql_fetch_array($result2);

  	//Disciplina
  	$idDisciplina = $rows["Id_disciplina"];
  	$result4 = mysql_query("SELECT Nume FROM disciplina WHERE Id = '$idDisciplina' ");
  	$rows4 = mysql_fetch_array($result4);

   $output .= '
    <tr>  
		<td>'.$rows3["Nume"].'</td>  
		<td>'.$rows["An_studiu"].'</td>  
		<td>'.$rows2["Nume"].'</td>  
		<td>'.$rows["Cod"].'</td>  
		<td>'.$rows["Tip"].'</td>
		<td>'.$rows4["Nume"].'</td>
		<td>'.$rows["Semestru"].'</td>
		<td>'.$rows["Curs"].'</td>
		<td>'.$rows["Seminar"].'</td>
		<td>'.$rows["Laborator"].'</td>
		<td>'.$rows["Proiect"].'</td>
		<td>'.$rows["Puncte_credit"].'</td>
		<td>'.$rows["Evaluare"].'</td>
		<td>'.$rows["Nr_total_ore"].'</td>
		<td>'.$rows["Ore_preg_indiv"].'</td>
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