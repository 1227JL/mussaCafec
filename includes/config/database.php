<?php

if(!isset($_SESSION)){
    session_start();
} 

// CONEXION DE EDUAR CRUZ
// function conectarDB(): mysqli {
//     $db = new mysqli('localhost', 'root', '', 'mussacafec');

//     if(!$db){
//         echo 'Error, no se pudo conectar';
//         exit;
//     }

//     return $db;
// }

// CONEXION DE JULIAN LOPEZ
// function conectarDB(): mysqli {
//     $db = new mysqli('localhost', 'root', '1227060123', 'mussacafec');

//     if(!$db){
//         echo 'Error, no se pudo conectar';
//         exit;
//     }

//     return $db;
// }

//CONEXION DEL HOST
function conectarDB(): mysqli {
    $db = new mysqli('15.235.85.112', 'mussacaf_root', 'Mussacafec2023*', 'mussacaf_mussacafec');

    if(!$db){
        echo 'Error, no se pudo conectar';
        exit;
    }

    return $db;
}
