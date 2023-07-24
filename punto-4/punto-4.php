<?php
// DECLARACIÓN DE VARIABLES
$first_name = "";
$last_name = "";

// PROCESO
echo "Ingresa tu nombre: ";
fscanf(STDIN, "%s", $first_name);

echo "Ingresa tu apellido: ";
fscanf(STDIN, "%s", $last_name);

// SALIDA
echo "Nombre: " . $first_name . "\n";
echo "Apellido: " . $last_name . "\n";
?>