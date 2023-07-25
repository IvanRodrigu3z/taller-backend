<?php

$fechaNacimiento = "1990-05-15";
$edad = calcularEdad($fechaNacimiento);
echo "La edad es: " . $edad . " años";

function calcularEdad($fechaNacimiento) {
    $hoy = new DateTime();
    $nacimiento = new DateTime($fechaNacimiento);
    $edad = $hoy->diff($nacimiento);
    return $edad->y;
}

?>