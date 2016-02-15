$(function(){

	$('#frmUsu_save').on("submit",function(){
		event.preventDefault();
		//console.log('pasa');
		$.ajax({
			type:"POST",
			url: "/misitio/cregistro_usuario/save/",
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
});