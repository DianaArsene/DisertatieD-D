<?php

	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "erp";

	$connect = mysqli_connect($host, $user, $pass, $db);

	$menuItem = $_POST['MenuItem'];
	$action = $_POST['Action'];
	
	if (strpos($menuItem, 'Plan de invatamant') !== false && strpos($action, 'Vizualizare') !== false) {
    	//echo 'e ok';
    	?>

    		<table class="table">
    		  <thead class="thead-light">
    		    <tr>
    		      <th scope="col">An Universitar</th>
    		      <th scope="col">An Studiu</th>
    		      <th scope="col">Facultate</th>
    		      <th scope="col">Cod</th>
    		      <th scope="col">Tip</th>
    		      <th scope="col">Disciplina</th>
    		      <th scope="col">Semestru</th>
    		      <th scope="col">Curs</th>
    		      <th scope="col">Seminar</th>
    		      <th scope="col">Laborator</th>
    		      <th scope="col">Proiect</th>
    		      <th scope="col">Puncte Credit</th>
    		      <th scope="col">Evaluare</th>
    		      <th scope="col">Nr total ore</th>
    		      <th scope="col">Nr ore pregatire individuala</th>

    		    </tr>
    		  </thead>
    		  <tbody class="tableColor">
    		  <?php 
    		  	$result = mysqli_query($connect, "SELECT * FROM plan_invatamant");
    		  	
    		  	while($rows = mysqli_fetch_row($result)) {
	    		  ?>
	    		    <tr>
	    		      <th scope="row"><?php
	    		      		$anUniv = $rows[1];
	    		      		$result3 = mysqli_query($connect, "SELECT Nume FROM an_invatamant WHERE Id = '$anUniv' ");
	    		      		$rows3 = mysqli_fetch_row($result3);
	    		      		echo $rows3[0];    ?></th>
	    		      <td><?php echo $rows[2];?></td>
	    		      <td><?php
	    		      		$idFacultate = $rows[3];
	    		      		$result2 = mysqli_query($connect, "SELECT Nume FROM facultate WHERE Id = '$idFacultate' ");
	    		      		$rows2 = mysqli_fetch_row($result2);
	    		      echo $rows2[0];?></td>
	    		      <td><?php echo $rows[4];?></td>
	    		      <td><?php echo $rows[5];?></td>
	    		      <td><?php
	    		      		$idDisciplina = $rows[6];
	    		      		$result4 = mysqli_query($connect, "SELECT Nume FROM disciplina WHERE Id = '$idDisciplina' ");
	    		      		$rows4 = mysqli_fetch_row($result4);
	    		      		echo $rows4[0];    ?></td>
	    		      <td><?php echo $rows[7];?></td>
	    		      <td><?php echo $rows[8];?></td>
	    		      <td><?php echo $rows[9];?></td>
	    		      <td><?php echo $rows[10];?></td>
	    		      <td><?php echo $rows[11];?></td>
	    		      <td><?php echo $rows[12];?></td>
	    		      <td><?php echo $rows[13];?></td>
	    		      <td><?php echo $rows[14];?></td>
	    		      <td><?php echo $rows[15];?></td>

	    		    </tr>
    		   
	    		  <?php }?>
    		  </tbody>
    		</table>
    	<form action="download_plan.php" method="post">
    		<input type="submit" name="export" class="btn downloadBtn" value="Export" />
		</form>
    	<?php
	} else if(strpos($menuItem, 'Nota') !== false && strpos($action, 'Vizualizare') !== false) {

	?>
		    <table class="table">
    		  <thead class="thead-light">
    		    <tr>
    		      <th scope="col">Disciplina</th>
    		      <th scope="col">Facultate</th>
    		      <th scope="col">Forma inv</th>
    		      <th scope="col">An</th>
    		      <th scope="col">Serie</th>
    		      <th scope="col">Nr. st</th>
    		      <th scope="col">Nr. gr</th>
    		      <th scope="col">Nr. sgr</th>
    		      <th scope="col">Sem</th>
    		      <th scope="col">C</th>
    		      <th scope="col">S</th>
    		      <th scope="col">L</th>
    		      <th scope="col">P</th>
    		      <th scope="col">FV</th>
    		      <th scope="col">Nr. ore</th>

    		    </tr>
    		  </thead>
    		  <tbody class="tableColor">
    		  <?php 
    		  	$result = mysqli_query($connect, "SELECT * FROM nota_comanda");
    		  	
    		  	while($rows = mysqli_fetch_row($result)) {
	    		  ?>
	    		    <tr>
	    		      <th scope="row"><?php
	    		      		$idDisc = $rows[1];
	    		      		$result1 = mysqli_query($connect, "SELECT Nume FROM disciplina WHERE Id = '$idDisc' ");
	    		      		$rows1 = mysqli_fetch_row($result1);
	    		      		echo $rows1[0];    ?></th>
	    		      <td><?php $idFac = $rows[2];
	    		      		$result2 = mysqli_query($connect, "SELECT Nume FROM facultate WHERE Id = '$idFac' ");
	    		      		$rows2 = mysqli_fetch_row($result2);
	    		      echo $rows2[0];?></td>
	    		      <td><?php $idForma = $rows[3];
	    		      		$result3 = mysqli_query($connect, "SELECT Nume FROM forme_invatamant WHERE Id = '$idForma' ");
	    		      		$rows3 = mysqli_fetch_row($result3);
	    		      echo $rows3[0]; ?></td>
	    		      <td><?php echo $rows[4];?></td>
	    		      <td><?php $idSerie= $rows[5];
	    		      		$result4 = mysqli_query($connect, "SELECT Nume FROM serie WHERE Id = '$idSerie' ");
	    		      		$rows4 = mysqli_fetch_row($result4);
	    		      echo $rows4[0];?></td>
	    		      <td><?php	echo $rows[6];    ?></td>
	    		      <td><?php echo $rows[7];?></td>
	    		      <td><?php echo $rows[8];?></td>
	    		      <td><?php echo $rows[9];?></td>
	    		      <td><?php echo $rows[10];?></td>
	    		      <td><?php echo $rows[11];?></td>
	    		      <td><?php echo $rows[12];?></td>
	    		      <td><?php echo $rows[13];?></td>
	    		      <td><?php echo $rows[14];?></td>
	    		      <td><?php echo $rows[15];?></td>

	    		    </tr>
    		   
	    		  <?php }?>
    		  </tbody>
    		</table>
    	<form action="download_plan.php" method="post">
    		<input type="submit" name="exportNC" class="btn downloadBtn" value="Export" />
		</form>
	<?php
	}	
	//echo 'menuItem ' . $menuItem . ' action ' . $action;
?>
