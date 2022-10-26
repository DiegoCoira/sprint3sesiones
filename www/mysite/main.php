<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>

	<html>
		<head>
			<link rel="stylesheet" href="main.css" type="text/css" media="screen">
		</head>
		<body>
			<h1>Conexión establecida</h1>
			<p><a href="logout.php">Logout</a></p>
			<table>
				<?php
					$query = 'SELECT * FROM tCanciones';
					$result = mysqli_query($db, $query) or die('Query error');

					echo '<h3>Canciones</h3>';
					while ($row = mysqli_fetch_array($result)){
						echo '<tr>';
						echo '<td><a href="detail.php?cancion_id='.$row[0].'">'.$row[1].'</a></td>';
						echo '<td>'.$row[2].'</td>';
						echo '</tr>';
					}
				?>
			</table>
		</body>
	</html>
<?php
	mysql_close($db);
?>
