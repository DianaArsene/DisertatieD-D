<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="utils/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="utils/jquery-3.3.1.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="utils/bootstrap.min.css"></script> 

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
        <div class="titlu_tabel">
            <label>Tabel Plata cu Ora</label>
        </div>
        <div class="tabel_model">
            <label>Model de completare tabel Plata cu Ora</label>
        </div>
        <div class="container">
            <table class="table">
                <tr>
                    <th class="tlight" style="text-align:center;">Facultatea</th>
                    <th class="tlight" style="text-align:center;">Tip</th>
                    <th class="tlight" style="text-align:center;">Titlu Disciplina</th>
                    <th class="tlight" style="text-align:center;">Forma</th>
                    <th class="tlight" style="text-align:center;">Cod</th>
                    <th class="tlight" style="text-align:center;">An</th>
                    <th class="tlight" style="text-align:center;">Serie</th>
                    <th class="tlight" style="text-align:center;">Nr</th>
                    <th class="tlight" style="text-align:center;">G/Sg</th>
                    <th class="tlight" style="text-align:center;">C2</th>
                    <th class="tlight" style="text-align:center;">A2</th>
                    <th class="tlight" style="text-align:center;">Post</th>
                    <th class="tlight" style="text-align:center;">Grad</th>
                    <th class="tlight" style="text-align:center;">Persoana</th>
                    <th class="tlight" style="text-align:center;">Tip</th>
                    <th class="tlight" style="text-align:center;">An/Gr</th>
                    <th class="tlight" style="text-align:center;">Zi</th>
                    <th class="tlight" style="text-align:center;">Ora</th>
                </tr>
                <tr>
                    <td style="text-align:center;">AC</td>
                    <td style="text-align:center;">C</td>
                    <td style="text-align:center;">Proiectare Logica</td>
                    <td style="text-align:center;">L</td>
                    <td style="text-align:center;">R</td>
                    <td style="text-align:center;">1</td>
                    <td style="text-align:center;">CB</td>
                    <td style="text-align:center;">5</td>
                    <td style="text-align:center;">g</td>
                    <td style="text-align:center;">3</td>
                    <td style="text-align:center;">0</td>
                    <td style="text-align:center;">4</td>
                    <td style="text-align:center;">1p</td>
                    <td style="text-align:center;">Mocanu M.</td>
                    <td style="text-align:center;">B</td>
                    <td style="text-align:center;">1CB</td>
                    <td style="text-align:center;">ma</td>
                    <td style="text-align:center;">09-12</td>
                </tr>
                <tr>
                    <td style="text-align:center;">AC</td>
                    <td style="text-align:center;">L</td>
                    <td style="text-align:center;">Integrarea sistemelor informatice</td>
                    <td style="text-align:center;">L</td>
                    <td style="text-align:center;">R</td>
                    <td style="text-align:center;">4</td>
                    <td style="text-align:center;">C5</td>
                    <td style="text-align:center;">1</td>
                    <td style="text-align:center;">sg</td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;">2</td>
                    <td style="text-align:center;">76</td>
                    <td style="text-align:center;">3s</td>
                    <td style="text-align:center;">Mocanu M.</td>
                    <td style="text-align:center;">pa</td>
                    <td style="text-align:center;">4C5</td>
                    <td style="text-align:center;">lu</td>
                    <td style="text-align:center;">08-11</td>
                </tr>
                <tr>
                    <td style="text-align:center;">AC</td>
                    <td style="text-align:center;">C</td>
                    <td style="text-align:center;">Sisteme de suport pentru decizii</td>
                    <td style="text-align:center;">M</td>
                    <td style="text-align:center;">R</td>
                    <td style="text-align:center;">6</td>
                    <td style="text-align:center;">e-Gov</td>
                    <td style="text-align:center;">1</td>
                    <td style="text-align:center;">g</td>
                    <td style="text-align:center;">2</td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;">83</td>
                    <td style="text-align:center;">3s</td>
                    <td style="text-align:center;">Mocanu M.</td>
                    <td style="text-align:center;">po</td>
                    <td style="text-align:center;">2e-Gov</td>
                    <td style="text-align:center;">mi</td>
                    <td style="text-align:center;">08-10</td>
                </tr>
            </table>
        </div>
        <div class="tabel_decompletat">
            <label>Completare tabel Plata cu Ora conform datelor d-voastra</label>
        </div>
        <div class="container">
            <form action="exportExcel.php" method="post">
                <table class="tableToExcel order-list">
                    <thead>
                        <tr>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_facultate">Facultatea</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_tipdisc">Tip</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_disciplina">Titlu Disciplina</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_forma">Forma</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_cod">Cod</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_an">An</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_serie">Serie</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_nr">Nr</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_sg">G/Sg</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_c2">C2</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_a2">A2</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_post">Post</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_grad">Grad</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_pers">Persoana</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_tip">Tip</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_angr">An/Gr</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_zi">Zi</td>
                            <td class="tlight" style="text-align:center;color:black;font-weight:bold;" name="0_ora">Ora</td>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <td>
                                <input type="text" name="1_facultate" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_tipdisc" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_disciplina" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_forma" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_cod" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_an" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_serie" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_nr" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_sg" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_c2" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_a2" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_post" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_grad" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_pers" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_tip" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_angr" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_zi" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="1_ora" style="border:none;text-align:center;" class="form-control">
                            </td>
                            <td id="deleteRow"></td>
                        </tr>
                    </tbody>		
                    <tfoot>
                        <tr>
                            <td colspan="18" style="text-align: left;margin:0px;padding:0px;">
                                <input type="button" class="btn btn-lg btn-block" id="addrow" value="Adauga rand nou"/>
                            </td>
                        </tr>
                    </tfoot>
                </table>
        </div>
        <div class="container-footer">
            <section>
                <input type="submit" class="btn" style="background-color:#80ccff; margin-left:8%; margin-top:1.8%; width:15%;" class="fa fa-download" value="Exporta in Excel"></input>
                <input type="submit" class="btn" style="background-color:#80ccff; margin-left:8%; margin-top:1.8%; width:15%;" class="fa fa-download" value="Exporta in PDF"></input>
                <input type="submit" class="btn" style="background-color:#80ccff; margin-left:8%; margin-top:1.8%; width:15%;" class="fa fa-download" value="Situatia orelor efectuate"></input>
            </section>
        </div>

        <script type="text/javascript">
            $('#deleteRow').hide();
        </script>
    </form>
</body>
<footer>
    <div class="footer_style"</div>
</footer>
</html>