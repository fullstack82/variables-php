<?php
//Una variable es un contenedor de info, puedo guardar cualquier datos dentro de ella
$mi_primera_variable = "hola mundo desde una variable";
$numero = 44;
$verdadero = true;
//Se declara una variable con el simbolo $, se define la variable (en este caso numero), se pone el = , y se asigna el valor;

$numero = 77;

//Se muestra por pantalla con 'echo', pones la etiqueta de html que necesites entre comillas dobles o simples, pones el punto para concatenar, el html con el php, pones la variable declarada, en este caso $mi_primera_variable;despues se pone punto para concatenar el cierre de la etiqueta, tambien con comillas simples o dobles.

echo '<h1>' . $mi_primera_variable . '</h1>';
echo $numero . "<br>";

$numero = 120;


echo $numero;
?>