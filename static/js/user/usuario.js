$(function(){

	

	$('#frmUsu_save').on("submit",function(){
		event.preventDefault();
		//console.log('pasa');
		$.ajax({
			type:"POST",
			url: "/misitio/cusuario/save/",
			dataType: 'json',
			data:$(this).serialize(),
			success: function(response){
				$.notify("Guardado Correctamente","success");
			},

			error: function(){
				$.notify("Error","error");
			}
		});

	});

	var btnsOpTblModels = "<button style='border: 0; background: transparent' data-target='#modalUsuario' data-toggle='modal' onclick='$.editarModal($(this).parent())'>"+
							"<img src='/sich/static/img/edit.png' title='Editar'>"+
						  "</button>"+
						  "<button style='border: 0; background: transparent' onclick='$.eliminar($(this).parent())'>"+
							"<img src='/sich/static/img/delete.png' title='Eliminar'>"+
						  "</button>";

	$.renderizeRow = function( nRow, aData, iDataIndex ) {
		
		if(aData['usu_est'] == 't')
		{
			$(nRow).append("<td class='text-center'>"+
							"<button type='button' class='btn btn-danger' onclick='$.activar($(this).parent());' id='btnActivar'>"+
						  	"Desactivar"+
						  "</button></td>");
		}
		else
		{
			$(nRow).append("<td class='text-center'>"+
							"<button type='button' class='btn btn-success' onclick='$.activar($(this).parent());' id='btnActivar'>"+
						  	"Activar"+
						  "</button></td>");	
		}
		
		$(nRow).append("<td class='text-center'>"+btnsOpTblModels+"</td>");
		$(nRow).attr('id',aData['usu_cod']); // 
	};
	
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
	
	$('#tbUsuario').DataTable({
		ordering: true,
		"ajax":{
			"url": "/misitio/cusuario/get/",
			"dataSrc": "datos"
		},
		"columns":[{data:"usu_ced"},{data: "usu_nom"}, {data:"usu_ape"},{data:"usu_eml"},{data:"tipo"},{data:"usu_dir"}],
		"columnDefs": [
            {
                "targets": [5],
                "visible": false,
                "searchable": false
            }
        ],
        "fnCreatedRow": $.renderizeRow,
        "language": lngEsp
        
	});
	
	$("#ltUsuario").click(function(){
		event.preventDefault();
		$('#tbUsuario').DataTable().ajax.reload();
	});

	$.eliminar = function(td){
		var cedula = $(td).parent().children()[0].textContent; //cedula
		$.ajax({
			type: "POST",
			url: "/misitio/cusuario/delete/", 
			data: {"id":cedula},
			dataType: 'json',
			success: function(response){
				$.notify("Eliminado con exito","success");
				$(td).parent().remove(); // remove a tr
				$('#tbUsuario').DataTable().ajax.reload();				
			},

			error: function(response){
				$.notify("Error al eliminar","error");
			}

		});
	};

	$.activar = function(td){
		event.preventDefault();
		var cedula = $(td).parent().children()[0].textContent; //cedula
		$.ajax({
			type: "POST",
			url: "/misitio/cusuario/activar/", 
			dataType: 'json',
			data: {"id":cedula},			
			success: function(response){
				$.notify("Activado con exito","success");
				$('#tbUsuario').DataTable().ajax.reload();
			},
			error: function(response){
				$.notify("Error al activar","error");
			}
		});
	};

	$.editarModal = function(td)
	{
		var tr = $(td).parent().children();
		var ced = tr[0].textContent;
		var nom = tr[1].textContent;
		var ape = tr[2].textContent;
		//var dir = tr[3].textContent;
		var eml = tr[3].textContent;
		//var pas = tr[5].textContent;
		var est = tr[4].textContent;
		var tip = tr[5].textContent;
		var tip_user='';
		if(tip == 'ADMINISTRADOR'){
			tip_user='1';
		}else{
			if(tip == 'USUARIO'){
				tip_user='2';
			}else{
				if(tip == 'MEDICO'){
					tip_user='3';
				}
			}
		}
		$('#myModalLabel').html("Editar");
		$('#txtnombre2').val(nom);
		$('#txtapellido2').val(ape);
		//$('#txtdireccion2').val(dir);
		$('#txtemail2').val(eml);
		//$('#txtpassword2').val(pas);
		$('#selectUser2').val(tip_user);
		$('#txtcedula2').val(ced);
	};

	$('#btnModalGuardar').click(function(){
		event.preventDefault();
		$.ajax({
			type: "POST",
			data: {
					"cedula":$('#txtcedula2').val() , 
					"nombre":$('#txtnombre2').val() , 
					"apellido": $('#txtapellido2').val() , 
					"direccion":$('#txtdireccion2').val(),
					"email": $('#txtemail2').val(), 
					"password": $('#txtpassword2').val(), 
					"tipo": $('#selectUser2').val()
					},
			url: "/misitio/cusuario/update/",
			dataType: 'json',
			
			success: function(response){
				$('#modalUsuario').modal('hide');
				$.notify("Usuario editado con exito","success");
				$('#tbUsuario').DataTable().ajax.reload();
			},

			error: function(response){
				$.notify("Error al editar","error");
			}

		});
	});
			
	$('#modalUsuario').bind('shown.bs.modal' , function(){
		nom.focus();
	});
	
});