<?php
// DECLARACIÓN DE VARIABLES
$name = "";
$age = 0;

// PROCESO
echo "Ingresa tu nombre: ";
fscanf(STDIN, "%s", $name);

echo "Ingresa tu edad: ";
fscanf(STDIN, "%d", $age);

// SALIDA
if ($age >= 18) {
    echo "¡Hola, " . $name . "! Eres un adulto.";
} else {
    echo "¡Hola, " . $name . "! ¡Todavía no eres adulto!";
}
?>