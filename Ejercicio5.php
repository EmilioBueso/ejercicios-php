<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function add10($numero){

      return $numero+10;
    }

    function saludos(){
      echo "Hola a todos<br>";
    }

    function addIVAMejorado($valor, $factor=1.21){
      return $valor * $factor;
    }

    saludos();
    echo add10(7);
    echo "<br>";
    echo addIVAMejorado(18);
    echo "<br>";
    //si le paso un valor 1.0 reemplaza el valor de 1.21
    echo addIVAMejorado(10,1.0);

    ?>

  </body>
</html>
