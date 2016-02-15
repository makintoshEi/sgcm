$(function(){
	
	///********************************* FUNCIONES PARA EL AUTOCOMPLETADO ************************************

	var keywords= [] , keymedico =[];
	var med_cod_global, flag=0;

	$('#med_ced').autocomplete({
		source: keywords , 
		select: function(){
			
			$.ajax({
				url: "/misitio/cmedico/getMedicoByCed/",
				type: "POST",
				data: {
						"med_ced":$("#med_ced").val()
					  },
				dataType : "json",
				success: function(response){
					$("#med_nom").val(response.medico.nombre);					
					$("#med_dir").val(response.medico.med_dir);
					$("#med_tel").val(response.medico.med_tel);
					$("#med_eml").val(response.medico.med_eml);
					med_cod_global = response.medico.med_cod;
				},
			});

		},
	});

	$('#med_nom').autocomplete({
		source: keymedico , 
		select: function(){
			
			$.ajax({
				url: "/misitio/cmedico/getMedicoByNom/",
				type: "POST",
				data: {
						"med_nom":$("#med_nom").val()
					  },
				dataType : "json",
				success: function(response){
					$("#med_ced").val(response.medico.med_ced);					
					$("#med_dir").val(response.medico.med_dir);
					$("#med_tel").val(response.medico.med_tel);
					$("#med_eml").val(response.medico.med_eml);
					med_cod_global = response.medico.med_cod;
				},
			});

		},
	});
	
	$.getCed = function(response){
		$.each(response.cedula, function(key, value){
			keywords[key] = value.med_ced;			
		});
	};

	$.getMed = function(response){
		$.each(response.medico , function(key, value){
			keymedico[key] = value.nombre;
		});
	};


	$.post("/misitio/cmedico/autocompletarCedMedico/",$.getCed);
	$.post("/misitio/cmedico/autocompletarMedico/",$.getMed);

	// ************************************************** END AUTOCOMPLETADO ***************************************

	// Llena el comboBox Especialidad
	$.getDataForCmbEsp = function(response)
	{
		var datos = "";
		$.each(response.datos, function(i,value){
			datos+= "<option value="+value.esp_cod+">"+value.esp_des+"</option>";
		});

		$('#cmbEsp').html(datos);
	};

	/// Llena Tabla Horarios
	$.getDataForHor = function(response){
		
		var datos = "";
		//se agrego data-horcod 
		$.each(response.datos,	function(i , item)
		{
			 datos+= "<tr id="+item.hor_cod+">"+
			  		 "<td>"+item.hor_des+"</td>"+ 
			  		 "<td> <input type='checkbox' id='check"+i+"' data-horcod="+item.hor_cod+" data-dmhcod=''></td>"+
			  		 "</tr>";				
		});
		$('#bodyTbAsig').html(datos);
	};

	//llamada ComboBox Especialidad
	$.post("/misitio/cespecialidad/get/",$.getDataForCmbEsp);
	//llamada tabla asignar Horarios
	$.post("/misitio/chorario/get/",$.getDataForHor);

	//*************************************************************************************************************

	
	// CRUD ASIGNACIONES

	//guardar a detalle_medico_horario

	$("#btnGuardar").click(function(){
		event.preventDefault();
		var esp_cod = $('#cmbEsp').val();
		var rows = $('#bodyTbAsig >tr');
		var contador = 0;
		for (var i = 0 ; i < $(rows).length ; i++)
		{
			if ($('#check'+i).is(':checked') && $('#check'+i).attr('data-dmhcod') === "" ) // si esta check y data-dmhcod vacio
			{
				//$('#check'+i).prop("checked",false); //unchecked
				contador++;
				var hor_cod = $(rows)[i].id;
				$.ajax({
					type: "POST",
					url: "/misitio/cdmh/save/", 
					dataType: 'json', 
					data:{
							"dmh_med_cod" : med_cod_global,
							"dmh_hor_cod" : hor_cod,
							"dmh_esp_cod" : esp_cod,
						},
				});//ajax

			}// for
		}

		if (contador > 0)
		{
			$('#modalAsignar').modal('hide');
			$.notify("Guardado correctamente","success");
			$('#med_ced').val("");
			$('#med_nom').val("");
			$('#med_dir').val("");
			$('#med_eml').val("");
			$('#med_tel').val("");
		}
	});

	$.eliminar = function(td){
		var med_cod = $(td).parent().attr('data-medcod'); // se puede agregar data-"cualquier cosa" a un tr awesome.
		var esp_cod = $(td).parent().attr('data-espcod'); 
		
		$.ajax({
			type: "POST",
			url: "/misitio/cdmh/delete/", 
			data: {
					"med_cod" : med_cod,
					"esp_cod" : esp_cod},
			dataType: 'json',
			success: function(response){
				$.notify("Eliminado con exito","success");
				$(td).parent().remove(); // remove a tr				
			},

			error: function(response){
				$.notify("Error al eliminar","error");
			}

		});
	};

	$.editar = function(td)
	{
		flag = 1;
		med_cod_global = $(td).parent().attr('data-medcod');
		var esp_cod = $(td).parent().attr('data-espcod');
		$.post("/misitio/cdmh/searchHorario/", 
				{"med_cod" : med_cod_global,
				 "esp_cod" : esp_cod},
				 function(response){
				 	if(response.datos !== null)
				 	{
				 		$('#cmbEsp').val(esp_cod);
				 		$.each(response.datos, function(j,value){

				 			for (var i=0 ; i < $('#bodyTbAsig >tr').length ; i++)
				 			{
				 				if( $("#check"+i).attr('data-horcod') == value.hor_cod)// si es igual al hor_cod activa el checkbox y establece data-dmhcod
				 				{
				 					$('#check'+i).prop("checked",true);
				 					$('#check'+i).attr("data-dmhcod",value.dmh_cod);
				 				}
				 			}
				 			
				 		});
				 	}
		},"json");
	};
//********************************************************************************************************************

	var btnsOpTblModels = "<button style='border: 0; background: transparent' data-target='#modalAsignar' data-toggle='modal' onclick='$.editar($(this).parent());'>"+
						  "<img src='/sich/static/img/edit.png' title='Editar'>"+
						  "</button>"+
						  "<button style='border: 0; background: transparent' onclick='$.eliminar($(this).parent())'>"+
							"<img src='/misitio/static/img/delete.png' title='Eliminar'>"+
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
	   $(nRow).attr('data-espcod',aData['esp_cod']); //
	   $(nRow).attr('data-medcod',aData['med_cod']); // 
	};

	$('#tbAsig').DataTable({
		ordering: true,
		"ajax":{
			"url": "/misitio/cdmh/get/",
			"dataSrc": "datos"
		},
		"columns":[{data:"med_ced"},{data: "medico"}, {data:"esp_des"},{data:"esp_cod"},{data:"med_cod"}],
		"columnDefs": [
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable":false
            }
        ],
        "fnCreatedRow": $.renderizeRow,
        "language": lngEsp
	});

	$("#ltAsig").click(function(){
			event.preventDefault();
			$('#tbAsig').DataTable().ajax.reload();
	});

