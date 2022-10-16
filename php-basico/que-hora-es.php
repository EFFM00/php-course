<?php

$segundos_usr = readline("Ingresa el tiempo en segundos: ");

$horas = 0;
$minutos = 0;
$segundos = 0;

if ($segundos_usr > 0) {
    
    $horas = (int) ($segundos_usr / 3600);

    if ($segundos_usr % 3600 > 0) {

        $minutos = (int) (($segundos_usr % 3600) / 60);

        if(($segundos_usr % 3600) % 60) {

            $segundos = (int) ((($segundos_usr % 3600) % 60) / 60);

        }
    }
}

echo "El tiempo ingresado es igual a $horas horas, $minutos minutos y $segundos segundos";