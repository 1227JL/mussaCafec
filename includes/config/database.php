<?php

if(!isset($_SESSION)){
    session_start();
} 

// function conectarDB(): mysqli {
//     $db = new mysqli('localhost', 'root', '', 'mussacafec');

//     if(!$db){
//         echo 'Error, no se pudo conectar';
//         exit;
//     }

//     return $db;
// }

function conectarDB(): mysqli {
    $db = new mysqli('localhost', 'root', '1227060123', 'mussacafec');

    if(!$db){
        echo 'Error, no se pudo conectar';
        exit;
    }

    return $db;
}

// function conectarDB(): mysqli {
//     $db = new mysqli('15.235.85.112', 'mussacaf_root', 'Mussacafec2023*', 'mussacaf_mussacafec');

//     if(!$db){
//         echo 'Error, no se pudo conectar';
//         exit;
//     }

//     return $db;
// }
