<?php include 'includes/header.php';

$productos = [
  [
    'nombre' => 'Tablet',
    'precio' => 200,
    'disponible' => true
  ],
  [
    'nombre' => 'Televisión 24"',
    'precio' => 300,
    'disponible' => true
  ],
  [
    'nombre' => 'Monitor Curvo',
    'precio' => 400,
    'disponible' => false
  ]
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
// json_encode: convierte un arreglo a string
// JSON_UNESCAPED_UNICODE: convierte los asentos

$json_array = json_decode($json);

// json_decode: convierte un string a un arreglo

var_dump($json);
var_dump($json_array);

echo "</pre>";





include 'includes/footer.php';