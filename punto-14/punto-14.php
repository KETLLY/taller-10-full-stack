<?php

// DECLARACIÓN DE FUNCIONES
function hasSecurityLong($pass){
    return strlen($pass) >= 8;
}

function hasUpperLetter($pass){
    $arrayPass = str_split($pass);
    foreach ($arrayPass as $letter) {
        if ($letter === strtoupper($letter)){
            return true;
        }
    }
    return false; 
}

function hasNumber($pass){
    $arrayPass = str_split($pass);
    foreach ($arrayPass as $letter) {
        if (is_numeric($letter)){
            return true;
        }
    }
    return false;
}

// DECLARACIÓN DE VARIABLES
$password = "";

//PROCESO
echo "Ingrese la clave a registrar:\n";
fscanf(STDIN, "%s", $password);

if (hasSecurityLong($password)){
    if (hasUpperLetter($password)){
        if (hasNumber($password)){
            echo "Felicidades, tu contraseña es segura y ha quedado registrada!";
        } else {
            echo "¡Cuidado! Tu contraseña no es segura. Debe tener al menos un número.";
        }
    } else {
        echo "¡Cuidado! Tu contraseña no es segura. Debe tener al menos una letra mayúscula.";
    }
} else {
    echo "¡Cuidado! Tu contraseña no es segura. Debe tener al menos 8 caracteres.";
}
?>