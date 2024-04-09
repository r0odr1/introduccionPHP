<?php include 'includes/header.php';

$nombreCliente = "Rodrigo Bonilla";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo "<br>";

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br>";

// Convertir a mayusculas
echo strtoupper($nombreCliente);
echo "<br>";

// Convertir en minusculas
echo strtolower($nombreCliente);
echo "<br>";

$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";

var_dump(strtolower($email1) === strtolower($email2));
echo "<br>";

echo str_replace('Rodrigo', 'R', $nombreCliente);
echo "<br>";

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Rodrigo');
echo "<br>";

$tipoCliente = "Premium";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

echo "El Cliente {$nombreCliente} es {$tipoCliente}"; // Solo funciona si esta dentro de comilla dobles

include 'includes/footer.php';