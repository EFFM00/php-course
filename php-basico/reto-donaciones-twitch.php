<?php

$fondo_donaciones = (float) readline("Ingresa cuáles son tus fondos: ");


if(is_float($fondo_donaciones) || is_int($fondo_donaciones)){
    if($fondo_donaciones >= 100) {
        echo "Puedes retirar tu dinero :D" . PHP_EOL;
    } else {
        echo "Lo sentimos, puedes retirar un mínimo de USD $100 :(" . PHP_EOL;
    }
} else {
    echo "Lo sentimos, no ingresaste un número." . PHP_EOL;
}

