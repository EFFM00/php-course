<?php

$edades = [18, 22, 40, 34];

// count
// echo count($edades);


// array_push
array_push($edades, 12, 14);

// var_dump($edades);


$ejemplo = 4;

// is_array
// var_dump(is_array($edades));
// var_dump(is_array($ejemplo));

// explode
$lista_de_frutas = "fresas, cereza, banana, limón";

$lista_de_frutas_array = explode(", ", $lista_de_frutas);

// var_dump($lista_de_frutas_array);

$lista_string = implode(", ", $lista_de_frutas_array);
var_dump($lista_string);
var_dump($lista_de_frutas_array);

echo "\n";