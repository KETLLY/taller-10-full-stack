<?php
// DECLARACIÓN DE CONSTANTES Y VARIABLES
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

// PROCESO
echo "Ingrese el tipo de afiliación (A, B, C o D): ";
fscanf(STDIN, "%s", $membershipType);

echo "Ingrese el número de personas: ";
fscanf(STDIN, "%d", $personNumber);


$totalPay = $personNumber * TICKET_PRICE;

// APLICAR DESCUENTO SEGÚN EL TIPO DE AFILIACIÓN
switch ($membershipType) {
    case 'A':
        $discount = 0.30;
        break;
    case 'B':
        $discount = 0.25;
        break;
    case 'C':
        $discount = 0.10;
        break;
    case 'D':
        $discount = 0.05;
        break;
    default:
        $discount = 0;
        echo "Ha ingresado un tipo de afiliación inválido.\n";
        break;
}

$totalPay -= ($totalPay * $discount);

// SALIDA
echo "El monto total a pagar es: $" . $totalPay . "\n";
?>