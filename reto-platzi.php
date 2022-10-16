<?php

$hora_usr = readline("Ingresa primero la hora: ");
$minuto_usr = readline("Ingresa los minutos: ");

$segundos = (($hora_usr * 3600) + ($minuto_usr * 60));

echo "La hora ingresada es igual a $segundos segundos";

echo "\n";