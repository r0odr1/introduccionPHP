<?php include 'includes/header.php';
// otra manera de importar archivos es con la palabra "require"

// 1. Require: Se utiliza cuando tenga funciones, si no encuentra el archivo para la ejecucion
// 2. Include: Se utiliza cuando quiera incluir otros tamplate, si no encuentra el archivo sigue ejecutandose
// 3. Require_once: incluye una sola vez, primero revisa si el archivo ya fue incluido,
// si ya fue incluido ignora "require_once", si no ha sido incluido lo va a incluir

require 'funciones.php';

iniciarApp();



include 'includes/footer.php';