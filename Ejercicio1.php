<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	/* otra posibilidad para el primer if
	if($_SERVER["REQUEST_METHOD"] == "POST")
	*/
	if(isset($_POST["nombre"])){
		echo "Es un POST";
		if (empty($_POST["nombre"])){
			echo "el nombre esta vacio";
		}
		if (empty($_POST["apellido"])){
			echo "el apellido1 esta vacio";
		}
		if (empty($_POST["apellido2"])){
			echo "el apellido2 esta vacio";
		}

		if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["apellido2"])) {
			echo $_POST["nombre"] . " " . $_POST["apellido"] . " " . $_POST["apellido2"];
		}
		else {
			echo "No es valido";
		}
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