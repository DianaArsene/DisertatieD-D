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
if(isset($_POST['structura_an'])){
    // Semestru
    // If semestru == 3 => trebuie sa facem 2 insert-uri- unul pt sem I si al 2-lea pt sem II
    
    $sql = "INSERT INTO structura_an "
            . "(Id_an_studiu,Id_an_invatamant,Start,End,Activitate,Semestru) "
            . "VALUES "
            . "(".$_POST["an_studiu"].",".$_POST["an_invatamant"].",'".$_POST["start"]."','".$_POST["end"]."','".$_POST["activitate"]."','".$_POST["semestru"]."')";
    echo $sql;
    $result=mysqli_query($connect,$sql);
    print_r($result);
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="utile/jquery-ui.css">
    <script src="utile/jquery-1.12.4.js"></script>
    <script src="utile/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script>
        $(function(){
             $("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' });
             $("#datepicker2").datepicker({ dateFormat: 'yy-mm-dd' });
        });            
    </script>
	<link rel="stylesheet" type="text/css" href="indexStyle.css">
</head>
<body>
	<div id="importStructuraAn" class="container modificariContainer">
		<!-- Aici e sectiunea de incarcare a structurii de invatamant admin -->
		<form  method="post">
			<p class="titlu" style="text-align:center;">STRUCTURA ANULUI UNIVERSITAR  
            <select id="StranUniv" name="an_invatamant" class="col-sm-4">
					<option value=""></option>
				<?php 
					$result = mysqli_query($connect, "SELECT Id,Nume FROM an_invatamant");
					while($rows = mysqli_fetch_row($result)) {
				  ?>
					<option value="<?php echo $rows[0]?>"><?php echo $rows[1]; ?></option>
					<?php } ?>
				</select>
            </br>PENTRU INVATAMANTUL UNIVERSITAR DE LICENTA, MASTERAT</p>
			<div class="form-group row rowDiv">
				<label class="col-sm-2 col-form-label">Semestrul</label>
				<select id="anUniv" name="semestru" class="col-sm-4">
					<option value="" style="text-align:center;">Selectati semestrul</option>
                    <option value="3">Semestrul I + Semestrul II</option>
                    <option value="1">Semestrul I</option>
                    <option value="2">Semestrul II</option>
				</select>
			</div>
			<div class="form-group row rowDiv">
				<label class="col-sm-2 col-form-label">Forma de invatamant si anul de studiu</label>				
                                <select id="anUniv" name="an_studiu" class="col-sm-4" style="width:230px;">
					<option value="" style="text-align:center;">Selectati forma de invatamant</option>
				<?php 
					$result = mysqli_query($connect, "SELECT Id,Nume FROM an_studiu");
					while($rows = mysqli_fetch_row($result)) {
				  ?>
					<option value="<?php echo $rows[0]?>"><?php echo $rows[1]; ?></option>
					<?php } ?>
				</select>
			</div>
            <div class="form-group row rowDiv">
				<label class="col-sm-2 col-form-label">Perioada de inceput</label>	
                <input type="text" id="datepicker1" name="start"></input>			
                                
			</div>
             <div class="form-group row rowDiv">
				<label class="col-sm-2 col-form-label">Perioada de sfarsit</label>			
                <input type="text" id="datepicker2" name="end"></input>		
                                
			</div>
             <div class="form-group row rowDiv">
				<label class="col-sm-2 col-form-label">Activitatea</label>				
                <input style="width:300px;" name="activitate"></input>
			</div>
            
			<button type="submit" value="Import" class="btn submitBtn btn-primary" name="structura_an" id="structura_an">Salvare</button>
		</form>
		<!-- SFARSIT sectiune de importStructuraAnUNiv-->
	</div>
   
</body>
<footer>
</footer>
</html>