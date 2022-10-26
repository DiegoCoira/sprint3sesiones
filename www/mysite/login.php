<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb',) or die('Fail');

	$email_posted = $_POST['f_email'];
	$password_posted = $_POST['f_password'];

	$query = "SELECT id, contraseña FROM tUsuario WHERE email = '".$email_posted."'";
	$result = mysqli_query($db, $query) or die('Query error');
	if (mysqli_num_rows ($resut) > 0) {
		$only_row = mysqli_fetch_array($result);
		if ($only_row[1] == $password_posted {
			session_start():
			$_SESSION['sesion_id'] = $only_row[0];
			header ('Location: main.php'):
		}else{
			echo '<p>CONTRASEÑA INCORRECTA</p>';
		}
	}else{
		echo '<p>Usuario no encontrado con este email<p>';
	}
?>
