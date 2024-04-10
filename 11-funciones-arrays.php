<?php include 'includes/header.php';

// in_array: Busca elementos en un arreglo
$carrito = ['Tablet', 'Computador', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
  'saldo' => 200,
  'tipo' => 'Premium',
  'nombre' => 'Rodrigo'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // Ordena por valor, primero muestra los numeros y despues ordena los valores por orden alfabetico
arsort($cliente); // Ordena por valor, primero las letras y despues los numeros
ksort($cliente); // Ordena las llaves por orden alfabetico
krsort($cliente); // Ordena las llaves por orden alfabeto al revez de la Z a la A

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
