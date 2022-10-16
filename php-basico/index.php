<!-- etiqueta que indica que se inicia php -->
<?php

echo "Hola mundo \n";

$name = "Juan";
$lastname = "Cruz";

echo "No, no. Yo me llamo " . $name . " " . $lastname . "\n";

// Las comillas dobles permiten leer variables dentro de ellas
echo "No, no. Yo me llamo $name $lastname \n";

// opcionalmente se cierra cuando se combinan distintos lenguajes

$people = [
    "Carlos" => 22,
    "Juan" => 32,
    "Luis" => 91,
    "Pérez" => 4
];

// var_dump($people);

// print_r($people);



echo '\n';

?>