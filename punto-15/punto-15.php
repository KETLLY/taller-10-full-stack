<?php
// DECLARACIÓN DE FUNCIONES
function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicación($num1, $num2) {
    return $num1 * $num2;
}

function división($num1, $num2) {
    if ($num2 == 0) {
        echo "Error: No se puede dividir por cero.\n";
        return null;
    } else {
        return $num1 / $num2;
    }
}

// DECLARACIÓN DE VARIABLES DE ENTRADA
$firstNumber = 0;
$secondNumber = 0;
$operationType = 0;
$result = 0;

// PROCESO
echo "Ingrese el primer número: ";
fscanf(STDIN, "%f", $firstNumber);

echo "Ingrese el segundo número: ";
fscanf(STDIN, "%f", $secondNumber);

echo "Elija el tipo de operación:\n";
echo "1 - Sumar\n";
echo "2 - Restar\n";
echo "3 - Multiplicar\n";
echo "4 - Dividir\n";
fscanf(STDIN, "%d", $operationType);

switch ($operationType) {
    case 1:
        $result = suma($firstNumber, $secondNumber);
        break;
    case 2:
        $result = resta($firstNumber, $secondNumber);
        break;
    case 3:
        $result = multiplicación($firstNumber, $secondNumber);
        break;
    case 4:
        $result = división($firstNumber, $secondNumber);
        break;
    default:
        echo "Error: Operación no válida.\n";
        break;
}

if ($result !== null) {
    echo "El resultado es: " . $result . "\n";
}
?>