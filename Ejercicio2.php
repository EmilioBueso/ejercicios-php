<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["apellido2"])) {
			echo ucfirst($_POST["nombre"]) . " " . ucfirst($_POST["apellido"]) . " " . ucfirst($_POST["apellido2"]);
		}
		else {
			echo "No es valido";
		}			
	?>
	<form action="#" method="POST">
		<input type="text" name="nombre">
		<input type="text" name="apellido">
		<input type="text" name="apellido2">
		<input type="submit" value="Enviar">
	</form>

</body>
</html>