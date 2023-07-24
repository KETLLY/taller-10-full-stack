<?php

$arrayNumber = array(3, 5, 7, 2, 1);
$sum = 0;

for ($i = 0; $i < count($arrayNumber); $i++) {
    $sum += $arrayNumber[$i];
}

echo "La suma de los números es: " . $sum . "\n";
?>