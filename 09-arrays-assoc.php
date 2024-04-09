<?php include 'includes/header.php';

$cliente = [
  'nombre' => 'Rodrigo',
  'saldo' => 200,
  'informacion' => [
    'tipo' => 'premium',
    'disponible' => 100
  ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// echo $cliente['nombre'];
// echo "<br>";

// echo $cliente['saldo'];
// echo "<br>";

// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 123456789;

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';