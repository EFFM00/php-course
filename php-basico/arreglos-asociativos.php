<?php

$edades = array(
    "Carlos" => 12,
    "José" => 32,
    "Mr. Michi" => 6,
    "Juan" => 40
);

echo "La edad de Carlos es " . $edades["Carlos"] . "\n";

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70,
    "Mocaccino" => 54
);

echo "El precio del Americano es {$cafes['Americano']} \n";


$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana",
        "ciudad" => "Bogotá"
    ),
    "Michencio" => array(
        "edad" => 20,
        "apellido" => "Santana",
        "ciudad" => "Bogotá"
    )

);

echo "La edad de Mr. Michi es: " . $personas['Michencio']["edad"] . "\n";

print_r(array_count_values($cafes));