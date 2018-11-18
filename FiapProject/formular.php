<html>
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="utils/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="utils/jquery-3.3.1.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="utils/bootstrap.min.css"></script> 
<script type="text/javascript">var existingData = <?php  echo(!empty($values) ? json_encode($values): 'undefined'); ?>;</script>
<meta charset="utf-8">
<script src="script.js" type="text/javascript"></script> 
<link rel="stylesheet" type="text/css" href="indexStyle.css">
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>

<body>
 <form action="exportExcel.php" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="facultate">Facultatea</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="facultate" name="facultate" placeholder="Introduceti facultatea" >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="departament">Departamentul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="departament" name="departament" placeholder="Introduceti departamentul">
    </div>
  </div>
  </br></br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="grad">Gradul didactic</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="grad" name="grad" placeholder="Introduceti gradul didactic">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="nume">NUMELE si Prenumele</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nume" name="nume" placeholder="Introduceti NUMELE si Prenumele">
    </div>
  </div>
  </br></br>
    <div class="form-group">
    <label class="col-sm-12" id="titlu">Continutul activitatilor didactice din Fisa Individuala Anuala a Postului (FIAP)</label>
  </div>
<div class="container">
    <table class="table">
		<tr>
		    <th class="tlight" rowspan="2" style="text-align:center;">Nr. crt.</th>
			<th class="tlight" rowspan="2" style="text-align:center;">Activitati</th>
			<th class="tlight" rowspan="2" style="text-align:center;">Continut</th>
		    <th class="tlight" rowspan="2" style="text-align:center;">Norma fizica saptamanala</th>
			<th class="tlight" colspan="2" style="text-align:center;">Echivalent</th>
			<th class="lastcollight" rowspan="3" style="text-align:center;">Modalitate normare</th>
		</tr>
		<tr class="tlight">
		    <th colspan="2"><input type='text' class="tlight" style="border:none;width:100px; text-align:center; color:red;" id="rez_1720" name="rez_1720" readonly></input></th>
		</tr>
		<tr>
		    <th class="tlight" colspan="4">1. Activitati didactice</th>
			<th class="tlight">&nbsp;</th>
			<th class="tlight">&nbsp;</th>
		</tr>
		<tr>
		    <th class="tlight" colspan="3">1.1 Activitati normate in statul de functiuni</th>
			<th class="tlight"><input type='text' class="tlight" style="border:none;width:100px; text-align:center;" id="d14" name="d14" readonly></input></th>
			<th class="tlight">&nbsp;</th>
			<th class="tlight" style="text-align:center;"><input type='text' class="tlight" style="border:none;width:30px; text-align:center; color:red;" id="f14" name="f14" readonly></input></th> 
			<th class="lastcollight">valoarea din incarcarea normelor</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Curs RO</td>
			<td>Predare curs</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d15" name="d15"></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e15" name="e15" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight"> *2 LB-RO,</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Curs LB-Str</td>
			<td>Predare curs limba straina</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d16" name="d16" ></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e16" name="e16" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight"> *2,5 LB-Str</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Seminar</td>
			<td>Aplicatii de curs</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d17" name="d17"></input ></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e17" name="e17" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight" rowspan="6"> *1 LB-RO, *1.25 LB-Str</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Seminar LB-Str</td>
			<td>Aplicatii de curs LB-Str</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d18" name="d18"></input></td>
			<td style="text-align:center;" ><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e18" name="e18" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Laborator</td>
			<td>Aplicatii de laborator</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d19" name="d19"></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e19" name="e19" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>6</td>
			<td>Laborator LB-Str</td>
			<td>Aplicatii de laborator LB-Str</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d20" name="d20" ></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e20" name="e20" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>7</td>
			<td>Proiect</td>
			<td>Indrumare activitati de proiect</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d21" name="d21" ></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e21" name="e21" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>8</td>
			<td>Proiect LB-Str</td>
			<td>Indrumare activitati de proiect LB-Str</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d22" name="d22"></input></td>
			<td style="text-align:center;" ><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e22" name="e22" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>9</td>
			<td>Conducere doctorat</td>
			<td>Indrumare doctorand in termenul de maxim 5 ani</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d23" name="d23"></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e23" name="e23" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight"></td>
		</tr>
		<tr>
		    <th class="tlight" colspan="3">1.2 Alte activitati didactice</th>
			<th class="tlight">&nbsp;</th>
			<th class="tlight" style="text-align:center;">&nbsp;</th>
			<th class="tlight" style="text-align:center;"><input type='text' class="tlight" style="border:none;width:30px; text-align:center;" id="f24" name="f24" readonly></input></th>
			<th class="lastcollight">&nbsp;</th>
		</tr>
		<tr>
			<td>10</td>
			<td>Asistenta ore curs</td>
			<td>Participare la cursul predat de profesorul coordonator al disciplinei</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d25" name="d25"></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:30px; text-align:center;" id="e25" name="e25" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,5h / h asistenta</td>
		</tr>
		<tr>
			<td>11</td>
			<td>Conducere proiect diploma</td>
			<td>Indrumare realizare proiect de diploma</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d26" name="d26"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e26" name="e26" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lcollight" rowspan="2">0,5h / student - 14 sapt</td>
		</tr>
		<tr>
			<td>12</td>
			<td>Conducere lucrare dizertatie</td>
			<td>Indrumare realizare proiect de dizertatie</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d27" name="d27"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e27" name="e27" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>13</td>
			<td>Practica tehnologica</td>
			<td>Indrumare activitatea de practica tehnologica (in facultate)</td>
		    <td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d28" name="d28"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e28" name="e28" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lcollight" rowspan="2">2h / student / sapt - 14 sapt </td>
		</tr>	
		<tr>
			<td>14</td>
			<td>Practica pedagogica</td>
			<td>Indrumare activitatea de practica pedagogica</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d29" name="d29"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e29" name="e29" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<th class="tlight" colspan="3">2. Activitati complementare</th>
			<th class="tlight" colspan="4"  style="text-align:center;">Pentru intregul an universitar</th>
		</tr>
		<tr>
			<th class="tlight" colspan="3">2.1 Activitati pregatitoare pentru activitati didactice</th>
			<th class="tlight"></th>
			<th class="tlight"></th>
			<th class="tlight" style="text-align:center;"><input type='text' class="tlight" style="border:none;width:30px; text-align:center;" id="f31" name="f31" readonly></input></th>
			<td class="tlight" style="text-align:center;">Pentru 2.1</td>
		</tr>
		<tr>
			<td>15</td>
			<td>Curs</td>
			<td>Redactarea cursului predat</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d32" name="d32"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e32" name="e32" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight" rowspan="5">1h / slide - 1h / pagina tiparita </td>
		</tr>
		<tr>
			<td>16</td>
			<td>Redactare material didactic</td>
			<td>Redactarea materialelor didactice suport pentru desfasurarea activitatilor aplicative</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d33" name="d33"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e33" name="e33" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>17</td>
			<td>Seminar</td>
			<td>Redactarea unei culegeri de probleme/indrumar de seminar</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d34" name="d34"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e34" name="e34" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>18</td>
			<td>Laborator</td>
			<td>Redactarea unui indrumar de laborator</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d35" name="d35"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e35" name="e35" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>19</td>
			<td>Proiect</td>
			<td>Redactarea unui indrumar de proiectare a explicatiilor pentru realizarea proiectului de disciplina</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d36" name="d36"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e36" name="e36" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>20</td>
			<td>Redactare Fisa Disciplina</td>
			<td>Redactarea Fisei de disciplina la inceputul fiecarui an universitar</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d37" name="d37"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e37" name="e37" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">1h / disciplina</td>
		</tr>
		<tr class="tlight">
			<th colspan="3">2.2 Activitati desfasurate in timupl semestrelor pentru activitati didactice</th>
			<th></th>
			<th></th>
			<th style="text-align:center;"><input type='text' class="tlight" style="border:none;width:30px; text-align:center;" id="f38" name="f38" readonly></input></th>
			<td style="text-align:center;">Pentru 2.2</td>
		</tr>
		<tr>
			<td>21</td>
			<td>Curs</td>
			<td>Pregatirea / organizarea orelor de curs</td>
			<td class="grcollight" style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' class="grcollight"  style="border:none;width:100px; text-align:center;" id="d39" name="d39" readonly></input></td>
			<td  style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e39" name="e39" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight" rowspan="4">&nbsp;</td>
		</tr>
		<tr>
			<td>22</td>
			<td>Seminar</td>
			<td>Pregatirea / organizarea orelor de seminar</td>
			<td class="grcollight" style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' class="grcollight" style="border:none;width:100px; text-align:center;" id="d40" name="d40" readonly></input></td>
			<td ><input type='text' style="border:none;width:30px; text-align:center;" id="e40" name="e40" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>23</td>
			<td>Laborator</td>
			<td>Pregatirea / organizarea orelor de laborator</td>
			<td class="grcollight" style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' class="grcollight" style="border:none;width:100px; text-align:center;" id="d41" name="d41" readonly></input></td>
			<td ><input type='text' style="border:none;width:30px; text-align:center;" id="e41" name="e41" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>24</td>
			<td>Proiect</td>
			<td>Pregatirea / organizarea orelor de proiect</td>
			<td class="grcollight" style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' class="grcollight" style="border:none;width:100px; text-align:center;" id="d42" name="d42" readonly></input></td>
			<td ><input type='text' style="border:none;width:30px; text-align:center;" id="e42" name="e42" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>25</td>
			<td>Conducere doctorat</td>
			<td>Indrumare doctorand in termenul de maxim 5 ani - nr studenti care nu au fost cuprinsi la punctul 9 (ex. in cazul in care un conducator are 5 doctoranzi, in stat sunt evidentiati 4, deci ramane 1; in cazul in care conducatorul are o lucrare Q1 sau Q2, raman 3)</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d43" name="d43"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e43" name="e43" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight"></td>
		</tr>
		<tr>
			<td>26</td>
			<td>Comisie de indrumare doctorat</td>
			<td>Participarea in comisii de indrumare doctoranzi in stagiu (nu conducator de doctorat)</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d44" name="d44"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e44" name="e44" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lcollight">max 40 h/ an/doctorand</td>
		</tr>
		<tr>
			<td>27</td>
			<td>Practica tehnologica</td>
			<td>Pregatirea/organizarea pentru indrumarea activitatii de practica tehnologica</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d45" name="d45"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e45" name="e45" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight" rowspan="2">3h / student>
		</tr>
		<tr>
			<td>28</td>
			<td>Practica pedagogica</td>
			<td>Pregatirea/organizarea pentru indrumarea activitatii de practica pedagogica</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d46" name="d46"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e46" name="e46" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>29</td>
			<td>Programe activitati didactice</td>
			<td>Elaborarea orarelor, statelor de functii, etc.</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d47" name="d47"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e47" name="e47" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">max 20 h/ tip activitate</td>
		</tr>
		<tr>
			<td>30</td>
			<td>Evaluare finala</td>
			<td>Evaluarea studentilor la examenul final</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d48" name="d48"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e48" name="e48" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight"> 0,3 h / student</td>
		</tr>
		<tr>
			<td>31</td>
			<td>Evaluare pe parcurs</td>
			<td>Evaluarea studentilor in timupl semestrelor la disciplinele cu verificare pe parcurs</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d49" name="d49"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e49" name="e49" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,3 h / student</td>
		</tr>
		<tr>
			<td>32</td>
			<td>Corectare lucrari de degrevare (partial)</td>
			<td>Corectarea lucrarilor programate la curs de tip partial/degrevare</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d50" name="d50"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e50" name="e50" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,3 h / student</td>
		</tr>
		<tr>
			<td>33</td>
			<td>Corectare lucrari / teme de casa</td>
			<td>Corectarea temelor de casa impuse prin programa cursului</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d51" name="d51"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e51" name="e51" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,3 h / student</td>
		</tr>
		<tr>
			<td>34</td>
			<td>Corectare lucrari la seminar</td>
			<td>Corectarea lucrarilor date la seminar</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d52" name="d52"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e52" name="e52" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,3 h / student</td>
		</tr>
		<tr>
			<td>35</td>
			<td>Corectare referate de laborator</td>
			<td>Corectarea referatelor de laborator</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d53" name="d53"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e53" name="e53" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,3 h / student</td>
		</tr>
		<tr>
			<td>36</td>
			<td>Corectare caiete de practica tehnologica</td>
			<td>Corectarea caietelor de practica sau a temelor date la practica</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d54" name="d54"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e54" name="e54" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,5 h / student</td>
		</tr>
		<tr class="tlight">
			<th colspan="3">2.3 Activitati desfasurate in afara activitatilor didactice</th>
			<th></th>
			<th></th>
			<th style="text-align:center;"><input type='text' class="tlight" style="border:none;width:30px; text-align:center;" id="f55" name="f55" readonly></input></th>
			<td style="text-align:center;">Pentru 2.3</td>
		</tr>
		<tr>
			<td>37</td>
			<td>Supraveghere admitere</td>
			<td>Participarea la supravegherea candidatilor pe perioada admiterii</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d56" name="d56"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e56" name="e56" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">10h / admitere</td>
		</tr>
		<tr>
			<td>38</td>
			<td>Comisie de diploma</td>
			<td>Participarea la evaluarea studentilor in cadrul comisiilor de diploma/td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d57" name="d57"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e57" name="e57" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,5h /  student</td>
		</tr>
		<tr>
			<td>39</td>
			<td>Comisie de dizertatie</td>
			<td>Participarea la evaluarea studentilor in cadrul comisiilor de dizertatie</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d58" name="d58"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e58" name="e58" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,5h /  student</td>
		</tr>
		<tr class="tlight">
			<th colspan="3">2.4 Activitati de indrumare</th>
			<th></th>
			<th></th>
			<th style="text-align:center;"><input type='text' class="tlight" style="border:none;width:30px; text-align:center;" id="f59" name="f59" readonly></input></th>
			<td style="text-align:center;">Pentru 2.4</td>
		</tr>
		<tr>
			<td>40</td>
			<td>Consultatii</td>
			<td>Consultatii pentru examene</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d60" name="d60"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e60" name="e60" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,1h / student</td>
		</tr>
		<tr>
			<td>41</td>
			<td>Cercetare studenteasca</td>
			<td>Indrumarea studentilor in cadrul cercurilor stiintifice organizate</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d61" name="d61"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e61" name="e61" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">0,5h /  student / sapt</td>
		</tr>
		<tr>
			<td>42</td>
			<td>Tutoriat</td>
			<td>Indrumarea studentilor in cadrul activitatii de tutoriat</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d62" name="d62"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e62" name="e62" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">1h /  student</td>
		</tr>
		<tr>
			<td>43</td>
			<td>Dosar Evaluare/Acreditare</td>
			<td>Realizarea dosarelor de autorizare provizorie, evaluare periodica,acreditare a programelor de licenta sau masterat</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d63" name="d63"></input></td>			
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e63" name="e63" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">1h /  student</td>
		</tr>
		<tr class="tlight">
			<th colspan="3">3. Activitati de cercetare</th>
			<th></th>
			<th></th>
			<th style="text-align:center;"><input type='text'  class="tlight" style="border:none;width:30px; text-align:center;" id="f64" name="f64" readonly></input></th>
			<td style="text-align:center;">Pentru 3</td>
		</tr>
		<tr>
			<td>44</td>
			<td>Cercetare</td>
			<td>Activitate de cercetare programata in cadrul normei didactice de baza</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d65" name="d65"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e65" name="e65" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight" rowspan="5">Profesor, Conferentiar, Sef lucrari/Lector = 8h *43 sapt = 344 h
			Asistent = 4h * 43sapt = 172h</td>
		</tr>
		<tr>
			<td>45</td>
			<td>Elaborare raport cercetare</td>
			<td>Elaborarea raportului de cercetare - rezultate cercetarii incluse in norma de baza</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d66" name="d66"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e66" name="e66" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>46</td>
			<td>Elaborarea de articole si comunicari stiintifice</td>
			<td>Elaborarea de articole si comunicari stiintifice - cercetarea din norma de baza</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d67" name="d67"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e67" name="e67" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>47</td>
			<td>Coordonare cercetare</td>
			<td>Activitati de coordonare a cercetarii a unui grup sau a unui colectiv</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d68" name="d68"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e68" name="e68" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr>
			<td>48</td>
			<td>Elaborarea de oferte de proiecte de cercetare</td>
			<td>Elaborarea de oferte pentru castigarea de granturi de cercetare</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d69" name="d69"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e69" name="e69" readonly></input></td>
			<td class="grcollight"></td>
		</tr>
		<tr class="tlight">
			<th colspan="3">4. Activitati pentru comunicarea academica</th>
			<th></th>
			<th></th>
			<th style="text-align:center;"><input type='text' class="tlight" style="border:none;width:30px; text-align:center;" id="f70" name="f70" readonly></input></th>
			<td style="text-align:center;">Pentru 4</td>
		</tr>
		<tr>
			<td>49</td>
			<td>Organisme MEN</td>
			<td>Participarea in: CNFIS; CCCDI; CNSPIS; CNATDCU; etc.</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d71" name="d71"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e71" name="e71" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">2h / saptamana</td>
		</tr>
		<tr>
			<td>50</td>
			<td>Consilii</td>
			<td>Membru in: BEx Reunite ale CA si Senatului U.P.B; CA, Senat; CA - societate comerciala sau fundatie ca reprezentant al U.P.B; Consiliu departament; Consiliu Facultatea; BEx al Facultatii</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d72" name="d72"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e72" name="e72" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">2h / saptamana</td>
		</tr>
		<tr>
			<td>51</td>
			<td>Consilii Stiintifice - Redactionale</td>
			<td>Membru in Consilii Stiintifice la reviste sau societati comerciale ca reprezentant al U.P.B. , consilii redactionale</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d73" name="d73"></input></td>			
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e73" name="e73" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">2h / saptamana</td>
		</tr>
		<tr>
			<td>52</td>
			<td>Activitati organizatorice la nivel de departament/facultate</td>
			<td>Intocmire de orarii, organizare manifestari de promovare a universitatii/facultatii/departamentului/ etc. </td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d74" name="d74"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e74" name="e74" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">nr ore / maxim 100</td>
		</tr>
		<tr>
			<td>53</td>
			<td>Participare la activitatea de raportare a rezultatelor didactice si stiintifice</td>
			<td>Centralizare rapoarte la nivel de departament/ facultate; etc.</td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d75" name="d75"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e75" name="e75" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">nr ore / maxim 100</td>
		</tr>
		<tr>
			<td>54</td>
			<td>Alte activitati</td>
			<td style="text-align:center;"><input type="text" class="form-control" id="alte_activ" name="alte_activ" placeholder="Se completeaza daca este cazul"></input></td>
			<td style="text-align:center;"><input type='text' onkeypress='return validateQty(event);' style="border:none;width:100px; text-align:center;" id="d76" name="d76"></input></td>
			<td style="text-align:center;"><input type='text' style="border:none;width:30px; text-align:center;" id="e76" name="e76" readonly></input></td>
			<td class="grcollight"></td>
			<td class="lastcollight">nr ore / maxim 100</td>
		</tr>
	</table>
</div>
<div class="container-footer">
  <section>
  <div class="form-group-footer" style="float:left; text-align:center;">
    <label class="control-footerlabel " for="data">Data:</label>
    <input type="text" class="form-control" id="data" name="data" placeholder="Introduceti data">
  </div>
  <div class="form-group-footer" style="float:left;text-align:center;">
    <label class="control-footerlabel" for="nume">NUMELE si Prenumele</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="nume_prenume" name="nume_prenume" placeholder="Introduceti NUMELE si Prenumele">
	</div>
  </div>
  <div class="form-group-footer" style="float:left;text-align:center;">
    <label class="control-footerlabel" for="semnatura">Semnatura</label>
    <input type="text" class="form-control" id="semnatura" name="semnatura" placeholder="">
  </div>
	<input type="submit" class="btn" style="background-color:#80ccff; margin-left:8%; margin-top:1.8%; width:15%;" class="fa fa-download" value="Export to Excel"></input>
   </section>
</div>
</form>
</body>
<footer>
<div class="footer_style"</div>
</footer>
</html>