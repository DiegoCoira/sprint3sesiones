document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("login").addEventListener('submit', validarFormulario);
	});

	functionvalidarFormulario(evento) {
		evento.preventDefault();
		var usuario =document.getElementById('email').value;
		if(usuario.lenght == 0){
			alert('Porfavor introduzca un correo electronico');
			return;
		}
		var clave = document.getElementById('password').value;
		if (clave-length == 0) {
		alert('Porfavor introduzca una contraseña');
		return;
		}
		this.submit;
	}
