$(function(){

	// Llena el comboBox Especialidad
	$.getDataForCmbEsp = function(response)
	{
		var datos = "";
		$.each(response.datos, function(i,value){
			datos+= "<option value="+value.esp_cod+">"+value.esp_des+"</option>";
		});

		$('#cmbEsp').html(datos);
	};

	var getTable = function()
	{
		
	};

	var btnsOpTblModels = "<button style='border: 0; background: transparent' data-target='#modalCita' data-toggle='modal' onclick='$.editar($(this).parent());'>"+
						  "<span class='glyphicon glyphicon-search' aria-hidden='true'></span>"+
						  "</button>";

	var lngEsp = {
		"sProcessing":     "Procesando...",
		"sLengthMenu":     "Mostrar _MENU_ registros",
		"sZeroRecords":    "No se encontraron resultados",
		"sEmptyTable":     "Ningún dato disponible en esta tabla",
		"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		"sInfoPostFix":    "",
		"sSearch":         "Buscar:",
		"sUrl":            "",
		"sInfoThousands":  ",",
		"sLoadingRecords": "Cargando...",
		"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
		}
	};

		$.renderizeRow = function( nRow, aData, iDataIndex ) {
		   $(nRow).append("<td class='text-center'>"+btnsOpTblModels+"</td>");
		   $(nRow).attr('data-medcod',aData['med_cod']); // 
		};

		$('#tbCita').DataTable({
			ordering: true,
			"ajax":{
				"url": "/sgcm/ccita/getMedico/",
				"dataSrc": "datos"
			},
			"columns":[{data:"med_ced"},{data: "medico"}],
	        "fnCreatedRow": $.renderizeRow,
	        "language": lngEsp
		});
	//Evento del combo Especialidad
	$('#cmbEsp').change(function(){

	});

	//llamada ComboBox Especialidad
	$.post("/sgcm/cespecialidad/get/",$.getDataForCmbEsp);
});//final