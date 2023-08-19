<?php

function conectarDB(): mysqli {
    $db = new mysqli('localhost', 'root', '1227060123', 'mussa_cafec');

    if(!$db){
        echo 'Error, no se pudo conectar';
        exit;
    }

    return $db;
}