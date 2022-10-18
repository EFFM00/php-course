<?php

$usernames = ["Pepito123", "Mr.Michi", "RetaxMain"];

do {
    $username = readline("Ingresa tu nuevo username: ") . PHP_EOL;

} while (in_array($username, $usernames));