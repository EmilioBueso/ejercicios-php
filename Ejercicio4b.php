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
			echo ($e1+$e2+$e3)/3;
			$narray[]=$e1;
			$narray[]=$e2;
			$narray[]=$e3;
			sort($narray);
			echo " El mayor es ".$narray[2];
			echo " El mediano es ".$narray[1];
			echo " El pequeño es ".$narray[0];
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