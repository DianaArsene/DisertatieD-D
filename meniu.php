<?php
session_start();
$_SESSION["member_id"] = "";
session_destroy();

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

        <style type="text/css">
            .table .thead-light th {
                color: white;
                background-color: #005cb3;
            }
        </style>
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
                        <a class="nav-link dropdown-toggle externalLink textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Plata cu ora
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="PlataCuOra/index.html">Vizualizare</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle externalLink textMeniu" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formular Fiap
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="FiapProject/index.html">Vizualizare</a>
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
                        while ($rows = mysqli_fetch_row($result)) {
                            ?>
                            <option><?php echo $rows[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group row rowDiv">
                    <label class="col-sm-2 col-form-label">An de studiu</label>

                    <select id="anUniv" name="anUniv" class="col-sm-4">
                        <option value=""></option>
                        <?php
                        $result = mysqli_query($connect, "SELECT nume FROM an_studiu");
                        while ($rows = mysqli_fetch_row($result)) {
                            ?>
                            <option><?php echo $rows[0]; ?></option>
                        <?php } ?>
                    </select>
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

        <!-- Import Nota de comanda -->
        <div id="importNota" class="container modificariContainer">
            <!-- Aici e sectiunea de incarcare a planului de invatamant -->
            <form action="import_plan.php" method="post" enctype="multipart/form-data">
                <p class="titlu">Import Nota de comanda</p>
                <div class="form-group row rowDiv">
                    <label class="col-sm-2 col-form-label">Serie</label>
                    <select id="anUniv" name="anUniv" class="col-sm-4">
                        <option value=""></option>
                        <?php
                        $result = mysqli_query($connect, "SELECT Nume FROM Serie");
                        while ($rows = mysqli_fetch_row($result)) {
                            ?>
                            <option><?php echo $rows[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group row rowDiv">
                    <label class="col-sm-2 col-form-label">An de studiu</label>

                    <select id="anUniv" name="anUniv" class="col-sm-4">
                        <option value=""></option>
                        <?php
                        $result = mysqli_query($connect, "SELECT nume FROM an_studiu");
                        while ($rows = mysqli_fetch_row($result)) {
                            ?>
                            <option><?php echo $rows[0]; ?></option>
                        <?php } ?>
                    </select>
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
        <div id="vizualizarePlan" class="container modificariContainer" style="display:none;">
            <!-- Aici e sectiunea de viualizare a planului de invatamant -->
            <!--<form action="helper.php" method="post" enctype="multipart/form-data">-->
            <div>
                <p class="titlu">Vizualizare Plan de Invatamant</p>
                <div class="form-group row rowDiv">
                    <label class="col-sm-2 col-form-label">An universitar</label>
                    <select id="anUniv2" name="AnUniv" class="col-sm-4">
                        <option>Selecteaza anul universitar</option>
                        <?php
                        $result = mysqli_query($connect, "SELECT Nume FROM an_invatamant");
                        while ($rows = mysqli_fetch_row($result)) {
                            ?>
                            <option values="<?php echo $rows[0]; ?>" ><?php echo $rows[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group row rowDiv">
                    <label class="col-sm-2 col-form-label">An de studiu</label>

                    <input type="text" class="form-control col-sm-4" id="inputAnStudiu2" name="AnInv" placeholder="An de studiu">

                </div>

                <button type="submit" id="viewPlanInv" class="btn submitBtn" name="vizualizarePlan" onclick="test();">Vizualizare</button>
            </div>
            <!-- SFARSIT sectiune de vizualizare-->
        </div>

        <!-- Sectiune pentru afisarea planului de invatamant-->
        <div id="vizualizareNota" class="container modificariContainer" style="display:none;">
            <div>
                <p class="titlu">Vizualizare Nota de Comanda</p>
                <div class="form-group row rowDiv">
                    <label class="col-sm-2 col-form-label">Serie</label>
                    <select id="serie" name="serie" class="col-sm-4">
                        <option>Selecteaza seria</option>
                        <?php
                        $result = mysqli_query($connect, "SELECT Nume FROM Serie");
                        while ($rows = mysqli_fetch_row($result)) {
                            ?>
                            <option values="<?php echo $rows[0]; ?>" ><?php echo $rows[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group row rowDiv">
                    <label class="col-sm-2 col-form-label">An de studiu</label>

                    <input type="text" class="form-control col-sm-4" id="inputAnStudiuNota2" name="AnInv" placeholder="An de studiu">

                </div>

                <button type="submit" id="viewNotaCmd" class="btn submitBtn" name="vizualizarePlan">Vizualizare</button>
            </div>
            <!-- SFARSIT sectiune de vizualizare-->
        </div>

        <div id="showResult" style="display:none;"></div>

        <script type="text/javascript">
            /*function test() {
             var getMenuItem = 'Plan de invatamant';
             var getAction = 'Vizualizare';
             var selectNode = document.getElementById('anUniv2');
             var getYear = selectNode.options[selectNode.selectedIndex].text;
             var getYearInv = document.getElementById('inputAnStudiu2').value;
             console.log('getYear: ', getYear);
             if(getYear == "Selecteaza anul universitar")
             alert("Nu ai selectat anul universitar!");
             else {
             $.ajax({
             type: 'POST',
             url: 'helper.php',
             data: { MenuItem: getMenuItem, Action: getAction, AnUniv: getYear, AnInv: getYearInv},
             success: function(result){ 
             //console.log(result);
             $('#showResult').html(result);
             }
             });
             }
             }*/
	$('li > a').click(function (e) {
		if($(this).hasClass("externalLink")){
                    // Do nothing
                }
                else{
                    e.preventDefault();
                    var getMenuItem = $(this).text();
                    $('div > a').click(function (e) {
                            e.preventDefault();
                            var getAction = $(this).text();
                            if(getMenuItem.includes("Plan de invatamant") && getAction == "Import") {
                                    document.getElementById('importPlan').style.display = 'block';
                                    document.getElementById('vizualizareNota').style.display = 'none';
                                    document.getElementById('vizualizarePlan').style.display = 'none';
                                    document.getElementById('showResult').style.display = 'none';
                                    document.getElementById('importNota').style.display = 'none';

                            } else if(getMenuItem.includes("Plan de invatamant") && getAction == "Vizualizare") {
                                    document.getElementById('importPlan').style.display = 'none';
                                    document.getElementById('vizualizareNota').style.display = 'none';
                                    document.getElementById('vizualizarePlan').style.display = 'block';
                                    document.getElementById('showResult').style.display = 'none';
                                    document.getElementById('importNota').style.display = 'none';
                                    $('#viewPlanInv').on('click', function(event){
                                            console.log('Plan de invatamant');
                                            var selectNode = document.getElementById('anUniv2');
                                            var getYear = selectNode.options[selectNode.selectedIndex].text;
                                            var getYearInv = document.getElementById('inputAnStudiu2').value;
                                            console.log('getYear: ', getYear);
                                            if(getYear == "Selecteaza anul universitar")
                                                    alert("Nu ai selectat anul universitar!");
                                            else {
                                                    $.ajax({
                                                            type: 'POST',
                                                            url: 'helper.php',
                                                            data: { MenuItem: getMenuItem, Action: getAction, AnUniv: getYear, AnInv: getYearInv},
                                                            success: function(result){ 
                                                                            //console.log(result);
                                                                            document.getElementById('showResult').style.display = 'block';
                                                                            $('#showResult').html(result);
                                                                    }
                                                            });
                                            }

                                    });
                            } else if(getMenuItem.includes("Nota de comanda") && getAction == "Import") {
                                    document.getElementById('importNota').style.display = 'block';
                                    document.getElementById('importPlan').style.display = 'none';
                                    document.getElementById('vizualizareNota').style.display = 'none';
                                    document.getElementById('vizualizarePlan').style.display = 'none';
                                    document.getElementById('showResult').style.display = 'none';

                            } else if(getMenuItem.includes("Nota de comanda") && getAction == "Vizualizare") {
                                    document.getElementById('importPlan').style.display = 'none';
                                    document.getElementById('importNota').style.display = 'none';
                                    document.getElementById('vizualizarePlan').style.display = 'none';
                                    document.getElementById('vizualizareNota').style.display = 'block';
                                    document.getElementById('showResult').style.display = 'none';
                                    $('#viewNotaCmd').on('click', function(event){
                                            console.log('Nota de Comanda');
                                            var selectNode = document.getElementById('serie');
                                            var getSerie = selectNode.options[selectNode.selectedIndex].text;
                                            var getYearInv = document.getElementById('inputAnStudiuNota2').value;
                                            console.log('getSerie: ', getSerie);
                                            if(getSerie == "Selecteaza anul universitar")
                                                    alert("Nu ai selectat anul universitar!");
                                            else {
                                                    console.log('actiune, serie, an ' + getAction + ' ' + getSerie + ' ' + getYearInv);
                                                    $.ajax({
                                                            type: 'POST',
                                                            url: 'helper.php',
                                                            data: { MenuItem: getMenuItem, Action: getAction, Serie: getSerie, AnInv: getYearInv},
                                                            success: function(result){ 
                                                                            //console.log(result);
                                                                            document.getElementById('showResult').style.display = 'block';
                                                                            $('#showResult').html(result);
                                                                    }
                                                            });
                                            }

                                    });
                            }

                    });
                }

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
