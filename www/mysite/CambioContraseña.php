<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');

	$password = $_POST['f_password'];
	$new_password = $_POST['f_new_password'];

	session_start();

	if (empty($_SESSION['user_id'])) {
		echo "<h3>Usted no tiene una sesion iniciada, porfavor inicie sesion</h3>";
		echo "<a href='login.html'>Iniciar Sesion</a>";
	} else {
		$query = "UPDATE tUsuarios SET contraseña='".$new_password."' WHERE id=".$_SESSION['user_id']." AND contraseña = '".$password."';";
		$result = mysqli_query($db, $query) or die('Error');

		if ($result) {
			echo "<h1>Contraseña actualizada</h1>"
			echo "<a href='main.php'>Página principal</a>";
		} else {
			echo "<h1>Error al actualizar contraseña</h1>";
		}
	}
?>
