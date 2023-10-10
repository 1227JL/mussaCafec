<?php

require_once 'database.php';
require_once 'funciones.php';

$db = conectarDB();

$id = limpiar_cadena($_POST['id_proyecto']);
$ejeTematico = limpiar_cadena($_POST['ejetematico']);
$institucion = limpiar_cadena($_POST['tipoInstitucion']);
$ficha = isset($_POST['ficha']) ? limpiar_cadena($_POST['ficha']) : null ;
$titulada = isset($_POST['titulada']) ? limpiar_cadena($_POST['titulada']) : null ;
$externa = isset($_POST['externa']) ? limpiar_cadena($_POST['externa']) : null ;
$titulo = limpiar_cadena($_POST['titulo']);
$tipoProyecto = limpiar_cadena($_POST['tipoProyecto']);
$nombre_1 = limpiar_cadena($_POST['nombre1']);
$correo_1 = limpiar_cadena($_POST['correo1']);
$contacto_1 = limpiar_cadena($_POST['contacto1']);

$nombre_2 = isset($_POST['nombre2']) ? limpiar_cadena($_POST['nombre2']) : null ;
$correo_2 = isset($_POST['correo2']) ? limpiar_cadena($_POST['correo2']) : null ;
$contacto_2 = isset($_POST['contacto2']) ? limpiar_cadena($_POST['contacto2']) : null;

$nombre_3 = isset($_POST['nombre3']) ? limpiar_cadena($_POST['nombre3']) : null ;
$correo_3 = isset($_POST['correo3']) ? limpiar_cadena($_POST['correo3']) : null ;
$contacto_3 = isset($_POST['contacto3']) ? limpiar_cadena($_POST['contacto3']) : null;

$nombre_4 = isset($_POST['nombre4']) ? limpiar_cadena($_POST['nombre4']) : null ;
$correo_4 = isset($_POST['correo4']) ? limpiar_cadena($_POST['correo4']) : null ;
$contacto_4 = isset($_POST['contacto4']) ? limpiar_cadena($_POST['contacto4']) : null;

$errores = [];

$sql = "SELECT * FROM ponentes WHERE id = $id;";
$obtener = mysqli_query($db, $sql);

if($obtener && mysqli_num_rows($obtener)>0){
    $datos = mysqli_fetch_array($obtener);
        
        $archivoActual1 = $datos['archivo_1'];
        $archivoActual2 = $datos['archivo_2'];
    
            if (isset($_FILES['archivo_1']) && $_FILES['archivo_1']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES['archivo_1']['name'];
                $tamañoArchivo = $_FILES['archivo_1']['size'];
                $tipoArchivo = $_FILES['archivo_1']['type'];
                $archivoTemporal = $_FILES['archivo_1']['tmp_name'];
            
                // Validar el tipo y tamaño del archivo
                $extensionesValidas = array(
                    'application/pdf',
                    'application/vnd.ms-powerpoint',
                    'application/vnd.openxmlformats-officedocument.presentationml.presentation'
                );    
                $tamañoMaximo = 20 * 1024 * 1024; // 20MB en bytes
                $carpetaDestino = '../../uploads/ponentes/';
    
            
                if (in_array($tipoArchivo, $extensionesValidas)) {
                    if ($tamañoArchivo <= $tamañoMaximo) {
    
                        if (file_exists($carpetaDestino.$archivoActual1)) {
                            unlink($carpetaDestino.$archivoActual1);
                        }
                        // Mover el archivo a la carpeta "Ponente" 
                        if (!is_dir($carpetaDestino)) {
                            mkdir($carpetaDestino, 0777, true);
                        }
                        $rutaDestino = $carpetaDestino . $nombreArchivo;
                        $moverArchivo = false;
                        if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
                            $moverArchivo = true;
                        } 
                    } else {
                        $errores['tamaño'] = "El tamaño de archivo no debe exceder los 20MB.";
                    }
                } else {
                    $errores['formato-pdf'] = "El archivo debe ser un archivo PDF o una presentación de PowerPoint.";
                }
            }else{
                $nombreArchivo = $archivoActual1;
            }
    
            if (isset($_FILES['archivo_2']) && $_FILES['archivo_2']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo_2 = $_FILES['archivo_2']['name'];
                $tamañoArchivo_2 = $_FILES['archivo_2']['size'];
                $tipoArchivo_2 = $_FILES['archivo_2']['type'];
                $archivoTemporal_2 = $_FILES['archivo_2']['tmp_name'];
        
                // Validar el tipo y tamaño del archivo
                $extensionesValidas_2 = array(
                    'application/msword', // Tipo MIME para archivos de Word DOC
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document' // Tipo MIME para archivos de Word DOCX
                );
    
                if (in_array($tipoArchivo_2, $extensionesValidas_2)){
                    // Mover el archivo a la carpeta "Ponente"
                        if($tamañoArchivo_2 <= $tamañoMaximo){
                            if (file_exists($carpetaDestino.$archivoActual2)) {
                                unlink($carpetaDestino.$archivoActual2);
                            }
                                $rutaDestino = $carpetaDestino . $nombreArchivo_2;
                                $moverArchivo_2 = false;
                                if (move_uploaded_file($archivoTemporal_2, $rutaDestino)) {
                                    $moverArchivo_2 = true;
                                } 
                        }else{
                            $errores['tamaño'] = "El tamaño de archivo no debe exceder los 20MB.";
                        }
                    } else {
                        $errores['formato-docx'] = "El archivo debe ser un archivo Word (doc o docx).";
                    }
                
            } else {
                $nombreArchivo_2 = $archivoActual2;
            }

        if (count($errores) == 0) {

            $query = "UPDATE ponentes SET 
                eje_tematico = ?,
                tipo_Institucion = ?,
                titulada = ?,
                ficha = ?,
                institucion = ?,
                ponente_1 = ?,
                correo_1 = ?,
                contacto_1 = ?,
                ponente_2 = ?,
                correo_2 = ?,
                contacto_2 = ?,
                ponente_3 = ?,
                correo_3 = ?,
                contacto_3 = ?,
                ponente_4 = ?,
                correo_4 = ?,
                contacto_4 = ?,
                titulo_proyecto = ?,
                tipo_proyecto = ?,
                archivo_1 = ?,
                archivo_2 = ?
            WHERE id = ?";
            
            $stmt = mysqli_prepare($db, $query);
            
            mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssi",
                $ejeTematico, 
                $institucion, 
                $titulada, 
                $ficha, 
                $externa,  
                $nombre_1,
                $correo_1, 
                $contacto_1,
                $nombre_2,
                $correo_2, 
                $contacto_2,
                $nombre_3,
                $correo_3, 
                $contacto_3,
                $nombre_4,
                $correo_4, 
                $contacto_4,
                $titulo,
                $tipoProyecto,
                $nombreArchivo,
                $nombreArchivo_2,
                $id
            );
            
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['editado'] = "
                    <p>El proyecto '$titulo' ha sido actualizado correctamente!</p>
                " ;
            }
        }else{
            $_SESSION['errores'] = $errores;
        }

        
}else{
    $_SESSION['editado'] = "
        <p>No se encontro el proyecto!</p>
    ";
}

mysqli_stmt_close($stmt);
mysqli_close($db);
header('location:../../views/admin/Ponentes.php');
