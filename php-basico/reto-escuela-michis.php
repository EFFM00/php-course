<?php

$michis = array(

    array(
        "nombre" => "Rubí",
        "ocupación" => "maullar",
        "color" => "cálico",
        "comidas" => array(
            "gusta" => array("sardinas", "jamón", "pollito", "galletas"),
            "no_gusta" => array("verduras", "frutas")
        )
    ),

    array(
        "nombre" => "Misito",
        "ocupación" => "dormir",
        "color" => "blanco y naranja",
        "comidas" => array(
            "gusta" => array("pescado", "jamón", "pollito"),
            "no_gusta" => array("verduras", "frutas")
        )
    ),

    array(
        "nombre" => "Mr. Michi",
        "ocupación" => "programar",
        "color" => "indefinido",
        "comidas" => array(
            "gusta" => array("sardinas", "jamón", "pollito", "galletas"),
            "no_gusta" => array("verduras", "frutas")
        )
    ),
);



echo "La comida favorita de {$michis[0]['nombre']} es: {$michis[0]['comidas']['gusta'][0]}";


echo "\n";