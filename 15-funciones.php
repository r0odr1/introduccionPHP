<?php
declare(strict_types=1); /*Añadir un tipado fuerte para que las funciones tomen un tipo de dato estricto*/
include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2 = 0) {
  echo $numero1 + $numero2;
}

sumar(10, 20);
echo "<br>";
sumar(20);
echo "<br>";
//sumar(20, 'HOLA');

function sumar2(int $numero1 = 0, bool $numero2) {
  echo $numero1 + $numero2;
}

//sumar2(10, 20);
sumar2(10, true);

function sumar3(int $numero1 = 0, float $numero2) {
  echo $numero1 + $numero2;
}

sumar3(10, 20);
//sumar3(10, true);
echo "<br>";


//

function sumar4(int $numero1, int $numero2) {
  echo $numero1;

  echo $numero1 + $numero2;
}

sumar4(numero2: 10, numero1: 20);
sumar4(numero1: 10, numero2: 20);



include 'includes/footer.php';