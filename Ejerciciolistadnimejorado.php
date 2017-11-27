// hacer func calcularletra
<html>
<head>
  <title>Acceso datos</title>
</head>
<body>
<?php
  function calculaletra ($dni){
  $tablaLetras[0] = "T"; $tablaLetras[1] = "R";
  $tablaLetras[2] = "W"; $tablaLetras[3] = "A";
  $tablaLetras[4] = "G"; $tablaLetras[5] = "M";
  $tablaLetras[6] = "Y"; $tablaLetras[7] = "F";
  $tablaLetras[8] = "P"; $tablaLetras[9] = "D";
  $tablaLetras[10] = "X"; $tablaLetras[11] = "B";
  $tablaLetras[12] = "N"; $tablaLetras[13] = "J";
  $tablaLetras[14] = "Z"; $tablaLetras[15] = "S";
  $tablaLetras[16] = "Q"; $tablaLetras[17] = "V";
  $tablaLetras[18] = "H"; $tablaLetras[19] = "L";
  $tablaLetras[20] = "C"; $tablaLetras[21] = "K";
  $tablaLetras[22] = "E";
  $resto=$dni % 23;
  $letra = $tablaLetras[$resto];
  return $letra;
  }
 ?>

  <h1>
    Formulario básico
  </h1>
  <form action="#" method="post">
    <input type="text" name="dni">
    <input type="submit">
  </form>
  <p>
    Tu DNI con letra es:
    <?php
    // Añadimos otro "if" para comprobar el si el dni
    // introducido es un número o no
    // Usamos la función "is_numeric" de PHP
    if (isset($_POST["dni"]) && !empty($_POST["dni"])) {
      // 0º ¿Es un número?
      if (is_numeric($_POST["dni"])) {
        // 1º Calculamos el resto
        $letra = calculaletra($_POST["dni"]);
        // 3º Mostramos el DNI con la letra
        echo $_POST["dni"].$letra;
      } else {
        echo "El DNI introducido no es válido";
      }
    } else {
      echo "(escribe el DNI y pulsa Enviar)";
    }
    ?>
  </p>
</body>
</html>
