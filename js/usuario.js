function VerificarUsuario() {
	var usu = $('#txt_usu').val();
	var con = $('#txt_con').val();

	//console.log(usu + " " + con);

	//validar vacios
	if(usu.length==0 || con.length== 0) {
		return Swal.fire( 'Mensaje de error',  'Digite los campos estan vacios', 'warning'
		);
	}
	$.ajax({
		url:'../controlador/usuario/controlador_verificar_usuario.php',
		type:'POST',
		data:{
			user:usu,
			pass:con
		}
	}).done(function(resp){
		alert(resp);
	})
	
}