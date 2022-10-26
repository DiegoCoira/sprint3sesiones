document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("CambioContraseña");
	document.addEventListener("submit", validarFormulario);
});

function validarFormulario(evento) {
	evento.preventDefault();

	let new_password = document.getElementById("ContraseñaNueva").value;
	let repeated_password = document.getElementById("ContraseñaNuevaR").value;

	if (document.getElementById("ContraseñaActual").value.length ===0) {
		alert("Escriba una contraseña");
	}else if(new_password == 0){
		alert("Porfavor, escriba una contraseña");
	}
	}else if(!(new_password === repeated_password)){
		alert("Las contraseñas no coinciden");
	}else{
		this.submit();
	}
}