//**************************************************************EVENTOS*********************************************************************************

	//Evento al Cerrar el Modal - borra todos los checks
	$('#modalAsignar').on('hidden.bs.modal', function(){
		var rows = $('#bodyTbAsig >tr');
		for(var i=0 ; i < $(rows).length ; i++)
		{
			if($('#check'+i).is(':checked'))
			{
				$('#check'+i).prop("checked",false); //unchecked
			}
		}
	});

	//Controla el evento change en un checkbox
	$(document).on('change', '[type=checkbox]', function (e) {
		if(flag == 1) // si editar
		{
			if(	!($(this).is(':checked')) && $(this).attr('data-dmhcod')!== "") //unchecked y tiene data-dmhcod
			{
				var dmh_cod = $(this).attr('data-dmhcod');
				$.ajax({
					type: "POST",
					url: "/misitio/cdmh/deleteCustom/",
					dataType: 'json',
					data: {"dmh_cod" : dmh_cod},
					success: function(response){
						console.log(response);
						$.notify("Eliminado","success");
					},
					error: function(response)
					{
						$.notify("error","error");
					}				
				});
			}
		}

	$(document).on('change' , '[type=select]',function(e){
		var esp_cod = $(this).val();
		$.ajax({
					type: "POST",
					url: "/misitio/cdmh/searchHorario/",
					dataType: 'json',
					data: {
							"med_cod" : med_cod_global,
							"esp_cod" : esp_cod
					},
					success: function(response){
						if(response.datos !== null)
						{
							$.notify("Ya existen horarios asignados para este Medico en esta Especialidad","error");
						}
						
					},
					error: function(response)
					{
						$.notify("error","error");
					}				
				});
	});
});

});//fin js