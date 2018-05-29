<?php
session_start();
$_SESSION["member_id"] = "";
session_destroy();
//header("Location: ./");
//echo 'ggggg';

error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$db = "erp";

$connect = mysqli_connect($host, $user, $pass, $db);

?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="indexStyle.css">
</head>
<body>

	<!-- MENIU -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #005cb3;">

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Nota de comanda
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#" value="Import">Import</a>
	          <a class="dropdown-item" href="#" value="Actualizare">Actualizare</a>
	          <a class="dropdown-item" href="#" value="Vizualizare">Vizualizare</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Plan de invatamant
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Import</a>
	          <a class="dropdown-item" href="#">Actualizare</a>
	          <a class="dropdown-item" href="#">Vizualizare</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Formatii de studii
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Actualizare</a>
	          <a class="dropdown-item" href="#">Vizualizare</a>
	        </div>
	        
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Stat
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Generare</a>
	          <a class="dropdown-item" href="#">Actualizare</a>
	          <a class="dropdown-item" href="#">Vizualizare</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Plata cu ora
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Generare</a>
	          <a class="dropdown-item" href="#">Actualizare</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Rapoarte
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Raport1</a>
	          <a class="dropdown-item" href="#">Raport2</a>
	          <a class="dropdown-item" href="#">Raport3</a>
	        </div>
	      </li>
	    </ul>
	    <!--<span class="navbar-text">
	      <img src="firstpage.png">
	    </span> -->
	  </div>
	</nav>
	<!-- END OF MENIU-->

	<div id="importPlan" class="container modificariContainer">
		<!-- Aici e sectiunea de incarcare a planului de invatamant -->
		<form action="import_plan.php" method="post" enctype="multipart/form-data">
			<p class="titlu">Import Plan de Invatamant</p>
			<div class="form-group row rowDiv">
				<label class="col-sm-2 col-form-label">An universitar</label>
				<select id="anUniv" name="anUniv" class="col-sm-4">
					<option value=""></option>
				<?php 
					$result = mysqli_query($connect, "SELECT Nume FROM an_invatamant");
					while($rows = mysqli_fetch_row($result)) {
				  ?>
					<option><?php echo $rows[0]; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group row rowDiv">
				<label class="col-sm-2 col-form-label">An de studiu</label>
				
				<input type="text" class="form-control col-sm-4" id="inputAnStudiu" placeholder="An de studiu">
				
			</div>
			<div class="form-group row submitDiv">
			    <label for="exampleInputFile class="col-sm-2 col-form-label"">Incarcati planul de invatamant</label>
			    <input type="file" class="form-control-file col-sm-4" id="exampleInputFile" aria-describedby="fileHelp" name="importedFile">
			    <!--<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
			 </div>
			<button type="submit" value="Import Image" class="btn submitBtn">Import</button>
		</form>
		<!-- SFARSIT sectiune de import-->
	</div>

	<!-- Sectiune pentru afisarea planului de invatamant-->
	<div id="showResult"></div>

	<script type="text/javascript">
		$('li > a').click(function (e) {
	        e.preventDefault();
	        var getMenuItem = $(this).text();
	        $('div > a').click(function (e) {
	        	e.preventDefault();
	        	var getAction = $(this).text();
	        	if(getMenuItem.includes("Plan de invatamant") && getAction == "Import") {
	        		document.getElementById('importPlan').style.display = 'block';
	        	} else {
	        		document.getElementById('importPlan').style.display = 'none';
	        	}

	        	// TRIMITEM OPTIUNILE SELECTATE IN BACK-END
	        	$.ajax({
	        		type: 'POST',
	        		url: 'helper.php',
	        		data: { MenuItem: getMenuItem, Action: getAction},
	        		success: function(result){ 
	        			//console.log(result);
	        			$('#showResult').html(result);
	        		}
	        	});
	        });
	        /*$('ul.navbar-nav > li').removeClass('active');
	        $(this).addClass('active');
	        $(".navbar-brand").after(" <ul class=\"navbar-nav\"><li class=\"nav-item active\"> <a class=\"nav-link\" href=\"#\">" + getItem + "<span class=\"sr-only\">(current)<\/span><\/a> <\/li><\/ul> ");
	        $('.navbar-toggler').click();*/
    	});
		
	</script>				
</body>
<footer>

</footer>
</html>
