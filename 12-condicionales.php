<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
  echo "Usuario autenticado satisfactoriamente";
}else {
  echo "Usuario no autenticado, inicia sesión";
}

// if anidados
$cliente = [
  'nombre' => 'Rodrigo',
  'saldo' => 200,
  'informacion' => [
    'tipo' => 'Premium'
  ]
];

echo "<br>";

if( !empty($cliente)) {
  echo "El arreglo del cliente no esta vacio";

  if($cliente['saldo'] > 0) {
    echo "Saldo del cliente esta disponible";
  } else {
    echo "No hay saldo";
  }
}

echo "<br>";

// else if
if($cliente['saldo'] > 0) {
  echo "El cliente tiene saldo";
} elseif ($cliente['informacion']['tipo'] === 'Premium') {
  echo "El cliente es Premium";
} else {
  echo "No hay cliente definido o no tiene saldo";
}
echo "<br>";

// Switch
$tecnologia = 'PHP';

switch ($tecnologia) {
  case 'PHP':
    echo "PHP, un excelente lenguaje";
    break;
  case 'Javascript':
    echo "Genial, el lenguaje de la web";
    break;
  case 'HTML':
    echo "Emm..";
    break;
  default:
    echo "Algun lenguaje que no se cual es";
    break;
}


include 'includes/footer.php';