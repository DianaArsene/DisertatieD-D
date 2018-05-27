<?php

	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "erp";

	mysql_connect($host, $user, $pass);
	mysql_select_db($db);

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
    		  <tbody>
    		  <?php 
    		  	$result = mysql_query("SELECT * FROM plan_invatamant");
    		  	
    		  	while($rows = mysql_fetch_array($result)) {
	    		  ?>
	    		    <tr>
	    		      <th scope="row"><?php
	    		      		$anUniv = $rows["Id_an_invatamant"];
	    		      		$result3 = mysql_query("SELECT Nume FROM an_invatamant WHERE Id = '$anUniv' ");
	    		      		$rows3 = mysql_fetch_array($result3);
	    		      		echo $rows3["Nume"];    ?></th>
	    		      <td><?php echo $rows["An_studiu"];?></td>
	    		      <td><?php
	    		      		$idFacultate = $rows["Id_facultate"];
	    		      		$result2 = mysql_query("SELECT Nume FROM facultate WHERE Id = '$idFacultate' ");
	    		      		$rows2 = mysql_fetch_array($result2);
	    		      echo $rows2["Nume"];?></td>
	    		      <td><?php echo $rows["Cod"];?></td>
	    		      <td><?php echo $rows["Tip"];?></td>
	    		      <td><?php echo $rows["Id_disciplina"];?></td>
	    		      <td><?php echo $rows["Semestru"];?></td>
	    		      <td><?php echo $rows["Curs"];?></td>
	    		      <td><?php echo $rows["Seminar"];?></td>
	    		      <td><?php echo $rows["Laborator"];?></td>
	    		      <td><?php echo $rows["Proiect"];?></td>
	    		      <td><?php echo $rows["Puncte_credit"];?></td>
	    		      <td><?php echo $rows["Evaluare"];?></td>
	    		      <td><?php echo $rows["Nr_total_ore"];?></td>
	    		      <td><?php echo $rows["Ore_preg_indiv"];?></td>

	    		    </tr>
    		   
	    		  <?php }?>
    		  </tbody>
    		</table>
    	<?php
	}	
	//echo 'menuItem ' . $menuItem . ' action ' . $action;
?>