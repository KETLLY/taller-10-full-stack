<?php
//DECLARACIÓN DE VARIABLES DE ENTRADA
$number = 0;

//PROCESO
echo "Ingrese el número para generar la tabla de multiplicar: ";
fscanf(STDIN, "%d", $number);

echo "Tabla de multiplicar del $number:\n";
for ($x = 0; $x <= 30; $x++) {
    $result = $number * $x;
    echo "$number X $x = $result\n";
}
?>