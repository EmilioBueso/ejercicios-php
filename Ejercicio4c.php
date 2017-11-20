<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio</title>
</head>
<body>
	<?php
		if (!empty($_POST["edad1"]) && !empty($_POST["edad2"]) && !empty($_POST["edad3"]) && is_numeric($_POST["edad1"]) && is_numeric($_POST["edad2"]) && is_numeric($_POST["edad3"])) {
			$e1=$_POST["edad1"];
			$e2=$_POST["edad2"];
			$e3=$_POST["edad3"];
			echo "La edad media es: ";
			echo ($_POST["edad1"]+$_POST["edad2"]+$_POST["edad3"])/3;
			$narray[]=$_POST["edad1"];
			$narray[]=$_POST["edad2"];
			$narray[]=$_POST["edad3"];
			sort($narray);
			echo "<br> El mayor es ".$narray[2];
			echo "<br> El mediano es ".$narray[1];
			echo "<br> El pequeño es ".$narray[0];
			echo "<br>"
			print_r($narray);
		} else {
			echo "Mete una edad";			
			}

	?>
	<form action="#" method="POST">
		<table>
			<tr>
				<td>Edad: <input type="number" name="edad1"></td>
				<td>Edad: <input type="number" name="edad2"></td>
				<td>Edad: <input type="number" name="edad3"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Enviar"></td>
			</tr>
		</table>
	</form>
</body>
</html>