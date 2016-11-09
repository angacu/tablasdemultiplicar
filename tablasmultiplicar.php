<?php
//creamos el array con los numeros que vamos a multiplicar
$tablas= array("primera"=>5,"segunda"=>13,"tercera"=>11);

echo "TABLA DEL 5, 13 Y 11 <br>";
//relacionamos array de $tablas con $numtabla
foreach ($tablas as $numtabla){
//mostramos el salto de linea
  echo "<br>";
//Utilizmos for para crear las tablas de multiplicar y señalamos el numero
  for ($x=1; $x <=10 ; $x++){

//r = resultado
//x = numeros del 1 al 10
//numtabla=num que queremos multiplicar
      $r = $x * $numtabla;
      echo $numtabla." X ".$x." = ".$r."<br>";
  }
}
 ?>
