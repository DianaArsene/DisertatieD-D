<?php
session_start();
$_SESSION["member_id"] = "";
session_destroy();
//header("Location: ./");
//echo 'ggggg';
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
	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #005cb3;">

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
	<div id="importPlan" class="container modificariContainer">
		<form>
			<p class="titlu">Import Plan de Invatamant</p>
			<div class="form-group row rowDiv">
				<label for="inputEmail3" class="col-sm-2 col-form-label">An universitar</label>
				<select id="anUniv" name="anUniv" class="col-sm-4">
					<option value=""></option>
					<option value="2017/2018">2017/2018</option>
					<option value="2018/2019">2018/2019</option>
					<option value="2019/2020">2019/2020</option>
				</select>
			</div>
			<div class="form-group row rowDiv">
				<label for="inputEmail3" class="col-sm-2 col-form-label">An de studiu</label>
				
				<input type="email" class="form-control col-sm-4" id="inputEmail3" placeholder="An de studiu">
				
			</div>
			<div class="form-group row submitDiv">
			    <label for="exampleInputFile class="col-sm-2 col-form-label"">Incarcati planul de invatamant</label>
			    <input type="file" class="form-control-file col-sm-4" id="exampleInputFile" aria-describedby="fileHelp">
			    <!--<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> -->
			 </div>
			<button type="submit" class="btn submitBtn">Submit</button>
		</form>
	</div>

	<script type="text/javascript">
		$('li > a').click(function (e) {
	        e.preventDefault();
	        var getMenuItem = $(this).text();
	        $('div > a').click(function (e) {
	        	e.preventDefault();
	        	var getAction = $(this).text();
	        	console.log('getMenuItem: ', getMenuItem);
	        	console.log('getAction: ', getAction);
	        	if(getMenuItem.includes("Plan de invatamant") && getAction == "Import") {
	        		console.log('e aici!!!!');
	        		document.getElementById('importPlan').style.display = 'block';
	        	}

	        	// TRIMITEM OPTIUNILE SELECTATE IN BACK-END
	        	$.ajax({
	        		type: 'POST',
	        		url: 'helper.php',
	        		data: { MenuItem: getMenuItem, Action: getAction},
	        		success: function(result){ 
	        			console.log('e ok!', result);
	        			//$('#showResult').html(result);
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
