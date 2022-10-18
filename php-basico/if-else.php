<?php

$asientos_disponibles = 4;
$es_hijo_de_tom_holland = true;

if($asientos_disponibles > 0) {
    echo "Puedes ver la película";
} else if ($es_hijo_de_tom_hollandes) {
    echo "No te creo, pero puedes pasar";
} else {
    echo "Lo sentimos, no se puede :(";
}

echo "\n";