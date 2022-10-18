<?php

$platzi_range = (int) readline("Por favor, ingresa tu platzi rank: ");

function es_estudiante_legend($platzi_range) {
    if($platzi_range >= 20000) {
        echo "¡Eres un estudiante Legend!\n";
    } else {
        echo "Lo sentimos, aún no eres nivel Legend\n";
    }
}

es_estudiante_legend($platzi_range);