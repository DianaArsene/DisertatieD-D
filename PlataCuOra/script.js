$(document).ready(function(){
	var counter = 0;
	$("#addrow").on("click",function(){
		var newRow = $("<tr>");
		var cols = "";

			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_facultate" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_tipdisc" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_disciplina" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_forma" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_cod" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_an" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_serie" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_nr" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_sg" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_c2" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_a2" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_post" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_grad" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_pers" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_tip" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_angr" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_zi" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';
			cols += '<td style="text-align:center;"><input type="text" name="'+(counter+2)+'_ora" style="border:none;text-align:center;" class="form-control" '+counter+'"/></td>';

			cols += '<td style="text-align:center;"><input type="button" class="ibtnDel btn btn-md btn-danger" style="border:none;text-align:center;" value="Sterge"/></td>';
			newRow.append(cols);
			$("table.order-list").append(newRow);
			counter++;
	});

	$("table.order-list").on("click",".ibtnDel",function(event){
		$(this).closest("tr").remove();
		counter -=1;
	});
});

