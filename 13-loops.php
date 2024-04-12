<?php include 'includes/header.php';

// While : Primero revisa la condicion y despues ejecuta el codigo
$i = 0; // Inicializados o incremento

while ($i < 10) {
  echo $i . "<br/>";

  $i++; // Incremento
}; // Usamos endwhile cuando ya hay muchas llaves: ( : ) dos puntos reemplaza la primera llave, endwhile reemplaza la llave de cierre

echo "<br/>";

// Do While : Primero ejecuta el codigo y despues revisa la condicion
$i = 0;

do {
  echo $i . "<br/>";

  $i++;
} while ($i < 10);
echo "<br/>";


/**
 * Si el numero actual se puede dividir entre 3, imprimir Fizz
 * si el numero actual es multiplo de 5, imprimir Buzz
 * Si es multiplo de 3 y 5, imprimir Fizz Buzz
 * **/

// For Loop
// for($i = 1; $i < 1000; $i++) {
//   if($i % 3 === 0 && $i % 5 === 0) {
//     echo $i . " - FIZZ BUZZ <br>";
//   }
//   elseif($i % 3 === 0) {
//     echo $i . " - Fizz <br>";
//   }
//   elseif($i % 5 === 0) {
//     echo $i . " - Buzz <br>";
//   }
// }

// For Each

$clientes = array('Pedo', 'Juan', 'Karen');

foreach($clientes as $cliente) {
  echo $cliente . "<br>";
}

$cliente = [
  'nombre' => 'Rodrigo',
  'saldo' => 200,
  'tipo' => 'Premium'
];

foreach($cliente as $key => $clientes) {
  echo $key . " : " . $clientes . "<br>";
}


include 'includes/footer.php';