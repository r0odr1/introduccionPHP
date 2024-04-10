<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
  'nombre' => 'Rodrigo',
  'saldo' => 200
];

// Empty: Validamos si un arreglo esta vacio
var_dump( empty($clientes) );
var_dump( empty($clientes3) );
var_dump( empty($clientes2) );

// Isset: Revisa si una propiedad esta definida o arreglo esta creado
echo "<br>";
var_dump( isset($clientes4));
var_dump( isset($clientes));
var_dump( isset($clientes2));
var_dump( isset($clientes3));

// Isset: Permite revisar si una propiedad de un arreglo asociativo existe
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));


include 'includes/footer.php';