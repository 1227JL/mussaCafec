<?php

if(!isset($_SESSION)){
    session_start();
} 

function conectarDB(): mysqli {
    $db = new mysqli('localhost', 'root', '', 'mussacafec');

    if(!$db){
        echo 'Error, no se pudo conectar';
        exit;
    }

    return $db;
}