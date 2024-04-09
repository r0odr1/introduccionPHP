<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

// Doble signo de igual Revisa el valor
var_dump($numero2 == $numero4);
echo "<br>";

// Triple signo de igual a demas de revisar el valor tambien revisa el tipo de dato
var_dump($numero2 === $numero4);
echo "<br>";

// -1 Si el numero de la izquierda es menor al de la derecha entonces
var_dump($numero1 <=> $numero2);
echo "<br>";

// 0 si los dos numeros son iguales
var_dump($numero2 <=> $numero3);
echo "<br>";

// 1 si el de la izquierda es mayor al de la derecha
var_dump($numero2 <=> $numero1);
echo "<br>";


include 'includes/footer.php';