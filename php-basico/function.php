<?php


function get_pokemon() {
    
    $random_num = rand(1, 5);
    
    switch ($random_num) {
        case 1:
            echo "Pikachu";
            break;

        case 2:
            echo "Charmander";
            break;

        case 3:
            echo "Bulbasaur";
            break;

        default:
            echo "Micho";
    }
}

get_pokemon();

echo "\n";