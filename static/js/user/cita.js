$(function(){

	var med_ced_global, esp_cod_global , dmh_cod_global;
	var usu_cod_global = $('#usu_cod').attr('data-usucod'); 

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
		var dmh_cods;
		var contador=0;

		$.ajax({
			type: "POST",
			url: "/sgcm/ccita/getDmhPorDia/", 
			data: {			
					"cit_fec" : $('#cit_fec').val()
				},
			dataType: 'json',
			async: false,

			success: function(r){
					dmh_cods = r.datos;
			},

			error: function(r){
				$.notify("Error obteniendo cmh_cod por dia","error");
			}

		});

		
		 for (var i = 0 ; i < dmh_cods.length ; i++)
		 {
		 	for ( var j = 0 ; j < response.datos.length ; j++)
		 	{
		 		if( response.datos[j] != null)
		 		{
		 			if((dmh_cods[i]["cit_dmh_cod"] === response.datos[j]["dmh_cod"]))
		 			{
		 				response.datos[j] = null;	
				 	}
		 		}		 		
		 	}
		 }

		 for (var i = 0 ; i < response.datos.length ; i++)
		 {
		 	if(response.datos[i] !== null)
		 	{
		 		datos+= "<tr>"+
				  		"<td>"+response.datos[i]["hor_des"]+"</td>"+ 
				  		"<td> <input type='checkbox' id='check"+contador+"' data-horcod="+response.datos[i]["hor_cod"]+" data-dmhcod="+response.datos[i]["dmh_cod"]+"></td>"+
				  		"</tr>";
				contador++;	
		 	}
		 }

		$('#bodyTbCita').html(datos);
	};

	
	
	$.cita = function(td)
	{
		event.preventDefault();
		esp_cod_global = $('#cmbEsp').val();
		med_ced_global = $(td).parent().children()[0].textContent;
		$('#myModalLabel').html("Horarios Disponibles para "+$(td).parent().children()[1].textContent);
	};


	var btnsOpTblModels = "<button type='button' class='btn btn-primary' data-target='#modalCita' data-toggle='modal' onclick='$.cita($(this).parent());'>"+
						  "<span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span>  Horario"+
						  "</button>";

	var tablaCita = $('#tbCita').dataTable();
	var tbCitDet = $('#tbCitDet').dataTable();

///////////////////////////////////////////////////////////////////////	
	$('#cmbEsp').change(function(){
		event.preventDefault();
		$.ajax({
				type: "POST",
				url: "/sgcm/ccita/getMedico/",
				dataType: 'json',
				data: {
					"esp_cod" : $(this).val()
				},
				success: function(s){
					tablaCita.fnClearTable();
					for(var i= 0 ; i < s.datos.length ; i++)
					{
						tablaCita.fnAddData([	s.datos[i]["med_ced"], 
												s.datos[i]["medico"],
												"<td>"+btnsOpTblModels+"</td>"
										]);
					}

					
				},
				error: function(response)
				{
					$.notify("error","error");
				}				
			});
	});

	//Evento bind a el control fecha
	$('#cit_fec').on("change",function(){
		$.ajax({
			type: "POST",
			url: "/sgcm/ccita/getHorarioDisponible/", 
			data: {			
					"med_ced" : med_ced_global,
					"esp_cod" : esp_cod_global
				},
			dataType: 'json',

			success: function(response){
				$.getDataForHor(response);
			},

			error: function(response){
				$.notify("Error al eliminar","error");
			}

		});
	});

	//Evento al Cerrar el Modal - borra todas las filas
	$('#modalCita').on('hidden.bs.modal', function(){
		var rows = $('#bodyTbCita >tr');
		for(var i=0 ; i < $(rows).length ; i++)
		{
			$(rows)[i].remove();
		}
	});

	//Controla el evento change en un checkbox
	$(document).on('change', '[type=checkbox]', function (e) {
		dmh_cod_global = $(this).attr("data-dmhcod");
		var rows = $('#bodyTbCita >tr');
		for(var i=0 ; i < $(rows).length ; i++)
		{
			if($("#check"+i).is(':checked'))  //unchecked y tiene data-dmhcod
			{
				//$("#check"+i).prop("disabled",false);
			}
			else
			{
				$("#check"+i).prop("disabled",true);
			}			
		}
	});


	$('#btnGuardar').on("click", function(){
		$.ajax({
				type: "POST",
				url: "/sgcm/ccita/save/", 
				dataType: 'json', 
				data:{
						"cit_dmh_cod" 	: dmh_cod_global,
						"cit_est" 		: true,
						"cit_fec" 		: $("#cit_fec").val(),
						"cit_tur"		: 2
					},
				success : function(response)
				{
					$('#modalCita').modal('hide');
					$.notify("Cita Guardada Correctamente","success");
				},

				error : function(response)
				{
					$('#modalCita').modal('hide');
					$.notify("Error al guardar","error");						
				}
			});//ajax
	});

	
	

//***************************************************CARGAR TABLAS*****************************************************************

	var btnsOpTblModel = "<button style='border: 0; background: transparent' onclick=''>"+
						  "<img src='/sgcm/static/img/imprimir.png' title='Imprimir'>"+
						  "</button>";
	
	
	
	$.loadTable = function(s){
		
		event.preventDefault();		
		tbCitDet.fnClearTable();
		for(var i= 0 ; i < s.datos.length ; i++)
		{
			tbCitDet.fnAddData([	
								s.datos[i]["cit_tur"],									
								s.datos[i]["cit_fec"],
								s.datos[i]["hor_des"],
								s.datos[i]["usuario"], 
								s.datos[i]["medico"],
								s.datos[i]["esp_des"],
								"<td>"+btnsOpTblModel+"</td>"
								]);
		}			
	};

	

	$("#ltCita").click(function(){
			event.preventDefault();
			tbCitDet.DataTable().ajax.reload();
	});


	//llamada ComboBox Especialidad
	$.post("/sgcm/cespecialidad/get/",$.getDataForCmbEsp);
	$.post("/sgcm/ccita/getCita/",{"usu_cod": usu_cod_global}, $.loadTable);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

});//final