<?php
//VARIABLES ENTRADA
$firstNumber = 0;
$secondNumber = 0;

//PROCESO
echo "Ingresa el primero número a sumar:";
fscanf (STDIN, "%d", $firstNumber);
echo "Ingresa el segundo número a sumar:";
fscanf (STDIN, "%d", $secondNumber);
$add = $firstNumber + $secondNumber;

//SALIDA
echo "La suma es: " . $add;

?>